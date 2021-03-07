<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class UrlType
 * @package Bitrix\Main\UserField\Types
 */
class UrlType extends \Bitrix\Main\UserField\Types\StringType
{
    public const USER_TYPE_ID = 'url', RENDER_COMPONENT = 'bitrix:main.field.url';
    public static function getDescription() : array
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
     * @param $value
     * @return string
     */
    public static function onBeforeSave(?array $userField, $value)
    {
    }
}