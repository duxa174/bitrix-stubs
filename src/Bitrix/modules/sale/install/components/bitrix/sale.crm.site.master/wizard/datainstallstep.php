<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/** @noinspection PhpUndefinedClassInspection */
/**
 * Class DataInstallStep
 * Install portal and services
 *
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class DataInstallStep extends \DataInstallStep
{
    private $currentStepName = __CLASS__;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
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
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function onPostForm()
    {
    }
    /**
     * @param $serviceID
     * @param $serviceStage
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function installService($serviceID, $serviceStage)
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function prepareWizardVars()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function prepareSite()
    {
    }
}