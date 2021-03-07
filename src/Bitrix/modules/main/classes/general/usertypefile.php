<?php

/**
 * Class CUserTypeFile
 * @deprecated
 */
class CUserTypeFile extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\FileType::USER_TYPE_ID;
    function getUserTypeDescription()
    {
    }
    function getDbColumnType($arUserField)
    {
    }
    function prepareSettings($userField)
    {
    }
    function getSettingsHtml($userField, $additionalParameters, $varsFromForm)
    {
    }
    function getEditFormHtml($arUserField, $arHtmlControl)
    {
    }
    function getEditFormHtmlMulty($userField, $additionalParameters)
    {
    }
    function getFilterHtml($userField, $additionalParameters)
    {
    }
    function getAdminListViewHtml($userField, $additionalParameters)
    {
    }
    function getAdminListEditHtml($userField, $additionalParameters)
    {
    }
    function getAdminListEditHtmlMulty($userField, $additionalParameters)
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
    function __getFileContent($fileId)
    {
    }
    public static function getPublicView($userField, $additionalParameters = [])
    {
    }
    public static function getPublicEdit($userField, $additionalParameters = [])
    {
    }
    public static function getPublicEditMultiple($userField, $additionalParameters = [])
    {
    }
    public static function getPublicText($userField)
    {
    }
}