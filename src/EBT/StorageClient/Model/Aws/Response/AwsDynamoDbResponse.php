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
use EBT\StorageClient\Entity\Aws\Result\AwsDynamoDbResult;

class AwsDynamoDbResponse extends AwsResponse
{
    /**
     * Error code constants.
     */
    const ERROR_CODE_VALIDATION                          = 'ValidationException';
    const ERROR_CODE_RESOURCE_NOT_FOUND                  = 'ResourceNotFoundException';
    const ERROR_CODE_CONDITIONAL_CHECK_FAILED            = 'ConditionalCheckFailedException';
    const ERROR_CODE_PROVISIONED_THROUGHPUT_EXCEEDED     = 'ProvisionedThroughputExceededException';
    const ERROR_CODE_ITEM_COLLECTION_SIZE_LIMIT_EXCEEDED = 'ItemCollectionSizeLimitExceededException';

    /**
     * Checks if a ValidationException error occurred.
     *
     * @return boolean
     */
    public function isValidationError()
    {
        return self::ERROR_CODE_VALIDATION === $this->getErrorCode();
    }

    /**
     * Checks if a ResourceNotFoundException error occurred.
     *
     * @return boolean
     */
    public function isResourceNotFoundError()
    {
        return self::ERROR_CODE_RESOURCE_NOT_FOUND === $this->getErrorCode();
    }

    /**
     * Checks if a ConditionalCheckFailedException error occurred.
     *
     * @return boolean
     */
    public function isConditionalCheckFailedError()
    {
        return self::ERROR_CODE_CONDITIONAL_CHECK_FAILED === $this->getErrorCode();
    }

    /**
     * Checks if a ProvisionedThroughputExceededException error occurred.
     *
     * @return boolean
     */
    public function isProvisionedThroughputExceededError()
    {
        return self::ERROR_CODE_PROVISIONED_THROUGHPUT_EXCEEDED === $this->getErrorCode();
    }

    /**
     * Checks if a ItemCollectionSizeLimitExceededException error occurred.
     *
     * @return boolean
     */
    public function isItemCollectionSizeLimitExceededError()
    {
        return self::ERROR_CODE_ITEM_COLLECTION_SIZE_LIMIT_EXCEEDED === $this->getErrorCode();
    }

    /**
     * {@inheritDoc}
     */
    protected function wrapResult(ResultInterface $result = null)
    {
        return (null === $result)
            ? new AwsDynamoDbResult()
            : new AwsDynamoDbResult($result->toArray());
    }
}
