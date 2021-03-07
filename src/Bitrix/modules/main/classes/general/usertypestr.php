<?php

/**
 * Class CUserTypeString
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeString extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\StringType::USER_TYPE_ID;
    function getUserTypeDescription()
    {
    }
    public static function getPublicView($userField, $additionalParameters = array())
    {
    }
    public static function getPublicEdit($userField, $additionalParameters = array())
    {
    }
    function getSettingsHtml($userField, $additionalParameters, $varsFromForm)
    {
    }
    function getEditFormHtml($userField, $additionalParameters)
    {
    }
    function getAdminListViewHtml($userField, $additionalParameters)
    {
    }
    function getAdminListEditHtml($userField, $additionalParameters)
    {
    }
    function getFilterHtml($userField, $additionalParameters)
    {
    }
    function getDbColumnType()
    {
    }
    function getFilterData($userField, $additionalParameters)
    {
    }
    function prepareSettings($userField)
    {
    }
    function checkFields($userField, $value)
    {
    }
    function onSearchIndex($userField)
    {
    }
}