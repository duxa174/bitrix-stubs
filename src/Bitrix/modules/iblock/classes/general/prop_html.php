<?php

class CIBlockPropertyHTML
{
    const USER_TYPE = 'HTML';
    public static function GetUserTypeDescription()
    {
    }
    public static function GetPublicViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPublicEditHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function ConvertToDB($arProperty, $value)
    {
    }
    public static function ConvertFromDB($arProperty, $value)
    {
    }
    /**
     * Check value.
     *
     * @param bool|array $arFields			Current value.
     * @param bool $defaultValue			Is default value.
     * @return array|bool
     */
    public static function CheckArray($arFields = \false, $defaultValue = \false)
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
    /**
     * @param array $property
     * @param array $strHTMLControlName
     * @param array &$fields
     * @return void
     */
    public static function GetUIFilterProperty($property, $strHTMLControlName, &$fields)
    {
    }
    protected static function getValueFromString($value, $getFull = \false)
    {
    }
}