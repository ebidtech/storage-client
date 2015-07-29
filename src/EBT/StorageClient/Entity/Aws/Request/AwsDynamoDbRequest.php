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
     * Retrieves the "ExpressionAttributeValue" variable.
     *
     * @return AwsDynamoDbRequest|mixed|null
     */
    public function getExpressionAttributeValue()
    {
        return $this->get(self::REQUEST_EXPRESSION_ATTRIBUTE_VALUES);
    }

    /**
     * Sets the "ExpressionAttributeValue" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return AwsDynamoDbRequest
     */
    public function setExpressionAttributeValue($value)
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
}
