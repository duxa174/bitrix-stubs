<?php

class CMainUiFilter extends \CBitrixComponent
{
    protected $defaultViewSort = 500;
    protected $options;
    protected $themesFolder = "/themes/";
    protected $configName = "config.json";
    protected $commonOptions;
    protected $theme;
    protected $themeInstance;
    protected function prepareResult()
    {
    }
    protected static function prepareIsAuthorized()
    {
    }
    protected function prepareResetToDefaultMode()
    {
    }
    protected function prepareValueRequiredMode()
    {
    }
    protected function prepareClearGet()
    {
    }
    protected function prepareDisableSearch()
    {
    }
    protected function prepareEnableLiveSearch()
    {
    }
    protected function prepareCompactState()
    {
    }
    protected function prepareEnableLabel()
    {
    }
    protected function prepareLimits()
    {
    }
    protected function getUserOptions()
    {
    }
    public function getFilter()
    {
    }
    protected function prepareParams()
    {
    }
    protected function prepareFilterRowsParam()
    {
    }
    protected static function prepareSelectValue(array $items = array(), $value = "", $strictMode = \false)
    {
    }
    protected static function prepareMultiselectValue(array $items = array(), array $value = array(), $isStrict = \false)
    {
    }
    protected static function prepareValue(array $field, array $presetFields = array(), $prefix)
    {
    }
    protected static function prepareSubtype(array $field, array $presetFields = array(), $prefix)
    {
    }
    protected static function prepareCustomEntityValue(array $field, array $presetFields = array())
    {
    }
    protected static function prepareCustomValue(array $field, array $presetFields = array())
    {
    }
    protected static function prepareDestSelectorValue(array $field, array $presetFields = array(), array $params = array())
    {
    }
    protected static function compatibleDateselValue($value = "")
    {
    }
    protected function preparePresetFields($presetRows = array(), $presetFields = array())
    {
    }
    protected function applyOptions()
    {
    }
    protected function prepareDefaultPreset()
    {
    }
    protected function prepareFieldsCount()
    {
    }
    protected function prepareFilterRows()
    {
    }
    protected function getViewId()
    {
    }
    protected function getViewSort()
    {
    }
    protected function prepareSourcePresets()
    {
    }
    protected function preparePresets()
    {
    }
    protected function getField($fieldId)
    {
    }
    static function prepareField($field, $filterId = '')
    {
    }
    static function getFieldsStubs()
    {
    }
    protected function prepareFields()
    {
    }
    protected function prepareSettingsUrl()
    {
    }
    protected function checkRequiredParams()
    {
    }
    protected function includeScripts($folder)
    {
    }
    protected function includeStyles($folder)
    {
    }
    protected function saveOptions()
    {
    }
    protected function prepareDefaultPresets()
    {
    }
    protected function getCommonOptions()
    {
    }
    protected function initParams()
    {
    }
    protected function getTheme()
    {
    }
    protected function includeTheme()
    {
    }
    protected function getConfig($path)
    {
    }
    protected function getAbsoluteThemesPath()
    {
    }
    public function prepareConfig()
    {
    }
    public function executeComponent()
    {
    }
}