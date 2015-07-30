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

class AwsDynamoDbRequest extends AwsRequest
{
    /**
     * Request parameter keys.
     */
    const REQUEST_CONDITION_EXPRESSION           = 'ConditionExpression';
    const REQUEST_CONDITIONAL_OPERATOR           = 'ConditionalOperator';
    const REQUEST_EXPECTED                       = 'Expected';
    const REQUEST_ATTRIBUTE_VALUE_LIST           = 'AttributeValueList';
    const REQUEST_COMPARISON_OPERATOR            = 'ComparisonOperator';
    const REQUEST_EXISTS                         = 'Exists';
    const REQUEST_VALUE                          = 'Value';
    const REQUEST_EXPRESSION_ATTRIBUTE_NAMES     = 'ExpressionAttributeNames';
    const REQUEST_EXPRESSION_ATTRIBUTE_VALUES    = 'ExpressionAttributeValues';
    const REQUEST_ITEM                           = 'Item';
    const REQUEST_RETURN_CONSUMED_CAPACITY       = 'ReturnConsumedCapacity';
    const REQUEST_RETURN_ITEM_COLLECTION_METRICS = 'ReturnItemCollectionMetrics';
    const REQUEST_RETURN_VALUES                  = 'ReturnValues';
    const REQUEST_TABLE_NAME                     = 'TableName';
    const REQUEST_ATTRIBUTES_TO_GET              = 'AttributesToGet';
    const REQUEST_CONSISTENT_READ                = 'ConsistentRead';
    const REQUEST_KEY                            = 'Key';
    const REQUEST_PROJECTION_EXPRESSION          = 'ProjectionExpression';
    const REQUEST_REQUEST_ITEMS                  = 'RequestItems';
    const REQUEST_DELETE_REQUEST                 = 'DeleteRequest';
    const REQUEST_PUT_REQUEST                    = 'PutRequest';
    const REQUEST_B                              = 'B';
    const REQUEST_BOOL                           = 'BOOL';
    const REQUEST_BS                             = 'BS';
    const REQUEST_L                              = 'L';
    const REQUEST_M                              = 'M';
    const REQUEST_N                              = 'N';
    const REQUEST_NS                             = 'NS';
    const REQUEST_NULL                           = 'NULL';
    const REQUEST_S                              = 'S';
    const REQUEST_SS                             = 'SS';

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
     * Retrieves the "ConditionExpression" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getConditionExpression()
    {
        return $this->get(self::REQUEST_CONDITION_EXPRESSION);
    }

