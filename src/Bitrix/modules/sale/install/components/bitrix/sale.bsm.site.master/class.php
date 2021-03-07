<?php

/**
 * Class SaleBsmSiteMaster
 */
class SaleBsmSiteMaster extends \CBitrixComponent
{
    /** @var string Full path to wizard directory */
    const WIZARD_DIR = __DIR__ . "/wizard/";
    /** @var string */
    const IS_SALE_BSM_SITE_MASTER_FINISH = "~IS_SALE_BSM_SITE_MASTER_FINISH";
    const ERROR_TYPE_COMPONENT = "COMPONENT";
    const ERROR_TYPE_WIZARD = "WIZARD";
    const BSM_WIZARD_SITE_ID = "~BSM_WIZARD_SITE_ID";
    /** @var string */
    const IS_SALE_BSM_SITE_MASTER_STUB = "~IS_SALE_BSM_SITE_MASTER_STUB";
    /** @var CWizardBase wizard */
    private $wizard;
    /** @var Tools\ModuleChecker $moduleChecker */
    private $moduleChecker;
    /** @var array variable for wizard */
    private $wizardVar = [];
    /** @var array default steps */
    private $defaultStep = [];
    /** @var array required steps */
    private $requiredStep = [];
    /** @var array error for wizard's step */
    private $wizardStepErrors = [];
    /**
     * @param $arParams
     * @return array
     */
    public function onPrepareComponentParams($arParams)
    {
    }
    /**
     * @return array
     */
    private function getDefaultSteps()
    {
    }
    /**
     * @return array
     */
    private function getRequiredSteps()
    {
    }
    /**
     * @return array
     */
    private function getRequiredModules()
    {
    }
    /**
     * @return mixed|void
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     */
    public function executeComponent()
    {
    }
    /**
     * Create wizard and add steps
     */
    private function createWizard()
    {
    }
    /**
     * Set variables for wizard
     */
    private function setWizardVariables()
    {
    }
    /**
     * @return CWizardBase
     */
    public function getWizard()
    {
    }
    /**
     * @return array
     */
    private function getWizardVars()
    {
    }
    /**
     * @return Tools\ModuleChecker
     */
    public function getModuleChecker()
    {
    }
    /**
     * @param $stepName
     * @param $sort
     * @param bool $replace
     */
    private function addWizardStep($stepName, $sort, $replace = \false)
    {
    }
    /**
     * Include wizard's step
     */
    private function includeWizardSteps()
    {
    }
    /**
     * Include wizard's template
     */
    private function includeWizardTemplate()
    {
    }
    /**
     * Add wizard steps to component's params
     */
    private function addStepsToResult()
    {
    }
    /**
     * Check additional required step
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function initSteps()
    {
    }
    /**
     * Sort wizard's step
     */
    private function sortSteps()
    {
    }
    private function checkBitrixVm()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function checkAgents()
    {
    }
    private function checkPushServer()
    {
    }
    /**
     * @param string $currentStep
     * @return array
     */
    public function getSteps($currentStep)
    {
    }
    /**
     * Control required steps
     */
    private function controlRequiredSteps()
    {
    }
    /**
     * @param $stepName
     * @return bool
     */
    private function isStepExists($stepName)
    {
    }
    /**
     * @param $stepName
     */
    private function setStepImmediately($stepName)
    {
    }
    /**
     * @param $name
     * @param $value
     */
    private function addWizardVar($name, $value)
    {
    }
    /**
     * @param $stepName
     * @param $value
     */
    private function addWizardStepError($stepName, $value)
    {
    }
    /**
     * @param $stepName
     * @return array
     */
    public function getWizardStepErrors($stepName)
    {
    }
    /**
     * @param $errors
     * @param $type
     */
    private function addErrors($errors, $type)
    {
    }
    /**
     * @param array|string $error
     * @param $type
     */
    private function addError($error, $type)
    {
    }
    /**
     * @param $type
     * @return array
     */
    private function getErrors($type)
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setSaleBsmSiteMasterFinish()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isSaleBsmSiteMasterFinish()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setSaleBsmSiteMasterStub()
    {
    }
    /**
     * @param $siteId
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function setBsmSiteId($siteId)
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function getBsmSiteId()
    {
    }
    private function checkPermission()
    {
    }
    /**
     * @throws Main\LoaderException
     */
    private function checkModules()
    {
    }
    private function checkSession()
    {
    }
    /**
     * @return string
     */
    public function __toString()
    {
    }
}