<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Entity\Aws\Request;

use EBT\StorageClient\Entity\Aws\AwsObject;

class AwsS3Request extends AwsObject
{
    /**
     * Request parameter keys.
     */
    const REQUEST_ACL                          = 'ACL';
    const REQUEST_BODY                         = 'Body';
    const REQUEST_BUCKET                       = 'Bucket';
    const REQUEST_CACHE_CONTROL                = 'CacheControl';
    const REQUEST_CONTENT_DISPOSITION          = 'ContentDisposition';
    const REQUEST_CONTENT_ENCODING             = 'ContentEncoding';
    const REQUEST_CONTENT_LANGUAGE             = 'ContentLanguage';
    const REQUEST_CONTENT_LENGTH               = 'ContentLength';
    const REQUEST_CONTENT_SHA_256              = 'ContentSHA256';
    const REQUEST_CONTENT_TYPE                 = 'ContentType';
    const REQUEST_EXPIRES                      = 'Expires';
    const REQUEST_GRANT_FULL_CONTROL           = 'GrantFullControl';
    const REQUEST_GRANT_READ                   = 'GrantRead';
    const REQUEST_GRANT_READ_ACP               = 'GrantReadACP';
    const REQUEST_GRANT_WRITE                  = 'GrantWrite';
    const REQUEST_GRANT_WRITE_ACP              = 'GrantWriteACP';
    const REQUEST_KEY                          = 'Key';
    const REQUEST_METADATA                     = 'Metadata';
    const REQUEST_PAYER                        = 'RequestPayer';
    const REQUEST_SSE_CUSTOMER_ALGORITHM       = 'SSECustomerAlgorithm';
    const REQUEST_SSE_CUSTOMER_KEY             = 'SSECustomerKey';
    const REQUEST_SSE_CUSTOMER_KEY_MD5         = 'SSECustomerKeyMD5';
    const REQUEST_SSE_KMS_KEY_ID               = 'SSEKMSKeyId';
    const REQUEST_SERVER_SIDE_ENCRYPTION       = 'ServerSideEncryption';
    const REQUEST_SOURCE_FILE                  = 'SourceFile';
    const REQUEST_STORAGE_CLASS                = 'StorageClass';
    const REQUEST_WEBSITE_REDIRECT_LOCATION    = 'WebsiteRedirectLocation';
    const REQUEST_IF_MATCH                     = 'IfMatch';
    const REQUEST_IF_MODIFIED_SINCE            = 'IfModifiedSince';
    const REQUEST_IF_NONE_MATCH                = 'IfNoneMatch';
    const REQUEST_IF_UNMODIFIED_SINCE          = 'IfUnmodifiedSince';
    const REQUEST_RANGE                        = 'Range';
    const REQUEST_REQUEST_PAYER                = 'RequestPayer';
    const REQUEST_RESPONSE_CACHE_CONTROL       = 'ResponseCacheControl';
    const REQUEST_RESPONSE_CONTENT_DISPOSITION = 'ResponseContentDisposition';
    const REQUEST_RESPONSE_CONTENT_ENCODING    = 'ResponseContentEncoding';
    const REQUEST_RESPONSE_CONTENT_LANGUAGE    = 'ResponseContentLanguage';
    const REQUEST_RESPONSE_CONTENT_TYPE        = 'ResponseContentType';
    const REQUEST_RESPONSE_EXPIRES             = 'ResponseExpires';
    const REQUEST_SAVE_AS                      = 'SaveAs';
    const REQUEST_VERSION_ID                   = 'VersionId';
    const REQUEST_CREATE_BUCKET_CONFIGURATION  = 'CreateBucketConfiguration';
    const REQUEST_LOCATION_CONSTRAINT          = 'LocationConstraint';
    const REQUEST_DELIMITER                    = 'Delimiter';
    const REQUEST_ENCODING_TYPE                = 'EncodingType';
    const REQUEST_MARKER                       = 'Marker';
    const REQUEST_MAX_KEYS                     = 'MaxKeys';
    const REQUEST_PREFIX                       = 'Prefix';

    /**
     * Constructor.
     *
     * @param array $values Initial values.
     */
    public function __construct(array $values = array())
    {
        parent::__construct($values);
    }

    /**
     * {@inheritDoc}
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * {@inheritDoc}
     */
    public function set($key, $value)
    {
        return parent::set($key, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function add($value)
    {
        return parent::add($value);
    }
}
