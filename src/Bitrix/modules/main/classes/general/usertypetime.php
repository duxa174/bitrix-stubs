<?php

/**
 * Class CUserTypeDateTime
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeDateTime extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\DateTimeType::USER_TYPE_ID;
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
    function getDBColumnType($userField)
    {
    }
    function getFilterData($userField, $additionalParameters)
    {
    }
    function prepareSettings($userField)
    {
    }
    function CheckFields($userField, $value)
    {
    }
    public function onAfterFetch($userfield, $fetched)
    {
    }
    public function onBeforeSave($userfield, $value)
    {
    }
    protected static function getFormat($value, $userField)
    {
    }
    public static function FormatField(array $userField, $fieldName)
    {
    }
}