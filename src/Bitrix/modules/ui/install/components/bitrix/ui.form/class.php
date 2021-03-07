<?php

/**
 * Class UIFormComponent
 */
class UIFormComponent extends \CBitrixComponent
{
    public const COLUMN_DEFAULT = 'default_column';
    public const SECTION_MAIN = 'main';
    public const SECTION_REQUIRED = 'required';
    public const SECTION_ADDITIONAL = 'additional';
    protected const COLUMN_TYPE = 'column';
    protected const SECTION_TYPE = 'section';
    protected const INCLUDED_AREA_TYPE = 'included_area';
    /** @var int */
    protected $userID = 0;
    /** @var string */
    protected $entityTypeName = '';
    /** @var int */
    protected $entityID = 0;
    /** @var string */
    protected $guid = '';
    /** @var string */
    protected $configID = '';
    protected $configuration;
    /**
     * Execute component.
     */
    public function executeComponent()
    {
    }
    protected function getConfiguration() : \Bitrix\UI\Form\EntityEditorConfiguration
    {
    }
    protected function getConfigurationCategoryName() : string
    {
    }
    protected function getConfigurationOptionCategoryName() : string
    {
    }
    protected function emitOnUIFormInitializeEvent()
    {
    }
    protected function getDefaultParameters() : array
    {
    }
    protected function prepareParameters(array $params) : array
    {
    }
    protected function getSavedScopeAndConfiguration(\Bitrix\UI\Form\EntityEditorConfiguration $configuration, $configScope, bool $isForceDefaultConfig) : array
    {
    }
    protected function processParamsConfig(array $config, bool $isForceDefaultSectionName, array $entityConfig = []) : array
    {
    }
    protected function getFieldsInfo(array $entityFields, array $entityData) : array
    {
    }
    protected function processScheme(array $config, array $defaultConfig, string $configScope, array &$fieldsInfo) : array
    {
    }
    protected function prepareConfig()
    {
    }
    protected function loadLanguages() : array
    {
    }
    protected function initialize()
    {
    }
    protected function getEntityConfigOptions() : array
    {
    }
    protected function getDefaultEntityConfigOptions() : array
    {
    }
    private function initializeConfigWithColumns(array $config) : array
    {
    }
}