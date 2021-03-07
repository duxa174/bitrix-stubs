<?php

namespace Bitrix\Socialnetwork\Component;

abstract class EntitySelector extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    /** @var  Main\ErrorCollection */
    protected $errorCollection = null;
    protected $defaultSettings = [];
    protected $filter = [];
    protected $filterId = false;
    protected $filterPresets = [];
    protected $requestData = [];
    /**
     * Base constructor.
     * @param \CBitrixComponent|null $component		Component object if exists.
     */
    public function __construct($component = null)
    {
    }
    /**
     * @return void
     */
    public function onIncludeComponentLang()
    {
    }
    /**
     * @param array $params
     * @return array
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * @return void
     */
    public function executeComponent()
    {
    }
    /**
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * @param string $code
     * @return Main\Error|null
     */
    public function getErrorByCode($code)
    {
    }
    /**
     * @return array|Main\Error[]
     */
    public function getErrors()
    {
    }
    /**
     * @return void
     */
    protected function prepareRequest()
    {
    }
    /**
     * @return void
     */
    protected function prepareFilter()
    {
    }
    protected function getFilter()
    {
    }
    /**
     * @return void
     */
    protected function initDefaultSettings()
    {
    }
    protected function setFilterId($filterId = false)
    {
    }
    protected function getFilterId()
    {
    }
    protected function setFilterPresets($filterPresets = [])
    {
    }
    protected function getFilterPresets()
    {
    }
    protected function getCurrentUserId()
    {
    }
    protected function getWorkgroups()
    {
    }
    protected function setDefaultFilter($value = [])
    {
    }
    /**
     * @return void
     */
    protected function prepareResult()
    {
    }
    /**
     * @return array
     */
    protected function getDataFilter()
    {
    }
    /**
     * @return void
     */
    protected abstract function getData();
    /**
     * @return string
     */
    protected function getNavigationTitle()
    {
    }
}