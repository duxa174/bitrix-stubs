<?php

/**
 * Class SaleCrmSiteMaster
 */
class SaleCrmSiteMaster extends \CBitrixComponent
{
    /** @var string Full path to wizard directory */
    const WIZARD_DIR = __DIR__ . "/wizard/";
    /** @var string */
    const CRM_WIZARD_SITE_ID = "~CRM_WIZARD_SITE_ID";
    /** @var string Has the last step been reached? */
    const IS_SALE_CRM_SITE_MASTER_FINISH = "~IS_SALE_CRM_SITE_MASTER_FINISH";
    /** @var string */
    const IS_SALE_CRM_SITE_MASTER_STUB = "~IS_SALE_CRM_SITE_MASTER_STUB";
    const IS_CRM_SITE_MASTER_OPENED = "~IS_CRM_SITE_MASTER_OPENED";
    const ERROR_TYPE_COMPONENT = "COMPONENT";
    const ERROR_TYPE_ORDER = "ORDER";
    const ERROR_TYPE_WIZARD = "WIZARD";
    /** @var CWizardBase wizard */
    private $wizard;
    /** @var Tools\ModuleChecker $moduleChecker */
    private $moduleChecker;
    /** @var array default steps */
    private $defaultStep = [];
    /** @var array required steps */
    private $requiredStep = [];
    /** @var array variable for wizard */
    private $wizardVar = [];
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
    private function getDefaultSteps() : array
    {
    }
    /**
     * @return bool
     */
    private function isIntranetWizardExists() : bool
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
    private function getRequiredModules() : array
    {
    }
    /**
     * @return Tools\ModuleChecker
     */
    public function getModuleChecker()
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
     * @return array
     */
    private function getWizardVars()
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
     * Create wizard and add steps
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function createWizard()
    {
    }
    /**
     * @return CWizardBase
     */
    public function getWizard()
    {
    }
    /**
     * Set variables for wizard
     */
    private function setWizardVariables()
    {
    }
    /**
     * Check additional required step
     *
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function initSteps()
    {
    }
    /**
     * Add wizard steps to component's params
     */
    private function addStepsToResult()
    {
    }
    /**
     * Sort wizard's step
     */
    private function sortSteps()
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
     * @param $siteId
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function setCrmSiteId($siteId)
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function getCrmSiteId()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setSaleCrmSiteMasterFinish()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isSaleCrmSiteMasterFinish()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setSaleCrmSiteMasterStub()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setLandingSmnExtended()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getPathToOrderList()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function checkPersonType()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function checkAgents()
    {
    }
    private function checkBitrixVm()
    {
    }
    /**
     * @throws Main\LoaderException
     */
    private function checkB24Connection()
    {
    }
    private function checkPushServer()
    {
    }
    private function prepareGrid()
    {
    }
    /**
     * @return mixed|void
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function executeComponent()
    {
    }
    private function checkPermission()
    {
    }
    private function checkModules()
    {
    }
    private function checkSession()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function setMasterOpenOption()
    {
    }
    /**
     * @return string
     */
    public function __toString()
    {
    }
}