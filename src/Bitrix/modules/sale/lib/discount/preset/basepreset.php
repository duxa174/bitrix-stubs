<?php

namespace Bitrix\Sale\Discount\Preset;

abstract class BasePreset
{
    const FINAL_STEP = 'FINALSTEP';
    const STEP_NAME_VAR = '__next_step';
    const RUN_PREV_STEP_NAME_VAR = '__run_prev_step';
    const MODE_SHOW = 2;
    const MODE_SAVE = 3;
    const ACTION_TYPE_DISCOUNT = 'Discount';
    const ACTION_TYPE_EXTRA = 'Extra';
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var  \Bitrix\Main\HttpRequest */
    protected $request;
    /** @var string */
    protected $nextStep;
    /** @var string */
    protected $stepTitle;
    /** @var string */
    protected $stepDescription;
    /** @var string */
    private $stepResult;
    /** @var State */
    private $stepResultState;
    /** @var array */
    private $discount;
    /** @var bool */
    private $restrictedGroupsMode = false;
    /**
     * @return string the fully qualified name of this class.
     */
    public static function className()
    {
    }
    /**
     * @param BasePreset $classObject
     * @return string the short qualified name of this class.
     * @throws \ReflectionException
     */
    public static function classShortName(\Bitrix\Sale\Discount\Preset\BasePreset $classObject)
    {
    }
    public function __construct()
    {
    }
    public function enableRestrictedGroupsMode($state)
    {
    }
    public function isRestrictedGroupsModeEnabled()
    {
    }
    protected function init()
    {
    }
    public function hasErrors()
    {
    }
    /**
     * @return Error[]
     */
    public function getErrors()
    {
    }
    public function getStepNumber()
    {
    }
    /**
     * @return State
     */
    protected function getState()
    {
    }
    public function getView()
    {
    }
    protected function isRunningPrevStep()
    {
    }
    public function executeAjaxAction($actionName)
    {
    }
    public function processAjaxActionGetProductDetails(array $params = array())
    {
    }
    private function getProductInfo($elementId)
    {
    }
    public function exec()
    {
    }
    private function runStep($actionName, \Bitrix\Sale\Discount\Preset\State $state, $mode = self::MODE_SHOW)
    {
    }
    private function getStepName()
    {
    }
    /**
     * @return array
     */
    public function getDiscount()
    {
    }
    protected function isDiscountEditing()
    {
    }
    /**
     * @param array $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
    }
    /**
     * @return string
     */
    public function getStepTitle()
    {
    }
    /**
     * @param string $stepTitle
     */
    public function setStepTitle($stepTitle)
    {
    }
    /**
     * @return string
     */
    public function getStepDescription()
    {
    }
    /**
     * @param string $stepDescription
     * @return $this
     */
    public function setStepDescription($stepDescription)
    {
    }
    /**
     * Returns sort to sorting presets in category row.
     * @return int
     */
    public function getSort()
    {
    }
    /**
     * @return string
     */
    public abstract function getTitle();
    /**
     * Tells if preset is available or not. It's possible that preset can't work in some license.
     * @return bool
     */
    public function isAvailable()
    {
    }
    /**
     * @return string
     */
    public abstract function getDescription();
    public function getExtendedDescription()
    {
    }
    /**
     * @return string
     */
    public abstract function getFirstStepName();
    /**
     * @return int
     */
    public function getCategory()
    {
    }
    /**
     * @return string
     */
    public function getNextStep()
    {
    }
    public function hasPrevStep()
    {
    }
    public function isLastStep()
    {
    }
    /**
     * @param string $nextStep
     * @return $this
     */
    public function setNextStep($nextStep)
    {
    }
    public function beginForm(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function endForm(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    protected function filterUserGroups(array $discountGroups)
    {
    }
    /**
     * @param State $state
     * @return array Discount fields.
     */
    public function generateDiscount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    /**
     * @param array $discountFields
     * @return State $state
     */
    public function generateState(array $discountFields)
    {
    }
    protected final function normalizeDiscountFields(array $discountFields)
    {
    }
    protected function updateDiscount($id, array $discountFields)
    {
    }
    protected function addDiscount(array $discountFields)
    {
    }
    public function processShowFinalStep(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    protected function getUserGroupsByDiscount($discountId)
    {
    }
    protected function getSiteList()
    {
    }
    private function getSaleSiteList()
    {
    }
    private function getFullSiteList()
    {
    }
    protected function processShowInputNameInternal(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    protected function processSaveInputNameInternal(\Bitrix\Sale\Discount\Preset\State $state, $nextStep)
    {
    }
    protected function processShowCommonSettingsInternal(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    protected function processSaveCommonSettingsInternal(\Bitrix\Sale\Discount\Preset\State $state, $nextStep = self::FINAL_STEP)
    {
    }
    protected function getLabelDiscountValue()
    {
    }
    protected function renderDiscountValue(\Bitrix\Sale\Discount\Preset\State $state, $currency)
    {
    }
    protected function getTypeOfDiscount()
    {
    }
    /**
     * @return array
     */
    protected function getAllowableUserGroups()
    {
    }
}