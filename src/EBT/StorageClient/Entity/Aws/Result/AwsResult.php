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

use EBT\StorageClient\Entity\Aws\AwsObject;

class AwsResult extends AwsObject
{
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
     * {@inheritDoc}
     *
     * Since results are read only we override the get logic to return null in when the resource is not found.
     */
    public function get($key)
    {
        return isset($this->values[$key])
            ? $this->values[$key]
            : null;
    }
}
