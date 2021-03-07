<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class DateTimeType
 * @package Bitrix\Main\UserField\Types
 */
class DateTimeType extends \Bitrix\Main\UserField\Types\DateType
{
    public const USER_TYPE_ID = 'datetime', RENDER_COMPONENT = 'bitrix:main.field.datetime';
    /**
     * @return array
     */
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
     * @return array
     */
    public static function prepareSettings(array $userField) : array
    {
    }
    /**
     * @param array|null $userField
     * @param array $additionalParameters
     * @return array
     */
    public static function getFilterData(?array $userField, array $additionalParameters) : array
    {
    }
    /**
     * @param array $userField
     * @param string|array $value
     * @return array
     */
    public static function checkFields(array $userField, $value) : array
    {
    }
    /**
     * Returns string time in user timezone
     * @param array $userField
     * @param array $fetched
     * @return string|null
     */
    public static function onAfterFetch(array $userField, array $fetched) : string
    {
    }
    /**
     * Returns  time object in server timezone
     * @param array|null $userField
     * @param $value
     * @return Type\Date|Type\DateTime
     */
    public static function onBeforeSave(?array $userField, $value)
    {
    }
    /**
     * @param string $value
     * @param array $userField
     * @return string
     */
    public static function getFormat(string $value, array $userField) : string
    {
    }
    /**
     * @param array|null $userField
     * @param string $fieldName
     * @return string
     */
    public static function formatField(?array $userField, string $fieldName) : string
    {
    }
    /**
     * @param array|null $userField
     * @return bool
     */
    protected static function isFieldWithoutTimeZone(?array $userField) : bool
    {
    }
    /**
     * @param array $userField
     * @param Type\DateTime $dateTime
     * @return string
     */
    public static function charToDate(array $userField, \Bitrix\Main\Type\DateTime $dateTime) : string
    {
    }
    public static function getFieldValue(array $userField, array $additionalParameters = [])
    {
    }
}