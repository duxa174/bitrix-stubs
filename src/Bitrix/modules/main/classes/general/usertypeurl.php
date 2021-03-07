<?php

/**
 * Class CUserTypeUrl
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeUrl extends \CUserTypeString
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\UrlType::USER_TYPE_ID;
    function getUserTypeDescription()
    {
    }
    public static function getPublicView($userField, $additionalParameters = array())
    {
    }
    public static function getPublicEdit($userField, $additionalParameters = array())
    {
    }
    function getSettingsHtml($userField, $arHtmlControl, $bVarsFromForm)
    {
    }
    function getEditFormHtml($userField, $arHtmlControl)
    {
    }
    function getAdminListViewHtml($userField, $arHtmlControl)
    {
    }
    function getAdminListEditHtml($userField, $arHtmlControl)
    {
    }
    function getFilterHtml($userField, $arHtmlControl)
    {
    }
    public static function getPublicText($userField)
    {
    }
    function prepareSettings($userField)
    {
    }
    protected static function encodeUrl($url)
    {
    }
}