<?php

class CIBlockPropertyDate extends \CIBlockPropertyDateTime
{
    const USER_TYPE = 'Date';
    public static function GetUserTypeDescription()
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Entity $valueEntity
     * @param Iblock\Property         $property
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function GetORMFields($valueEntity, $property)
    {
    }
    public static function ConvertToDB($arProperty, $value)
    {
    }
    public static function ConvertFromDB($arProperty, $value, $format = '')
    {
    }
    public static function GetPublicEditHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    /**
     * @param array $property
     * @param array $control
     * @param array &$fields
     * @return void
     */
    public static function GetUIFilterProperty($property, $control, &$fields)
    {
    }
    /**
     * @param $settings
     * @param $value
     *
     * @return array
     */
    public static function GetUIEntityEditorProperty($settings, $value)
    {
    }
}