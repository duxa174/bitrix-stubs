<?php

class CSecurityDB
{
    /** @var string Connection name used for SQL queries */
    const CONNECTION_NAME = 'user_session';
    /** @var \Bitrix\Main\Db\Connection  */
    protected static $connection = \null;
    public static function Init($bDoConnect = \false)
    {
    }
    public static function Disconnect()
    {
    }
    public static function CurrentTimeFunction()
    {
    }
    public static function SecondsAgo($sec)
    {
    }
    public static function Query($strSql, $error_position)
    {
    }
    public static function QueryBind($strSql, $arBinds, $error_position)
    {
    }
    /**
     * @param \Bitrix\Main\Db\Result $result
     * @return bool
     */
    public static function Fetch($result)
    {
    }
    public static function Lock($id, $timeout = 60)
    {
    }
    public static function LockTable($table_name, $lock_id)
    {
    }
    public static function UnlockTable($table_lock)
    {
    }
}