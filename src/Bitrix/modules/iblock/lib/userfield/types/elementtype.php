<?php

namespace Bitrix\Iblock\UserField\Types;

/**
 * Class ElementType
 * @package Bitrix\Iblock\UserField\Types
 */
class ElementType extends \Bitrix\Main\UserField\Types\EnumType
{
    public const USER_TYPE_ID = 'iblock_element', RENDER_COMPONENT = 'bitrix:iblock.field.element';
    protected static $iblockIncluded = null;
    /**
     * @return array
     */
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
     * @param array $userField
     * @return string|null
     */
    public static function onSearchIndex(array $userField) : ?string
    {
    }
    public static function renderField(array $userField, ?array $additionalParameters = []) : string
    {
    }
    /**
     * @param array $userField
     * @return bool|CDBResult
     */
    public static function getList(array $userField)
    {
    }
    /**
     * @param array $userField
     * @param array $additionalParameters
     */
    public static function getEnumList(array &$userField, array $additionalParameters = []) : void
    {
    }
}