<?php

class CAccess
{
    const CACHE_DIR = "access_check";
    protected static $arAuthProviders = [];
    protected static $arChecked = [];
    protected $arParams = \false;
    public function __construct($arParams = \false)
    {
    }
    protected static function NeedToRecalculate($provider, $USER_ID)
    {
    }
    public function UpdateCodes($arParams = \false)
    {
    }
    public static function RecalculateForUser($userId, $provider)
    {
    }
    public static function RecalculateForProvider($provider)
    {
    }
    protected static function GetCheckCacheId($provider, $userId)
    {
    }
    protected static function GetCodesCacheId($userId)
    {
    }
    protected static function DeleteCodes($providerId, $userId)
    {
    }
    protected static function UpdateStat($provider, $userId)
    {
    }
    public static function GetUserCodes($USER_ID, $arFilter = array())
    {
    }
    public static function GetUserCodesArray($USER_ID, $arFilter = array())
    {
    }
    public function GetFormHtml($arParams = \false)
    {
    }
    public function AjaxRequest($arParams)
    {
    }
    public function GetNames($arCodes, $bSort = \false)
    {
    }
    public static function CmpNames($a, $b)
    {
    }
    public function GetProviderNames()
    {
    }
    public static function GetProviders()
    {
    }
    public static function OnUserDelete($USER_ID)
    {
    }
    public static function SaveLastRecentlyUsed($arLRU)
    {
    }
    public static function GetLastRecentlyUsed($provider)
    {
    }
}