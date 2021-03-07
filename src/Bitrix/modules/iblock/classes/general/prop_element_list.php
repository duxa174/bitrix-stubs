<?php

class CIBlockPropertyElementList
{
    const USER_TYPE = 'EList';
    public static function GetUserTypeDescription()
    {
    }
    public static function PrepareSettings($arProperty)
    {
    }
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
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
    public static function GetPropertyFieldHtmlMulty($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetAdminFilterHTML($arProperty, $strHTMLControlName)
    {
    }
    public static function GetUIFilterProperty($arProperty, $strHTMLControlName, &$fields)
    {
    }
    private static function getItemsForUiFilter($arProperty)
    {
    }
    public static function GetPublicViewHTML($arProperty, $arValue, $strHTMLControlName)
    {
    }
    public static function GetOptionsHtml($arProperty, $values, &$bWasSelect)
    {
    }
    /**
     * Returns data for smart filter.
     *
     * @param array $arProperty				Property description.
     * @param array $value					Current value.
     * @return false|array
     */
    public static function GetExtendedValue($arProperty, $value)
    {
    }
    public static function GetElements($IBLOCK_ID)
    {
    }
    public static function GetSections($IBLOCK_ID)
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