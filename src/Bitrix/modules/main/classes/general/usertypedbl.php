<?php

/**
 * Class CUserTypeDouble
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeDouble extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\DoubleType::USER_TYPE_ID;
    function getUserTypeDescription()
    {
    }
    function getSettingsHtml($userField, $additionalSettings, $varsFromForm)
    {
    }
    function getEditFormHtml($userField, $additionalSettings)
    {
    }
    function getFilterHtml($userField, $additionalSettings)
    {
    }
    function getAdminListViewHtml($userField, $additionalSettings)
    {
    }
    function getAdminListEditHtml($userField, $additionalSettings)
    {
    }
    public static function getPublicView($userField, $arAdditionalParameters = array())
    {
    }
    public function getPublicEdit($userField, $arAdditionalParameters = array())
    {
    }
    function getDbColumnType($userField)
    {
    }
    function getFilterData($userField, $additionalSettings)
    {
    }
    function prepareSettings($userField)
    {
    }
    function checkFields($userField, $value)
    {
    }
    function onBeforeSave($userField, $value)
    {
    }
    function onSearchIndex($userField)
    {
    }
}