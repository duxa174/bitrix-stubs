<?php

namespace Bitrix\Report\VisualConstructor;

/**
 * Class AnalyticBoard
 * @package Bitrix\Report\VisualConstructor
 */
class AnalyticBoard
{
    private $title;
    private $boardKey;
    private $machineKey;
    private $filter;
    private $batchKey = null;
    private $buttons = [];
    private $disabled = false;
    private $stepperEnabled = false;
    private $stepperIds = [];
    private $limited = false;
    private $limitComponentParams = [];
    private $isExternal = false;
    private $externalUrl = "";
    public function __construct($boardId = '')
    {
    }
    /**
     * @return mixed
     */
    public function getTitle()
    {
    }
    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
    }
    /**
     * @return mixed
     */
    public function getBoardKey()
    {
    }
    /**
     * @param mixed $boardKey
     */
    public function setBoardKey($boardKey)
    {
    }
    /**
     * @return mixed
     */
    public function getMachineKey()
    {
    }
    /**
     * @param mixed $machineKey
     */
    public function setMachineKey($machineKey)
    {
    }
    /**
     * @return Filter
     */
    public function getFilter()
    {
    }
    /**
     * @param Filter $filter
     */
    public function setFilter(\Bitrix\Report\VisualConstructor\Helper\Filter $filter)
    {
    }
    /**
     * @return string
     */
    public function getBatchKey()
    {
    }
    /**
     * @param string $batchKey
     */
    public function setBatchKey($batchKey)
    {
    }
    /**
     * @return bool
     */
    public function isNestedInBatch()
    {
    }
    /**
     * @param BoardButton $button
     */
    public function addButton(\Bitrix\Report\VisualConstructor\BoardButton $button)
    {
    }
    public function getButtonsContent()
    {
    }
    /**
     * @return BoardButton[]
     */
    public function getButtons()
    {
    }
    /**
     * @return bool
     */
    public function isDisabled()
    {
    }
    /**
     * @param bool $disabled
     */
    public function setDisabled($disabled)
    {
    }
    public function addFeedbackButton()
    {
    }
    /**
     * @return bool
     */
    public function isStepperEnabled()
    {
    }
    public function getStepperIds()
    {
    }
    public function setStepperIds($stepperIds = [])
    {
    }
    /**
     * @param bool $stepperEnabled
     */
    public function setStepperEnabled($stepperEnabled)
    {
    }
    public function isLimited()
    {
    }
    private function getLimitComponentOptions()
    {
    }
    public function getLimitComponentName()
    {
    }
    public function getLimitComponentTemplateName()
    {
    }
    public function getLimitComponentParams()
    {
    }
    public function setLimit($limitComponentParams, $limit = false)
    {
    }
    /**
     * @return bool
     */
    public function isExternal() : bool
    {
    }
    /**
     * @param bool $isExternal
     */
    public function setExternal(bool $isExternal) : void
    {
    }
    /**
     * @return string
     */
    public function getExternalUrl() : string
    {
    }
    /**
     * @param string $externalUrl
     */
    public function setExternalUrl(string $externalUrl) : void
    {
    }
    public function getDisplayComponentName()
    {
    }
    public function getDisplayComponentTemplate()
    {
    }
    public function getDisplayComponentParams()
    {
    }
    /**
     * Special actions to perform with board reset, required by some boards
     */
    public function resetToDefault()
    {
    }
}