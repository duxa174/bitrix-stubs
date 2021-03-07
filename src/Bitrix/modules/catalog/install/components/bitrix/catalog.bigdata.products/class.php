<?php

/**
 * Class \CatalogBigdataProductsComponent
 *
 * No longer used by internal code and not recommended. Use "catalog.section" instead.
 *
 * @deprecated deprecated since catalog 17.0.5
 * @use \CatalogSectionComponent
 */
class CatalogBigdataProductsComponent extends \CSaleBestsellersComponent
{
    protected $rcmParams;
    protected $ajaxItemsIds;
    protected $recommendationIdToProduct = array();
    /**
     * Prepare Component Params
     *
     * @param array $params
     * @return array
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * set prices for all items
     * @return array currency list
     */
    protected function setItemsPrices()
    {
    }
    /**
     * Add offers for each catalog product.
     * @return void
     */
    protected function setItemsOffers()
    {
    }
    protected function getPageParam($sUrlPath, $strParam = "", $arParamKill = array(), $get_index_page = \null)
    {
    }
    protected function getProductIds()
    {
    }
    protected function filterByParams($ids)
    {
    }
    protected function filterIdBySection($elementIds, $iblockId, $sectionId, $limit, $depth = 0)
    {
    }
    protected function filterByAvailability($ids)
    {
    }
    /**
     * Extract data from cache. No action by default.
     * @return bool
     */
    protected function extractDataFromCache()
    {
    }
    protected function getAdditionalCacheId()
    {
    }
    protected function getServiceRequestParamsByType($type)
    {
    }
    /**
     * Check action variable.
     *
     * @param array $params			Component params.
     * @return string
     */
    protected function prepareActionVariable($params)
    {
    }
    /**
     * Get additional data for cache
     *
     * @return array
     */
    protected function getAdditionalReferences()
    {
    }
    /**
     * Start Component
     */
    public function executeComponent()
    {
    }
    protected function getInjectedJs($items, $uniqId)
    {
    }
}