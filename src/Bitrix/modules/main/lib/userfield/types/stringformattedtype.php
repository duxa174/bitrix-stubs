<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class StringFormattedType
 * @package Bitrix\Main\UserField\Types
 */
class StringFormattedType extends \Bitrix\Main\UserField\Types\StringType
{
    public const USER_TYPE_ID = 'string_formatted', RENDER_COMPONENT = 'bitrix:main.field.stringformatted';
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
     * @param array|null $additionalParameters
     * @return string|null
     */
    public static function getPublicViewHtml(?array $userField, ?array $additionalParameters = []) : ?string
    {
    }
}