<?php

class CAllFavorites extends \CDBResult
{
    public static function err_mess()
    {
    }
    public static function GetIDByUrl($url)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function CheckFields($arFields)
    {
    }
    public static function IsExistDuplicate($arFields)
    {
    }
    //Addition
    public static function Add($arFields, $checkDuplicate = \false)
    {
    }
    //Update
    public static function Update($ID, $arFields)
    {
    }
    // delete by ID
    public static function Delete($ID)
    {
    }
    //*****************************
    // Events
    //*****************************
    //user deletion event
    public static function OnUserDelete($user_id)
    {
    }
    //interface language delete event
    public static function OnLanguageDelete($language_id)
    {
    }
}
class CBXFavAdmMenu
{
    private $arItems = array();
    public function __construct()
    {
    }
    private function Init()
    {
    }
    public function GetMenuItem($itemsID, $arMenu)
    {
    }
    public function GenerateItems()
    {
    }
    private function CheckSubItemActivity($arMenu)
    {
    }
    private function CheckItemActivity($arMenu)
    {
    }
    private function CheckFilterActivity($currentUrl, $menuUrl, $activeSectUrl)
    {
    }
    public function GenerateMenuHTML($id = 0)
    {
    }
    public static function GetEmptyMenuHTML()
    {
    }
    public static function GetMenuHintHTML($IsMenuEmpty)
    {
    }
}
class CBXFavUrls
{
    const FILTER_ID_VALUE = "adm_filter_applied";
    const PRESET_ID_VALUE = "adm_filter_preset";
    public static function Compare($url1, $url2, $arReqVals = array(), $arSkipVals = array())
    {
    }
    public static function ParseDetail($url)
    {
    }
    public static function GetFilterId($url)
    {
    }
    public static function GetPresetId($url)
    {
    }
}