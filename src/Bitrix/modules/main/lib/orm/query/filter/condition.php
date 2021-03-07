<?php

namespace Bitrix\Main\ORM\Query\Filter;

/**
 * Single condition handler.
 *
 * @package    bitrix
 * @subpackage main
 */
class Condition
{
    /** @var string|Field|null */
    protected $column;
    /** @var string */
    protected $operator;
    /** @var mixed */
    protected $value;
    /**
     * QueryFilterCondition constructor.
     *
     * @param string|Field|null $column
     * @param string $operator
     * @param mixed  $value
     */
    public function __construct($column, $operator, $value)
    {
    }
    /**
     * @return string|Field
     */
    public function getColumn()
    {
    }
    /**
     * @param string|Field|null $column
     */
    public function setColumn($column)
    {
    }
    /**
     * @return string
     */
    public function getOperator()
    {
    }
    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
    }
    /**
     * @return mixed|ColumnExpression
     */
    public function getValue()
    {
    }
    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
    }
    /**
     * Returns value as a set of atomic (composite) values.
     *
     * In classic condition there is only one value v1.
     * In whereIn there is an array [v1, v2, v3, ...].
     * In whereBetween there are two values v1, v2.
     * etc.
     *
     * This method returns array of all the values regardless the operator.
     *
     * @return array
     */
    public function getAtomicValues()
    {
    }
    /**
     * Checks for multi-values (array for IN etc.)
     *
     * @return bool
     */
    public function hasMultiValues()
    {
    }
    /**
     * @return string|Field|null
     */
    public function getDefinition()
    {
    }
    /**
     * @param string|Field|null $definition
     */
    public function setDefinition($definition)
    {
    }
    public function __clone()
    {
    }
}