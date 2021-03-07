<?php

class CPerfQueryJoin
{
    var $left_table = "";
    var $left_column = "";
    var $left_const = "";
    var $right_table = "";
    var $right_column = "";
    var $right_const = "";
    function _parse($sql, &$table, &$column, &$const)
    {
    }
    function parse_left($sql)
    {
    }
    function parse_right($sql)
    {
    }
}
class CPerfQueryWhere
{
    var $table_aliases_regex = "";
    var $equation_regex = "";
    var $sql = "";
    var $simplified_sql = "";
    var $joins = array();
    function __construct($table_aliases_regex)
    {
    }
    function parse($sql)
    {
    }
    //Remove balanced braces around equals
    function _remove_braces($sql)
    {
    }
    function _or2in($or_match)
    {
    }
}
class CPerfQueryTable
{
    var $sql = "";
    var $name = "";
    var $alias = "";
    var $join = "";
    function parse($sql)
    {
    }
}
class CPerfQueryFrom
{
    var $sql = "";
    /** @var array[]CPerfQueryTable */
    var $tables = array();
    var $joins = array();
    function parse($sql)
    {
    }
    function getTableAliases()
    {
    }
}
class CPerfQuery
{
    var $sql = "";
    var $type = "unknown";
    var $subqueries = array();
    /** @var CPerfQueryFrom */
    var $from = \null;
    /** @var CPerfQueryWhere */
    var $where = \null;
    public static function transform2select($sql)
    {
    }
    public static function removeSpaces($str)
    {
    }
    function parse($sql)
    {
    }
    function parse_subqueries()
    {
    }
    function cmp($table, $alias)
    {
    }
    function table_joins($table_alias)
    {
    }
    function suggest_index($table_alias)
    {
    }
    function array_power_set($array)
    {
    }
    function _adjust_columns($arColumns)
    {
    }
    function has_where($table_alias = \false)
    {
    }
    function find_value($table_name, $column_name)
    {
    }
    function find_join($table_name, $column_name)
    {
    }
    public static function remove_literals($sql)
    {
    }
}