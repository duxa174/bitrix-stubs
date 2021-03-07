<?php

class CAllSocNetGroup
{
    protected static $staticCache = array();
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function DeleteNoDemand($userID)
    {
    }
    public static function SetStat($ID)
    {
    }
    public static function SetLastActivity($ID, $date = \false)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function getById($ID, $bCheckPermissions = \false)
    {
    }
    protected static function getStaticCache()
    {
    }
    protected static function setStaticCache($cache = array())
    {
    }
    /***************************************/
    /**********  COMMON METHODS  ***********/
    /***************************************/
    public static function CanUserInitiate($userID, $groupID)
    {
    }
    public static function CanUserViewGroup($userID, $groupID)
    {
    }
    public static function CanUserReadGroup($userID, $groupID)
    {
    }
    /***************************************/
    /************  ACTIONS  ****************/
    /***************************************/
    public static function createGroup($ownerID, $arFields, $bAutoSubscribe = \true)
    {
    }
    /***************************************/
    /*************  UTILITIES  *************/
    /***************************************/
    public static function __ValidateID($ID)
    {
    }
    public static function GetFilterOperation($key)
    {
    }
    public static function PrepareSql(&$arFields, $arOrder, $arFilter, $arGroupBy, $arSelectFields, $arUF = array())
    {
    }
    /***************************************/
    /*************    *************/
    /***************************************/
    public static function GetSite($group_id)
    {
    }
    public static function GetDefaultSiteId($groupId, $siteId = \false)
    {
    }
    public static function OnBeforeLangDelete($lang)
    {
    }
    public static function SearchIndex($groupId, $arSiteID = array(), $arGroupOld = array(), $bAutoSubscribe = \true)
    {
    }
    public static function ConfirmAllRequests($groupId, $bAutoSubscribe = \true)
    {
    }
}