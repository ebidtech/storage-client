<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Entity\Aws\Response;

use Aws\Exception\AwsException;
use Aws\ResultInterface;
use EBT\StorageClient\Entity\Aws\Result\AwsResult;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Implements logic to deal with generic AWS SDK responses.
 *
 * Supports both synchronous and asynchronous operations. Note that ASYNCHRONOUS OPERATIONS WILL BE IMPLICITLY
 * EXECUTED WHENEVER A METHOD THAT REQUIRES THEIR COMPLETION IS CALLED.
 *
 * EXAMPLE:
 *
 * - Calling "isOperationAsync()", "isOperationComplete()" or "getPromise()" would not force an asynchronous
 *   operation to complete, as they can be answered at any time.
 *
 * - Calling "getErrorMessage()", "isClientError()" or "isSuccessful()" would force the operation to complete before
 *   returning, as these methods' replies are only meaningful after the operation is complete.
 */
abstract class AwsResponse
{
    /**
     * Error type constants.
     */
    const ERROR_TYPE_SERVER  = 'server';
    const ERROR_TYPE_CLIENT  = 'client';
    const ERROR_TYPE_UNKNOWN = 'unknown';

    /**
     * Error code constants.
     */
    const ERROR_CODE_UNKNOWN = 'Unknown';

    /**
     * Client result.
     *
     * @var AwsResult
     */
    protected $result;

    /**
     * Client promise.
     *
     * @var PromiseInterface
     */
    protected $promise;

    /**
     * Client exception.
     *
     * @var AwsException
     */
    protected $exception;

    /**
     * Error type.
     *
     * @var string
     */
    protected $errorType;

    /**
     * Error code.
     *
     * @var string
     */
    protected $errorCode;

    /**
     * Error message.
     *
     * @var string
     */
    protected $errorMessage;

    /**
     * Flags the operation as asynchronous.
     *
     * @var boolean
     */
    protected $isOperationAsync;

    /**
     * Constructor.
     *
     * @param AwsResult|PromiseInterface|null $response  Client response.
     * @param AwsException|null                     $exception Client exception.
     */
    public function __construct($response = null, AwsException $exception = null)
    {
        $this->setupDefaults();
        $this->setupClientResponse($response);
        $this->setupClientException($exception);
    }

    /**
     * Checks if the operation was successful.
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return (null === $this->getErrorType());
    }

    /**
     * Checks if the operation failed.
     *
     * @return boolean
     */
    public function isFailure()
    {
        return ! $this->isSuccessful();
    }

    /**
     * Checks if there is a result.
     *
     * @return boolean
     */
    public function hasResult()
    {
        return null !== $this->result;
    }

    /**
     * Checks if there is a promise.
     *
     * @return boolean
     */
    public function hasPromise()
    {
        return null !== $this->promise;
    }

    /**
     * Retrieves the result, if any.
     *
     * @return AwsResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Retrieves the promise, if any.
     *
     * @return PromiseInterface
     */
    public function getPromise()
    {
        return $this->promise;
    }

    /**
     * Checks if the operation was executed asynchronously.
     *
     * @return boolean
     */
    public function isOperationAsync()
    {
        return $this->isOperationAsync;
    }

    /**
     * Checks if the operation was completed.
     *
     * @return boolean
     */
    public function isOperationComplete()
    {
        return ! $this->isOperationAsync() ||
            $this->hasPromise() &&
            PromiseInterface::PENDING !== $this->promise->getState();
    }

    /**
     * Checks if there was a client error.
     *
     * @return boolean
     */
    public function isClientError()
    {
        return self::ERROR_TYPE_CLIENT === $this->getErrorType();
    }

    /**
     * Checks if there was a server error.
     *
     * @return boolean
     */
    public function isServerError()
    {
        return self::ERROR_TYPE_SERVER === $this->getErrorType();
    }

    /**
     * Checks if an unknown error occurred.
     *
     * @return boolean
     */
    public function isUnknownError()
    {
        return self::ERROR_TYPE_UNKNOWN === $this->getErrorType();
    }

    /**
     * Retrieves the error type if defined.
     *
     * @return string
     */
    public function getErrorType()
    {
        /* We have to ensure that the operation was complete, call wait just to make sure. */
        $this->wait();

        return $this->errorType;
    }

    /**
     * Retrieves the error code if defined.
     *
     * @return string
     */
    public function getErrorCode()
    {
        /* We have to ensure that the operation was complete, call wait just to make sure. */
        $this->wait();

        return $this->errorCode;
    }

    /**
     * Retrieves the error message (for debug purposes).
     *
     * @return string
     */
    public function getErrorMessage()
    {
        /* We have to ensure that the operation was complete, call wait just to make sure. */
        $this->wait();

        return $this->errorMessage;
    }

    /**
     * Waits for the operation to complete, when dealing with an asynchronous and incomplete operation.
     *
     * @throws \LogicException For unexpected exception not related to the SDK itself.
     */
    public function wait()
    {
        /* The operation already completed, nothing to do. */
        if ($this->isOperationComplete()) {

            return;
        }

        /* Wait for the response and unwrap it. */
        try {
            $this->result = $this->wrapResult($this->promise->wait(true));
        } catch (AwsException $e) {

            /* Set the response and exception. */
            $this->result = null;
            $this->setupClientException($e);
        }
    }

    /**
     * Setups default values for properties.
     */
    protected function setupDefaults()
    {
        $this->isOperationAsync = false;
    }

    /**
     * Setups the client's response.
     *
     * @param AwsResult|PromiseInterface $response Client response.
     */
    protected function setupClientResponse($response)
    {
        /* Conditional setup for synchronous responses. */
        if ($response instanceof ResultInterface) {
            $this->result = $this->wrapResult($response);
        }

        /* Conditional setup for asynchronous responses. */
        if ($response instanceof PromiseInterface) {
            $this->promise = $response;
            $this->isOperationAsync = true;
        }
    }

    /**
     * Setups the client's exception, if given.
     *
     * @param AwsException $exception Thrown exception.
     */
    protected function setupClientException(AwsException $exception = null)
    {
        /* Nothing to do if there is no exception. */
        if (null === $exception) {

            return;
        }

        /* Set the exception, error type, code and message. */
        $this->exception    = $exception;
        $this->errorMessage = $exception->getMessage();
        $this->errorType    = (null === $exception->getAwsErrorType())
            ? self::ERROR_TYPE_UNKNOWN
            : $exception->getAwsErrorType();
        $this->errorCode    = (null === $exception->getAwsErrorCode())
            ? self::ERROR_CODE_UNKNOWN
            : $exception->getAwsErrorCode();
    }

    /**
     * Wraps the original result.
     *
     * @param ResultInterface $result Original result.
     *
     * @return AwsResult
     */
    abstract protected function wrapResult(ResultInterface $result = null);
}
