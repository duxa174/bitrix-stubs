<?php

namespace Bitrix\Currency\UserField\Types;

class MoneyType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'money', DB_SEPARATOR = '|', RENDER_COMPONENT = 'bitrix:currency.field.money';
    public static function getDescription() : array
    {
    }
    /**
     * @return string
     */
    public static function getDbColumnType() : string
    {
    }
    /**
     * @param array $userField
     * @param $value
     * @return string
     */
    public static function onBeforeSave(array $userField, $value)
    {
    }
    /**
     * @param array $userField
     * @return array
     */
    public static function prepareSettings(array $userField) : array
    {
    }
    /**
     * @param string $value
     * @param string|null $currency
     * @return string
     */
    public static function formatToDb(string $value, ?string $currency) : string
    {
    }
    /**
     * @param string|null $value
     * @return array
     */
    public static function unFormatFromDb(?string $value) : array
    {
    }
}