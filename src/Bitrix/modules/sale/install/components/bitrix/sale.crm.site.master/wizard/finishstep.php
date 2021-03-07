<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/** @noinspection PhpUndefinedClassInspection */
/**
 * Class FinishStep
 * Step with finish information
 *
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class FinishStep extends \FinishStep
{
    private $currentStepName = __CLASS__;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
    private $siteId;
    private $sitePath;
    private $siteDir;
    /**
     * Initialization step id and title
     */
    public function initStep()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function showStep()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function showButtons()
    {
    }
    /**
     * Create index.php
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function createNewIndex()
    {
    }
}