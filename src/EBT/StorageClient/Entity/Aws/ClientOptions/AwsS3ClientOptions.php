<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Entity\Aws\ClientOptions;

class AwsS3ClientOptions extends AwsClientOptions
{
    /**
     * Available client options.
     */
    const OPTION_BUCKET_ENDPOINT = 'bucket_endpoint';
    const OPTION_CALCULATE_MD5   = 'calculate_md5';

    /**
     * Retrieves the "bucket_endpoint" variable.
     *
     * @return AwsS3ClientOptions|mixed|null
     */
    public function getBucketEndpoint()
    {
        return $this->get(self::OPTION_BUCKET_ENDPOINT);
    }

    /**
     * Sets the "bucket_endpoint" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3ClientOptions
     */
    public function setBucketEndpoint($value)
    {
        $this->set(self::OPTION_BUCKET_ENDPOINT, $value);

        return $this;
    }


    /**
     * Retrieves the "calculate_md5" variable.
     *
     * @return AwsS3ClientOptions|mixed|null
     */
    public function getCalculateMd5()
    {
        return $this->get(self::OPTION_CALCULATE_MD5);
    }

    /**
     * Sets the "calculate_md5" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsS3ClientOptions
     */
    public function setCalculateMd5($value)
    {
        $this->set(self::OPTION_CALCULATE_MD5, $value);

        return $this;
    }
}
