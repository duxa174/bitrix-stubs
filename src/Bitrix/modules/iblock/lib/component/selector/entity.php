<?php

namespace Bitrix\Iblock\Component\Selector;

abstract class Entity extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    const RESULT_ACTION_TYPE_NONE = 'none';
    const RESULT_ACTION_TYPE_EVENT = 'event';
    const RESULT_ACTION_TYPE_CALLBACK = 'callback';
    const RESULT_ACTION_TYPE_CLASS_METHOD = 'method';
    const RESULT_ACTION_TYPE_SLIDER = 'slider';
    const RESULT_DATA_TYPE_NONE = 'none';
    const RESULT_DATA_TYPE_SET = 'set';
    const RESULT_DATA_TYPE_FILTER = 'filter';
    const MODE_PAGE = 'page';
    const MODE_DIALOG = 'dialog';
    const MODE_SLIDER = 'slider';
    const STORAGE_GRID = 'GRID';
    const STORAGE_GRID_FILTER = 'GRID_FILTER';
    const STORAGE_ENTITY_IBLOCK = 'IBLOCK_SETTINGS';
    protected $useMode = self::MODE_PAGE;
    /** @var  Main\ErrorCollection */
    protected $errorCollection = null;
    /** @var Main\Grid\Options $gridConfig */
    protected $gridConfig = null;
    protected $storage = [];
    protected $defaultSettings = [];
    protected $rows = [];
    /** @var UI\PageNavigation $navigation */
    protected $navigation = null;
    protected $navigationString = '';
    protected $implicitPageNavigation = false;
    /** @var bool use filter in selector */
    protected $useGridFilter = true;
    /** @var UI\Filter\Options */
    protected $gridFilterConfig = null;
    protected $resultAction = ['TYPE' => self::RESULT_ACTION_TYPE_NONE, 'NAME' => '', 'DATA_TYPE' => self::RESULT_DATA_TYPE_NONE, 'DATA_SET' => []];
    protected $resultActionMap = [self::MODE_PAGE => [self::RESULT_ACTION_TYPE_EVENT, self::RESULT_ACTION_TYPE_CALLBACK, self::RESULT_ACTION_TYPE_CLASS_METHOD], self::MODE_DIALOG => [self::RESULT_ACTION_TYPE_EVENT, self::RESULT_ACTION_TYPE_CALLBACK, self::RESULT_ACTION_TYPE_CLASS_METHOD], self::MODE_SLIDER => [self::RESULT_ACTION_TYPE_EVENT, self::RESULT_ACTION_TYPE_CALLBACK, self::RESULT_ACTION_TYPE_CLASS_METHOD, self::RESULT_ACTION_TYPE_SLIDER]];
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
    protected function useImplicitPageNavigation()
    {
    }
    /**
     * @return bool
     */
    protected function isUsedImplicitPageNavigation()
    {
    }
    /**
     * @return void
     */
    protected function disableGridFilter()
    {
    }
    /**
     * @return bool
     */
    protected function isUsedGridFilter()
    {
    }
    /**
     * @param string $mode
     * @return void
     */
    protected function setUseMode($mode)
    {
    }
    /**
     * @return string
     */
    protected function getUseMode()
    {
    }
    /**
     * @return bool
     */
    protected function isPageMode()
    {
    }
    /**
     * @return bool
     */
    protected function isDialogWindowMode()
    {
    }
    /**
     * @return bool
     */
    protected function isSliderMode()
    {
    }
    /**
     * @return void
     */
    protected function initResultDescription()
    {
    }
    /**
     * @return bool
     */
    protected function isUsedSliderFilter()
    {
    }
    /**
     * @return void
     */
    protected function initEntitySettings()
    {
    }
    /**
     * @return void
     */
    protected function checkModules()
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
    protected function initDefaultSettings()
    {
    }
    /**
     * @return string
     */
    protected function getDefaultGridId()
    {
    }
    /**
     * @param string $gridId
     * @return string
     */
    protected static function createFilterId($gridId)
    {
    }
    /**
     * @param string $gridId
     * @return string
     */
    protected static function createNavigationId($gridId)
    {
    }
    /**
     * @return void
     */
    protected function initSettings()
    {
    }
    /**
     * @return void
     */
    protected function prepareResult()
    {
    }
    /* Client library, styles, etc tools */
    /**
     * @return void
     */
    protected function initClientScope()
    {
    }
    /**
     * @return array
     */
    protected function getClientExtensions()
    {
    }
    /**
     * @return array
     */
    protected function getClientStyles()
    {
    }
    /* Client library, styles, etc tools finish */
    /* Storage tools */
    /**
     * @param string $node
     * @param array $nodeValues
     * @return void
     */
    protected function fillStorageNode($node, array $nodeValues)
    {
    }
    /**
     * @param $node
     * @return array|null
     */
    protected function getStorageNode($node)
    {
    }
    /**
     * @param string $node
     * @param string $item
     * @param mixed $value
     * @return void
     */
    protected function setStorageItem($node, $item, $value)
    {
    }
    /**
     * @param string $node
     * @param string $item
     * @return mixed|null
     */
    protected function getStorageItem($node, $item)
    {
    }
    /**
     * @return boolean
     */
    protected function getShowXmlId()
    {
    }
    /**
     * @return string
     */
    protected function getGridId()
    {
    }
    /**
     * @return string
     */
    protected function getFilterId()
    {
    }
    /**
     * @return string
     */
    protected function getNavigationId()
    {
    }
    /**
     * @return array
     */
    protected function getPageSizes()
    {
    }
    /* Storage tools finish */
    /**
     * @return void
     */
    protected function initGrid()
    {
    }
    /**
     * @return void
     */
    protected function initGridConfig()
    {
    }
    /**
     * @return void
     */
    protected function initGridColumns()
    {
    }
    /**
     * @return void
     */
    protected function initGridPageNavigation()
    {
    }
    /**
     * @return array
     */
    protected function getGridNavigationParams()
    {
    }
    /**
     * @return array
     */
    protected function getGridFilterDefinition()
    {
    }
    /**
     * @return array
     */
    protected function getGridFilterRows()
    {
    }
    /**
     * @return string|null
     */
    protected function getQuickSearchField()
    {
    }
    /**
     * @return array
     */
    protected function getQuickSearchDescription()
    {
    }
    /**
     * @return array
     */
    protected function getGridColumnsDescription()
    {
    }
    /**
     * @return array
     */
    protected function getUserGridColumnIds()
    {
    }
    /**
     * @return array
     */
    protected function getColumns()
    {
    }
    /**
     * @return array
     */
    protected function getVisibleColumns()
    {
    }
    /**
     * @return void
     */
    protected function initGridOrder()
    {
    }
    /**
     * @param array $order
     * @return array
     */
    protected function modifyGridOrder(array $order)
    {
    }
    /**
     * @return void
     */
    protected function initGridFilter()
    {
    }
    /**
     * @return void
     */
    protected function initGridFilterConfig()
    {
    }
    /**
     * @return void
     */
    protected function initGridFilterSettings()
    {
    }
    /**
     * @return void
     */
    protected function initGridFilterCurrentPreset()
    {
    }
    /**
     * @return array
     */
    protected function prepareGridFilterCurrentPreset()
    {
    }
    /**
     * @return array
     */
    protected function getDataOrder()
    {
    }
    /**
     * @return array
     */
    protected function getDataFields()
    {
    }
    /**
     * @return array
     */
    protected function getDataFilter()
    {
    }
    /**
     * @return string
     */
    protected function getDataTitleField()
    {
    }
    /**
     * @return array
     */
    protected function getInternalFilter()
    {
    }
    /**
     * @return array
     */
    protected function getUserFilter()
    {
    }
    /**
     * @return array
     */
    protected function prepareUserFilter()
    {
    }
    /**
     * @param array $filter
     * @return array
     */
    protected function compileUserFilter(array $filter)
    {
    }
    /**
     * @param array $field
     * @param string $operator
     * @return string
     */
    private function getFilterOperator(array $field, $operator)
    {
    }
    /**
     * @param array &$result
     * @param array $items
     * @param array $field
     * @return void
     */
    private function addFilterItems(array &$result, array $items, array $field)
    {
    }
    /**
     * @param array &$result
     * @param array $filter
     * @param string $fieldId
     * @param array $field
     * @return void
     */
    private function addFilterQuickSearchValue(array &$result, array $filter, $fieldId, array $field)
    {
    }
    /**
     * @param array &$result
     * @param array $filter
     * @param string $fieldId
     * @param array $field
     * @return void
     */
    private function addFilterNumberValue(array &$result, array $filter, $fieldId, array $field)
    {
    }
    /**
     * @param array &$result
     * @param array $filter
     * @param string $fieldId
     * @param array $field
     * @return void
     */
    private function addFilterDateValue(array &$result, array $filter, $fieldId, array $field)
    {
    }
    /**
     * @param array &$result
     * @param array $filter
     * @param string $fieldId
     * @param array $field
     * @return void
     */
    private function addFilterListValue(array &$result, array $filter, $fieldId, array $field)
    {
    }
    /**
     * @param array &$result
     * @param array $filter
     * @param string $fieldId
     * @param array $field
     * @return void
     */
    private function addFilterCheckboxValue(array &$result, array $filter, $fieldId, array $field)
    {
    }
    /**
     * @param array &$result
     * @param array $filter
     * @param string $fieldId
     * @param array $field
     * @return void
     */
    private function addFilterDestSelectorValue(array &$result, array $filter, $fieldId, array $field)
    {
    }
    /**
     * @param array &$result
     * @param array $filter
     * @param string $fieldId
     * @param array $field
     * @return void
     */
    private function addFilterStringValue(array &$result, array $filter, $fieldId, array $field)
    {
    }
    /**
     * @return void
     */
    protected function getData()
    {
    }
    /**
     * @param \CDBResult $iterator
     * @return void
     */
    protected function setImplicitNavigationData(\CDBResult $iterator)
    {
    }
    /**
     * @return string
     */
    protected function getNavigationTitle()
    {
    }
    /**
     * @return array
     */
    protected function getGridRows()
    {
    }
    /**
     * @return array
     */
    protected function getBinaryDictionary()
    {
    }
    /**
     * @param array $row
     * @return string|null
     */
    protected function getRowAction(array $row)
    {
    }
    /**
     * @param array $row
     * @return array
     */
    protected function getSliderResultDataSet(array $row)
    {
    }
    /**
     * @param array $row
     * @return bool
     */
    protected static function isGridFilterRow(array $row)
    {
    }
}