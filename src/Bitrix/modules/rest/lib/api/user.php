<?php

namespace Bitrix\Rest\Api;

class User extends \IRestService
{
    const SCOPE_USER = 'user';
    protected static $allowedUserFields = array(
        "ID",
        /*"LOGIN", */
        "ACTIVE",
        "EMAIL",
        "NAME",
        "LAST_NAME",
        "SECOND_NAME",
        "PERSONAL_GENDER",
        "PERSONAL_PROFESSION",
        "PERSONAL_WWW",
        "PERSONAL_BIRTHDAY",
        "PERSONAL_PHOTO",
        "PERSONAL_ICQ",
        "PERSONAL_PHONE",
        "PERSONAL_FAX",
        "PERSONAL_MOBILE",
        "PERSONAL_PAGER",
        "PERSONAL_STREET",
        "PERSONAL_CITY",
        "PERSONAL_STATE",
        "PERSONAL_ZIP",
        "PERSONAL_COUNTRY",
        "WORK_COMPANY",
        "WORK_POSITION",
        "WORK_PHONE",
        "UF_DEPARTMENT",
        "UF_INTERESTS",
        "UF_SKILLS",
        "UF_WEB_SITES",
        "UF_XING",
        "UF_LINKEDIN",
        "UF_FACEBOOK",
        "UF_TWITTER",
        "UF_SKYPE",
        "UF_DISTRICT",
        "UF_PHONE_INNER",
    );
    public static function getDefaultAllowedUserFields()
    {
    }
    public static function unsetDefaultAllowedUserField($key)
    {
    }
    public static function onRestServiceBuildDescription()
    {
    }
    protected static function checkAllowedFields()
    {
    }
    public static function onUserInitialize($arParams, $arHandler)
    {
    }
    public static function isAdmin()
    {
    }
    public static function hasAccess($params)
    {
    }
    public static function getAccess($params)
    {
    }
    public static function getFields()
    {
    }
    public static function userCurrent($query, $n, \CRestServer $server)
    {
    }
    public static function userGet($query, $nav = 0, \CRestServer $server)
    {
    }
    public static function userOnline()
    {
    }
    public static function userCounters($arParams)
    {
    }
    public static function userAdd($userFields)
    {
    }
    public static function userUpdate($userFields)
    {
    }
    protected static function prepareUserData($userData, $allowedUserFields = null)
    {
    }
    protected static function getUserData($userFields)
    {
    }
    protected static function getDefaultSite()
    {
    }
}