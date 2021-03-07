<?php

namespace Bitrix\Currency\UserField;

/**
 * Class Money
 * @package Bitrix\Currency\UserField
 * @deprecated
 */
class Money extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Currency\UserField\Types\MoneyType::USER_TYPE_ID;
    const DB_SEPARATOR = \Bitrix\Currency\UserField\Types\MoneyType::DB_SEPARATOR;
    /**
     * @return array
     */
    public static function getUserTypeDescription()
    {
    }
    /**
     * @param $userField
     * @param array $additionalParameters
     * @return string
     */
    public static function getPublicView($userField, $additionalParameters = [])
    {
    }
    /**
     * @param $userField
     * @param array $additionalParameters
     * @return string
     */
    public static function getPublicEdit($userField, $additionalParameters = [])
    {
    }
    /**
     * @param array|bool $userField
     * @param $additionalParameters
     * @param $fromForm
     * @return string
     */
    public static function getSettingsHtml($userField = false, $additionalParameters, $fromForm)
    {
    }
    /**
     * @param $userField
     * @param $additionalParameters
     * @return string
     */
    public static function getEditFormHtml($userField, $additionalParameters)
    {
    }
    /**
     * @param $userField
     * @param $additionalParameters
     * @return string
     */
    public static function getAdminListViewHtml($userField, $additionalParameters)
    {
    }
    /**
     * @param $userField
     * @param $additionalParameters
     * @return string
     */
    public static function getAdminListEditHtml($userField, $additionalParameters)
    {
    }
    /**
     * @param $userField
     * @return string
     */
    public static function getPublicText($userField)
    {
    }
    /**
     * @param $userField
     * @return string
     */
    public static function GetDBColumnType($userField)
    {
    }
    /**
     * @param $userField
     * @param $value
     * @return string
     */
    public static function OnBeforeSave($userField, $value)
    {
    }
    /**
     * @param $userField
     * @return array
     */
    public static function PrepareSettings($userField)
    {
    }
    /**
     * @param $value
     * @param $currency
     * @return string
     */
    protected static function formatToDB($value, $currency)
    {
    }
    /**
     * @param $value
     * @return array
     */
    protected static function unFormatFromDB($value)
    {
    }
    /**
     * @param $userField
     * @param $control
     * @return string
     * @deprecated
     */
    public static function getEditFormHtmlMulty($userField, $control)
    {
    }
    /**
     * @deprecated deprecated since currency 17.5.2
     *
     * @return null|array
     */
    public static function getListCurrency()
    {
    }
    /**
     * @param $userField
     * @param $fieldName
     * @param $dbValue
     * @return false|string
     * @deprecated
     */
    protected static function getInput($userField, $fieldName, $dbValue)
    {
    }
}