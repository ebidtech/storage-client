<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Entity\Aws;

abstract class AwsObject implements \IteratorAggregate
{
    /**
     * @var array
     */
    protected $values;

    /**
     * Constructor.
     *
     * @param array $values Initial values if needed.
     */
    public function __construct(array $values = array())
    {
        $this->fromArray($values);
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->values);
    }

    /**
     * Recursively transforms the object to an array.
     *
     * @return array
     */
    public function toArray()
    {
        $array = array();

        /* Call to array recursively as needed. */
        foreach ($this->values as $key => $value) {
            $array[$key] = $value instanceof self
                ? $value->toArray()
                : $value;
        }

        return $array;
    }

    /**
     * Recursively builds a new object from an array.
     *
     * @param array $values Values to convert.
     */
    protected function fromArray(array $values)
    {
        /* Clear any existing values. */
        $this->values = array();

        /* Iterate every value and transform them to an object as needed. */
        foreach ($values as $key => $value) {
            $this->values[$key] = is_array($value)
                ? new static($value)
                : $value;
        }
    }

    /**
     * Retrieves a variable by its key.
     *
     * @param string $key Variable's key.
     *
     * @return static|mixed|null
     */
    protected function get($key)
    {
        /* The key exists, return it. */
        if (isset($this->values[$key])) {

            return $this->values[$key];
        }

        /* The key was not found, create a object and return it. */
        $this->values[$key] = $value = new static();

        return $value;
    }

    /**
     * Sets a new variable.
     *
     * @param string $key   Variable's key.
     * @param mixed  $value Variable's value.
     *
     * @return static
     */
    protected function set($key, $value)
    {
        /* Convert the given value to object as needed. */
        $value = is_array($value)
            ? new static($value)
            : $value;
        $this->values[$key] = $value;

        return $this;
    }

    /**
     * Adds a new variable (without explicitly setting a key).
     *
     * @param mixed $value Variable's value.
     *
     * @return static
     */
    protected function add($value)
    {
        /* Convert the given value to object as needed. */
        $value = is_array($value)
            ? new static($value)
            : $value;
        $this->values[] = $value;

        return $this;
    }
}
