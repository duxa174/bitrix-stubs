<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/**
 * Class ActivationKeyStep
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class ActivationKeyStep extends \CWizardStep
{
    /** @var Main\Request */
    private $request;
    private $currentStepName = __CLASS__;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
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
     * @throws Main\SystemException
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
     */
    public function onPostForm()
    {
    }
}