<?php

class CEventLog
{
    const SEVERITY_SECURITY = 1;
    const SEVERITY_ERROR = 2;
    const SEVERITY_WARNING = 3;
    const SEVERITY_INFO = 4;
    const SEVERITY_DEBUG = 5;
    public static function Log($SEVERITY, $AUDIT_TYPE_ID, $MODULE_ID, $ITEM_ID, $DESCRIPTION = \false, $SITE_ID = \false)
    {
    }
    public static function Add($arFields)
    {
    }
    //Agent
    public static function CleanUpAgent()
    {
    }
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arNavParams = \false)
    {
    }
    public static function GetEventTypes()
    {
    }
}
class CEventMain
{
    public static function MakeMainObject()
    {
    }
    public static function GetFilter()
    {
    }
    public static function GetAuditTypes()
    {
    }
    public static function GetEventInfo($row, $arParams)
    {
    }
    public static function GetFilterSQL($var)
    {
    }
}