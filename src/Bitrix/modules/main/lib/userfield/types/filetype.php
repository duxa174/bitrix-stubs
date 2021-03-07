<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class FileType
 * @package Bitrix\Main\UserField\Types
 */
class FileType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'file', RENDER_COMPONENT = 'bitrix:main.field.file';
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
    public static function getFilterHtml(array $userField, ?array $additionalParameters) : string
    {
    }
    public static function checkFields(array $userField, $value) : array
    {
    }
    public static function onBeforeSave(array $userField, $value)
    {
    }
    public static function onSearchIndex(array $userField) : ?string
    {
    }
    public static function getFileContent($fileId)
    {
    }
    public static function getPublicEditMultiple(array $userField, ?array $additionalParameters = []) : string
    {
    }
}