<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class IntegerType
 * @package Bitrix\Main\UserField\Types
 */
class IntegerType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'integer', RENDER_COMPONENT = 'bitrix:main.field.integer';
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
     * @param $value
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
}