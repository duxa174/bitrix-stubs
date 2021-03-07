<?php

class CIBlockPropertyXmlID
{
    const USER_TYPE = 'ElementXmlID';
    public static function GetUserTypeDescription()
    {
    }
    public static function GetPublicViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    //PARAMETERS:
    //$arProperty - b_iblock_property.*
    //$value - array("VALUE","DESCRIPTION") -- here comes HTML form value
    //strHTMLControlName - array("VALUE","DESCRIPTION")
    //return:
    //safe html
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
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