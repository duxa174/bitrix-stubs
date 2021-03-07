<?php

namespace Bitrix\Iblock\Component;

abstract class Element extends \Bitrix\Iblock\Component\Base
{
    public function onPrepareComponentParams($params)
    {
    }
    protected function getIblockParams(&$params)
    {
    }
    protected function checkModules()
    {
    }
    protected function initialLoadAction()
    {
    }
    protected function processResultData()
    {
    }
    /**
     * Check by ID if element is correct.
     *
     * @return bool
     */
    protected function checkElementId()
    {
    }
    protected function initCatalogInfo()
    {
    }
    /**
     * @return void
     */
    protected function initIblockPropertyFeatures()
    {
    }
    /**
     * @param int $iblockId
     * @return void
     */
    protected function loadDisplayPropertyCodes($iblockId)
    {
    }
    protected function getSelect()
    {
    }
    protected function getFilter()
    {
    }
    protected function showWorkflowHistory()
    {
    }
    protected function getElementList($iblockId, $products)
    {
    }
    protected function getSection()
    {
    }
    protected function getIblockElements($elementIterator)
    {
    }
    protected function modifyDisplayProperties($iblock, &$iblockElements)
    {
    }
    protected function chooseOffer($offers, $iblockId)
    {
    }
    protected function getCacheKeys()
    {
    }
    /**
     * Fill additional keys for component cache.
     *
     * @param array &$resultCacheKeys		Cached result keys.
     * @return void
     */
    protected function initAdditionalCacheKeys(&$resultCacheKeys)
    {
    }
    protected function initAdminIconsPanel()
    {
    }
    protected function sendCounters()
    {
    }
    protected function saveViewedProduct()
    {
    }
    protected function initMetaData()
    {
    }
    protected function getAdditionalCacheId()
    {
    }
    protected function getComponentCachePath()
    {
    }
    protected function makeOutputResult()
    {
    }
    protected function prepareTemplateParams()
    {
    }
    protected function getTemplateIblockParams(&$params)
    {
    }
    protected function getTemplateDefaultParams()
    {
    }
    protected function editTemplateData()
    {
    }
    protected function editTemplateOfferProps(&$item)
    {
    }
    protected function editTemplateProductSets(&$item)
    {
    }
    protected function editTemplateJsOffers(&$item, $offerSet)
    {
    }
    public function getTemplateSkuPropList()
    {
    }
    protected function editTemplateItems(&$item)
    {
    }
}