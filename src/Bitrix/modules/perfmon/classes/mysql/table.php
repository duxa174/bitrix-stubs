<?php

class CPerfomanceTableList extends \CDBResult
{
    public static function GetList($bFull = \true)
    {
    }
    function Fetch()
    {
    }
}
class CPerfomanceTable extends \CAllPerfomanceTable
{
    function Init($TABLE_NAME)
    {
    }
    function IsExists($TABLE_NAME = \false)
    {
    }
    function GetIndexes($TABLE_NAME = \false)
    {
    }
    function GetUniqueIndexes($TABLE_NAME = \false)
    {
    }
    function GetTableFields($TABLE_NAME = \false, $bExtended = \false)
    {
    }
    public static function escapeColumn($column)
    {
    }
    public static function escapeTable($tableName)
    {
    }
    function getCreateIndexDDL($TABLE_NAME, $INDEX_NAME, $INDEX_COLUMNS)
    {
    }
}