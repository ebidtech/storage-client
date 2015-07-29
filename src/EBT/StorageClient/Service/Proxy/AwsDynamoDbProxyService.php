<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Service\Proxy;

use Aws\CommandInterface;
use Aws\Credentials\CredentialsInterface;
use Aws\DynamoDb\DynamoDbClient;
use Aws\Exception\AwsException;
use Aws\Waiter;
use EBT\StorageClient\Entity\AwsResponse\AwsDynamoDbProxyResponse;
use EBT\StorageClient\Service\AwsDynamoDbProxyServiceInterface;

class AwsDynamoDbProxyService implements AwsDynamoDbProxyServiceInterface
{
    /**
     * Available API versions.
     *
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html
     */
    const API_VERSION_2012_08_10 = '2012-08-10';

    /**
     * Client options keys.
     */
    const OPTION_VERSION            = 'version';
    const OPTION_REGION             = 'region';
    const OPTION_CREDENTIALS        = 'credentials';
    const OPTION_CREDENTIALS_KEY    = 'key';
    const OPTION_CREDENTIALS_SECRET = 'secret';

    /**
     * Request variables keys.
     */
    const REQUEST_TABLE_NAME    = 'TableName';
    const REQUEST_ITEM          = 'Item';
    const REQUEST_KEY           = 'Key';
    const REQUEST_REQUEST_ITEMS = 'RequestItems';

    /**
     * Command types.
     */
    const COMMAND_TYPE_PUT_ITEM         = 'PutItem';
    const COMMAND_TYPE_GET_ITEM         = 'GetItem';
    const COMMAND_TYPE_BATCH_WRITE_ITEM = 'BatchWriteItem';

    /**
     * @var DynamoDbClient
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param CredentialsInterface|array|bool|callable $credentials S3 credentials.
     * @param string                                   $region      Region to use.
     * @param string                                   $version     API version to use.
     * @param array                                    $options     Additional options.
     *
     * For a complete list of available options:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.AwsClient.html#___construct
     */
    public function __construct($credentials, $region, $version, array $options = array())
    {
        /* Set required options. */
        $options[self::OPTION_CREDENTIALS] = $credentials;
        $options[self::OPTION_VERSION]     = $version;
        $options[self::OPTION_REGION]      = $region;

        /* Instantiate the client. */
        $this->client = new DynamoDbClient($options);
    }

    /**
     * {@inheritDoc}
     */
    public function putItem($tableName, $item, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_TABLE_NAME] = $tableName;
        $options[self::REQUEST_ITEM]       = $item;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_ITEM, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function putItemAsync($tableName, $item, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_TABLE_NAME] = $tableName;
        $options[self::REQUEST_ITEM]       = $item;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_ITEM, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getItem($tableName, $key, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_TABLE_NAME] = $tableName;
        $options[self::REQUEST_KEY]        = $key;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_ITEM, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemAsync($tableName, $key, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_TABLE_NAME] = $tableName;
        $options[self::REQUEST_KEY]        = $key;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_ITEM, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function batchWriteItem($requestItems, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_REQUEST_ITEMS] = $requestItems;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_BATCH_WRITE_ITEM, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function batchWriteItemAsync($requestItems, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_REQUEST_ITEMS] = $requestItems;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_BATCH_WRITE_ITEM, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * Executes a synchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsDynamoDbProxyResponse
     */
    protected function executeCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->execute($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsDynamoDbProxyResponse(
                null,
                $e
            );
        }

        return new AwsDynamoDbProxyResponse($result, null);
    }

    /**
     * Executes an asynchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsDynamoDbProxyResponse
     */
    protected function executeAsyncCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->executeAsync($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsDynamoDbProxyResponse(
                null,
                $e
            );
        }

        return new AwsDynamoDbProxyResponse($result, null);
    }

    /**
     * Executes a waiter.
     *
     * @param Waiter $waiter Waiter to execute.
     *
     * @return AwsDynamoDbProxyResponse
     */
    protected function executeWaiter(Waiter $waiter)
    {
        try {
            $waiter->promise()
                ->wait(false);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsDynamoDbProxyResponse(
                null,
                $e
            );
        }

        /* Waiter responses are not useful, so just set null. */
        return new AwsDynamoDbProxyResponse(null, null);
    }
}
