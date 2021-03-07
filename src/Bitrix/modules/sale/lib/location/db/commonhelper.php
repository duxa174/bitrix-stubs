<?php

namespace Bitrix\Sale\Location\DB;

abstract class CommonHelper
{
    public static function getSqlForDataType($type, $len = 0)
    {
    }
    public static function getBatchInsertHead($tableName, $fields = array())
    {
    }
    public static function getBatchInsertTail()
    {
    }
    public static function getBatchInsertSeparator()
    {
    }
    public static function getBatchInsertValues($row, $tableName, $fields, $map)
    {
    }
    public static function getMaxTransferUnit()
    {
    }
    protected static function prepareSql($row, $fields, $map)
    {
    }
    // makes sense only for mssql
    public static function dropAutoIncrementRestrictions($tableName)
    {
    }
    // same
    public static function restoreAutoIncrementRestrictions($tableName)
    {
    }
    // makes sense only for oracle
    public static function incrementSequenceForTable($tableName)
    {
    }
    // makes sense only for oracle
    protected static function checkSequenceExistsForTable($tableName)
    {
    }
    /*
    public static function addPrimaryKey($tableName, $columns = array())
    {
    	if(!strlen($tableName) || !is_array($columns) || empty($columns))
    		return false;
    
    	$dbConnection = Main\HttpApplication::getConnection();
    	$dbHelper = $dbConnection->getSqlHelper();
    
    	$tableName = $dbHelper->forSql($tableName);
    	$columns = static::escapeArray($columns);
    
    	$dbConnection->query("ALTER TABLE ".$tableName." ADD CONSTRAINT PK_".ToUpper($tableName)." PRIMARY KEY (".implode(', ', $columns).")");
    
    	return true;
    }
    */
    // do nothing but for oracle
    public static function addAutoIncrement()
    {
    }
    public static function createIndex($tableName, $ixNamePostfix, $columns = array(), $unique = false)
    {
    }
    protected static function getIndexName($tableName, $ixNamePostfix, $columns = array())
    {
    }
    protected static function escapeArray($columns)
    {
    }
    public static function dropTable($tableName)
    {
    }
    public static function checkTableExists($tableName)
    {
    }
    public static function truncateTable($tableName)
    {
    }
    public static function getQuerySeparatorSql()
    {
    }
    public static function needSelectFieldsInOrderByWhenDistinct()
    {
    }
}