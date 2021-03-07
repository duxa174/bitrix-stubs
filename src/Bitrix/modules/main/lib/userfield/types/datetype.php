<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class DateType
 * @package Bitrix\Main\UserField\Types
 */
class DateType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'date', RENDER_COMPONENT = 'bitrix:main.field.date';
    public const TYPE_NONE = 'NONE', TYPE_FIXED = 'FIXED', TYPE_NOW = 'NOW';
    public const FORMAT_TYPE_FULL = 'FULL', FORMAT_TYPE_SHORT = 'SHORT';
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
     * @param array $userField
     * @param array $fetched
     * @return string
     * @throws Main\ObjectException
     */
    public static function onAfterFetch(array $userField, array $fetched) : string
    {
    }
    /**
     * @param array $userField
     * @param $value
     * @return Type\Date
     * @throws Main\ObjectException
     */
    public static function onBeforeSave(?array $userField, $value)
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
     * @param array $userFiled
     */
    public static function getDefaultValue(array $userField, array $additionalParameters = [])
    {
    }
    /**
     * @param array $userField
     * @param array $additionalParameters
     */
    public static function getFieldValue(array $userField, array $additionalParameters = [])
    {
    }
}