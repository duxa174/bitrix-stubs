<?php

namespace Bitrix\Sale\BsmSiteMaster\Steps;

/**
 * Class BackupStep
 * Step with check backup
 *
 * @package Bitrix\Sale\BsmSiteMaster\Steps
 */
class BackupStep extends \CWizardStep
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
     * Initialization step id, title and next step
     *
     * @throws \ReflectionException
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
}