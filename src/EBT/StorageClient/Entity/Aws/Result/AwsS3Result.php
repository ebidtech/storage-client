<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Entity\Aws\Result;

class AwsS3Result extends AwsResult
{
    /**
     * Result parameter keys.
     */
    const RESULT_E_TAG                     = 'ETag';
    const RESULT_EXPIRATION                = 'Expiration';
    const RESULT_OBJECT_URL                = 'ObjectURL';
    const RESULT_REQUEST_CHARGED           = 'RequestCharged';
    const RESULT_SSE_CUSTOMER_ALGORITHM    = 'SSECustomerAlgorithm';
    const RESULT_SSE_CUSTOMER_KEY_MD5      = 'SSECustomerKeyMD5';
    const RESULT_SSE_KMS_KEY_ID            = 'SSEKMSKeyId';
    const RESULT_SERVER_SIDE_ENCRYPTION    = 'ServerSideEncryption';
    const RESULT_VERSION_ID                = 'VersionId';
    const RESULT_ACCEPT_RANGES             = 'AcceptRanges';
    const RESULT_BODY                      = 'Body';
    const RESULT_CACHE_CONTROL             = 'CacheControl';
    const RESULT_CONTENT_DISPOSITION       = 'ContentDisposition';
    const RESULT_CONTENT_ENCODING          = 'ContentEncoding';
    const RESULT_CONTENT_LANGUAGE          = 'ContentLanguage';
    const RESULT_CONTENT_LENGTH            = 'ContentLength';
    const RESULT_CONTENT_RAGE              = 'ContentRange';
    const RESULT_CONTENT_TYPE              = 'ContentType';
    const RESULT_DELETE_MARKER             = 'DeleteMarker';
    const RESULT_EXPIRES                   = 'Expires';
    const RESULT_LAST_MODIFIED             = 'LastModified';
    const RESULT_METADATA                  = 'Metadata';
    const RESULT_MISSING_META              = 'MissingMeta';
    const RESULT_REPLICATION_STATUS        = 'ReplicationStatus';
    const RESULT_RESTORE                   = 'Restore';
    const RESULT_STORAGE_CLASS             = 'StorageClass';
    const RESULT_WEBSITE_REDIRECT_LOCATION = 'WebsiteRedirectLocation';
    const RESULT_LOCATION                  = 'Location';
    const RESULT_COMMON_PREFIXES           = 'CommonPrefixes';
    const RESULT_COMMON_PREFIX             = 'Prefix';
    const RESULT_CONTENTS                  = 'Contents';
    const RESULT_KEY                       = 'Key';
    const RESULT_OWNER                     = 'Owner';
    const RESULT_DISPLAY_NAME              = 'DisplayName';
    const RESULT_ID                        = 'ID';
    const RESULT_SIZE                      = 'Size';
    const RESULT_DELIMITER                 = 'Delimiter';
    const RESULT_ENCODING_TYPE             = 'EncodingType';
    const RESULT_IS_TRUNCATED              = 'IsTruncated';
    const RESULT_MARKER                    = 'Marker';
    const RESULT_MAX_KEYS                  = 'MaxKeys';
    const RESULT_NAME                      = 'Name';
    const RESULT_NEXT_MARKER               = 'NextMarker';
    const RESULT_PREFIX                    = 'Prefix';

    /**
     * Constructor.
     *
     * @param array $values Initial values if needed.
     */
    public function __construct(array $values = array())
    {
        parent::__construct($values);
    }

