<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class EnumType
 * @package Bitrix\Main\UserField\Types
 */
class EnumType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'enumeration', RENDER_COMPONENT = 'bitrix:main.field.enum';
    public const DISPLAY_LIST = 'LIST', DISPLAY_CHECKBOX = 'CHECKBOX', DISPLAY_UI = 'UI';
    /**
     * @return array
     */
    public static function getDescription() : array
    {
    }
    public static function renderField(array $userField, ?array $additionalParameters = []) : string
    {
    }
    public static function renderView(array $userField, ?array $additionalParameters = []) : string
    {
    }
    public static function renderEdit(array $userField, ?array $additionalParameters = []) : string
    {
    }
    public static function renderEditForm(array $userField, ?array $additionalParameters) : string
    {
    }
    public static function renderFilter(array $userField, ?array $additionalParameters) : string
    {
    }
    public static function renderAdminListView(array $userField, ?array $additionalParameters) : string
    {
    }
    public static function renderAdminListEdit(array $userField, ?array $additionalParameters) : string
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
     * @param array $additionalParameters
     * @return array
     */
    public static function getFilterData(array $userField, array $additionalParameters) : array
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
    /**
     * @array $userField
     * @param $userField
     * @return string
     */
    public static function getEmptyCaption(array $userField) : string
    {
    }
    /**
     * Returns values from multiple enumerations by their ID.
     * @param array[] $userFields It has to have the "ID" keys in subarrays.
     * @return bool|CDBResult
     */
    public static function getListMultiple(array $userFields)
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return array
     */
    public static function getGroupActionData(array $userField, ?array $additionalParameters) : array
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function getAdminListEditHtmlMulty(array $userField, ?array $additionalParameters) : string
    {
    }
    public static function getDefaultValue(array $userField, array $additionalParameters = [])
    {
    }
    public static function getFieldValue(array $userField, array $additionalParameters = [])
    {
    }
}