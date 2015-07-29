<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Entity\AwsResponse;

use Aws\S3\Exception\S3Exception;

class AwsS3ProxyResponse extends BaseAwsProxyResponse
{
    /**
     * Error code constants.
     */
    const ERROR_CODE_NO_SUCH_KEY           = 'NoSuchKey';
    const ERROR_CODE_NO_SUCH_BUCKET        = 'NoSuchBucket';
    const ERROR_CODE_BUCKET_ALREADY_EXISTS = 'BucketAlreadyExists';
    const ERROR_CODE_ACCESS_DENIED         = 'AccessDenied';
    const ERROR_CODE_NOT_FOUND             = 'NotFound';

    /**
     * Result keys.
     */
    const RESULT_BODY            = 'Body';
    const RESULT_OBJECT_URL      = 'ObjectURL';
    const RESULT_OBJECT_CONTENTS = 'Contents';

    /**
     * Checks if a NoSuchBucket error occurred.
     *
     * @return boolean
     */
    public function isNoSuchBucketError()
    {
        return self::ERROR_CODE_NO_SUCH_BUCKET === $this->getErrorCode();
    }

    /**
     * Checks if a NotFound error occurred.
     *
     * @return boolean
     */
    public function isNotFoundError()
    {
        return self::ERROR_CODE_NOT_FOUND === $this->getErrorCode();
    }

    /**
     * Checks if an AccessDenied error occurred.
     *
     * @return boolean
     */
    public function isAccessDeniedError()
    {
        return self::ERROR_CODE_ACCESS_DENIED === $this->getErrorCode();
    }

    /**
     * Checks if a BucketAlreadyExists error occurred.
     *
     * @return boolean
     */
    public function isBucketAlreadyExistsError()
    {
        return self::ERROR_CODE_BUCKET_ALREADY_EXISTS === $this->getErrorCode();
    }

    /**
     * Checks if a NoSuchKey error occurred.
     *
     * @return boolean
     */
    public function isNoSuchKeyError()
    {
        return self::ERROR_CODE_NO_SUCH_KEY === $this->getErrorCode();
    }

    /**
     * Retrieves the result's body if it exists, null otherwise.
     *
     * @return string|resource|\Psr\Http\Message\StreamInterface|null
     */
    public function getResultBody()
    {
        return $this->getResultByKey(self::RESULT_BODY);
    }

    /**
     * Retrieves the result's object URL if it exists, null otherwise.
     *
     * @return string|null
     */
    public function getResultObjectUrl()
    {
        return $this->getResultByKey(self::RESULT_OBJECT_URL);
    }

    /**
     * Retrieves the result's contents if they exist, null otherwise.
     *
     * @return array|null
     *
     * For additional information on the array structure:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#shape-object
     */
    public function getResultContents()
    {
        return $this->getResultByKey(self::RESULT_OBJECT_CONTENTS);
    }

    /**
     * Sets all internal properties that derive from the exception.
     *
     * @param S3Exception $exception
     */
    protected function setDerivedExceptionValues(S3Exception $exception)
    {
        $this->errorType    = (null === $exception->getAwsErrorType())
            ? self::ERROR_TYPE_UNKNOWN
            : $exception->getAwsErrorType();
        $this->errorCode    = (null === $exception->getAwsErrorCode())
            ? self::ERROR_CODE_UNKNOWN
            : $exception->getAwsErrorCode();
        $this->errorMessage = $exception->getMessage();
    }
}
