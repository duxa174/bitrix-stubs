<?php

namespace Bitrix\Sale\CrmSiteMaster\Tools;

/**
 * Class ModuleChecker
 * @package Bitrix\Sale\CrmSiteMaster\Tools
 */
class ModuleChecker
{
    const IS_MODULE_INSTALL = "~IS_MODULE_INSTALL";
    private $modulesRequired = [];
    /**
     * ModuleChecker constructor.
     * @param array $modulesRequired
     */
    public function setRequiredModules(array $modulesRequired)
    {
    }
    /**
     * @return array
     */
    public function getRequiredModules()
    {
    }
    /**
     * Check existence of required modules
     *
     * @return array
     */
    public function getNotExistModules()
    {
    }
    /**
     * Check availability of required modules
     *
     * @param array $notExistModule
     * @return array
     */
    public function checkAvailableModules($notExistModule)
    {
    }
    /**
     * Checks required modules
     */
    public function checkInstalledModules()
    {
    }
    /**
     * @param $moduleName
     * @return bool|mixed|string
     */
    private function getModuleVersion($moduleName)
    {
    }
    /**
     * Get modules for update
     *
     * @return array
     */
    private function getUpdatesList()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setInstallStatus()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isModuleInstall()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     */
    public function deleteInstallStatus()
    {
    }
}