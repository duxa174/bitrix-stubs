<?php

namespace Bitrix\Fileman\UserField;

class Address extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Fileman\UserField\Types\AddressType::USER_TYPE_ID;
    const BITRIX24_RESTRICTION = \Bitrix\Fileman\UserField\Types\AddressType::BITRIX24_RESTRICTION;
    const BITRIX24_RESTRICTION_CODE = \Bitrix\Fileman\UserField\Types\AddressType::BITRIX24_RESTRICTION_CODE;
    protected static $restrictionCount = null;
    function getUserTypeDescription()
    {
    }
    public static function getApiKey()
    {
    }
    public static function getApiKeyHint()
    {
    }
    public static function getTrialHint()
    {
    }
    public static function canUseMap()
    {
    }
    public static function checkRestriction()
    {
    }
    public static function useRestriction()
    {
    }
    function prepareSettings($userField)
    {
    }
    function getDbColumnType($userField)
    {
    }
    function checkFields($userField, $value)
    {
    }
    function onBeforeSave($userField, $value)
    {
    }
    function getSettingsHtml($userField = false, $additionalParameters, $varsFromForm)
    {
    }
    function getEditFormHtml($userField, $additionalParameters)
    {
    }
    function getEditFormHtmlMulty($userField, $additionalParameters)
    {
    }
    protected static function getEdit($arUserField, $arHtmlControl)
    {
    }
    public static function getPublicEdit($userField, $additionalParameters = array())
    {
    }
    public static function getPublicView($userField, $additionalParameters = array())
    {
    }
    public static function getPublicText($userField)
    {
    }
    public static function getAdminListViewHtml($userField, $additionalParameters)
    {
    }
    public static function getAdminListEditHtml($userField, $additionalParameters)
    {
    }
    protected static function parseValue($value)
    {
    }
}