<?php

/**
 * Class CIBlockPropertyDirectory
 */
class CIBlockPropertyDirectory
{
    const TABLE_PREFIX = 'b_hlbd_';
    const USER_TYPE = 'directory';
    protected static $arFullCache = array();
    protected static $arItemCache = array();
    protected static $directoryMap = array();
    protected static $hlblockCache = array();
    protected static $hlblockClassNameCache = array();
    /**
     * Returns property type description.
     *
     * @return array
     */
    public static function GetUserTypeDescription()
    {
    }
    /**
     * Prepare settings for property.
     *
     * @param array $arProperty				Property description.
     * @return array
     */
    public static function PrepareSettings($arProperty)
    {
    }
    /**
     * Returns html for show in edit property page.
     *
     * @param array $arProperty				Property description.
     * @param array $strHTMLControlName		Control description.
     * @param array $arPropertyFields		Property fields for edit form.
     * @return string
     */
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
    }
    /**
     * Return html for edit single value.
     *
     * @param array $arProperty				Property description.
     * @param array $value					Current value.
     * @param array $strHTMLControlName		Control description.
     * @return string
     */
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    /**
     * Return html for public edit value.
     *
     * @param array $property			Property description.
     * @param array $value				Current value.
     * @param array $control			Control description.
     * @return string
     */
    public static function GetPublicEditHTML($property, $value, $control)
    {
    }
    /**
     * Return html for public edit multi values.
     *
     * @param array $property			Property description.
     * @param array $value				Current value.
     * @param array $control			Control description.
     * @return string
     */
    public static function GetPublicEditHTMLMulty($property, $value, $control)
    {
    }
    /**
     * Returns list values.
     *
     * @param array $arProperty			Property description.
     * @param array $values				Current value.
     * @return string
     */
    public static function GetOptionsHtml($arProperty, $values)
    {
    }
    /**
     * Returns data for list.
     *
     * @param array $arProperty Property description.
     * @return array
     */
    public static function GetOptionsData($arProperty)
    {
    }
    /**
     * Returns data for smart filter.
     *
     * @param array $arProperty				Property description.
     * @param array $value					Current value.
     * @return false|array
     */
    public static function GetExtendedValue($arProperty, $value)
    {
    }
    /**
     * Returns admin list view html.
     *
     * @param array $arProperty				Property description.
     * @param array $value					Current value.
     * @param array $strHTMLControlName		Control description.
     * @return string
     */
    public static function GetAdminListViewHTML(
        $arProperty,
        $value,
        /** @noinspection PhpUnusedParameterInspection */
        $strHTMLControlName
    )
    {
    }
    /**
     * Return public list view html (module list).
     *
     * @param array $arProperty				Property description.
     * @param array $value					Current value.
     * @param array $strHTMLControlName		Control description.
     * @return string
     */
    public static function GetPublicViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    /**
     * Return admin filter html.
     *
     * @param array $arProperty				Property description.
     * @param array $strHTMLControlName		Control description.
     * @return string
     */
    public static function GetAdminFilterHTML($arProperty, $strHTMLControlName)
    {
    }
    /**
     * Return property value for search.
     *
     * @param array $arProperty				Property description.
     * @param array $value					Current value.
     * @param array $strHTMLControlName		Control description.
     * @return string
     */
    public static function GetSearchContent(
        $arProperty,
        $value,
        /** @noinspection PhpUnusedParameterInspection */
        $strHTMLControlName
    )
    {
    }
    /**
     * Add values in filter.
     *
     * @param array $arProperty
     * @param array $strHTMLControlName
     * @param array &$arFilter
     * @param bool &$filtered
     * @return void
     */
    public static function AddFilterFields($arProperty, $strHTMLControlName, &$arFilter, &$filtered)
    {
    }
    /**
     * Returns table name for new entity.
     *
     * @param string $name			Entity name
     * @return bool|string
     */
    public static function createHighloadTableName($name)
    {
    }
    /**
     * @param array $property
     * @param array $strHTMLControlName
     * @param array &$field
     * @return void
     */
    public static function GetUIFilterProperty($property, $strHTMLControlName, &$field)
    {
    }
    /**
     * Returns entity data.
     *
     * @param string $tableName				HL table name.
     * @param array $listDescr				Params for getList.
     * @return array
     */
    private static function getEntityFieldsByFilter($tableName, $listDescr = array())
    {
    }
    private static function normalizeValue($value)
    {
    }
    /**
     * @param mixed $identifier
     * @return string|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private static function getDefaultXmlId($identifier)
    {
    }
    private static function getEntityFieldsForTable($hlTableName)
    {
    }
    public static function GetUIEntityEditorProperty($settings, $value) : ?array
    {
    }
    public static function GetUIEntityEditorPropertyEditHtml(array $params = []) : string
    {
    }
    public static function GetUIEntityEditorPropertyViewHtml(array $params = []) : string
    {
    }
}