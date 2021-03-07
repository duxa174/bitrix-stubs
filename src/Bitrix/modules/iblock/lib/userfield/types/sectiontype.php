<?php

namespace Bitrix\Iblock\UserField\Types;

/**
 * Class SectionType
 * @package Bitrix\Iblock\UserField\Types
 */
class SectionType extends \Bitrix\Iblock\UserField\Types\ElementType
{
    public const USER_TYPE_ID = 'iblock_section', RENDER_COMPONENT = 'bitrix:iblock.field.section';
    /**
     * @return array
     */
    public static function getDescription() : array
    {
    }
    /**
     * @param array $userField
     * @return string
     */
    public static function onSearchIndex(array $userField) : string
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