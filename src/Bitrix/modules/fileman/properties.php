<?php

abstract class CIBlockPropertyMapInterface
{
    public static abstract function GetUserTypeDescription();
    public static abstract function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName);
    public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static abstract function GetPublicViewHTML($arProperty, $value, $strHTMLControlName);
    public static function ConvertFromDB($arProperty, $value)
    {
    }
    public static function ConvertToDB($arProperty, $value)
    {
    }
    public static function _GetMapKey($map_type, &$strDomain)
    {
    }
}
class CIBlockPropertyMapGoogle extends \CIBlockPropertyMapInterface
{
    public static function GetUserTypeDescription()
    {
    }
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
    }
    public static function PrepareSettings($arProperty)
    {
    }
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPublicViewHTML($arProperty, $value, $arParams)
    {
    }
    public static function GetUIEntityEditorProperty($settings, $value)
    {
    }
    public static function GetUIEntityEditorPropertyEditHtml(array $params = []) : string
    {
    }
    public static function GetUIEntityEditorPropertyViewHtml(array $params = []) : string
    {
    }
}
class CIBlockPropertyMapYandex extends \CIBlockPropertyMapInterface
{
    public static function GetUserTypeDescription()
    {
    }
    public static function _DrawKeyInputControl($MAP_ID, $strDomain)
    {
    }
    // _DrawKeyInputControl()
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
    }
    public static function PrepareSettings($arProperty)
    {
    }
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPublicEditHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPublicViewHTML($arProperty, $value, $arParams)
    {
    }
    public static function GetUIEntityEditorProperty($settings, $value)
    {
    }
    public static function GetUIEntityEditorPropertyEditHtml(array $params = []) : string
    {
    }
    public static function GetUIEntityEditorPropertyViewHtml(array $params = []) : string
    {
    }
}
//AddEventHandler("iblock", "OnIBlockPropertyBuildList", array("CIBlockPropertyFileMan", "GetUserTypeDescription"));
//RegisterModuleDependences('iblock', 'OnIBlockPropertyBuildList', 'fileman', 'CIBlockPropertyMapGoogle', 'GetUserTypeDescription');
//RegisterModuleDependences('iblock', 'OnIBlockPropertyBuildList', 'fileman', 'CIBlockPropertyMapYandex', 'GetUserTypeDescription');
// ##########################
// #######   VIDEO PROPERTIES   ######
// ##########################
// ### Base class ###
class CVideoProperty
{
    public static function BasePrepareSettings($arProperty, $key = "SETTINGS")
    {
    }
    public static function BaseGetSettingsHTML($name, $val)
    {
    }
    public static function BaseGetEditFormHTML($set, $val, $name, $controlMode = \false)
    {
    }
    public static function BaseConvertToDB($value)
    {
    }
    public static function BaseConvertFromDB($val = "")
    {
    }
    public static function BaseCheckFields($val)
    {
    }
    public static function BaseGetAdminListViewHTML($val)
    {
    }
    public static function BaseGetPublicHTML($set, $val)
    {
    }
    public static function BaseOnSearchContent($val)
    {
    }
    public static function CheckFileInUploadDir($path = '')
    {
    }
    public static function GetUploadDirPath()
    {
    }
    public static function GetSkinPath()
    {
    }
}
// ### Iblock property ###
class CIBlockPropertyVideo extends \CVideoProperty
{
    public static function GetUserTypeDescription()
    {
    }
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPublicViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function ConvertFromDB($arProperty, $value)
    {
    }
    public static function ConvertToDB($arProperty, $value)
    {
    }
    public static function CheckFields($arProperty, $value)
    {
    }
    public static function GetLength($arProperty, $value)
    {
    }
    public static function PrepareSettings($arProperty)
    {
    }
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
    }
    public static function GetSearchContent($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetUIEntityEditorProperty($settings, $value)
    {
    }
    public static function GetUIEntityEditorPropertyEditHtml(array $params = []) : string
    {
    }
    public static function GetUIEntityEditorPropertyViewHtml(array $params = []) : string
    {
    }
}
// ### UserType for main module ###
class CUserTypeVideo extends \CVideoProperty
{
    public static function GetUserTypeDescription()
    {
    }
    public static function GetDBColumnType($arUserField)
    {
    }
    public static function PrepareSettings($arProperty)
    {
    }
    public static function GetSettingsHTML($arUserField = array(), $arHtmlControl, $bVarsFromForm)
    {
    }
    public static function GetEditFormHTML($arUserField, $arHtmlControl)
    {
    }
    public static function OnBeforeSave($arUserField, $value)
    {
    }
    public static function GetAdminListViewHTML($arUserField, $arHtmlControl)
    {
    }
    public static function CheckFields($arUserField, $value)
    {
    }
    public static function OnSearchIndex($arUserField)
    {
    }
    public static function GetPublicViewHTML($arUserField, $arHtmlControl)
    {
    }
}
function getSkinsEx($path)
{
}
function getSkinsFromDir($path)
{
}