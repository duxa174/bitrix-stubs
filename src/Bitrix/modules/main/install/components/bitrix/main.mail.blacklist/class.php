<?php

class MainMailBlacklistComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    const DEFAULT_NAV_KEY = "main-blacklist-page";
    const DEFAULT_PAGE_SIZE = 10;
    const DEFAULT_FILTER_ID = "MAIN_MAIL_BLACKLIST_FILTER";
    const DEFAULT_GRID_ID = "MAIN_MAIL_BLACKLIST_GRID";
    const ERROR_ACCESS_DENIED = "Access Denied";
    /** @var ErrorCollection $errors */
    protected $errors;
    /* signed params*/
    protected function listKeysSignedParameters()
    {
    }
    public function executeComponent()
    {
    }
    /*prepare component params*/
    public function prepareParams()
    {
    }
    protected function prepareNavigationParams()
    {
    }
    protected function prepareFilterParams()
    {
    }
    protected function prepareGridParams()
    {
    }
    protected function prepareNavigation()
    {
    }
    protected function prepareAccessParams()
    {
    }
    /* end prepare_component_params*/
    protected function checkAccess()
    {
    }
    /* data options */
    protected function getDataFields()
    {
    }
    protected function getDataFilters()
    {
    }
    protected function getOrder()
    {
    }
    protected function getFilters()
    {
    }
    protected function getOffset()
    {
    }
    protected function getLimit()
    {
    }
    /* end data options */
    /*prepare_data*/
    protected function prepareResult()
    {
    }
    /*grid options */
    protected function getGridColumns()
    {
    }
    protected function getGridDefaultSort()
    {
    }
    protected function getGridSortList()
    {
    }
    /* end_grid_options */
    protected function executeDelete(array $ids)
    {
    }
    protected function preparePost()
    {
    }
    /* Controllerable */
    public function configureActions()
    {
    }
    public function removeAction($id)
    {
    }
    protected function printErrors()
    {
    }
}