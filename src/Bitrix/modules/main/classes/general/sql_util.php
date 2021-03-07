<?php

/*
 * SQL Helper
 */
class CSqlUtil
{
    public static function GetCount($tableName, $tableAlias, &$arFields, &$arFilter)
    {
    }
    public static function GetFilterOperation($key)
    {
    }
    private static function AddToSelect(&$fieldKey, &$arField, &$arOrder, &$strSqlSelect)
    {
    }
    private static function AddToFrom(&$arField, &$arJoined, &$strSqlFrom)
    {
    }
    private static function PrepareDefaultFields(&$arFields, &$arOrder, &$arJoined, &$strSqlSelect, &$strSqlFrom)
    {
    }
    public static function PrepareSql(&$arFields, $arOrder, $arFilter, $arGroupBy, $arSelectFields, $arOptions = array())
    {
    }
    public static function PrepareWhere(&$arFields, &$arFilter, &$arJoins)
    {
    }
    private static function AddBrackets($str)
    {
    }
    public static function GetRowCount(&$arSql, $tableName, $tableAlias = '', $dbType = '')
    {
    }
    public static function PrepareSelectTop(&$sql, $top, $dbType)
    {
    }
    private static function ForLike($str)
    {
    }
}