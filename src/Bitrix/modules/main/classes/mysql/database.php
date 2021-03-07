<?php

/********************************************************************
*	MySQL database classes
********************************************************************/
abstract class CDatabaseMysql extends \CAllDatabase
{
    var $version;
    public $escL = '`', $escR = '`';
    public $alias_length = 256;
    function GetVersion()
    {
    }
    function StartTransaction()
    {
    }
    function Commit()
    {
    }
    function Rollback()
    {
    }
    //Connect to database
    function Connect($DBHost, $DBName, $DBLogin, $DBPassword, $connectionName = "")
    {
    }
    protected abstract function QueryInternal($sql);
    protected abstract function GetError();
    function Query($strSql, $bIgnoreErrors = \false, $error_position = "", $arOptions = array())
    {
    }
    protected abstract function DisconnectInternal($resource);
    //Closes database connection
    function Disconnect()
    {
    }
    public static function CurrentTimeFunction()
    {
    }
    public static function CurrentDateFunction()
    {
    }
    function DateFormatToDB($format, $field = \false)
    {
    }
    function DateToCharFunction($strFieldName, $strType = "FULL", $lang = \false, $bSearchInSitesOnly = \false)
    {
    }
    function CharToDateFunction($strValue, $strType = "FULL", $lang = \false)
    {
    }
    function DatetimeToTimestampFunction($fieldName)
    {
    }
    function DatetimeToDateFunction($strValue)
    {
    }
    //  1 if date1 > date2
    //  0 if date1 = date2
    // -1 if date1 < date2
    function CompareDates($date1, $date2)
    {
    }
    abstract function LastID();
    function PrepareFields($strTableName, $strPrefix = "str_", $strSuffix = "")
    {
    }
    function PrepareInsert($strTableName, $arFields, $strFileDir = "", $lang = \false)
    {
    }
    function PrepareUpdate($strTableName, $arFields, $strFileDir = "", $lang = \false, $strTableAlias = "")
    {
    }
    function PrepareUpdateBind($strTableName, $arFields, $strFileDir, $lang, &$arBinds, $strTableAlias = "")
    {
    }
    function Insert($table, $arFields, $error_position = "", $DEBUG = \false, $EXIST_ID = "", $ignore_errors = \false)
    {
    }
    function Update($table, $arFields, $WHERE = "", $error_position = "", $DEBUG = \false, $ignore_errors = \false, $additional_check = \true)
    {
    }
    public function Add($tablename, $arFields, $arCLOBFields = array(), $strFileDir = "", $ignore_errors = \false, $error_position = "", $arOptions = array())
    {
    }
    function TopSql($strSql, $nTopCount)
    {
    }
    abstract function ForSqlLike($strValue, $iMaxLength = 0);
    function InitTableVarsForEdit($tablename, $strIdentFrom = "str_", $strIdentTo = "str_", $strSuffixFrom = "", $bAlways = \false)
    {
    }
    function GetTableFieldsList($table)
    {
    }
    abstract function GetTableFields($table);
    function LockTables($str)
    {
    }
    function UnLockTables()
    {
    }
    function Concat()
    {
    }
    function IsNull($expression, $result)
    {
    }
    function Length($field)
    {
    }
    function ToChar($expr, $len = 0)
    {
    }
    function TableExists($tableName)
    {
    }
    public function GetIndexName($tableName, $arColumns, $bStrict = \false)
    {
    }
    function Instr($str, $toFind)
    {
    }
    protected abstract function getThreadId();
}
abstract class CDBResultMysql extends \CAllDBResult
{
    public function __construct($res = \null)
    {
    }
    /** @deprecated */
    public function CDBResultMysql($res = \null)
    {
    }
    /**
     * Returns next row of the select result in form of associated array
     *
     * @return array
     */
    function Fetch()
    {
    }
    protected abstract function FetchRow();
    protected function FetchInternal()
    {
    }
    function NavQuery($strSql, $cnt, $arNavStartParams, $bIgnoreErrors = \false)
    {
    }
}