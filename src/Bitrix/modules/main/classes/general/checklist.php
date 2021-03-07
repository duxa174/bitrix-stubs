<?php

class CCheckList
{
    function __construct($ID = \false)
    {
    }
    function GetSections()
    {
    }
    //getting sections statistic
    function GetSectionStat($ID = \false)
    {
    }
    function GetPoints($arSectionCode = \false)
    {
    }
    function GetStructure()
    {
    }
    function PointUpdate($arTestID, $arPointFields = array())
    {
    }
    function GetDescription($ID)
    {
    }
    function Save()
    {
    }
    function GetCurrentState()
    {
    }
    function AutoCheck($arTestID, $arParams = array())
    {
    }
    function AddReport($arReportFields = array(), $errorCheck = \false)
    {
    }
    function GetReportInfo()
    {
    }
}
class CCheckListResult
{
    public static function Save($arFields = array())
    {
    }
    public static function GetList($arOrder = array(), $arFilter = array())
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
}
class CAutoCheck
{
    public static function CheckCustomComponents($arParams)
    {
    }
    public static function CheckBackup()
    {
    }
    public static function CheckTemplates()
    {
    }
    public static function CheckKernel($arParams)
    {
    }
    public static function CheckSecurity($arParams)
    {
    }
    public static function CheckErrorReport()
    {
    }
    public static function IsCacheOn()
    {
    }
    public static function CheckDBPassword()
    {
    }
    public static function CheckPerfomance($arParams)
    {
    }
    public static function CheckQueryString($arParams = array())
    {
    }
    public static function KeyCheck()
    {
    }
    public static function CheckVMBitrix()
    {
    }
    public static function CheckSiteCheckerStatus()
    {
    }
    public static function CheckSecurityScannerStatus()
    {
    }
}
class CCheckListTools
{
    public static function __scandir($pwd, &$arFiles, $arExept = \false)
    {
    }
    public static function AdminPolicyLevel()
    {
    }
}