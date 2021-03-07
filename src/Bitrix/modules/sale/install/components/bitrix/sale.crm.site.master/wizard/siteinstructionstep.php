<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/**
 * Class SiteInstructionStep
 * Step with instructions for creating a site
 *
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class SiteInstructionStep extends \CWizardStep
{
    private $currentStepName = __CLASS__;
    /** @var Main\Request */
    private $request;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
    private $formFieldList = ["CRM_SITE", "LID", "NAME", "SERVER_NAME", "DOC_ROOT", "WIZARD_REWRITE"];
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
     * Initialization step id, title and next step
     *
     * @throws \ReflectionException
     * @throws Main\SystemException
     */
    public function initStep()
    {
    }
    /**
     * Show step content
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
     * Save form fields to wizard's var
     */
    private function setFormFields()
    {
    }
}