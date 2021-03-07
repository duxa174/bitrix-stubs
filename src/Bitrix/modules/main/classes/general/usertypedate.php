<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeDate extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\DateType::USER_TYPE_ID;
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
    public function onAfterFetch($userfield, $fetched)
    {
    }
    public function onBeforeSave($userfield, $value)
    {
    }
    public static function formatField(array $userField, $fieldName)
    {
    }
}