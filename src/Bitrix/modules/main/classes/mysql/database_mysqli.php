<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */
/********************************************************************
*	MySQLi database classes
********************************************************************/
class CDatabase extends \CDatabaseMysql
{
    /** @var mysqli */
    var $db_Conn;
    function ConnectInternal()
    {
    }
    protected function QueryInternal($strSql)
    {
    }
    protected function GetError()
    {
    }
    protected function DisconnectInternal($resource)
    {
    }
    function LastID()
    {
    }
    function ForSql($strValue, $iMaxLength = 0)
    {
    }
    function ForSqlLike($strValue, $iMaxLength = 0)
    {
    }
    function GetTableFields($table)
    {
    }
    protected function getThreadId()
    {
    }
}
class CDBResult extends \CDBResultMysql
{
    public function __construct($res = \null)
    {
    }
    /** @deprecated */
    public function CDBResult($res = \null)
    {
    }
    protected function FetchRow()
    {
    }
    function SelectedRowsCount()
    {
    }
    function AffectedRowsCount()
    {
    }
    function FieldsCount()
    {
    }
    function FieldName($iCol)
    {
    }
    function DBNavStart()
    {
    }
}