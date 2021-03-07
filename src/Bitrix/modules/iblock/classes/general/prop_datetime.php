<?php

class CIBlockPropertyDateTime
{
    const USER_TYPE = 'DateTime';
    public static function GetUserTypeDescription()
    {
    }
    public static function AddFilterFields($arProperty, $strHTMLControlName, &$arFilter, &$filtered)
    {
    }
    public static function GetAdminFilterHTML($arProperty, $strHTMLControlName)
    {
    }
    public static function GetPublicFilterHTML($arProperty, $strHTMLControlName)
    {
    }
    public static function GetPublicViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPublicEditHTML($arProperty, $value, $strHTMLControlName)
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
    //PARAMETERS:
    //$arProperty - b_iblock_property.*
    //$value - array("VALUE",["DESCRIPTION"]) -- here comes HTML form value
    //return:
    //array of error messages
    public static function CheckFields($arProperty, $value)
    {
    }
    //PARAMETERS:
    //$arProperty - b_iblock_property.*
    //$value - array("VALUE",["DESCRIPTION"]) -- here comes HTML form value
    //return:
    //DB form of the value
    public static function ConvertToDB($arProperty, $value)
    {
    }
    public static function ConvertFromDB($arProperty, $value, $format = '')
    {
    }
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
    }
    /**
     * @param array $property
     * @param array $strHTMLControlName
     * @param array &$fields
     * @return void
     */
    public static function GetUIFilterProperty($property, $strHTMLControlName, &$fields)
    {
    }
    public static function GetUIEntityEditorProperty($settings, $value)
    {
    }
}