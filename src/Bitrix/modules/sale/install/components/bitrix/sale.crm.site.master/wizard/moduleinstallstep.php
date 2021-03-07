<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/**
 * Class ModuleInstallStep
 * Install required modules
 *
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class ModuleInstallStep extends \CWizardStep
{
    private $currentStepName = __CLASS__;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
    /** @var ModuleChecker */
    private $moduleChecker;
    /** @var array */
    private $modules = [];
    /**
     * Prepare next/prev buttons
     *
     * @throws \ReflectionException
     */
    private function prepareButtons()
    {
    }
    /**
     * Initialization step id, title and next/prev step
     *
     * @throws \ReflectionException
     */
    public function initStep()
    {
    }
    /**
     * Show step content
     *
     * @return bool
     * @throws Main\ArgumentOutOfRangeException
     */
    public function showStep()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\SystemException
     */
    public function onPostForm()
    {
    }
    /**
     * @return array
     */
    private function getFirstModule()
    {
    }
    /**
     * Get next module for installation
     *
     * @param $moduleId
     * @return array
     */
    private function getModuleStep($moduleId)
    {
    }
    /**
     * @param $moduleId
     */
    private function onModuleInstalledEvent($moduleId)
    {
    }
    /**
     * Install required modules
     *
     * @param $moduleId
     * @return bool
     */
    private function installModule($moduleId)
    {
    }
    /**
     * @param $module
     * @return bool
     */
    private function checkModuleTables($module)
    {
    }
    /**
     * @param $response
     */
    private function sendResponse($response)
    {
    }
}