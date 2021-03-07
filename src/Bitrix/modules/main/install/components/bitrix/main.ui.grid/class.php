<?php

/**
 * Class CMainUIGrid
 */
class CMainUIGrid extends \CBitrixComponent
{
    /** @var \CGridOptions $gridOptions */
    protected $gridOptions;
    /** @var Bitrix\Main\Web\Uri $uri */
    protected $uri;
    /** @var array $options */
    protected $options;
    /** @var array $showedColumnsList */
    protected $showedColumnsList;
    /** @var boolean $editDate default value $this->arResult["EDIT_DATE"] */
    protected $editDate = \false;
    /** @var boolean $allowEdit default value $this->arResult["ALLOW_EDIT"] */
    protected $allowEdit = \false;
    /** @var boolean $allowEditAll default value $this->arResult["ALLOW_EDIT_ALL"] */
    protected $allowEditAll = \false;
    /** @var boolean $allowInlineEdit default value $this->arResult["ALLOW_INLINE_EDIT"] */
    protected $allowInlineEdit = \false;
    /** @var boolean $allowInlineEditAll default value $this->arResult["ALLOW_INLINE_EDIT_ALL"] */
    protected $allowInlineEditAll = \false;
    /** @var array $dataForEdit default value $this->arResult["DATA_FOR_EDIT"] */
    protected $dataForEdit = array();
    /** @var array $columnsEditMeta default value $this->arResult["COLS_EDIT_META"] */
    protected $columnsEditMeta = array();
    /** @var array $columnsEditMetaAll default value $this->arResult["COLS_EDIT_META_ALL"] */
    protected $columnsEditMetaAll = array();
    /** @var string $navString default value $this->arResult["NAV_STRING"] */
    protected $navString = "";
    /** @var integer $totalRowsCount default value $this->arResult["TOTAL_ROWS_COUNT"] */
    protected $totalRowsCount = 0;
    /** @var boolean $showBottomPanel default value $this->arResult["SHOW_BOTTOM_PANEL"] */
    protected $showBottomPanel = \true;
    /** @var boolean $showMoreButton default value $this->arResult["SHOW_MORE_BUTTON"] */
    protected $showMoreButton = \false;
    protected $defaultPageSize = 20;
    protected $minColumnWidth = 70;
    protected $jsFolder = "/js/";
    protected $blocksFolder = "/blocks/";
    protected $cssFolder = "/css/";
    protected function validateColumn($column = array())
    {
    }
    protected function validateColumns($columns = array())
    {
    }
    protected function checkRequiredParams()
    {
    }
    /**
     * Prepares arParams
     * @method prepareParams
     * @return array
     */
    protected function prepareParams()
    {
    }
    /**
     * Prepares arResult
     * @method prepareResult
     * @return $this
     */
    protected function prepareResult()
    {
    }
    protected function prepareMessages($messages = array())
    {
    }
    protected static function prepareMessage($message = array())
    {
    }
    protected function prepareDepth()
    {
    }
    protected function prepareDefaultColumns()
    {
    }
    protected function prepareBackendUrl()
    {
    }
    protected function prepareEditorTypes()
    {
    }
    protected function preparePanelTypes()
    {
    }
    protected function preparePanelActions()
    {
    }
    protected function preparePageSizesJson()
    {
    }
    protected function prepareActionsListJson()
    {
    }
    protected function prepareActionsListCurrentJson()
    {
    }
    protected function prepareOptionsActions()
    {
    }
    /**
     * @return string
     */
    protected function prepareOptionsHandlerUrl()
    {
    }
    /**
     * Checks request is ajax
     * @return bool
     */
    protected function prepareIsAjax()
    {
    }
    /**
     * Checks request is internal
     * @return bool
     */
    protected function prepareIsInternalRequest()
    {
    }
    /**
     * Prepares aggregate data
     * @method prepareAggregate
     * @return array
     */
    protected function prepareAggregate()
    {
    }
    /**
     * Applies user settings
     * @method applyUserSettings
     * @return null
     */
    protected function applyUserSettings()
    {
    }
    protected function applyColumnsSticked()
    {
    }
    /**
     * Applies columns sort setting
     */
    protected function applyColumnsSort()
    {
    }
    /**
     * Applies rows sort setting
     */
    protected function applyRowsSort()
    {
    }
    /**
     * Applies custom column names
     * @method applyColumnsCustomNames
     * @return null
     */
    protected function applyColumnsCustomNames()
    {
    }
    /**
     * Applies custom column display
     * @method applyColumnsDisplay
     * @return null
     */
    protected function applyColumnsDisplay()
    {
    }
    /**
     * Applies custom column sizes
     * @return $this
     */
    protected function applyColumnsSizes()
    {
    }
    /**
     * Prepares next page url
     * @method prepareNextPageUrl
     * @return string URI
     */
    protected function prepareNextPageUrl()
    {
    }
    /**
     * Prepares next page number
     * @method prepareNextPage
     * @return int Page number
     */
    protected function prepareNextPage()
    {
    }
    /**
     * Prepares show more button
     * @method prepareShowMoreButton
     * @return boolean
     */
    protected function prepareShowMoreButton()
    {
    }
    /**
     * Prepares show bottom panels
     * @method prepareShowBottomPanel
     * @return boolean
     */
    protected function prepareShowBottomPanel()
    {
    }
    /**
     * Prepares total rows count
     * @method prepareTotalRowsCount
     * @return integer
     */
    protected function prepareTotalRowsCount()
    {
    }
    /**
     * Prepares pagination string
     * @method prepareNavString
     * @return string
     */
    protected function prepareNavString()
    {
    }
    /**
     * Prepares data for edit form
     * @method prepareDataForEdit
     * @return array
     */
    protected function prepareDataForEdit()
    {
    }
    /**
     * Prepares $this->arResult["ALLOW_INLINE_EDIT_ALL"] value
     * @method prepareAllowInlineEditAll
     * @return boolean
     */
    protected function prepareAllowInlineEditAll()
    {
    }
    /**
     * Prepares $this->arResult["ALLOW_INLINE_EDIT"] value
     * @method prepareAllowInlineEdit
     * @return boolean
     */
    protected function prepareAllowInlineEdit()
    {
    }
    /**
     * Prepares $this->arResult["ALLOW_EDIT"] value
     * @method prepareAllowEdit
     * @return boolean
     */
    protected function prepareAllowEdit()
    {
    }
    /**
     * Prepares $arResult["ALLOW_EDIT"] value
     * @method prepareAllowEdit
     * @return boolean
     */
    protected function prepareAllowEditAll()
    {
    }
    /**
     * Prepares $this->arResult["EDIT_DATE"]) value
     * @method prepareEditDate
     * @return boolean
     */
    protected function prepareEditDate()
    {
    }
    /**
     * Prepares $this->arResult["HAS_ACTION"]) value
     * @method prepareHasActions
     * @return boolean
     */
    protected function prepareHasActions()
    {
    }
    protected function compatibleActions($actions, &$row)
    {
    }
    protected function compatibleRow($row)
    {
    }
    /**
     * Prepares rows
     * @method prepareRows
     * @return array
     */
    protected function prepareRows()
    {
    }
    protected function prepareTileGridItems()
    {
    }
    protected function reformatRowsToTileGridItems($rows)
    {
    }
    protected function prepareColumnsEditMeta()
    {
    }
    /**
     * Prepares $this->arResult["COLS_EDIT_META_ALL"] value
     * @method prepareColumnsEditMetaAll
     * @return array
     */
    protected function prepareColumnsEditMetaAll()
    {
    }
    /**
     * Prepares $this->arResult["COLS_RESIZE_META"] value
     * @method prepareColumnsResizeMeta
     * @return array
     */
    protected function prepareColumnsResizeMeta()
    {
    }
    /**
     * Prepares $this->arResult["COLS_NAMES"] value
     * @method prepareColumnNames
     * @return array
     */
    protected function prepareColumnNames()
    {
    }
    /**
     * Gets deleted query string params
     * @method getDeleteParams
     * @return array params list
     */
    protected function getDeleteParams()
    {
    }
    /**
     * Gets options
     * @method getOptions
     * @return array
     */
    protected function getOptions()
    {
    }
    /**
     * @return Grid\Options|CGridOptions
     */
    protected function getGridOptions()
    {
    }
    /**
     * Gets current view options
     * @method getCurrentOptions
     * @return array
     */
    protected function getCurrentOptions()
    {
    }
    /**
     * Gets uri object
     * @method getUri
     * @return Bitrix\Main\Web\Uri instance with current request uri
     */
    protected function getUri()
    {
    }
    /**
     * Gets sort url
     * @method getSortUrl
     * @param  array $headerItem
     * @return string sort url
     */
    protected function getSortUrl(array $headerItem)
    {
    }
    protected function columnExists($id)
    {
    }
    /**
     * Gets showed columns list
     * @method getShowedColumnsList
     * @return array
     */
    protected function getShowedColumnsList()
    {
    }
    /**
     * Checks is user enabled column
     * @method isUserShowedColumn
     * @param  string $id column id
     * @return boolean
     */
    protected function isUserShowedColumn($id)
    {
    }
    /**
     * Prepares align value
     * @method prepareAlign
     * @param  array $headerItem header item
     * @return string css align property value
     */
    protected function prepareAlign($headerItem)
    {
    }
    /**
     * Prepares string
     * @method prepareString
     * @param  string $text source string
     * @return string prepared string
     */
    protected function prepareString($text)
    {
    }
    /**
     * Gets custom column names
     * @method getCustomNames
     * @return array [column_id] => column_name
     */
    protected function getCustomNames()
    {
    }
    /**
     * Prepares header name
     * @method prepareHeaderName
     * @param  array $headerItem header item
     * @return string prepared header name
     */
    protected function prepareHeaderName(array $headerItem)
    {
    }
    /**
     * Checks is shown header name for current header item
     * @method isShowHeaderName
     * @param  array $headerItem
     * @return boolean
     */
    protected function isShowHeaderName(array $headerItem)
    {
    }
    /**
     * Prepares sort order value
     * @method prepareSortOrder
     * @param  array $headerItem header item
     * @return string sort order value ["desc", "asc"]
     */
    protected function prepareSortOrder(array $headerItem)
    {
    }
    /**
     * Checks is shown current column
     * @method isShownColumn
     * @param  array $headerItem header item
     * @return boolean
     */
    protected function isShownColumn(array $headerItem)
    {
    }
    /**
     * Prepares sort state value
     * @method prepareSortState
     * @param  array $headerItem header item
     * @return string ["desc", "asc"]
     */
    protected function prepareSortState(array $headerItem)
    {
    }
    protected function prepareNextSortOrder(array $headerItem)
    {
    }
    protected function prepareSort($sort)
    {
    }
    protected function prepareEditable($column)
    {
    }
    /**
     * Prepares each column
     * @method prepareColumn
     * @param  array $column header item
     * @return array prepared header item
     */
    protected function prepareColumn(array $column)
    {
    }
    /**
     * Prepares sticked value
     * @param array $column
     * @return bool
     */
    protected function prepareSticked($column)
    {
    }
    protected function preparePreventDefault(array $column)
    {
    }
    protected function prepareColumnWidth(array $column)
    {
    }
    /**
     * Prepares additional class for column header
     * @param array $headerItem
     *
     * @return string
     */
    protected function prepareHeaderClass(array $headerItem)
    {
    }
    /**
     * Prepares each header items
     * @return array prepares header
     */
    protected function prepareColumnsAll()
    {
    }
    /**
     * Prepares visible headers
     * @method prepareHeaders
     * @return array
     */
    protected function prepareColumns()
    {
    }
    protected function prepareDefaultOptions()
    {
    }
    protected function getJsFolder()
    {
    }
    protected function getBlocksFolder()
    {
    }
    protected function getCssFolder()
    {
    }
    protected function includeScripts($folder)
    {
    }
    protected function includeComponentBlocks()
    {
    }
    protected function includeComponentScripts()
    {
    }
    protected static function sortMultilevelRows($rows, &$resultRows, $parent = 0, $depth = 0)
    {
    }
    protected static function normalizeParentIds(&$rows)
    {
    }
    protected static function restoreExpandedRowsState(&$rows, $expandedIds)
    {
    }
    protected static function restoreCollapsedGroupsState(&$rows, $collapsedIds)
    {
    }
    protected function prepareMultilevelRows()
    {
    }
    public function executeComponent()
    {
    }
}