<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Model\Aws\Response;

use Aws\ResultInterface;
use EBT\StorageClient\Entity\Aws\Result\AwsS3Result;

class AwsS3Response extends AwsResponse
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
     * {@inheritDoc}
     */
    protected function wrapResult(ResultInterface $result = null)
    {
        return (null === $result)
            ? new AwsS3Result()
            : new AwsS3Result($result->toArray());
    }
}
