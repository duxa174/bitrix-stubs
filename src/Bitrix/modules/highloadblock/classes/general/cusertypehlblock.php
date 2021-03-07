<?php

class CUserTypeHlblock extends \CUserTypeEnum
{
    const USER_TYPE_ID = "hlblock";
    const DISPLAY_LIST = 'LIST';
    const DISPLAY_CHECKBOX = 'CHECKBOX';
    function GetUserTypeDescription()
    {
    }
    function GetDBColumnType($arUserField)
    {
    }
    function PrepareSettings($arUserField)
    {
    }
    function GetSettingsHTML($arUserField = \false, $arHtmlControl, $bVarsFromForm)
    {
    }
    function CheckFields($arUserField, $value)
    {
    }
    function GetList($arUserField)
    {
    }
    function getEntityReferences($userfield, \Bitrix\Main\Entity\ScalarField $entityField)
    {
    }
    public static function getHlRows($userfield, $clearValues = \false)
    {
    }
    function GetAdminListViewHTML($arUserField, $arHtmlControl)
    {
    }
    public static function getDropDownData()
    {
    }
    public static function getDropDownHtml($hlblockId = \null, $hlfieldId = \null)
    {
    }
}