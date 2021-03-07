<?php

class Landing extends \CModule
{
    public $MODULE_ID = 'landing';
    public $MODULE_GROUP_RIGHTS = 'Y';
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;
    public $docRoot = '';
    public $eventsData = ['bitrix24' => ['onDomainChange' => ['\\Bitrix\\Landing\\Update\\Block\\NodeAttributes', 'updateFormDomain']], 'intranet' => ['onBuildBindingMenu' => ['\\Bitrix\\Landing\\Connector\\Intranet', 'onBuildBindingMenu']], 'landing' => ['onBuildSourceList' => ['\\Bitrix\\Landing\\Connector\\Landing', 'onSourceBuildHandler']], 'main' => ['onBeforeSiteDelete' => ['\\Bitrix\\Landing\\Site', 'onBeforeMainSiteDelete'], 'onSiteDelete' => ['\\Bitrix\\Landing\\Site', 'onMainSiteDelete'], 'onUserConsentProviderList' => ['\\Bitrix\\Landing\\Site\\Cookies', 'onUserConsentProviderList']], 'mobile' => ['onMobileMenuStructureBuilt' => ['\\Bitrix\\Landing\\Connector\\Mobile', 'onMobileMenuStructureBuilt']], 'rest' => [
        'onRestServiceBuildDescription' => ['\\Bitrix\\Landing\\Publicaction', 'restBase'],
        'onBeforeApplicationUninstall' => ['\\Bitrix\\Landing\\Publicaction', 'beforeRestApplicationDelete'],
        'onRestAppDelete' => ['\\Bitrix\\Landing\\Publicaction', 'restApplicationDelete'],
        // sites transfer
        'onRestApplicationConfigurationGetManifest' => ['\\Bitrix\\Landing\\Transfer\\AppConfiguration', 'getManifestList'],
        'onRestApplicationConfigurationExport' => ['\\Bitrix\\Landing\\Transfer\\AppConfiguration', 'onEventExportController'],
        'onRestApplicationConfigurationGetManifestSetting' => ['\\Bitrix\\Landing\\Transfer\\AppConfiguration', 'onInitManifest'],
        'onRestApplicationConfigurationEntity' => ['\\Bitrix\\Landing\\Transfer\\AppConfiguration', 'getEntityList'],
        'onRestApplicationConfigurationImport' => ['\\Bitrix\\Landing\\Transfer\\AppConfiguration', 'onEventImportController'],
        'onRestApplicationConfigurationFinish' => ['\\Bitrix\\Landing\\Transfer\\AppConfiguration', 'onFinish'],
    ], 'socialnetwork' => ['onFillSocNetFeaturesList' => ['\\Bitrix\\Landing\\Connector\\SocialNetwork', 'onFillSocNetFeaturesList'], 'onFillSocNetMenu' => ['\\Bitrix\\Landing\\Connector\\SocialNetwork', 'onFillSocNetMenu'], 'onSocNetGroupDelete' => ['\\Bitrix\\Landing\\Connector\\SocialNetwork', 'onSocNetGroupDelete']], 'socialservices' => ['\\Bitrix\\Socialservices\\ApTable::OnAfterAdd' => ['\\Bitrix\\Landing\\Update\\Block\\NodeAttributes', 'updateFormDomainByConnector']]];
    public $installDirs = array('admin' => 'admin', 'js' => 'landing', 'images' => 'landing', 'tools' => 'landing', 'blocks' => 'bitrix', 'components' => 'bitrix', 'templates' => 'landing24');
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Call all install methods.
     * @returm void
     */
    public function doInstall()
    {
    }
    /**
     * Call all uninstall methods, include several steps.
     * @returm void
     */
    public function doUninstall()
    {
    }
    /**
     * Install DB, events, etc.
     * @return boolean
     */
    public function installDB()
    {
    }
    /**
     * Is B24 portal?
     * @return bool
     */
    private function isB24()
    {
    }
    /**
     * Install or uninstall main site templates.
     * @param boolean $install Call type.
     * @return void
     */
    public function setSiteTemplates($install = \true)
    {
    }
    /**
     * Set router handlers for post preview.
     * @return void
     */
    private function setRouteHandlers()
    {
    }
    /**
     * Settings required options.
     * @return void
     */
    public function setOptions()
    {
    }
    /**
     * Install templates of landing.
     * @return boolean
     */
    public function installTemplates()
    {
    }
    /**
     * Install files.
     * @return boolean
     */
    public function installFiles()
    {
    }
    /**
     * Remove all pages and sites first.
     * @return void
     */
    public function removeData()
    {
    }
    /**
     * Uninstall DB, events, etc.
     * @param array $arParams Some params.
     * @return boolean
     */
    public function uninstallDB($arParams = array())
    {
    }
    /**
     * Uninstall files.
     * @return boolean
     */
    public function uninstallFiles()
    {
    }
    /**
     * Get module rights.
     * @return array
     */
    public function getModuleRightList()
    {
    }
    /**
     * Get access tasks for module.
     * @return array
     */
    public function getModuleTasks()
    {
    }
    /**
     * Method for migrate from cloud version.
     * @return void
     */
    public function migrateToBox()
    {
    }
}