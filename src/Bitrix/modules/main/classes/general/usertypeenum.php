<?php

/**
 * Class CUserTypeEnum
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeEnum extends \Bitrix\Main\UserField\TypeBase
{
    public const USER_TYPE_ID = \Bitrix\Main\UserField\Types\EnumType::USER_TYPE_ID;
    function getUserTypeDescription()
    {
    }
    function getSettingsHtml($userField, $additionalParameters, $varsFromForm)
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
    function getEditFormHtml($userField, $additionalParameters)
    {
    }
    function getEditFormHtmlMulty($userField, $additionalParameters)
    {
    }
    public static function getPublicView($userField, $additionalParameters = [])
    {
    }
    public function getPublicEdit($userField, $additionalParameters = [])
    {
    }
    public static function getPublicText($userField)
    {
    }
    function getDbColumnType($userField)
    {
    }
    function prepareSettings($userField)
    {
    }
    function getGroupActionData($userField, $additionalParameters)
    {
    }
    function getFilterData($userField, $additionalParameters)
    {
    }
    function checkFields($userField, $value)
    {
    }
    function getList($userField)
    {
    }
    public static function getListMultiple(array $userFields)
    {
    }
    function onSearchIndex($userField)
    {
    }
    protected static function getEnumList(&$userField, $arParams = array())
    {
    }
    protected static function getEmptyCaption($userField)
    {
    }
}