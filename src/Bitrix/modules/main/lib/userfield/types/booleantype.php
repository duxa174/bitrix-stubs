<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class BooleanType
 * @package Bitrix\Main\UserField\Types
 */
class BooleanType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'boolean', RENDER_COMPONENT = 'bitrix:main.field.boolean';
    public const DISPLAY_DROPDOWN = 'DROPDOWN', DISPLAY_RADIO = 'RADIO', DISPLAY_CHECKBOX = 'CHECKBOX';
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
     * @param array $userField
     * @return array
     */
    public static function getLabels(array $userField) : array
    {
    }
    /**
     * @param array $userField
     * @param array $additionalParameters
     * @return array
     */
    public static function getFilterData(array $userField, array $additionalParameters) : array
    {
    }
    /**
     * @param $userField
     * @param $value
     * @return int
     */
    public static function onBeforeSave($userField, $value) : int
    {
    }
    /**
     * Return all display types
     * @return array
     */
    public static final function getAllDisplays() : array
    {
    }
    public static function getAdminListViewHtmlMulty(array $userField, ?array $additionalParameters) : string
    {
    }
}