    /**
     * Sets the "ConditionExpression" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setConditionExpression($value)
    {
        return $this->set(self::REQUEST_CONDITION_EXPRESSION, $value);
    }

    /**
     * Retrieves the "ConditionalOperator" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getConditionalOperator()
    {
        return $this->get(self::REQUEST_CONDITIONAL_OPERATOR);
    }

    /**
     * Sets the "ConditionalOperator" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setConditionalOperator($value)
    {
        return $this->set(self::REQUEST_CONDITIONAL_OPERATOR, $value);
    }

    /**
     * Retrieves the "Expected" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getExpected()
    {
        return $this->get(self::REQUEST_EXPECTED);
    }

    /**
     * Sets the "Expected" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setExpected($value)
    {
        return $this->set(self::REQUEST_EXPECTED, $value);
    }

    /**
     * Retrieves the "AttributeValueList" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getAttributeValueList()
    {
        return $this->get(self::REQUEST_ATTRIBUTE_VALUE_LIST);
    }

    /**
     * Sets the "AttributeValueList" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setAttributeValueList($value)
    {
        return $this->set(self::REQUEST_ATTRIBUTE_VALUE_LIST, $value);
    }

    /**
     * Retrieves the "ComparisonOperator" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getComparisonOperator()
    {
        return $this->get(self::REQUEST_COMPARISON_OPERATOR);
    }

    /**
     * Sets the "ComparisonOperator" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setComparisonOperator($value)
    {
        return $this->set(self::REQUEST_COMPARISON_OPERATOR, $value);
    }

    /**
     * Retrieves the "Exists" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getExists()
    {
        return $this->get(self::REQUEST_EXISTS);
    }

    /**
     * Sets the "Exists" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setExists($value)
    {
        return $this->set(self::REQUEST_EXISTS, $value);
    }

    /**
     * Retrieves the "Value" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getValue()
    {
        return $this->get(self::REQUEST_VALUE);
    }

    /**
     * Sets the "Value" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setValue($value)
    {
        return $this->set(self::REQUEST_VALUE, $value);
    }

    /**
     * Retrieves the "ExpressionAttributeNames" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getExpressionAttributeNames()
    {
        return $this->get(self::REQUEST_EXPRESSION_ATTRIBUTE_NAMES);
    }

    /**
     * Sets the "ExpressionAttributeNames" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setExpressionAttributeNames($value)
    {
        return $this->set(self::REQUEST_EXPRESSION_ATTRIBUTE_NAMES, $value);
    }

    /**
     * Retrieves the "ExpressionAttributeValues" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getExpressionAttributeValues()
    {
        return $this->get(self::REQUEST_EXPRESSION_ATTRIBUTE_VALUES);
    }

    /**
     * Sets the "ExpressionAttributeValues" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setExpressionAttributeValues($value)
    {
        return $this->set(self::REQUEST_EXPRESSION_ATTRIBUTE_VALUES, $value);
    }

    /**
     * Retrieves the "Item" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getItem()
    {
        return $this->get(self::REQUEST_ITEM);
    }

    /**
     * Sets the "Item" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setItem($value)
    {
        return $this->set(self::REQUEST_ITEM, $value);
    }

    /**
     * Retrieves the "ReturnConsumedCapacity" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getReturnConsumedCapacity()
    {
        return $this->get(self::REQUEST_RETURN_CONSUMED_CAPACITY);
    }

    /**
     * Sets the "ReturnConsumedCapacity" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setReturnConsumedCapacity($value)
    {
        return $this->set(self::REQUEST_RETURN_CONSUMED_CAPACITY, $value);
    }

    /**
     * Retrieves the "ReturnItemCollectionMetrics" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getReturnItemCollectionMetrics()
    {
        return $this->get(self::REQUEST_RETURN_ITEM_COLLECTION_METRICS);
    }

    /**
     * Sets the "ReturnItemCollectionMetrics" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setReturnItemCollectionMetrics($value)
    {
        return $this->set(self::REQUEST_RETURN_ITEM_COLLECTION_METRICS, $value);
    }

    /**
     * Retrieves the "ReturnValues" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getReturnValues()
    {
        return $this->get(self::REQUEST_RETURN_VALUES);
    }

    /**
     * Sets the "ReturnValues" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setReturnValues($value)
    {
        return $this->set(self::REQUEST_RETURN_VALUES, $value);
    }

    /**
     * Retrieves the "TableName" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getTableName()
    {
        return $this->get(self::REQUEST_TABLE_NAME);
    }

    /**
     * Sets the "TableName" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setTableName($value)
    {
        return $this->set(self::REQUEST_TABLE_NAME, $value);
    }

    /**
     * Retrieves the "AttributesToGet" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getAttributesToGet()
    {
        return $this->get(self::REQUEST_ATTRIBUTES_TO_GET);
    }

    /**
     * Sets the "AttributesToGet" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setAttributesToGet($value)
    {
        return $this->set(self::REQUEST_ATTRIBUTES_TO_GET, $value);
    }

    /**
     * Retrieves the "ConsistentRead" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getConsistentRead()
    {
        return $this->get(self::REQUEST_CONSISTENT_READ);
    }

    /**
     * Sets the "ConsistentRead" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setConsistentRead($value)
    {
        return $this->set(self::REQUEST_CONSISTENT_READ, $value);
    }

    /**
     * Retrieves the "Key" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
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
     * @return AwsDynamoDbRequest
     */
    public function setKey($value)
    {
        return $this->set(self::REQUEST_KEY, $value);
    }

