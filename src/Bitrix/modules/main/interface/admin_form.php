<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
class CAdminForm extends \CAdminTabControl
{
    var $arParams = array();
    var $arFields = array();
    var $arForbiddenFields = array();
    var $group = "";
    var $group_ajax = \false;
    var $arFieldValues = array();
    var $sPrologContent = "";
    var $sEpilogContent = "";
    var $arButtonsParams = \false;
    var $sButtonsContent = "";
    var $arSavedTabs = array();
    var $arSystemTabs = array();
    var $arSystemFields = array();
    var $arReqiredTabs = array();
    var $arCustomLabels = array();
    var $bCustomFields = \false;
    var $sCurrentLabel = "";
    var $bCurrentReq = \false;
    var $bShowSettings = \true;
    public function __construct($name, $tabs, $bCanExpand = \true, $bDenyAutosave = \false)
    {
    }
    /** @deprecated */
    public function CAdminForm($name, $tabs, $bCanExpand = \true, $bDenyAutosave = \false)
    {
    }
    function SetSelectedTab()
    {
    }
    function SetShowSettings($v)
    {
    }
    function ShowSettings()
    {
    }
    function SetFieldsValues($bVarsFromForm, $db_record, $default_values)
    {
    }
    function SetFieldValue($field_name, $bVarsFromForm, $db_record, $default_value = \false)
    {
    }
    function GetFieldValue($field_name)
    {
    }
    function GetHTMLFieldValue($field_name)
    {
    }
    function GetHTMLFieldValueEx($field_name)
    {
    }
    function GetFieldLabel($id)
    {
    }
    function ShowTabButtons()
    {
    }
    function Begin($arParams = array())
    {
    }
    function BeginNextFormTab()
    {
    }
    function Show()
    {
    }
    function GetName()
    {
    }
    function GetFormName()
    {
    }
    function GetCustomLabel($id, $content)
    {
    }
    function GetCustomLabelHTML($id = \false, $content = "")
    {
    }
    function ShowWarnings($form, $messages, $aFields = \false)
    {
    }
    function BeginPrologContent()
    {
    }
    function EndPrologContent()
    {
    }
    function BeginEpilogContent()
    {
    }
    function EndEpilogContent()
    {
    }
    function AddFieldGroup($id, $content, $arFields, $bAjax = \false)
    {
    }
    function HideField($id)
    {
    }
    function AddSection($id, $content, $required = \false)
    {
    }
    function AddViewField($id, $content, $html, $required = \false)
    {
    }
    function AddDropDownField($id, $content, $required, $arSelect, $value = \false, $arParams = array())
    {
    }
    function AddEditField($id, $content, $required, $arParams = array(), $value = \false)
    {
    }
    function AddTextField($id, $label, $value, $arParams = array(), $required = \false)
    {
    }
    function AddCalendarField($id, $label, $value, $required = \false)
    {
    }
    function AddCheckBoxField($id, $content, $required, $value, $checked, $arParams = array())
    {
    }
    function AddFileField($id, $label, $value, $arParams = array(), $required = \false)
    {
    }
    function BeginCustomField($id, $content, $required = \false)
    {
    }
    function EndCustomField($id, $hidden = "")
    {
    }
    function ShowUserFields($PROPERTY_ID, $ID, $bVarsFromForm)
    {
    }
    function ShowUserFieldsWithReadyData($PROPERTY_ID, $readyData, $bVarsFromForm, $primaryIdName = 'VALUE_ID')
    {
    }
    function Buttons($aParams = \false, $additional_html = "")
    {
    }
    /**
     * @param bool|array $arJSButtons
     * @return void
     */
    function ButtonsPublic($arJSButtons = \false)
    {
    }
}
class CAdminFormSettings
{
    public static function getTabsArray($formId)
    {
    }
    public static function setTabsArray($formId, $arCustomTabs, $common = \false, $userID = \false)
    {
    }
}