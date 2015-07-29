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
use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Aws\Waiter;
use EBT\StorageClient\Entity\Aws\ClientOptions\AwsS3ClientOptions;
use EBT\StorageClient\Entity\Aws\Request\AwsS3Request;
use EBT\StorageClient\Entity\Aws\Response\AwsS3Response;
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
     * @param AwsS3ClientOptions $options Client options.
     *
     * For a complete list of available options:
     *
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.AwsClient.html#___construct
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.S3.S3Client.html#___construct
     */
    public function __construct(AwsS3ClientOptions $options)
    {
        /* Instantiate the client. */
        $this->client = new S3Client($options->toArray());
    }

    /**
     * {@inheritDoc}
     */
    public function putObject(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_OBJECT, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function putObjectAsync(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_PUT_OBJECT, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getObject(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_OBJECT, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjectAsync(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_GET_OBJECT, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function createBucket(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_CREATE_BUCKET, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function createBucketAsync(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_CREATE_BUCKET, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headBucket(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_BUCKET, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headBucketAsync(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_BUCKET, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headObject(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_OBJECT, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function headObjectAsync(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_HEAD_OBJECT, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function listObjects(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_LIST_OBJECTS, $request->toArray());

        /* Execute the command. */
        return $this->executeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function listObjectsAsync(AwsS3Request $request)
    {
        /* Create the command. */
        $command = $this->client->getCommand(self::COMMAND_TYPE_LIST_OBJECTS, $request->toArray());

        /* Execute the command. */
        return $this->executeAsyncCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function waitUntilBucketExists(AwsS3Request $request)
    {
        /* Create the waiter. */
        $waiter = $this->client->getWaiter(self::WAITER_TYPE_BUCKET_EXISTS, $request->toArray());

        /* Execute the waiter. */
        return $this->executeWaiter($waiter);
    }

    /**
     * {@inheritDoc}
     */
    public function waitUntilObjectExists(AwsS3Request $request)
    {
        /* Create the waiter. */
        $waiter = $this->client->getWaiter(self::WAITER_TYPE_OBJECT_EXISTS, $request->toArray());

        /* Execute the waiter. */
        return $this->executeWaiter($waiter);
    }

    /**
     * Executes a synchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsS3Response
     */
    protected function executeCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->execute($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsS3Response(
                null,
                $e
            );
        }

        return new AwsS3Response($result, null);
    }

    /**
     * Executes an asynchronous command.
     *
     * @param CommandInterface $command Command to execute.
     *
     * @return AwsS3Response
     */
    protected function executeAsyncCommand(CommandInterface $command)
    {
        try {
            $result = $this->client->executeAsync($command);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsS3Response(
                null,
                $e
            );
        }

        return new AwsS3Response($result, null);
    }

    /**
     * Executes a waiter.
     *
     * @param Waiter $waiter Waiter to execute.
     *
     * @return AwsS3Response
     */
    protected function executeWaiter(Waiter $waiter)
    {
        try {
            $waiter->promise()
                ->wait(false);
        } catch (AwsException $e) {

            /* Return an error response. */
            return new AwsS3Response(
                null,
                $e
            );
        }

        /* Empty result as waiters return nothing helpful. */
        return new AwsS3Response(null, null);
    }
}
