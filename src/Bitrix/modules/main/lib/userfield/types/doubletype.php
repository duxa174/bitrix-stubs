<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class DoubleType
 * @package Bitrix\Main\UserField\Types
 */
class DoubleType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'double', RENDER_COMPONENT = 'bitrix:main.field.double';
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
     * @param array $additionalSettings
     * @return array
     */
    public static function getFilterData(?array $userField, array $additionalSettings) : array
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
     * @return string|null
     */
    public static function onSearchIndex(array $userField) : ?string
    {
    }
    /**
     * @param array $userField
     * @param $value
     * @return string|null
     */
    public static function onBeforeSave(array $userField, $value)
    {
    }
}