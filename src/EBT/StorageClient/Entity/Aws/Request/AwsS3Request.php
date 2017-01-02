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

class AwsS3Request extends AwsRequest
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
    const REQUEST_COPY_SOURCE                  = 'CopySource';
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
     * Retrieves the "Acl" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getAcl()
    {
        return $this->get(self::REQUEST_ACL);
    }

    /**
     * Sets the "Acl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setAcl($value)
    {
        return $this->set(self::REQUEST_ACL, $value);
    }

    /**
     * Retrieves the "Body" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getBody()
    {
        return $this->get(self::REQUEST_BODY);
    }

    /**
     * Sets the "Body" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setBody($value)
    {
        return $this->set(self::REQUEST_BODY, $value);
    }

    /**
     * Retrieves the "Bucket" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getBucket()
    {
        return $this->get(self::REQUEST_BUCKET);
    }

    /**
     * Sets the "Bucket" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setBucket($value)
    {
        return $this->set(self::REQUEST_BUCKET, $value);
    }

    /**
     * Retrieves the "CacheControl" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getCacheControl()
    {
        return $this->get(self::REQUEST_CACHE_CONTROL);
    }

    /**
     * Sets the "CacheControl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setCacheControl($value)
    {
        return $this->set(self::REQUEST_CACHE_CONTROL, $value);
    }

    /**
     * Retrieves the "ContentDisposition" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getContentDisposition()
    {
        return $this->get(self::REQUEST_CONTENT_DISPOSITION);
    }

    /**
     * Sets the "ContentDisposition" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setContentDisposition($value)
    {
        return $this->set(self::REQUEST_CONTENT_DISPOSITION, $value);
    }

    /**
     * Retrieves the "ContentEncoding" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getContentEncoding()
    {
        return $this->get(self::REQUEST_CONTENT_ENCODING);
    }

    /**
     * Sets the "ContentEncoding" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setContentEncoding($value)
    {
        return $this->set(self::REQUEST_CONTENT_ENCODING, $value);
    }

    /**
     * Retrieves the "ContentLanguage" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getContentLanguage()
    {
        return $this->get(self::REQUEST_CONTENT_LANGUAGE);
    }

    /**
     * Sets the "ContentLanguage" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setContentLanguage($value)
    {
        return $this->set(self::REQUEST_CONTENT_LANGUAGE, $value);
    }

    /**
     * Retrieves the "ContentLength" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getContentLength()
    {
        return $this->get(self::REQUEST_CONTENT_LENGTH);
    }

    /**
     * Sets the "ContentLength" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setContentLength($value)
    {
        return $this->set(self::REQUEST_CONTENT_LENGTH, $value);
    }

    /**
     * Retrieves the "ContentSHA256" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getContentSha256()
    {
        return $this->get(self::REQUEST_CONTENT_SHA_256);
    }

    /**
     * Sets the "ContentSHA256" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setContentSha256($value)
    {
        return $this->set(self::REQUEST_CONTENT_SHA_256, $value);
    }

    /**
     * Retrieves the "ContentType" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getContentType()
    {
        return $this->get(self::REQUEST_CONTENT_TYPE);
    }

    /**
     * Sets the "ContentType" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setContentType($value)
    {
        return $this->set(self::REQUEST_CONTENT_TYPE, $value);
    }

    /**
     * Retrieves the "CopySource" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getCopySource()
    {
        return $this->get(self::REQUEST_COPY_SOURCE);
    }

    /**
     * Sets the "CopySource" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setCopySource($value)
    {
        return $this->set(self::REQUEST_COPY_SOURCE, $value);
    }

    /**
     * Retrieves the "Expires" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getExpires()
    {
        return $this->get(self::REQUEST_EXPIRES);
    }

    /**
     * Sets the "Expires" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setExpires($value)
    {
        return $this->set(self::REQUEST_EXPIRES, $value);
    }

    /**
     * Retrieves the "GrantFullControl" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getGrantFullControl()
    {
        return $this->get(self::REQUEST_GRANT_FULL_CONTROL);
    }

    /**
     * Sets the "GrantFullControl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setGrantFullControl($value)
    {
        return $this->set(self::REQUEST_GRANT_FULL_CONTROL, $value);
    }

    /**
     * Retrieves the "GrantRead" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getGrantRead()
    {
        return $this->get(self::REQUEST_GRANT_READ);
    }

    /**
     * Sets the "GrantRead" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setGrantRead($value)
    {
        return $this->set(self::REQUEST_GRANT_READ, $value);
    }

    /**
     * Retrieves the "GrantReadAcp" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getGrantReadAcp()
    {
        return $this->get(self::REQUEST_GRANT_READ_ACP);
    }

    /**
     * Sets the "GrantReadAcp" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setGrantReadAcp($value)
    {
        return $this->set(self::REQUEST_GRANT_READ_ACP, $value);
    }

    /**
     * Retrieves the "GrantWrite" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getGrantWrite()
    {
        return $this->get(self::REQUEST_GRANT_WRITE);
    }

    /**
     * Sets the "GrantWrite" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setGrantWrite($value)
    {
        return $this->set(self::REQUEST_GRANT_WRITE, $value);
    }

    /**
     * Retrieves the "GrantWriteAcp" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getGrantWriteAcp()
    {
        return $this->get(self::REQUEST_GRANT_WRITE_ACP);
    }

    /**
     * Sets the "GrantWriteAcp" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setGrantWriteAcp($value)
    {
        return $this->set(self::REQUEST_GRANT_WRITE_ACP, $value);
    }

    /**
     * Retrieves the "Key" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getKey()
    {
        return $this->get(self::REQUEST_KEY);
    }

    /**
     * Sets the "Key" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setKey($value)
    {
        return $this->set(self::REQUEST_KEY, $value);
    }

    /**
     * Retrieves the "Metadata" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getMetadata()
    {
        return $this->get(self::REQUEST_METADATA);
    }

    /**
     * Sets the "Metadata" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setMetadata($value)
    {
        return $this->set(self::REQUEST_METADATA, $value);
    }

    /**
     * Retrieves the "Payer" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getPayer()
    {
        return $this->get(self::REQUEST_PAYER);
    }

    /**
     * Sets the "Payer" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setPayer($value)
    {
        return $this->set(self::REQUEST_PAYER, $value);
    }

    /**
     * Retrieves the "SSECustomerAlgorithm" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getSseCustomerAlgorithm()
    {
        return $this->get(self::REQUEST_SSE_CUSTOMER_ALGORITHM);
    }

    /**
     * Sets the "SSECustomerAlgorithm" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setSseCustomerAlgorithm($value)
    {
        return $this->set(self::REQUEST_SSE_CUSTOMER_ALGORITHM, $value);
    }

    /**
     * Retrieves the "SSECustomerKey" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getSseCustomerKey()
    {
        return $this->get(self::REQUEST_SSE_CUSTOMER_KEY);
    }

    /**
     * Sets the "SSECustomerKey" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setSseCustomerKey($value)
    {
        return $this->set(self::REQUEST_SSE_CUSTOMER_KEY, $value);
    }

    /**
     * Retrieves the "SSECustomerKeyMD5" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getSseCustomerKeyMd5()
    {
        return $this->get(self::REQUEST_SSE_CUSTOMER_KEY_MD5);
    }

    /**
     * Sets the "SSECustomerKeyMD5" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setSseCustomerKeyMd5($value)
    {
        return $this->set(self::REQUEST_SSE_CUSTOMER_KEY_MD5, $value);
    }

    /**
     * Retrieves the "SSEKMSKeyId" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getSseKmsKeyId()
    {
        return $this->get(self::REQUEST_SSE_KMS_KEY_ID);
    }

    /**
     * Sets the "SSEKMSKeyId" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setSseKmsKeyId($value)
    {
        return $this->set(self::REQUEST_SSE_KMS_KEY_ID, $value);
    }

    /**
     * Retrieves the "ServerSideEncryption" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getServerSideEncryption()
    {
        return $this->get(self::REQUEST_SERVER_SIDE_ENCRYPTION);
    }

    /**
     * Sets the "ServerSideEncryption" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setServerSideEncryption($value)
    {
        return $this->set(self::REQUEST_SERVER_SIDE_ENCRYPTION, $value);
    }

    /**
     * Retrieves the "SourceFile" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getSourceFile()
    {
        return $this->get(self::REQUEST_SOURCE_FILE);
    }

    /**
     * Sets the "SourceFile" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setSourceFile($value)
    {
        return $this->set(self::REQUEST_SOURCE_FILE, $value);
    }

    /**
     * Retrieves the "StorageClass" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getStorageClass()
    {
        return $this->get(self::REQUEST_STORAGE_CLASS);
    }

    /**
     * Sets the "StorageClass" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setStorageClass($value)
    {
        return $this->set(self::REQUEST_STORAGE_CLASS, $value);
    }

    /**
     * Retrieves the "WebsiteRedirectLocation" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getWebsiteRedirectLocation()
    {
        return $this->get(self::REQUEST_WEBSITE_REDIRECT_LOCATION);
    }

    /**
     * Sets the "WebsiteRedirectLocation" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setWebsiteRedirectLocation($value)
    {
        return $this->set(self::REQUEST_WEBSITE_REDIRECT_LOCATION, $value);
    }

    /**
     * Retrieves the "IfMatch" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getIfMatch()
    {
        return $this->get(self::REQUEST_IF_MATCH);
    }

    /**
     * Sets the "IfMatch" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setIfMatch($value)
    {
        return $this->set(self::REQUEST_IF_MATCH, $value);
    }

    /**
     * Retrieves the "IfModifiedSince" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getIfModifiedSince()
    {
        return $this->get(self::REQUEST_IF_MODIFIED_SINCE);
    }

    /**
     * Sets the "IfModifiedSince" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setIfModifiedSince($value)
    {
        return $this->set(self::REQUEST_IF_MODIFIED_SINCE, $value);
    }

    /**
     * Retrieves the "IfNoneMatch" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getIfNoneMatch()
    {
        return $this->get(self::REQUEST_IF_NONE_MATCH);
    }

    /**
     * Sets the "IfNoneMatch" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setIfNoneMatch($value)
    {
        return $this->set(self::REQUEST_IF_NONE_MATCH, $value);
    }

    /**
     * Retrieves the "IfUnmodifiedSince" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getIfUnmodifiedSince()
    {
        return $this->get(self::REQUEST_IF_UNMODIFIED_SINCE);
    }

    /**
     * Sets the "IfUnmodifiedSince" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setIfUnmodifiedSince($value)
    {
        return $this->set(self::REQUEST_IF_UNMODIFIED_SINCE, $value);
    }

    /**
     * Retrieves the "Range" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getRange()
    {
        return $this->get(self::REQUEST_RANGE);
    }

    /**
     * Sets the "Range" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setRange($value)
    {
        return $this->set(self::REQUEST_RANGE, $value);
    }

    /**
     * Retrieves the "RequestPayer" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getRequestPayer()
    {
        return $this->get(self::REQUEST_REQUEST_PAYER);
    }

    /**
     * Sets the "RequestPayer" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setRequestPayer($value)
    {
        return $this->set(self::REQUEST_REQUEST_PAYER, $value);
    }

    /**
     * Retrieves the "ResponseCacheControl" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getResponseCacheControl()
    {
        return $this->get(self::REQUEST_RESPONSE_CACHE_CONTROL);
    }

    /**
     * Sets the "ResponseCacheControl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setResponseCacheControl($value)
    {
        return $this->set(self::REQUEST_RESPONSE_CACHE_CONTROL, $value);
    }

    /**
     * Retrieves the "ResponseContentDisposition" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getResponseContentDisposition()
    {
        return $this->get(self::REQUEST_RESPONSE_CONTENT_DISPOSITION);
    }

    /**
     * Sets the "ResponseContentDisposition" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setResponseContentDisposition($value)
    {
        return $this->set(self::REQUEST_RESPONSE_CONTENT_DISPOSITION, $value);
    }

    /**
     * Retrieves the "ResponseContentEncoding" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getResponseContentEncoding()
    {
        return $this->get(self::REQUEST_RESPONSE_CONTENT_ENCODING);
    }

    /**
     * Sets the "ResponseContentEncoding" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setResponseContentEncoding($value)
    {
        return $this->set(self::REQUEST_RESPONSE_CONTENT_ENCODING, $value);
    }

    /**
     * Retrieves the "ResponseContentLanguage" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getResponseContentLanguage()
    {
        return $this->get(self::REQUEST_RESPONSE_CONTENT_LANGUAGE);
    }

    /**
     * Sets the "ResponseContentLanguage" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setResponseContentLanguage($value)
    {
        return $this->set(self::REQUEST_RESPONSE_CONTENT_LANGUAGE, $value);
    }

    /**
     * Retrieves the "ResponseContentType" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getResponseContentType()
    {
        return $this->get(self::REQUEST_RESPONSE_CONTENT_TYPE);
    }

    /**
     * Sets the "ResponseContentType" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setResponseContentType($value)
    {
        return $this->set(self::REQUEST_RESPONSE_CONTENT_TYPE, $value);
    }

    /**
     * Retrieves the "ResponseExpires" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getResponseExpires()
    {
        return $this->get(self::REQUEST_RESPONSE_EXPIRES);
    }

    /**
     * Sets the "ResponseExpires" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setResponseExpires($value)
    {
        return $this->set(self::REQUEST_RESPONSE_EXPIRES, $value);
    }

    /**
     * Retrieves the "SaveAs" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getSaveAs()
    {
        return $this->get(self::REQUEST_SAVE_AS);
    }

    /**
     * Sets the "SaveAs" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setSaveAs($value)
    {
        return $this->set(self::REQUEST_SAVE_AS, $value);
    }

    /**
     * Retrieves the "VersionId" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getVersionId()
    {
        return $this->get(self::REQUEST_VERSION_ID);
    }

    /**
     * Sets the "VersionId" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setVersionId($value)
    {
        return $this->set(self::REQUEST_VERSION_ID, $value);
    }

    /**
     * Retrieves the "CreateBucketConfiguration" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getCreateBucketConfiguration()
    {
        return $this->get(self::REQUEST_CREATE_BUCKET_CONFIGURATION);
    }

    /**
     * Sets the "CreateBucketConfiguration" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setCreateBucketConfiguration($value)
    {
        return $this->set(self::REQUEST_CREATE_BUCKET_CONFIGURATION, $value);
    }

    /**
     * Retrieves the "LocationConstraint" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getLocationConstraint()
    {
        return $this->get(self::REQUEST_LOCATION_CONSTRAINT);
    }

    /**
     * Sets the "LocationConstraint" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setLocationConstraint($value)
    {
        return $this->set(self::REQUEST_LOCATION_CONSTRAINT, $value);
    }

    /**
     * Retrieves the "Delimiter" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getDelimiter()
    {
        return $this->get(self::REQUEST_DELIMITER);
    }

    /**
     * Sets the "Delimiter" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setDelimiter($value)
    {
        return $this->set(self::REQUEST_DELIMITER, $value);
    }

    /**
     * Retrieves the "EncodingType" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getEncodingType()
    {
        return $this->get(self::REQUEST_ENCODING_TYPE);
    }

    /**
     * Sets the "EncodingType" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setEncodingType($value)
    {
        return $this->set(self::REQUEST_ENCODING_TYPE, $value);
    }

    /**
     * Retrieves the "Marker" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getMarker()
    {
        return $this->get(self::REQUEST_MARKER);
    }

    /**
     * Sets the "Marker" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setMarker($value)
    {
        return $this->set(self::REQUEST_MARKER, $value);
    }

    /**
     * Retrieves the "MaxKeys" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getMaxKeys()
    {
        return $this->get(self::REQUEST_MAX_KEYS);
    }

    /**
     * Sets the "MaxKeys" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setMaxKeys($value)
    {
        return $this->set(self::REQUEST_MAX_KEYS, $value);
    }

    /**
     * Retrieves the "Prefix" variable.
     *
     * @return AwsS3Request|mixed|null
     */
    public function getPrefix()
    {
        return $this->get(self::REQUEST_PREFIX);
    }

    /**
     * Sets the "Prefix" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Request
     */
    public function setPrefix($value)
    {
        return $this->set(self::REQUEST_PREFIX, $value);
    }

    /**
     * Retrieves a variable by its key.
     *
     * @param string $key Variable's key.
     *
     * @return AwsS3Request|mixed|null
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * Sets a new variable.
     *
     * @param string $key   Variable's key.
     * @param mixed  $value Variable's value.
     *
     * @return AwsS3Request
     */
    public function set($key, $value)
    {
        return parent::set($key, $value);
    }

    /**
     * Adds a new variable (without explicitly setting a key).
     *
     * @param mixed $value Variable's value.
     *
     * @return AwsS3Request
     */
    public function add($value)
    {
        return parent::add($value);
    }
}
