<?php

class CPerfQueryStat
{
    public static function IsBanned($table, $columns)
    {
    }
    public static function Ban($table, $columns)
    {
    }
    public static function GetTableColumns($table)
    {
    }
    /**
     * @param string $table
     * @param array $columns
     * @param CPerfQuery $q
     * @return boolean
     */
    public static function GatherExpressStat($table, $columns, $q)
    {
    }
    public static function GatherColumnStatByValue($table, $column, $value)
    {
    }
    public static function GatherColumnStatOverall($table, $column)
    {
    }
    public static function GatherTableStat($table)
    {
    }
    protected static function _gather_stat($table, $column, $value, $max_size = -1)
    {
    }
    protected static function _get_stat($table, $column = "", $value = "")
    {
    }
    public static function IsSelective($table, $columns)
    {
    }
}