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
use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Aws\Waiter;
use EBT\StorageClient\Entity\AwsResponse\AwsS3ProxyResponse;
use EBT\StorageClient\Service\AwsS3ProxyServiceInterface;

class AwsS3ProxyService implements AwsS3ProxyServiceInterface
{
    /**
     * Available API versions.
     *
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html
     */
    const API_VERSION_2006_03_01 = '2006-03-01';

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
    const REQUEST_KEY       = 'Key';
    const REQUEST_BODY      = 'Body';
    const REQUEST_BUCKET    = 'Bucket';
    const REQUEST_MAX_KEYS  = 'MaxKeys';
    const REQUEST_PREFIX    = 'Prefix';
    const REQUEST_DELIMITER = 'Delimiter';

    /**
     * Command types.
     */
    const COMMAND_TYPE_PUT_OBJECT    = 'PutObject';
    const COMMAND_TYPE_GET_OBJECT    = 'GetObject';
    const COMMAND_TYPE_CREATE_BUCKET = 'CreateBucket';
    const COMMAND_TYPE_HEAD_BUCKET   = 'HeadBucket';
    const COMMAND_TYPE_HEAD_OBJECT   = 'HeadObject';
    const COMMAND_TYPE_LIST_OBJECTS  = 'ListObjects';

    /**
     * Waiter types.
     */
    const WAITER_TYPE_BUCKET_EXISTS = 'BucketExists';
    const WAITER_TYPE_OBJECT_EXISTS = 'ObjectExists';

    /**
     * @var S3Client
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
     *
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.AwsClient.html#___construct
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.S3.S3Client.html#___construct
     */
    public function __construct($credentials, $region, $version, array $options = array())
    {
        /* Set required options. */
        $options[self::OPTION_CREDENTIALS] = $credentials;
        $options[self::OPTION_VERSION]     = $version;
        $options[self::OPTION_REGION]      = $region;

        /* Instantiate the client. */
        $this->client = new S3Client($options);
    }

    /**
     * {@inheritDoc}
     */
    public function putObject($bucket, $key, $body, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;
        $options[self::REQUEST_KEY]    = $key;
        $options[self::REQUEST_BODY]   = $body;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_OBJECT, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function putObjectAsync($bucket, $key, $body, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;
        $options[self::REQUEST_KEY]    = $key;
        $options[self::REQUEST_BODY]   = $body;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_OBJECT, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getObject($bucket, $key, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;
        $options[self::REQUEST_KEY]    = $key;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_OBJECT, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjectAsync($bucket, $key, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;
        $options[self::REQUEST_KEY]    = $key;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_OBJECT, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function createBucket($bucket, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_CREATE_BUCKET, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function createBucketAsync($bucket, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_CREATE_BUCKET, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headBucket($bucket)
    {
        /* Set the options. */
        $options = array(
            self::REQUEST_BUCKET => $bucket
        );

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_BUCKET, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headBucketAsync($bucket)
    {
        /* Set the options. */
        $options = array(
            self::REQUEST_BUCKET => $bucket
        );

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_BUCKET, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headObject($bucket, $key, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;
        $options[self::REQUEST_KEY]    = $key;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_OBJECT, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headObjectAsync($bucket, $key, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;
        $options[self::REQUEST_KEY]    = $key;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_OBJECT, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function listObjects($bucket, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_LIST_OBJECTS, $options);

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function listObjectsAsync($bucket, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;

        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_LIST_OBJECTS, $options);

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function waitUntilBucketExists($bucket)
    {
        /* Set the options. */
        $options = array(
            self::REQUEST_BUCKET => $bucket
        );

        /* Create the waiter. */
        $waiter = $this->client->getWaiter(self::WAITER_TYPE_BUCKET_EXISTS, $options);

        /* Execute the waiter. */
        return $this->executeWaiter($waiter);
    }

    /**
     * {@inheritDoc}
     */
    public function waitUntilObjectExists($bucket, $key, array $options = array())
    {
        /* Set the options. */
        $options[self::REQUEST_BUCKET] = $bucket;
        $options[self::REQUEST_KEY]    = $key;

        /* Create the waiter. */
        $waiter = $this->client->getWaiter(self::WAITER_TYPE_OBJECT_EXISTS, $options);

        /* Execute the waiter. */
        return $this->executeWaiter($waiter);
    }

    /**
     * Executes a synchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsS3ProxyResponse
     */
    protected function executeCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->execute($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsS3ProxyResponse(
                null,
                $e
            );
        }

        return new AwsS3ProxyResponse($result, null);
    }

    /**
     * Executes an asynchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsS3ProxyResponse
     */
    protected function executeAsyncCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->executeAsync($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsS3ProxyResponse(
                null,
                $e
            );
        }

        return new AwsS3ProxyResponse($result, null);
    }

    /**
     * Executes a waiter.
     *
     * @param Waiter $waiter Waiter to execute.
     *
     * @return AwsS3ProxyResponse
     */
    protected function executeWaiter(Waiter $waiter)
    {
        try {
            $waiter->promise()
                ->wait(false);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsS3ProxyResponse(
                null,
                $e
            );
        }

        /* Waiter responses are not useful, so just set null. */
        return new AwsS3ProxyResponse(null, null);
    }
}
