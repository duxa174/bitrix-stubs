<?php

namespace Bitrix\Sale\BsmSiteMaster\Steps;

/**
 * Class FinishStep
 * Step with finish information
 *
 * @package Bitrix\Sale\BsmSiteMaster\Steps
 */
class FinishStep extends \CWizardStep
{
    private $currentStepName = __CLASS__;
    /** @var \SaleBsmSiteMaster */
    private $component = null;
    /**
     * Initialization step id and title
     */
    public function initStep()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function showStep()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function showButtons()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getSiteUrl()
    {
    }
}