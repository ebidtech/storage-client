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

class AwsDynamoDbClientOptions extends AwsClientOptions
{
    /**
     * Retrieves a variable by its key.
     *
     * @param string $key Variable's key.
     *
     * @return AwsDynamoDbClientOptions|mixed|null
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
     * @return AwsDynamoDbClientOptions
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
     * @return AwsDynamoDbClientOptions
     */
    public function add($value)
    {
        return parent::add($value);
    }
}
