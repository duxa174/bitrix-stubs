<?php

namespace Bitrix\Sale\BsmSiteMaster\Steps;

/**
 * Class UpdateSystemStep
 * @package Bitrix\Sale\BsmSiteMaster\Steps
 */
class UpdateSystemStep extends \CWizardStep
{
    private $currentStepName = __CLASS__;
    /** @var \SaleBsmSiteMaster */
    private $component = null;
    /**
     * Prepare next/prev buttons
     *
     * @throws \ReflectionException
     */
    private function prepareButtons()
    {
    }
    /**
     * Initialization step id and title
     *
     * @throws \ReflectionException
     */
    public function initStep()
    {
    }
    /**
     * @return bool
     */
    public function showStep()
    {
    }
    /**
     * Prepare html content with modules to be installed
     */
    private function installModulesHtml()
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
     */
    public function onPostForm()
    {
    }
}