<?php

class CRestMarketplaceCategoryComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    private $curPage = "";
    private $titleName = "";
    private $items = array();
    private $topItems = array();
    private $newItems = array();
    private $saleItems = array();
    private $ajaxMode = \false;
    private $pageSizeDefault = 20;
    private $bannerTypeFeedback = 'FEEDBACK';
    public function onPrepareComponentParams($arParams)
    {
    }
    private function prepareUiFilter()
    {
    }
    private function prepareUiFilterPresets()
    {
    }
    private function getFilterQuery($filterData)
    {
    }
    protected function getPageSize()
    {
    }
    protected function setDefaultPageSize($size)
    {
    }
    private function getItemsByTag($tag)
    {
    }
    private function getItems()
    {
    }
    private function prepareBannerList($itemList)
    {
    }
    private function prepareItems(&$items)
    {
    }
    private function collectItems()
    {
    }
    private function mergeBanner($itemList, $bannerList)
    {
    }
    public function executeComponent()
    {
    }
    public function configureActions()
    {
    }
    protected function listKeysSignedParameters()
    {
    }
    public function getPageAction($filterMode = "default", $filterValue = \null)
    {
    }
    public function getNextPageAction($filterMode = "default", $filterValue = \null)
    {
    }
}