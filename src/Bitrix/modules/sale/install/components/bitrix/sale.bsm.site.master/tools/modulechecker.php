<?php

namespace Bitrix\Sale\BsmSiteMaster\Tools;

/**
 * Class ModuleChecker
 * @package Bitrix\Sale\BsmSiteMaster\Tools
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