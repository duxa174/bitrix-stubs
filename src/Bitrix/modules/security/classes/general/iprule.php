<?php

class CSecurityIPRule
{
    static $bActive = \null;
    public $LAST_ERROR = "";
    function Add($arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    function Update($ID, $arFields)
    {
    }
    public static function UpdateRuleMasks($IPRULE_ID, $arInclMasks = \false, $arExclMasks = \false)
    {
    }
    function UpdateRuleIPs($IPRULE_ID, $arInclIPs = \false, $arExclIPs = \false)
    {
    }
    protected static function ip2number($ip)
    {
    }
    function CheckIP($arInclIPs = \false, $arExclIPs = \false)
    {
    }
    function CheckFields(&$arFields, $ID)
    {
    }
    public static function GetRuleInclMasks($IPRULE_ID)
    {
    }
    function DeleteRuleExclFiles($files)
    {
    }
    function AddRuleExclFiles($files)
    {
    }
    function GetRuleExclFiles($files)
    {
    }
    public static function GetRuleExclMasks($IPRULE_ID)
    {
    }
    public static function GetRuleInclIPs($IPRULE_ID)
    {
    }
    public static function GetRuleExclIPs($IPRULE_ID)
    {
    }
    public static function GetList($arSelect, $arFilter, $arOrder)
    {
    }
    public static function GetActiveCount()
    {
    }
    public static function IsActive()
    {
    }
    public static function SetActive($bActive = \false, $end_time = 0)
    {
    }
    public static function CheckAntiFile($return_message = \false)
    {
    }
    public static function OnPageStart($use_query = \false)
    {
    }
    protected static function isValidUri($uri)
    {
    }
    function CleanUpAgent()
    {
    }
}