    /**
     * Retrieves the "ResultETag" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultETag()
    {
        return $this->get(self::RESULT_E_TAG);
    }

    /**
     * Sets the "ResultETag" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultETag($value)
    {
        return $this->set(self::RESULT_E_TAG, $value);
    }

    /**
     * Retrieves the "ResultExpiration" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultExpiration()
    {
        return $this->get(self::RESULT_EXPIRATION);
    }

    /**
     * Sets the "ResultExpiration" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultExpiration($value)
    {
        return $this->set(self::RESULT_EXPIRATION, $value);
    }

    /**
     * Retrieves the "ResultObjectUrl" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultObjectUrl()
    {
        return $this->get(self::RESULT_OBJECT_URL);
    }

    /**
     * Sets the "ResultObjectUrl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultObjectUrl($value)
    {
        return $this->set(self::RESULT_OBJECT_URL, $value);
    }

    /**
     * Retrieves the "ResultRequestCharged" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultRequestCharged()
    {
        return $this->get(self::RESULT_REQUEST_CHARGED);
    }

    /**
     * Sets the "ResultRequestCharged" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultRequestCharged($value)
    {
        return $this->set(self::RESULT_REQUEST_CHARGED, $value);
    }

    /**
     * Retrieves the "ResultSseCustomerAlgorithm" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultSseCustomerAlgorithm()
    {
        return $this->get(self::RESULT_SSE_CUSTOMER_ALGORITHM);
    }

    /**
     * Sets the "ResultSseCustomerAlgorithm" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultSseCustomerAlgorithm($value)
    {
        return $this->set(self::RESULT_SSE_CUSTOMER_ALGORITHM, $value);
    }

    /**
     * Retrieves the "ResultSseCustomerKeyMd5" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultSseCustomerKeyMd5()
    {
        return $this->get(self::RESULT_SSE_CUSTOMER_KEY_MD5);
    }

    /**
     * Sets the "ResultSseCustomerKeyMd5" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultSseCustomerKeyMd5($value)
    {
        return $this->set(self::RESULT_SSE_CUSTOMER_KEY_MD5, $value);
    }

    /**
     * Retrieves the "ResultSseKmsKeyId" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultSseKmsKeyId()
    {
        return $this->get(self::RESULT_SSE_KMS_KEY_ID);
    }

    /**
     * Sets the "ResultSseKmsKeyId" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultSseKmsKeyId($value)
    {
        return $this->set(self::RESULT_SSE_KMS_KEY_ID, $value);
    }

    /**
     * Retrieves the "ResultServerSideEncryption" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultServerSideEncryption()
    {
        return $this->get(self::RESULT_SERVER_SIDE_ENCRYPTION);
    }

    /**
     * Sets the "ResultServerSideEncryption" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultServerSideEncryption($value)
    {
        return $this->set(self::RESULT_SERVER_SIDE_ENCRYPTION, $value);
    }

    /**
     * Retrieves the "ResultVersionId" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultVersionId()
    {
        return $this->get(self::RESULT_VERSION_ID);
    }

    /**
     * Sets the "ResultVersionId" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultVersionId($value)
    {
        return $this->set(self::RESULT_VERSION_ID, $value);
    }

    /**
     * Retrieves the "ResultAcceptRanges" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultAcceptRanges()
    {
        return $this->get(self::RESULT_ACCEPT_RANGES);
    }

    /**
     * Sets the "ResultAcceptRanges" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultAcceptRanges($value)
    {
        return $this->set(self::RESULT_ACCEPT_RANGES, $value);
    }

    /**
     * Retrieves the "ResultBody" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultBody()
    {
        return $this->get(self::RESULT_BODY);
    }

    /**
     * Sets the "ResultBody" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultBody($value)
    {
        return $this->set(self::RESULT_BODY, $value);
    }

    /**
     * Retrieves the "ResultCacheControl" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultCacheControl()
    {
        return $this->get(self::RESULT_CACHE_CONTROL);
    }

    /**
     * Sets the "ResultCacheControl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultCacheControl($value)
    {
        return $this->set(self::RESULT_CACHE_CONTROL, $value);
    }

    /**
     * Retrieves the "ResultContentDisposition" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultContentDisposition()
    {
        return $this->get(self::RESULT_CONTENT_DISPOSITION);
    }

    /**
     * Sets the "ResultContentDisposition" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultContentDisposition($value)
    {
        return $this->set(self::RESULT_CONTENT_DISPOSITION, $value);
    }

    /**
     * Retrieves the "ResultContentEncoding" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultContentEncoding()
    {
        return $this->get(self::RESULT_CONTENT_ENCODING);
    }

    /**
     * Sets the "ResultContentEncoding" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultContentEncoding($value)
    {
        return $this->set(self::RESULT_CONTENT_ENCODING, $value);
    }

    /**
     * Retrieves the "ResultContentLanguage" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultContentLanguage()
    {
        return $this->get(self::RESULT_CONTENT_LANGUAGE);
    }

    /**
     * Sets the "ResultContentLanguage" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultContentLanguage($value)
    {
        return $this->set(self::RESULT_CONTENT_LANGUAGE, $value);
    }

    /**
     * Retrieves the "ResultContentLength" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultContentLength()
    {
        return $this->get(self::RESULT_CONTENT_LENGTH);
    }

    /**
     * Sets the "ResultContentLength" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultContentLength($value)
    {
        return $this->set(self::RESULT_CONTENT_LENGTH, $value);
    }

    /**
     * Retrieves the "ResultContentRage" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultContentRage()
    {
        return $this->get(self::RESULT_CONTENT_RAGE);
    }

    /**
     * Sets the "ResultContentRage" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultContentRage($value)
    {
        return $this->set(self::RESULT_CONTENT_RAGE, $value);
    }

    /**
     * Retrieves the "ResultContentType" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultContentType()
    {
        return $this->get(self::RESULT_CONTENT_TYPE);
    }

    /**
     * Sets the "ResultContentType" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultContentType($value)
    {
        return $this->set(self::RESULT_CONTENT_TYPE, $value);
    }

    /**
     * Retrieves the "ResultDeleteMarker" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultDeleteMarker()
    {
        return $this->get(self::RESULT_DELETE_MARKER);
    }

    /**
     * Sets the "ResultDeleteMarker" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultDeleteMarker($value)
    {
        return $this->set(self::RESULT_DELETE_MARKER, $value);
    }

    /**
     * Retrieves the "ResultExpires" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultExpires()
    {
        return $this->get(self::RESULT_EXPIRES);
    }

    /**
     * Sets the "ResultExpires" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultExpires($value)
    {
        return $this->set(self::RESULT_EXPIRES, $value);
    }

    /**
     * Retrieves the "ResultLastModified" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultLastModified()
    {
        return $this->get(self::RESULT_LAST_MODIFIED);
    }

    /**
     * Sets the "ResultLastModified" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultLastModified($value)
    {
        return $this->set(self::RESULT_LAST_MODIFIED, $value);
    }

    /**
     * Retrieves the "ResultMetadata" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultMetadata()
    {
        return $this->get(self::RESULT_METADATA);
    }

    /**
     * Sets the "ResultMetadata" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultMetadata($value)
    {
        return $this->set(self::RESULT_METADATA, $value);
    }

    /**
     * Retrieves the "ResultMissingMeta" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultMissingMeta()
    {
        return $this->get(self::RESULT_MISSING_META);
    }

    /**
     * Sets the "ResultMissingMeta" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultMissingMeta($value)
    {
        return $this->set(self::RESULT_MISSING_META, $value);
    }

    /**
     * Retrieves the "ResultReplicationStatus" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultReplicationStatus()
    {
        return $this->get(self::RESULT_REPLICATION_STATUS);
    }

    /**
     * Sets the "ResultReplicationStatus" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultReplicationStatus($value)
    {
        return $this->set(self::RESULT_REPLICATION_STATUS, $value);
    }

    /**
     * Retrieves the "ResultRestore" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultRestore()
    {
        return $this->get(self::RESULT_RESTORE);
    }

    /**
     * Sets the "ResultRestore" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultRestore($value)
    {
        return $this->set(self::RESULT_RESTORE, $value);
    }

    /**
     * Retrieves the "ResultStorageClass" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultStorageClass()
    {
        return $this->get(self::RESULT_STORAGE_CLASS);
    }

    /**
     * Sets the "ResultStorageClass" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultStorageClass($value)
    {
        return $this->set(self::RESULT_STORAGE_CLASS, $value);
    }

    /**
     * Retrieves the "ResultWebsiteRedirectLocation" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultWebsiteRedirectLocation()
    {
        return $this->get(self::RESULT_WEBSITE_REDIRECT_LOCATION);
    }

    /**
     * Sets the "ResultWebsiteRedirectLocation" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultWebsiteRedirectLocation($value)
    {
        return $this->set(self::RESULT_WEBSITE_REDIRECT_LOCATION, $value);
    }

    /**
     * Retrieves the "ResultLocation" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultLocation()
    {
        return $this->get(self::RESULT_LOCATION);
    }

    /**
     * Sets the "ResultLocation" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultLocation($value)
    {
        return $this->set(self::RESULT_LOCATION, $value);
    }

    /**
     * Retrieves the "ResultCommonPrefixes" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultCommonPrefixes()
    {
        return $this->get(self::RESULT_COMMON_PREFIXES);
    }

    /**
     * Sets the "ResultCommonPrefixes" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultCommonPrefixes($value)
    {
        return $this->set(self::RESULT_COMMON_PREFIXES, $value);
    }

    /**
     * Retrieves the "ResultCommonPrefix" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultCommonPrefix()
    {
        return $this->get(self::RESULT_COMMON_PREFIX);
    }

    /**
     * Sets the "ResultCommonPrefix" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultCommonPrefix($value)
    {
        return $this->set(self::RESULT_COMMON_PREFIX, $value);
    }

    /**
     * Retrieves the "ResultContents" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultContents()
    {
        return $this->get(self::RESULT_CONTENTS);
    }

    /**
     * Sets the "ResultContents" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultContents($value)
    {
        return $this->set(self::RESULT_CONTENTS, $value);
    }

    /**
     * Retrieves the "ResultKey" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultKey()
    {
        return $this->get(self::RESULT_KEY);
    }

    /**
     * Sets the "ResultKey" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultKey($value)
    {
        return $this->set(self::RESULT_KEY, $value);
    }

    /**
     * Retrieves the "ResultOwner" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultOwner()
    {
        return $this->get(self::RESULT_OWNER);
    }

    /**
     * Sets the "ResultOwner" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultOwner($value)
    {
        return $this->set(self::RESULT_OWNER, $value);
    }

    /**
     * Retrieves the "ResultDisplayName" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultDisplayName()
    {
        return $this->get(self::RESULT_DISPLAY_NAME);
    }

    /**
     * Sets the "ResultDisplayName" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultDisplayName($value)
    {
        return $this->set(self::RESULT_DISPLAY_NAME, $value);
    }

    /**
     * Retrieves the "ResultId" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultId()
    {
        return $this->get(self::RESULT_ID);
    }

    /**
     * Sets the "ResultId" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultId($value)
    {
        return $this->set(self::RESULT_ID, $value);
    }

    /**
     * Retrieves the "ResultSize" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultSize()
    {
        return $this->get(self::RESULT_SIZE);
    }

    /**
     * Sets the "ResultSize" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultSize($value)
    {
        return $this->set(self::RESULT_SIZE, $value);
    }

    /**
     * Retrieves the "ResultDelimiter" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultDelimiter()
    {
        return $this->get(self::RESULT_DELIMITER);
    }

    /**
     * Sets the "ResultDelimiter" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultDelimiter($value)
    {
        return $this->set(self::RESULT_DELIMITER, $value);
    }

    /**
     * Retrieves the "ResultEncodingType" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultEncodingType()
    {
        return $this->get(self::RESULT_ENCODING_TYPE);
    }

    /**
     * Sets the "ResultEncodingType" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultEncodingType($value)
    {
        return $this->set(self::RESULT_ENCODING_TYPE, $value);
    }

    /**
     * Retrieves the "ResultIsTruncated" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultIsTruncated()
    {
        return $this->get(self::RESULT_IS_TRUNCATED);
    }

    /**
     * Sets the "ResultIsTruncated" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultIsTruncated($value)
    {
        return $this->set(self::RESULT_IS_TRUNCATED, $value);
    }

    /**
     * Retrieves the "ResultMarker" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultMarker()
    {
        return $this->get(self::RESULT_MARKER);
    }

    /**
     * Sets the "ResultMarker" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultMarker($value)
    {
        return $this->set(self::RESULT_MARKER, $value);
    }

    /**
     * Retrieves the "ResultMaxKeys" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultMaxKeys()
    {
        return $this->get(self::RESULT_MAX_KEYS);
    }

    /**
     * Sets the "ResultMaxKeys" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultMaxKeys($value)
    {
        return $this->set(self::RESULT_MAX_KEYS, $value);
    }

    /**
     * Retrieves the "ResultName" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultName()
    {
        return $this->get(self::RESULT_NAME);
    }

    /**
     * Sets the "ResultName" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultName($value)
    {
        return $this->set(self::RESULT_NAME, $value);
    }

    /**
     * Retrieves the "ResultNextMarker" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultNextMarker()
    {
        return $this->get(self::RESULT_NEXT_MARKER);
    }

    /**
     * Sets the "ResultNextMarker" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultNextMarker($value)
    {
        return $this->set(self::RESULT_NEXT_MARKER, $value);
    }

    /**
     * Retrieves the "ResultPrefix" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getResultPrefix()
    {
        return $this->get(self::RESULT_PREFIX);
    }

    /**
     * Sets the "ResultPrefix" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setResultPrefix($value)
    {
        return $this->set(self::RESULT_PREFIX, $value);
    }
}
