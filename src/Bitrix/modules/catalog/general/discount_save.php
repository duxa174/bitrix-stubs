<?php

class CAllCatalogDiscountSave
{
    const ENTITY_ID = 1;
    const TYPE_PERCENT = 'P';
    const TYPE_FIX = 'F';
    const COUNT_TIME_ALL = 'U';
    const COUNT_TIME_INTERVAL = 'D';
    const COUNT_TIME_PERIOD = 'P';
    const ACTION_TIME_ALL = 'U';
    const ACTION_TIME_INTERVAL = 'D';
    const ACTION_TIME_PERIOD = 'P';
    const APPLY_MODE_REPLACE = 'R';
    const APPLY_MODE_ADD = 'A';
    const APPLY_MODE_DISABLE = 'D';
    protected static $intDisable = 0;
    protected static $intDiscountUserID = 0;
    protected static $userGroups = array();
    protected static $discountFilterCache = array();
    protected static $discountResultCache = array();
    public static function Enable()
    {
    }
    public static function Disable()
    {
    }
    public static function IsEnabled()
    {
    }
    public static function SetDiscountUserID($intUserID)
    {
    }
    public static function ClearDiscountUserID()
    {
    }
    public static function GetDiscountUserID()
    {
    }
    public static function GetDiscountSaveTypes($boolFull = \false)
    {
    }
    public static function GetApplyModeList($extendedMode = \false)
    {
    }
    public static function CheckFields($strAction, &$arFields, $intID = 0)
    {
    }
    public static function GetByID($intID)
    {
    }
    public static function GetArrayByID($intID)
    {
    }
    public static function Delete($intID)
    {
    }
    /*
    * @deprecated deprecated since catalog 14.5.3
    */
    protected static function __ClearGroupsCache($intID = 0)
    {
    }
    /*
    * @deprecated deprecated since catalog 14.5.3
    */
    protected static function __AddGroupsCache($intID, $arGroups = array())
    {
    }
    /*
    * @deprecated deprecated since catalog 14.5.3
    */
    protected static function __UpdateGroupsCache($intID, $arGroups = array())
    {
    }
    public static function ChangeActive($intID, $boolActive = \true)
    {
    }
    public static function UserDiscountCalc($intID, $arFields = array(), $boolNew = \false)
    {
    }
    /*
    * @deprecated deprecated since catalog 14.5.3
    */
    protected static function __GetDiscountGroups($arUserGroups)
    {
    }
    public static function GetDiscount($arParams = array(), $getAll = \false)
    {
    }
    public static function GetPeriodTypeList($boolFull = \true)
    {
    }
    protected static function __SaleOrderSumm($arOrderFilter, $strCurrency)
    {
    }
    protected static function __GetTimeStampArray($intSize, $strType, $boolDir = \false)
    {
    }
    protected static function clearFields($value)
    {
    }
}