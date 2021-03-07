<?php

/**
 * Class CUserTypeBoolean
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeBoolean extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\BooleanType::USER_TYPE_ID;
    const DISPLAY_DROPDOWN = \Bitrix\Main\UserField\Types\BooleanType::DISPLAY_DROPDOWN;
    const DISPLAY_RADIO = \Bitrix\Main\UserField\Types\BooleanType::DISPLAY_RADIO;
    const DISPLAY_CHECKBOX = \Bitrix\Main\UserField\Types\BooleanType::DISPLAY_CHECKBOX;
    function GetUserTypeDescription()
    {
    }
    function GetSettingsHTML($arUserField = \false, $arHtmlControl, $bVarsFromForm)
    {
    }
    function GetEditFormHTML($arUserField, $arHtmlControl)
    {
    }
    function GetFilterHTML($arUserField, $arHtmlControl)
    {
    }
    function GetAdminListViewHTML($arUserField, $arHtmlControl)
    {
    }
    function getAdminListViewHtmlMulty($userField, $additionalParameters)
    {
    }
    // @todo must not supporting the ability to add values in multiple fields
    function GetAdminListEditHTML($arUserField, $arHtmlControl)
    {
    }
    public static function GetPublicView($arUserField, $arAdditionalParameters = array())
    {
    }
    public static function getPublicText($userField)
    {
    }
    public function getPublicEdit($arUserField, $arAdditionalParameters = array())
    {
    }
    public static function getLabels($userField)
    {
    }
    function getDbColumnType($userField)
    {
    }
    function prepareSettings($userField)
    {
    }
    function onBeforeSave($userField, $value)
    {
    }
    function getFilterData($userField, $additionalParameters)
    {
    }
}