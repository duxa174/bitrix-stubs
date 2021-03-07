<?php

class CIBlockPropertyElementAutoComplete
{
    const USER_TYPE = 'EAutocomplete';
    public static function GetUserTypeDescription()
    {
    }
    public static function GetValueForAutoComplete($arProperty, $arValue, $arBanSym = "", $arRepSym = "")
    {
    }
    public static function GetValueForAutoCompleteMulti($arProperty, $arValues, $arBanSym = "", $arRepSym = "")
    {
    }
    public static function GetPublicFilterHTML($arProperty, $strHTMLControlName)
    {
    }
    public static function GetPropertyFieldHtml($arProperty, $arValue, $strHTMLControlName)
    {
    }
    public static function GetPropertyFieldHtmlMulty($arProperty, $arValues, $strHTMLControlName)
    {
    }
    public static function GetAdminListViewHTML($arProperty, $arValue, $strHTMLControlName)
    {
    }
    public static function GetPublicViewHTML($arProperty, $arValue, $strHTMLControlName)
    {
    }
    public static function GetPublicEditHTML($property, $value, $control)
    {
    }
    public static function PrepareSettings($arFields)
    {
    }
    public static function GetSettingsHTML($arFields, $strHTMLControlName, &$arPropertyFields)
    {
    }
    public static function GetAdminFilterHTML($arProperty, $strHTMLControlName)
    {
    }
    public static function AddFilterFields($arProperty, $strHTMLControlName, &$arFilter, &$filtered)
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
    protected static function GetLinkElement($intElementID, $intIBlockID)
    {
    }
    protected static function GetPropertyValue($arProperty, $arValue)
    {
    }
    protected static function GetPropertyViewsList($boolFull)
    {
    }
    protected static function GetReplaceSymList($boolFull = \false)
    {
    }
    protected static function GetSymbols($arSettings)
    {
    }
    /**
     * Returns search page url.
     *
     * @return string
     */
    protected static function getSearchUrl()
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