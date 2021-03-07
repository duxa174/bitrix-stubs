<?php

class ProductSearchComponent extends \CBitrixComponent
{
    const TABLE_ID_PREFIX = 'tbl_product_search';
    protected $iblockId;
    protected $arProps;
    protected $arSkuProps;
    protected $offersCatalog;
    protected $arPrices;
    /** @var array Grid headers */
    protected $arHeaders = \null;
    /** @var array Rows field list */
    protected $dataFields = \null;
    protected $activeSectionLabel;
    protected $simpleSearch;
    protected $offersIblockId;
    protected $iblockList;
    protected $gridOprtions;
    /** @var array */
    protected $visibleColumns = \null;
    /** @var array */
    protected $visiblePrices = \null;
    /** @var array */
    protected $visibleProperties = \null;
    /** @var array */
    protected $visibleFields = \null;
    protected $checkPermissions = \true;
    protected $activeSectionNavChain = array();
    protected $offers = array();
    protected static $elementsNamesCache = array();
    protected static $sectionsNamesCache = array();
    /**
     * @param $ID
     * @return mixed
     */
    public static function getElementName($ID)
    {
    }
    public static function getSectionName($ID)
    {
    }
    public static function getPropertyFieldSections($linkIblockId)
    {
    }
    public function onIncludeComponentLang()
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    public function executeComponent()
    {
    }
    protected function isAdminSection()
    {
    }
    protected function isFiltering()
    {
    }
    protected function isExternalContext()
    {
    }
    protected function getGridOptions()
    {
    }
    protected function checkAccess()
    {
    }
    protected function loadModules()
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool $bIncCnt
     * @param bool|array $arSelectedFields
     * @return CAdminResult|CDBResult
     */
    protected function getMixedList($arOrder = array('SORT' => 'ASC'), $arFilter = array(), $bIncCnt = \false, $arSelectedFields = \false)
    {
    }
    protected function getOffersIblockId()
    {
    }
    protected function loadAllSku(array $productIds)
    {
    }
    /**
     * @param array $arProduct
     * @return array|bool
     */
    protected function getProductSku($arProduct)
    {
    }
    /**
     * @param  \CDBResult $dbResultList
     * @return array
     */
    protected function makeItemsFromDbResult(\CDBResult $dbResultList)
    {
    }
    protected function getSkuPrices()
    {
    }
    protected function getJsCallbackName()
    {
    }
    protected function getJsEventName()
    {
    }
    protected function getUserId()
    {
    }
    protected function getCaller()
    {
    }
    protected function getLid()
    {
    }
    protected function getTableId()
    {
    }
    protected function getSubscription()
    {
    }
    protected function getStoreId()
    {
    }
    protected function getIblockId()
    {
    }
    protected function getIblock()
    {
    }
    protected function isAdvancedSearchAvailable()
    {
    }
    protected function getSectionId()
    {
    }
    protected function getActiveSectionLabel()
    {
    }
    protected function checkIblockAccess()
    {
    }
    protected function getFilterFields()
    {
    }
    protected function getFilterLabels()
    {
    }
    protected function getOffersCatalog()
    {
    }
    protected function getProps($flagAll = \false)
    {
    }
    protected function getSkuProps($flagAll = \false)
    {
    }
    protected function getPrices()
    {
    }
    /**
     * @return void
     */
    protected function loadHeaders()
    {
    }
    /**
     * @return array
     */
    protected function getHeaders()
    {
    }
    /**
     * @return void
     */
    protected function loadVisibleColumns()
    {
    }
    /**
     * @return array
     */
    protected function getVisibleColumns()
    {
    }
    /**
     * @return array
     */
    protected function getVisiblePrices()
    {
    }
    /**
     * @return array
     */
    protected function getVisibleProperties()
    {
    }
    /**
     * @return array
     */
    protected function getVisibleFields()
    {
    }
    protected function getFilter()
    {
    }
    protected function getSectionsTree($iblockId, $rootSectionId = 0, $activeSectionId = 0)
    {
    }
    protected function getSectionMargin($sectionId)
    {
    }
    protected function getIblockList()
    {
    }
    protected function getParentSectionId()
    {
    }
    protected function getListSort()
    {
    }
    protected function prepareComponentResult()
    {
    }
    protected function saveState()
    {
    }
    private function getPropsList($iblockId, $skuPropertyId = 0)
    {
    }
    private function filterProps(&$props)
    {
    }
    /* deprecated methods */
    /**
     * Return properties from product.
     *
     * @deprecated deprecated since catalog 16.5.3
     *
     * @param int $id		Product id.
     * @return array
     */
    protected function getItemProperies($id)
    {
    }
    /**
     * Returns a filter by element properties and product fields. Internal.
     *
     * @param array $filter
     * @return array
     */
    private static function getElementInherentFilter(array $filter)
    {
    }
    /**
     * @param array $filter
     * @return bool
     */
    private static function checkLoadSections(array $filter)
    {
    }
}