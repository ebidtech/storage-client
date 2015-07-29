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

abstract class AwsRequest extends AwsObject
{
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