    /**
     * Retrieves the "ProjectionExpression" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getProjectionExpression()
    {
        return $this->get(self::REQUEST_PROJECTION_EXPRESSION);
    }

    /**
     * Sets the "ProjectionExpression" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setProjectionExpression($value)
    {
        return $this->set(self::REQUEST_PROJECTION_EXPRESSION, $value);
    }

    /**
     * Retrieves the "RequestItems" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getRequestItems()
    {
        return $this->get(self::REQUEST_REQUEST_ITEMS);
    }

    /**
     * Sets the "RequestItems" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setRequestItems($value)
    {
        return $this->set(self::REQUEST_REQUEST_ITEMS, $value);
    }

    /**
     * Retrieves the "DeleteRequest" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getDeleteRequest()
    {
        return $this->get(self::REQUEST_DELETE_REQUEST);
    }

    /**
     * Sets the "DeleteRequest" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setDeleteRequest($value)
    {
        return $this->set(self::REQUEST_DELETE_REQUEST, $value);
    }

    /**
     * Retrieves the "PutRequest" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getPutRequest()
    {
        return $this->get(self::REQUEST_PUT_REQUEST);
    }

    /**
     * Sets the "PutRequest" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setPutRequest($value)
    {
        return $this->set(self::REQUEST_PUT_REQUEST, $value);
    }

    /**
     * Retrieves the "B" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getB()
    {
        return $this->get(self::REQUEST_B);
    }

    /**
     * Sets the "B" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setB($value)
    {
        return $this->set(self::REQUEST_B, $value);
    }

    /**
     * Retrieves the "Bool" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getBool()
    {
        return $this->get(self::REQUEST_BOOL);
    }

    /**
     * Sets the "Bool" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setBool($value)
    {
        return $this->set(self::REQUEST_BOOL, $value);
    }

    /**
     * Retrieves the "Bs" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getBs()
    {
        return $this->get(self::REQUEST_BS);
    }

    /**
     * Sets the "Bs" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setBs($value)
    {
        return $this->set(self::REQUEST_BS, $value);
    }

    /**
     * Retrieves the "L" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getL()
    {
        return $this->get(self::REQUEST_L);
    }

    /**
     * Sets the "L" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setL($value)
    {
        return $this->set(self::REQUEST_L, $value);
    }

    /**
     * Retrieves the "M" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getM()
    {
        return $this->get(self::REQUEST_M);
    }

    /**
     * Sets the "M" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setM($value)
    {
        return $this->set(self::REQUEST_M, $value);
    }

    /**
     * Retrieves the "N" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getN()
    {
        return $this->get(self::REQUEST_N);
    }

    /**
     * Sets the "N" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setN($value)
    {
        return $this->set(self::REQUEST_N, $value);
    }

    /**
     * Retrieves the "Ns" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getNs()
    {
        return $this->get(self::REQUEST_NS);
    }

    /**
     * Sets the "Ns" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setNs($value)
    {
        return $this->set(self::REQUEST_NS, $value);
    }

    /**
     * Retrieves the "Null" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getNull()
    {
        return $this->get(self::REQUEST_NULL);
    }

    /**
     * Sets the "Null" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setNull($value)
    {
        return $this->set(self::REQUEST_NULL, $value);
    }

    /**
     * Retrieves the "S" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getS()
    {
        return $this->get(self::REQUEST_S);
    }

    /**
     * Sets the "S" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setS($value)
    {
        return $this->set(self::REQUEST_S, $value);
    }

    /**
     * Retrieves the "Ss" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getSs()
    {
        return $this->get(self::REQUEST_SS);
    }

    /**
     * Sets the "Ss" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setSs($value)
    {
        return $this->set(self::REQUEST_SS, $value);
    }
}
