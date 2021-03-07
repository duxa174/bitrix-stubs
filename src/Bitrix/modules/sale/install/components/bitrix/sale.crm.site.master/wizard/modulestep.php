<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/**
 * Class ModuleStep
 * Show list of required modules
 *
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class ModuleStep extends \CWizardStep
{
    private $currentStepName = __CLASS__;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
    private $modulesChecked = ["NOT_INSTALLED_MODULES" => [], "MIN_VERSION_MODULES" => []];
    /**
     * Check step errors
     */
    private function setStepErrors()
    {
    }
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
     */
    public function showStep()
    {
    }
    /**
     * @return array
     */
    public function showButtons()
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function onPostForm()
    {
    }
    /**
     * Prepare html content with modules to be installed
     */
    private function installModulesHtml()
    {
    }
    /**
     * Prepare html content with modules to be updated
     */
    private function minModulesHtml()
    {
    }
    /**
     * @param $id
     * @param $columns
     * @param $rows
     * @return false|string
     */
    private function includeGridComponent($id, $columns, $rows)
    {
    }
}