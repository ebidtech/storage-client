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
     * Retrieves the "ETag" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getETag()
    {
        return $this->get(self::RESULT_E_TAG);
    }

    /**
     * Sets the "ETag" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setETag($value)
    {
        return $this->set(self::RESULT_E_TAG, $value);
    }

    /**
     * Retrieves the "Expiration" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getExpiration()
    {
        return $this->get(self::RESULT_EXPIRATION);
    }

    /**
     * Sets the "Expiration" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setExpiration($value)
    {
        return $this->set(self::RESULT_EXPIRATION, $value);
    }

    /**
     * Retrieves the "ObjectUrl" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getObjectUrl()
    {
        return $this->get(self::RESULT_OBJECT_URL);
    }

    /**
     * Sets the "ObjectUrl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setObjectUrl($value)
    {
        return $this->set(self::RESULT_OBJECT_URL, $value);
    }

    /**
     * Retrieves the "RequestCharged" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getRequestCharged()
    {
        return $this->get(self::RESULT_REQUEST_CHARGED);
    }

    /**
     * Sets the "RequestCharged" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setRequestCharged($value)
    {
        return $this->set(self::RESULT_REQUEST_CHARGED, $value);
    }

    /**
     * Retrieves the "SseCustomerAlgorithm" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getSseCustomerAlgorithm()
    {
        return $this->get(self::RESULT_SSE_CUSTOMER_ALGORITHM);
    }

    /**
     * Sets the "SseCustomerAlgorithm" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setSseCustomerAlgorithm($value)
    {
        return $this->set(self::RESULT_SSE_CUSTOMER_ALGORITHM, $value);
    }

    /**
     * Retrieves the "SseCustomerKeyMd5" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getSseCustomerKeyMd5()
    {
        return $this->get(self::RESULT_SSE_CUSTOMER_KEY_MD5);
    }

    /**
     * Sets the "SseCustomerKeyMd5" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setSseCustomerKeyMd5($value)
    {
        return $this->set(self::RESULT_SSE_CUSTOMER_KEY_MD5, $value);
    }

    /**
     * Retrieves the "SseKmsKeyId" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getSseKmsKeyId()
    {
        return $this->get(self::RESULT_SSE_KMS_KEY_ID);
    }

    /**
     * Sets the "SseKmsKeyId" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setSseKmsKeyId($value)
    {
        return $this->set(self::RESULT_SSE_KMS_KEY_ID, $value);
    }

    /**
     * Retrieves the "ServerSideEncryption" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getServerSideEncryption()
    {
        return $this->get(self::RESULT_SERVER_SIDE_ENCRYPTION);
    }

    /**
     * Sets the "ServerSideEncryption" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setServerSideEncryption($value)
    {
        return $this->set(self::RESULT_SERVER_SIDE_ENCRYPTION, $value);
    }

    /**
     * Retrieves the "VersionId" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getVersionId()
    {
        return $this->get(self::RESULT_VERSION_ID);
    }

    /**
     * Sets the "VersionId" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setVersionId($value)
    {
        return $this->set(self::RESULT_VERSION_ID, $value);
    }

    /**
     * Retrieves the "AcceptRanges" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getAcceptRanges()
    {
        return $this->get(self::RESULT_ACCEPT_RANGES);
    }

    /**
     * Sets the "AcceptRanges" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setAcceptRanges($value)
    {
        return $this->set(self::RESULT_ACCEPT_RANGES, $value);
    }

    /**
     * Retrieves the "Body" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getBody()
    {
        return $this->get(self::RESULT_BODY);
    }

    /**
     * Sets the "Body" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setBody($value)
    {
        return $this->set(self::RESULT_BODY, $value);
    }

    /**
     * Retrieves the "CacheControl" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getCacheControl()
    {
        return $this->get(self::RESULT_CACHE_CONTROL);
    }

    /**
     * Sets the "CacheControl" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setCacheControl($value)
    {
        return $this->set(self::RESULT_CACHE_CONTROL, $value);
    }

    /**
     * Retrieves the "ContentDisposition" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getContentDisposition()
    {
        return $this->get(self::RESULT_CONTENT_DISPOSITION);
    }

    /**
     * Sets the "ContentDisposition" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setContentDisposition($value)
    {
        return $this->set(self::RESULT_CONTENT_DISPOSITION, $value);
    }

    /**
     * Retrieves the "ContentEncoding" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getContentEncoding()
    {
        return $this->get(self::RESULT_CONTENT_ENCODING);
    }

    /**
     * Sets the "ContentEncoding" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setContentEncoding($value)
    {
        return $this->set(self::RESULT_CONTENT_ENCODING, $value);
    }

    /**
     * Retrieves the "ContentLanguage" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getContentLanguage()
    {
        return $this->get(self::RESULT_CONTENT_LANGUAGE);
    }

    /**
     * Sets the "ContentLanguage" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setContentLanguage($value)
    {
        return $this->set(self::RESULT_CONTENT_LANGUAGE, $value);
    }

    /**
     * Retrieves the "ContentLength" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getContentLength()
    {
        return $this->get(self::RESULT_CONTENT_LENGTH);
    }

    /**
     * Sets the "ContentLength" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setContentLength($value)
    {
        return $this->set(self::RESULT_CONTENT_LENGTH, $value);
    }

    /**
     * Retrieves the "ContentRage" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getContentRage()
    {
        return $this->get(self::RESULT_CONTENT_RAGE);
    }

    /**
     * Sets the "ContentRage" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setContentRage($value)
    {
        return $this->set(self::RESULT_CONTENT_RAGE, $value);
    }

    /**
     * Retrieves the "ContentType" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getContentType()
    {
        return $this->get(self::RESULT_CONTENT_TYPE);
    }

    /**
     * Sets the "ContentType" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setContentType($value)
    {
        return $this->set(self::RESULT_CONTENT_TYPE, $value);
    }

    /**
     * Retrieves the "DeleteMarker" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getDeleteMarker()
    {
        return $this->get(self::RESULT_DELETE_MARKER);
    }

    /**
     * Sets the "DeleteMarker" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setDeleteMarker($value)
    {
        return $this->set(self::RESULT_DELETE_MARKER, $value);
    }

    /**
     * Retrieves the "Expires" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getExpires()
    {
        return $this->get(self::RESULT_EXPIRES);
    }

    /**
     * Sets the "Expires" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setExpires($value)
    {
        return $this->set(self::RESULT_EXPIRES, $value);
    }

    /**
     * Retrieves the "LastModified" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getLastModified()
    {
        return $this->get(self::RESULT_LAST_MODIFIED);
    }

    /**
     * Sets the "LastModified" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setLastModified($value)
    {
        return $this->set(self::RESULT_LAST_MODIFIED, $value);
    }

    /**
     * Retrieves the "Metadata" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getMetadata()
    {
        return $this->get(self::RESULT_METADATA);
    }

    /**
     * Sets the "Metadata" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setMetadata($value)
    {
        return $this->set(self::RESULT_METADATA, $value);
    }

    /**
     * Retrieves the "MissingMeta" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getMissingMeta()
    {
        return $this->get(self::RESULT_MISSING_META);
    }

    /**
     * Sets the "MissingMeta" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setMissingMeta($value)
    {
        return $this->set(self::RESULT_MISSING_META, $value);
    }

    /**
     * Retrieves the "ReplicationStatus" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getReplicationStatus()
    {
        return $this->get(self::RESULT_REPLICATION_STATUS);
    }

    /**
     * Sets the "ReplicationStatus" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setReplicationStatus($value)
    {
        return $this->set(self::RESULT_REPLICATION_STATUS, $value);
    }

    /**
     * Retrieves the "Restore" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getRestore()
    {
        return $this->get(self::RESULT_RESTORE);
    }

    /**
     * Sets the "Restore" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setRestore($value)
    {
        return $this->set(self::RESULT_RESTORE, $value);
    }

    /**
     * Retrieves the "StorageClass" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getStorageClass()
    {
        return $this->get(self::RESULT_STORAGE_CLASS);
    }

    /**
     * Sets the "StorageClass" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setStorageClass($value)
    {
        return $this->set(self::RESULT_STORAGE_CLASS, $value);
    }

    /**
     * Retrieves the "WebsiteRedirectLocation" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getWebsiteRedirectLocation()
    {
        return $this->get(self::RESULT_WEBSITE_REDIRECT_LOCATION);
    }

    /**
     * Sets the "WebsiteRedirectLocation" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setWebsiteRedirectLocation($value)
    {
        return $this->set(self::RESULT_WEBSITE_REDIRECT_LOCATION, $value);
    }

    /**
     * Retrieves the "Location" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getLocation()
    {
        return $this->get(self::RESULT_LOCATION);
    }

    /**
     * Sets the "Location" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setLocation($value)
    {
        return $this->set(self::RESULT_LOCATION, $value);
    }

    /**
     * Retrieves the "CommonPrefixes" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getCommonPrefixes()
    {
        return $this->get(self::RESULT_COMMON_PREFIXES);
    }

    /**
     * Sets the "CommonPrefixes" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setCommonPrefixes($value)
    {
        return $this->set(self::RESULT_COMMON_PREFIXES, $value);
    }

    /**
     * Retrieves the "CommonPrefix" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getCommonPrefix()
    {
        return $this->get(self::RESULT_COMMON_PREFIX);
    }

    /**
     * Sets the "CommonPrefix" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setCommonPrefix($value)
    {
        return $this->set(self::RESULT_COMMON_PREFIX, $value);
    }

    /**
     * Retrieves the "Contents" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getContents()
    {
        return $this->get(self::RESULT_CONTENTS);
    }

    /**
     * Sets the "Contents" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setContents($value)
    {
        return $this->set(self::RESULT_CONTENTS, $value);
    }

    /**
     * Retrieves the "Key" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getKey()
    {
        return $this->get(self::RESULT_KEY);
    }

    /**
     * Sets the "Key" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setKey($value)
    {
        return $this->set(self::RESULT_KEY, $value);
    }

    /**
     * Retrieves the "Owner" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getOwner()
    {
        return $this->get(self::RESULT_OWNER);
    }

    /**
     * Sets the "Owner" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setOwner($value)
    {
        return $this->set(self::RESULT_OWNER, $value);
    }

    /**
     * Retrieves the "DisplayName" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getDisplayName()
    {
        return $this->get(self::RESULT_DISPLAY_NAME);
    }

    /**
     * Sets the "DisplayName" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setDisplayName($value)
    {
        return $this->set(self::RESULT_DISPLAY_NAME, $value);
    }

    /**
     * Retrieves the "Id" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getId()
    {
        return $this->get(self::RESULT_ID);
    }

    /**
     * Sets the "Id" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setId($value)
    {
        return $this->set(self::RESULT_ID, $value);
    }

    /**
     * Retrieves the "Size" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getSize()
    {
        return $this->get(self::RESULT_SIZE);
    }

    /**
     * Sets the "Size" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setSize($value)
    {
        return $this->set(self::RESULT_SIZE, $value);
    }

    /**
     * Retrieves the "Delimiter" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getDelimiter()
    {
        return $this->get(self::RESULT_DELIMITER);
    }

    /**
     * Sets the "Delimiter" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setDelimiter($value)
    {
        return $this->set(self::RESULT_DELIMITER, $value);
    }

    /**
     * Retrieves the "EncodingType" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getEncodingType()
    {
        return $this->get(self::RESULT_ENCODING_TYPE);
    }

    /**
     * Sets the "EncodingType" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setEncodingType($value)
    {
        return $this->set(self::RESULT_ENCODING_TYPE, $value);
    }

    /**
     * Retrieves the "IsTruncated" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getIsTruncated()
    {
        return $this->get(self::RESULT_IS_TRUNCATED);
    }

    /**
     * Sets the "IsTruncated" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setIsTruncated($value)
    {
        return $this->set(self::RESULT_IS_TRUNCATED, $value);
    }

    /**
     * Retrieves the "Marker" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getMarker()
    {
        return $this->get(self::RESULT_MARKER);
    }

    /**
     * Sets the "Marker" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setMarker($value)
    {
        return $this->set(self::RESULT_MARKER, $value);
    }

    /**
     * Retrieves the "MaxKeys" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getMaxKeys()
    {
        return $this->get(self::RESULT_MAX_KEYS);
    }

    /**
     * Sets the "MaxKeys" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setMaxKeys($value)
    {
        return $this->set(self::RESULT_MAX_KEYS, $value);
    }

    /**
     * Retrieves the "Name" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getName()
    {
        return $this->get(self::RESULT_NAME);
    }

    /**
     * Sets the "Name" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setName($value)
    {
        return $this->set(self::RESULT_NAME, $value);
    }

    /**
     * Retrieves the "NextMarker" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getNextMarker()
    {
        return $this->get(self::RESULT_NEXT_MARKER);
    }

    /**
     * Sets the "NextMarker" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setNextMarker($value)
    {
        return $this->set(self::RESULT_NEXT_MARKER, $value);
    }

    /**
     * Retrieves the "Prefix" variable.
     *
     * @return AwsS3Result|mixed|null
     */
    public function getPrefix()
    {
        return $this->get(self::RESULT_PREFIX);
    }

    /**
     * Sets the "Prefix" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3Result
     */
    public function setPrefix($value)
    {
        return $this->set(self::RESULT_PREFIX, $value);
    }

    /**
     * Retrieves a variable by its key.
     *
     * Since results are read only we override the get logic to return null in when the resource is not found.
     *
     * @param string $key Variable's key.
     *
     * @return AwsS3Result|mixed|null
     */
    public function get($key)
    {
        return isset($this->values[$key])
            ? $this->values[$key]
            : null;
    }
}
