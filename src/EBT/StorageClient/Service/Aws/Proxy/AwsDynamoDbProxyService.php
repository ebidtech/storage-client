<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Service\Aws\Proxy;

use Aws\CommandInterface;
use Aws\DynamoDb\DynamoDbClient;
use Aws\Exception\AwsException;
use Aws\Waiter;
use EBT\StorageClient\Entity\Aws\ClientOptions\AwsDynamoDbClientOptions;
use EBT\StorageClient\Entity\Aws\Request\AwsDynamoDbRequest;
use EBT\StorageClient\Model\Aws\Response\AwsDynamoDbResponse;
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
     * @param AwsDynamoDbClientOptions $options Client options.
     *
     * For a complete list of available options:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.AwsClient.html#___construct
     */
    public function __construct(AwsDynamoDbClientOptions $options)
    {
        /* Instantiate the client. */
        $this->client = new DynamoDbClient($options->toArray());
    }

    /**
     * {@inheritDoc}
     */
    public function putItem(AwsDynamoDbRequest $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_ITEM, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function putItemAsync(AwsDynamoDbRequest $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_ITEM, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getItem(AwsDynamoDbRequest $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_ITEM, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemAsync(AwsDynamoDbRequest $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_ITEM, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function batchWriteItem(AwsDynamoDbRequest $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_BATCH_WRITE_ITEM, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function batchWriteItemAsync(AwsDynamoDbRequest $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_BATCH_WRITE_ITEM, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * Executes a synchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsDynamoDbResponse
     */
    protected function executeCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->execute($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsDynamoDbResponse(
                null,
                $e
            );
        }

        return new AwsDynamoDbResponse($result, null);
    }

    /**
     * Executes an asynchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsDynamoDbResponse
     */
    protected function executeAsyncCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->executeAsync($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsDynamoDbResponse(
                null,
                $e
            );
        }

        return new AwsDynamoDbResponse($result, null);
    }

    /**
     * Executes a waiter.
     *
     * @param Waiter $waiter Waiter to execute.
     *
     * @return AwsDynamoDbResponse
     */
    protected function executeWaiter(Waiter $waiter)
    {
        try {
            $waiter->promise()
                ->wait(false);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsDynamoDbResponse(
                null,
                $e
            );
        }

        /* Waiter responses are not useful, so just set null. */
        return new AwsDynamoDbResponse(null, null);
    }
}
