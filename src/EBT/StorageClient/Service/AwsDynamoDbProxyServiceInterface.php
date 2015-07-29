<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Service;

use EBT\StorageClient\Entity\Aws\Request\AwsDynamoDbRequest;
use EBT\StorageClient\Entity\Aws\Response\AwsDynamoDbResponse;

/**
 * Defines the operations that are possible to perform in DynamoDb. These operations are divided into multiple types.
 *
 * Synchronous operations:
 * - Are always completed synchronously.
 * - Never contain a promise.
 *
 * Asynchronous operations (operation name ends with "Async"):
 * - Are only completed after calling "wait()" explicitly, or some other operation that requires the result to be.
 * - Contain a promise object that can be obtained with "getPromise()" and configured with callbacks.
 * - Note that if you call "wait()" explicitly on the promise instance you'll be responsible for managing errors.
 * - @see BaseAwsProxyResponse
 * - @see PromiseInterface
 *
 * Waiter operations (operation name starts with "wait"):
 * - Wait operations are always completed synchronously.
 * - Never contain either result or promise.
 *
 * For a full API reference:
 * http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#scan
 *
 * For a list of common error codes:
 * @link http://docs.aws.amazon.com/amazondynamodb/latest/APIReference/CommonErrors.html
 */
interface AwsDynamoDbProxyServiceInterface
{
    /**
     * Stores an item into a DynamoDb table.
     *
     * @param AwsDynamoDbRequest $request Request to perform.
     *
     * @return AwsDynamoDbResponse
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#putitem
     */
    public function putItem(AwsDynamoDbRequest $request);

    /**
     * Stores an item into a DynamoDb table (asynchronous).
     *
     * @param AwsDynamoDbRequest $request Request to perform.
     *
     * @return AwsDynamoDbResponse
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#putitem
     */
    public function putItemAsync(AwsDynamoDbRequest $request);

    /**
     * Fetches an item from a DynamoDb Table.
     *
     * @param AwsDynamoDbRequest $request Request to perform.
     *
     * @return AwsDynamoDbResponse
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#getitem
     */
    public function getItem(AwsDynamoDbRequest $request);

    /**
     * Fetches an item from a DynamoDb Table (asynchronous).
     *
     * @param AwsDynamoDbRequest $request Request to perform.
     *
     * @return AwsDynamoDbResponse
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#getitem
     */
    public function getItemAsync(AwsDynamoDbRequest $request);

    /**
     * Performs batch write operations on multiple items and tables.
     *
     * @param AwsDynamoDbRequest $request Request to perform.
     *
     * @return AwsDynamoDbResponse
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#batchwriteitem
     */
    public function batchWriteItem(AwsDynamoDbRequest $request);

    /**
     * Performs batch write operations on multiple items and tables (asynchronous).
     *
     * @param AwsDynamoDbRequest $request Request to perform.
     *
     * @return AwsDynamoDbResponse
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#batchwriteitem
     */
    public function batchWriteItemAsync(AwsDynamoDbRequest $request);
}
