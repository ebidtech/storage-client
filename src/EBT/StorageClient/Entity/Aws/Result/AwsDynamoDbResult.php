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

class AwsDynamoDbResult extends AwsResult
{
    /**
     * Result parameter keys.
     */
    const RESULT_ATTRIBUTES               = 'Attributes';
    const RESULT_B                        = 'B';
    const RESULT_BOOL                     = 'BOOL';
    const RESULT_BS                       = 'BS';
    const RESULT_L                        = 'L';
    const RESULT_M                        = 'M';
    const RESULT_N                        = 'N';
    const RESULT_NS                       = 'NS';
    const RESULT_NULL                     = 'NULL';
    const RESULT_S                        = 'S';
    const RESULT_SS                       = 'SS';
    const RESULT_CONSUMED_CAPACITY        = 'ConsumedCapacity';
    const RESULT_CAPACITY_UNITS           = 'CapacityUnits';
    const RESULT_GLOBAL_SECONDARY_INDEXES = 'GlobalSecondaryIndexes';
    const RESULT_LOCAL_SECONDARY_INDEXES  = 'LocalSecondaryIndexes';
    const RESULT_TABLE                    = 'Table';
    const RESULT_TABLE_NAME               = 'TableName';
    const RESULT_ITEM_COLLECTION_METRICS  = 'ItemCollectionMetrics';
    const RESULT_ITEM_COLLECTION_KEY      = 'ItemCollectionKey';
    const RESULT_SIZE_ESTIMATE_RANGE_GB   = 'SizeEstimateRangeGB';
    const RESULT_ITEM                     = 'Item';
    const RESULT_UNPROCESSED_ITEMS        = 'UnprocessedItems';
    const RESULT_DELETE_REQUEST           = 'DeleteRequest';
    const RESULT_KEY                      = 'Key';
    const RESULT_PUT_REQUEST              = 'PutRequest';

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
     * Retrieves the "Attributes" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getAttributes()
    {
        return $this->get(self::RESULT_ATTRIBUTES);
    }

