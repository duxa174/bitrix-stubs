<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/**
 * Class PushAndPullStep
 * Step of check agents
 *
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class PushAndPullStep extends \CWizardStep
{
    private $currentStepName = __CLASS__;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
    /** @var Main\Request */
    private $request;
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
     * Initialization step id and title
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
     * @return bool
     */
    public function onPostForm()
    {
    }
    /**
     * @return array
     */
    public function showButtons()
    {
    }
}