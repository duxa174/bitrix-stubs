<?php

class MainUfListComponent extends \Bitrix\Main\UserField\ConfigComponent
{
    protected const NAV_PARAM_NAME = 'page';
    protected $gridOptions;
    protected $pageNavigation;
    protected $gridId;
    protected function init() : void
    {
    }
    public function executeComponent()
    {
    }
    protected function getGridId() : string
    {
    }
    protected function getGridOptions() : \Bitrix\Main\Grid\Options
    {
    }
    protected function getPageNavigation() : \Bitrix\Main\UI\PageNavigation
    {
    }
    protected function prepareGrid(array $fields) : array
    {
    }
    protected function getFieldColumns(array $field) : array
    {
    }
    protected function getDefaultSort() : array
    {
    }
    protected function getListFilter() : array
    {
    }
    protected function getGridColumns() : array
    {
    }
    protected function getBooleanInputNames() : array
    {
    }
    protected function getUserFieldConfigDetailUrl(int $fieldId = 0) : ?\Bitrix\Main\Web\Uri
    {
    }
}