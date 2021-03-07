<?php

namespace Bitrix\Main\UserField\Types;

abstract class BaseType
{
    public const MODE_EDIT = 'main.edit', MODE_VIEW = 'main.view';
    private const MODE_ADMIN_SETTINGS = 'main.admin_settings', MODE_EDIT_FORM = 'main.edit_form', MODE_FILTER_HTML = 'main.filter_html', MODE_ADMIN_LIST_VIEW_HTML = 'main.admin_list_view_html', MODE_ADMIN_LIST_EDIT_HTML = 'main.admin_list_edit_html', MODE_PUBLIC_TEXT = 'main.public_text';
    protected const USER_TYPE_ID = null, RENDER_COMPONENT = null;
    // component name, sample bitrix:main.field.string
    /**
     * @return array
     */
    public static function getUserTypeDescription() : array
    {
    }
    /**
     * @return array
     */
    protected static function getDescription() : array
    {
    }
    /**
     * @return array
     */
    protected static function getBaseUserTypeDescription() : array
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function renderField(array $userField, ?array $additionalParameters = []) : string
    {
    }
    /**
     * This function is called when the property values are displayed
     * in the public part of the site.
     *
     * Returns html. If the class does not provide such a function,
     * then the type manager will call the component specified
     * in the property metadata or system bitrix: system.field.view
     *
     * @param array $userField An array describing the field.
     * @param array $additionalParameters Additional parameters (e.g. context).
     * @return string
     */
    public static function renderView(array $userField, ?array $additionalParameters = []) : string
    {
    }
    /**
     * This function is called when editing property values in the public part of the site.
     *
     * Returns html. If the class does not provide such a function,
     * then the type manager will call the component specified
     * in the property metadata or system bitrix: system.field.edit
     *
     * @param array $userField An array describing the field.
     * @param array $additionalParameters Additional parameters (e.g. context).
     * @return string HTML для вывода.
     */
    public static function renderEdit(array $userField, ?array $additionalParameters = []) : string
    {
    }
    /**
     * This function is called when the property settings form is displayed.
     *
     * Returns html for embedding in a 2-column table in the form usertype_edit.php
     *
     * @param bool|array $userField An array describing the field. For a new (not yet added field - false)
     * @param array $additionalParameters Array of advanced parameters
     * @param bool $bVarsFromForm
     * @return string HTML
     */
    public static function renderSettings($userField, ?array $additionalParameters, $varsFromForm) : string
    {
    }
    /**
     * This function is called when the form for editing the property value is displayed,
     * for example, here /bitrix/admin/iblock_section_edit.php
     *
     * Returns html for embedding in a table cell in the entity editing form
     * (on the "Advanced Properties" tab).
     *
     * @param array $userField An array describing the field..
     * @param array $additionalParameters An array of controls from the form. Contains the elements NAME and VALUE.
     * @return string
     */
    public static function renderEditForm(array $userField, ?array $additionalParameters) : string
    {
    }
    /**
     * This function is called when the property value is displayed in the list of elements.
     *
     * Returns html to embed in a table cell.
     * $AdditionalParameters elements are converted to html safe mode.
     *
     * @param array $userField An array describing the field.
     * @param array $additionalParameters An array of controls from the form. Contains the elements NAME and VALUE.
     * @return string HTML
     */
    public static function renderAdminListView(array $userField, ?array $additionalParameters) : string
    {
    }
    /**
     * This function is called when the property value is displayed in the list of items in edit mode.
     *
     * Returns html to embed in a table cell.
     * $AdditionalParameters elements are converted to html safe mode.
     * @param array $userField An array describing the field.
     * @param array $additionalParameters An array of controls from the form. Contains the elements NAME and VALUE.
     * @return string HTML
     */
    public static function renderAdminListEdit(array $userField, ?array $additionalParameters)
    {
    }
    /**
     * This function is called when the filter is displayed on the list page.
     *
     * Returns html to embed in a table cell.
     * $additionalParameters elements are html safe.
     *
     * @param array $userField An array describing the field.
     * @param array $additionalParameters An array of controls from the form. Contains the elements NAME and VALUE.
     * @return string
     */
    public static function renderFilter(array $userField, ?array $additionalParameters) : string
    {
    }
    /**
     * @param array $userField
     * @return string
     */
    public static function renderText(array $userField) : string
    {
    }
    /**
     * @param $userField
     * @param $additionalParameters
     * @return string
     */
    private static function getHtml($userField, $additionalParameters) : string
    {
    }
    /**
     * If RENDER_COMPONENT not contain namespace (bitrix or others)
     * means set the default namespace value as "bitrix:"
     * @return string
     */
    private static function getComponentName() : string
    {
    }
    /**
     * @param array|bool $userField
     * @param array|null $additionalParameters
     * @param $varsFromForm
     * @return string
     */
    public static function getSettingsHtml($userField, ?array $additionalParameters, $varsFromForm) : string
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function getPublicView(array $userField, ?array $additionalParameters = []) : string
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function getPublicEdit(array $userField, ?array $additionalParameters = []) : string
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function getEditFormHtml(array $userField, ?array $additionalParameters) : string
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function getAdminListViewHtml(array $userField, ?array $additionalParameters)
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function getAdminListEditHTML(array $userField, ?array $additionalParameters)
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string
     */
    public static function getFilterHtml(array $userField, ?array $additionalParameters) : string
    {
    }
    /**
     * @param array $userField
     * @return string
     */
    public static function getPublicText(array $userField) : string
    {
    }
    /**
     * @param array $userField
     * @param array $additionalParameters
     * @return mixed
     */
    public static function getDefaultValue(array $userField, array $additionalParameters = [])
    {
    }
    public static abstract function getDbColumnType() : string;
}