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
     * Result keys.
     */
    const RESULT_CONSUMED_CAPACITY       = 'ConsumedCapacity';
    const RESULT_ATTRIBUTES              = 'Attributes';
    const RESULT_ITEM_COLLECTION_METRICS = 'ItemCollectionMetrics';
    const RESULT_ITEM                    = 'Item';

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
     * Retrieves the result's attributes array if it exists, null otherwise.
     *
     * @return array|null
     *
     * For additional information about array structure:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#shape-attributevalue
     */
    public function getResultAttributes()
    {
        return $this->getResultByKey(self::RESULT_ATTRIBUTES);
    }

    /**
     * Retrieves the result's consumed capacity if it exists, null otherwise.
     *
     * @return array|null
     *
     * For additional information about the array structure:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#shape-consumedcapacity
     */
    public function getResultConsumedCapacity()
    {
        return $this->getResultByKey(self::RESULT_CONSUMED_CAPACITY);
    }

    /**
     * Retrieves the result's item collection metrics if they exist, null otherwise.
     *
     * @return array|null
     *
     * For additional information about the array structure:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#shape-itemcollectionmetrics
     */
    public function getResultItemCollectionMetrics()
    {
        return $this->getResultByKey(self::RESULT_ITEM_COLLECTION_METRICS);
    }

    /**
     * Retrieves the result's item if it exists, null otherwise.
     *
     * @return array|null
     *
     * For additional information about the array structure:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#shape-attributevalue
     */
    public function getResultItem()
    {
        return $this->getResultByKey(self::RESULT_ITEM);
    }
}
