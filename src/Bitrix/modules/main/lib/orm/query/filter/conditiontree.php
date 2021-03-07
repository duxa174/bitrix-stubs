<?php

namespace Bitrix\Main\ORM\Query\Filter;

/**
 * Handles filtering conditions for Query and join conditions for Entity References.
 * @package bitrix
 * @subpackage main
 */
class ConditionTree
{
    /** @var Chain[] */
    protected $chains;
    /** @var Condition[]|ConditionTree[] */
    protected $conditions = array();
    /**
     * @var string and|or
     * @see ConditionTree::logic()
     */
    protected $logic;
    const LOGIC_OR = 'or';
    const LOGIC_AND = 'and';
    /**
     * Whether to set NOT before all the conditions.
     * @var bool
     */
    protected $isNegative = false;
    /**
     * ConditionTree constructor.
     */
    public function __construct()
    {
    }
    /**
     * All conditions will be imploded by this logic: static::LOGIC_AND or static::LOGIC_OR
     *
     * @param string $logic and|or
     *
     * @return $this|string
     * @throws ArgumentException
     */
    public function logic($logic = null)
    {
    }
    /**
     * Sets NOT before all the conditions.
     *
     * @param bool $negative
     *
     * @return $this
     */
    public function negative($negative = true)
    {
    }
    /**
     * General condition. In regular case used with 3 parameters:
     *   where(columnName, operator, value), e.g. ('ID', '=', 1); ('SALARY', '>', '500')
     *
     * List of available operators can be found in Operator class.
     * @see Operator::$operators
     *
     * Can be used in short format:
     *   where(columnName, value), with operator '=' by default
     * Can be used in ultra short format:
     *   where(columnName), for boolean fields only
     *
     * Can be used for subfilter set:
     *   where(ConditionTree subfilter)
     *
     * Instead of columnName, you can use runtime field:
     *   where(new ExpressionField('TMP', 'CONCAT(%s, %s)', ["NAME", "LAST_NAME"]), 'Anton Ivanov')
     *     or with expr helper
     *   where(Query::expr()->concat("NAME", "LAST_NAME"), 'Anton Ivanov')
     *
     * @param array ...$filter
     *
     * @return $this
     * @throws ArgumentException
     */
    public function where()
    {
    }
    /**
     * Sets NOT before any conditions or subfilter.
     * @see ConditionTree::where()
     *
     * @param array ...$filter
     *
     * @return $this
     */
    public function whereNot()
    {
    }
    /**
     * The same logic as where(), but value will be taken as another column name.
     * @see ConditionTree::where()
     *
     * @param array ...$filter
     *
     * @return $this
     * @throws ArgumentException
     */
    public function whereColumn()
    {
    }
    /**
     * Compares column with NULL.
     *
     * @param string $column
     *
     * @return $this
     */
    public function whereNull($column)
    {
    }
    /**
     * Compares column with NOT NULL.
     *
     * @param string $column
     *
     * @return $this
     */
    public function whereNotNull($column)
    {
    }
    /**
     * IN() condition.
     *
     * @param string                    $column
     * @param array|Query|SqlExpression $values
     *
     * @return $this
     */
    public function whereIn($column, $values)
    {
    }
    /**
     * Negative IN() condition.
     * @see ConditionTree::whereIn()
     *
     * @param string                    $column
     * @param array|Query|SqlExpression $values
     *
     * @return $this
     */
    public function whereNotIn($column, $values)
    {
    }
    /**
     * BETWEEN condition.
     *
     * @param $column
     * @param $valueMin
     * @param $valueMax
     *
     * @return $this
     */
    public function whereBetween($column, $valueMin, $valueMax)
    {
    }
    /**
     * Negative BETWEEN condition.
     * @see ConditionTree::whereBetween()
     *
     * @param $column
     * @param $valueMin
     * @param $valueMax
     *
     * @return $this
     */
    public function whereNotBetween($column, $valueMin, $valueMax)
    {
    }
    /**
     * LIKE condition, without default % placement.
     *
     * @param $column
     * @param $value
     *
     * @return $this
     */
    public function whereLike($column, $value)
    {
    }
    /**
     * Negative LIKE condition, without default % placement.
     * @see ConditionTree::whereLike()
     *
     * @param $column
     * @param $value
     *
     * @return $this
     */
    public function whereNotLike($column, $value)
    {
    }
    /**
     * Exists() condition. Can be used with Query object or plain sql wrapped with SqlExpression.
     *
     * @param Query|SqlExpression $query
     *
     * @return $this
     */
    public function whereExists($query)
    {
    }
    /**
     * Negative Exists() condition. Can be used with Query object or plain sql wrapped with SqlExpression.
     * @see ConditionTree::whereExists()
     *
     * @param Query|SqlExpression $query
     *
     * @return $this
     * @throws ArgumentException
     */
    public function whereNotExists($query)
    {
    }
    /**
     * Fulltext search condition.
     * @see Helper::matchAgainstWildcard() for preparing $value for AGAINST.
     *
     * @param $column
     * @param $value
     *
     * @return $this
     */
    public function whereMatch($column, $value)
    {
    }
    /**
     * Negative fulltext search condition.
     * @see Helper::matchAgainstWildcard() for preparing $value for AGAINST.
     *
     * @param $column
     * @param $value
     *
     * @return $this
     */
    public function whereNotMatch($column, $value)
    {
    }
    /**
     * Returns SQL for all conditions and subfilters.
     *
     * @param Chain[] $chains
     *
     * @return string
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getSql($chains)
    {
    }
    /**
     * Returns all conditions and subfilters.
     *
     * @return ConditionTree[]|Condition[]
     */
    public function getConditions()
    {
    }
    /**
     * Adds prepared condition.
     *
     * @param Condition|ConditionTree $condition
     *
     * @return $this
     * @throws ArgumentException
     */
    public function addCondition($condition)
    {
    }
    /**
     * Checks if filter is not empty.
     *
     * @return bool
     */
    public function hasConditions()
    {
    }
    /**
     * Replaces condition with a new one.
     *
     * @param $currentCondition
     * @param $newCondition
     *
     * @return bool
     */
    public function replaceCondition($currentCondition, $newCondition)
    {
    }
    /**
     * Removes one condition
     *
     * @param $condition
     *
     * @return bool
     */
    public function removeCondition($condition)
    {
    }
    /**
     * Removes all conditions
     */
    public function removeAllConditions()
    {
    }
    /**
     * Converts any value to raw SQL, except of NULL, which is supposed to be handled in Operator.
     *
     * @param mixed     $value
     * @param IReadable $field
     *
     * @return mixed|null|string
     * @throws ArgumentException
     * @throws SystemException
     */
    protected function convertValue($value, \Bitrix\Main\ORM\Fields\IReadable $field = null)
    {
    }
    /**
     * Converts array of values to raw SQL.
     * @see ConditionTree::convertValue()
     *
     * @param array                                  $values
     * @param \Bitrix\Main\ORM\Fields\IReadable|null $field
     *
     * @return array
     * @throws ArgumentException
     * @throws SystemException
     */
    protected function convertValues($values, \Bitrix\Main\ORM\Fields\IReadable $field = null)
    {
    }
    public function __clone()
    {
    }
    /**
     * Creates filter object from array
     *
     * @param $filter
     *
     * @return ConditionTree
     * @throws ArgumentException
     */
    public static function createFromArray($filter)
    {
    }
}