    /**
     * Sets the "Attributes" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setAttributes($value)
    {
        return $this->set(self::RESULT_ATTRIBUTES, $value);
    }

    /**
     * Retrieves the "B" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getB()
    {
        return $this->get(self::RESULT_B);
    }

    /**
     * Sets the "B" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setB($value)
    {
        return $this->set(self::RESULT_B, $value);
    }

    /**
     * Retrieves the "Bool" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getBool()
    {
        return $this->get(self::RESULT_BOOL);
    }

    /**
     * Sets the "Bool" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setBool($value)
    {
        return $this->set(self::RESULT_BOOL, $value);
    }

    /**
     * Retrieves the "Bs" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getBs()
    {
        return $this->get(self::RESULT_BS);
    }

    /**
     * Sets the "Bs" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setBs($value)
    {
        return $this->set(self::RESULT_BS, $value);
    }

    /**
     * Retrieves the "L" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getL()
    {
        return $this->get(self::RESULT_L);
    }

    /**
     * Sets the "L" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setL($value)
    {
        return $this->set(self::RESULT_L, $value);
    }

    /**
     * Retrieves the "M" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getM()
    {
        return $this->get(self::RESULT_M);
    }

    /**
     * Sets the "M" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setM($value)
    {
        return $this->set(self::RESULT_M, $value);
    }

    /**
     * Retrieves the "N" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getN()
    {
        return $this->get(self::RESULT_N);
    }

    /**
     * Sets the "N" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setN($value)
    {
        return $this->set(self::RESULT_N, $value);
    }

    /**
     * Retrieves the "Ns" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getNs()
    {
        return $this->get(self::RESULT_NS);
    }

    /**
     * Sets the "Ns" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setNs($value)
    {
        return $this->set(self::RESULT_NS, $value);
    }

    /**
     * Retrieves the "Null" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getNull()
    {
        return $this->get(self::RESULT_NULL);
    }

    /**
     * Sets the "Null" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setNull($value)
    {
        return $this->set(self::RESULT_NULL, $value);
    }

    /**
     * Retrieves the "S" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getS()
    {
        return $this->get(self::RESULT_S);
    }

    /**
     * Sets the "S" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setS($value)
    {
        return $this->set(self::RESULT_S, $value);
    }

    /**
     * Retrieves the "Ss" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getSs()
    {
        return $this->get(self::RESULT_SS);
    }

    /**
     * Sets the "Ss" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setSs($value)
    {
        return $this->set(self::RESULT_SS, $value);
    }

    /**
     * Retrieves the "ConsumedCapacity" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getConsumedCapacity()
    {
        return $this->get(self::RESULT_CONSUMED_CAPACITY);
    }

    /**
     * Sets the "ConsumedCapacity" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setConsumedCapacity($value)
    {
        return $this->set(self::RESULT_CONSUMED_CAPACITY, $value);
    }

    /**
     * Retrieves the "CapacityUnits" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getCapacityUnits()
    {
        return $this->get(self::RESULT_CAPACITY_UNITS);
    }

    /**
     * Sets the "CapacityUnits" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setCapacityUnits($value)
    {
        return $this->set(self::RESULT_CAPACITY_UNITS, $value);
    }

    /**
     * Retrieves the "GlobalSecondaryIndexes" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getGlobalSecondaryIndexes()
    {
        return $this->get(self::RESULT_GLOBAL_SECONDARY_INDEXES);
    }

    /**
     * Sets the "GlobalSecondaryIndexes" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setGlobalSecondaryIndexes($value)
    {
        return $this->set(self::RESULT_GLOBAL_SECONDARY_INDEXES, $value);
    }

    /**
     * Retrieves the "LocalSecondaryIndexes" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getLocalSecondaryIndexes()
    {
        return $this->get(self::RESULT_LOCAL_SECONDARY_INDEXES);
    }

    /**
     * Sets the "LocalSecondaryIndexes" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setLocalSecondaryIndexes($value)
    {
        return $this->set(self::RESULT_LOCAL_SECONDARY_INDEXES, $value);
    }

    /**
     * Retrieves the "Table" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getTable()
    {
        return $this->get(self::RESULT_TABLE);
    }

    /**
     * Sets the "Table" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setTable($value)
    {
        return $this->set(self::RESULT_TABLE, $value);
    }

    /**
     * Retrieves the "TableName" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getTableName()
    {
        return $this->get(self::RESULT_TABLE_NAME);
    }

    /**
     * Sets the "TableName" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setTableName($value)
    {
        return $this->set(self::RESULT_TABLE_NAME, $value);
    }

    /**
     * Retrieves the "ItemCollectionMetrics" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getItemCollectionMetrics()
    {
        return $this->get(self::RESULT_ITEM_COLLECTION_METRICS);
    }

    /**
     * Sets the "ItemCollectionMetrics" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setItemCollectionMetrics($value)
    {
        return $this->set(self::RESULT_ITEM_COLLECTION_METRICS, $value);
    }

    /**
     * Retrieves the "ItemCollectionKey" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getItemCollectionKey()
    {
        return $this->get(self::RESULT_ITEM_COLLECTION_KEY);
    }

    /**
     * Sets the "ItemCollectionKey" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setItemCollectionKey($value)
    {
        return $this->set(self::RESULT_ITEM_COLLECTION_KEY, $value);
    }

    /**
     * Retrieves the "SizeEstimateRangeGb" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getSizeEstimateRangeGb()
    {
        return $this->get(self::RESULT_SIZE_ESTIMATE_RANGE_GB);
    }

    /**
     * Sets the "SizeEstimateRangeGb" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setSizeEstimateRangeGb($value)
    {
        return $this->set(self::RESULT_SIZE_ESTIMATE_RANGE_GB, $value);
    }

    /**
     * Retrieves the "Item" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getItem()
    {
        return $this->get(self::RESULT_ITEM);
    }

    /**
     * Sets the "Item" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setItem($value)
    {
        return $this->set(self::RESULT_ITEM, $value);
    }

    /**
     * Retrieves the "UnprocessedItems" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getUnprocessedItems()
    {
        return $this->get(self::RESULT_UNPROCESSED_ITEMS);
    }

    /**
     * Sets the "UnprocessedItems" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setUnprocessedItems($value)
    {
        return $this->set(self::RESULT_UNPROCESSED_ITEMS, $value);
    }

    /**
     * Retrieves the "DeleteRequest" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getDeleteRequest()
    {
        return $this->get(self::RESULT_DELETE_REQUEST);
    }

    /**
     * Sets the "DeleteRequest" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setDeleteRequest($value)
    {
        return $this->set(self::RESULT_DELETE_REQUEST, $value);
    }

    /**
     * Retrieves the "Key" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
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
     * @return AwsDynamoDbResult
     */
    public function setKey($value)
    {
        return $this->set(self::RESULT_KEY, $value);
    }

    /**
     * Retrieves the "PutRequest" variable.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function getPutRequest()
    {
        return $this->get(self::RESULT_PUT_REQUEST);
    }

    /**
     * Sets the "PutRequest" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbResult
     */
    public function setPutRequest($value)
    {
        return $this->set(self::RESULT_PUT_REQUEST, $value);
    }

    /**
     * Retrieves a variable by its key.
     *
     * Since results are read only we override the get logic to return null in when the resource is not found.
     *
     * @param string $key Variable's key.
     *
     * @return AwsDynamoDbResult|mixed|null
     */
    public function get($key)
    {
        return isset($this->values[$key])
            ? $this->values[$key]
            : null;
    }
}
