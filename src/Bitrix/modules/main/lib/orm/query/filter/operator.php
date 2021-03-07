<?php

namespace Bitrix\Main\ORM\Query\Filter;

/**
 * SQL operators handler.
 * @package    bitrix
 * @subpackage main
 */
class Operator
{
    /**
     * Available operators.
     * @var array
     */
    protected static $operators = array('=' => 'eq', '<>' => 'neq', '!=' => 'neq', '<' => 'lt', '<=' => 'lte', '>' => 'gt', '>=' => 'gte', 'in' => 'in', 'between' => 'between', 'like' => 'like', 'exists' => 'exists', 'match' => 'match');
    /**
     * List of available operators `code => method`.
     *
     * @return array
     */
    public static function get()
    {
    }
    public static function eq($columnSql, $valueSql)
    {
    }
    public static function neq($columnSql, $valueSql)
    {
    }
    public static function lt($columnSql, $valueSql)
    {
    }
    public static function lte($columnSql, $valueSql)
    {
    }
    public static function gt($columnSql, $valueSql)
    {
    }
    public static function gte($columnSql, $valueSql)
    {
    }
    public static function in($columnSql, $valueSql)
    {
    }
    public static function between($columnSql, $valueSql)
    {
    }
    public static function like($columnSql, $valueSql)
    {
    }
    public static function exists(
        /** @noinspection PhpUnusedParameterInspection */
        $columnSql,
        $valueSql
    )
    {
    }
    public static function match($columnSql, $valueSql)
    {
    }
}