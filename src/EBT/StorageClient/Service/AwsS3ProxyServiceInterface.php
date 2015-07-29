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

use EBT\StorageClient\Entity\Aws\Request\AwsS3Request;
use EBT\StorageClient\Model\Aws\Response\AwsS3Response;

/**
 * Defines the operations that are possible to perform in S3. These operations are divided into multiple types.
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
 * http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html
 *
 * For a list of all error codes:
 * @link http://docs.aws.amazon.com/AmazonS3/latest/API/ErrorResponses.html
 */
interface AwsS3ProxyServiceInterface
{
    /**
     * Stores a new object in the storage.
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#putobject
     */
    public function putObject(AwsS3Request $request);

    /**
     * Stores a new object in the storage (asynchronously).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#putobject
     */
    public function putObjectAsync(AwsS3Request $request);

    /**
     * Retrieves a new object from the storage.
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#getobject
     */
    public function getObject(AwsS3Request $request);

    /**
     * Retrieves a new object from the storage (asynchronously).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#getobject
     */
    public function getObjectAsync(AwsS3Request $request);

    /**
     * Creates a new bucket.
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#createbucket
     */
    public function createBucket(AwsS3Request $request);

    /**
     * Creates a new bucket (asynchronously).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#createbucket
     */
    public function createBucketAsync(AwsS3Request $request);

    /**
     * Retrieves metadata for a bucket (can be used as an existence check).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#headbucket
     *
     * @NOTE: The official documentation (link above) states that when the bucket does not exist a 'NoSuchBucket'
     * error should be returned. Currently, the SDK returns a 'NotFound' error in such cases.
     */
    public function headBucket(AwsS3Request $request);

    /**
     * Retrieves metadata for a bucket (can be used as an existence check) (asynchronously).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#headbucket
     *
     * @NOTE: The official documentation (link above) states that when the bucket does not exist a 'NoSuchBucket'
     * error should be returned. Currently, the SDK returns a 'NotFound' error in such cases.
     */
    public function headBucketAsync(AwsS3Request $request);

    /**
     * Retrieves metadata for an object (can be used as an existence check).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#headobject
     *
     * @NOTE: The official documentation (link above) states that when the object does not exist a 'NoSuchKey'
     * error should be returned. Currently, the SDK returns a 'NotFound' error in such cases.
     */
    public function headObject(AwsS3Request $request);

    /**
     * Retrieves metadata for an object (can be used as an existence check) (asynchronously).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#headobject
     *
     * @NOTE: The official documentation (link above) states that when the object does not exist a 'NoSuchKey'
     * error should be returned. Currently, the SDK returns a 'NotFound' error in such cases.
     */
    public function headObjectAsync(AwsS3Request $request);

    /**
     * Retrieves a list of keys from a bucket.
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#listobjects
     */
    public function listObjects(AwsS3Request $request);

    /**
     * Retrieves a list of keys from a bucket (asynchronously).
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#listobjects
     */
    public function listObjectsAsync(AwsS3Request $request);

    /**
     * Waits until a bucket exists.
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#waiters
     */
    public function waitUntilBucketExists(AwsS3Request $request);

    /**
     * Waits until an object exists.
     *
     * @param AwsS3Request $request The request object.
     *
     * @return AwsS3Response
     *
     * For additional information:
     * @link http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-s3-2006-03-01.html#waiters
     */
    public function waitUntilObjectExists(AwsS3Request $request);
}
