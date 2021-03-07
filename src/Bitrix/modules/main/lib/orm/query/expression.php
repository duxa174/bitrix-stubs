<?php

namespace Bitrix\Main\ORM\Query;

/**
 * Short calls for runtime fields.
 * @see ConditionTree::where()
 *
 * @package    bitrix
 * @subpackage main
 */
class Expression
{
    /**
     * Expression with COUNT(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function count($columnName)
    {
    }
    /**
     * Expression with COUNT(DISTINCT ...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function countDistinct($columnName)
    {
    }
    /**
     * Expression with SUM(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function sum($columnName)
    {
    }
    /**
     * Expression with MIN(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function min($columnName)
    {
    }
    /**
     * Expression with AVG(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function avg($columnName)
    {
    }
    /**
     * Expression with MAX(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function max($columnName)
    {
    }
    /**
     * Expression with LENGTH(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function length($columnName)
    {
    }
    /**
     * Expression with LOWER(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function lower($columnName)
    {
    }
    /**
     * Expression with UPPER(...) function.
     *
     * @param $columnName
     *
     * @return ExpressionField
     */
    public function upper($columnName)
    {
    }
    /**
     * Expression with CONCAT(...) function.
     *
     * @param array $columns
     *
     * @return ExpressionField
     */
    public function concat()
    {
    }
    /**
     * Random name for Expression. Real alias is expected in Query when set the Expression.
     *
     * @param $postfix
     *
     * @return string
     */
    protected static function getTmpName($postfix)
    {
    }
}