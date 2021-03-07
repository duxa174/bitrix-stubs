<?php

/**
 * Class CCatalogViewedProductsComponent
 *
 * No longer used by internal code and not recommended. Use "catalog.products.viewed" instead.
 *
 * @deprecated deprecated since catalog 17.0.5
 * @use \CatalogProductsViewedComponent
 */
class CCatalogViewedProductsComponent extends \CBitrixComponent
{
    const ACTION_BUY = 'BUY';
    const ACTION_ADD_TO_BASKET = 'ADD2BASKET';
    const ACTION_SUBSCRIBE = 'SUBSCRIBE_PRODUCT';
    const ACTION_ADD_TO_COMPARE_LIST = 'ADD_TO_COMPARE_LIST';
    /**
     * Primary data - viewed product.
     * @var array[]
     */
    protected $items = array();
    /**
     * Viewed products ids.
     * @var integer[]
     */
    private $productIds = array();
    /**
     * Helper array map: array("SKU_ID" => "PRODUCT_ID", ...)
     * @var array
     */
    private $productIdsMap = array();
    /**
     * Filter to fetch items.
     * Used in CIBlockElement::getList()
     * @var string[]
     */
    protected $filter = array();
    /**
     * Select fields for items.
     * Used in CIBlockElement::getList()
     * @var string[]
     */
    private $selectFields = array();
    /**
     * Wether module Sale included?
     * @var bool
     */
    protected $isSale = \true;
    /**
     * Wether module Currency included?
     * @var bool
     */
    protected $isCurrency = \true;
    /**
     * Errors list.
     * @var string[]
     */
    protected $errors = array();
    /**
     * Warnings list.
     * @var string[]
     */
    protected $warnings = array();
    /**
     * Util data for template.
     * @var array
     */
    protected $data = array();
    /**
     * Items separate by iblocks
     *
     * @var array
     */
    protected $iblockItems = array();
    /**
     * Link to items.
     *
     * @var array
     */
    protected $linkItems = array();
    /**
     * Url templates for items
     *
     * @var array
     */
    protected $urlTemplates = array();
    protected $needItemProperties = array();
    protected $oldPriceFields = [];
    /**
     * Load language file.
     */
    public function onIncludeComponentLang()
    {
    }
    /**
     * Is AJAX Request?
     * @return bool
     */
    protected function isAjax()
    {
    }
    protected function getUserId()
    {
    }
    /**
     * Return product quantity from request string
     * @return integer
     */
    protected function getProductQuantityFromRequest()
    {
    }
    /**
     * Return product product properties to add in basket
     * @return array
     */
    protected function getProductPropertiesFromRequest()
    {
    }
    /**
     * Process buy action.
     */
    protected function processBuyAction()
    {
    }
    /**
     * Process buy action.
     */
    protected function processAddToBasketAction()
    {
    }
    /**
     * Process buy action.
     */
    protected function processSubscribeAction()
    {
    }
    /**
     * Process request actions list
     * @return void
     */
    protected function doActionsList()
    {
    }
    /**
     * Process incoming request.
     * @return void
     */
    protected function processRequest()
    {
    }
    /**
     * Process Puy Product.
     *
     * @param int $productID
     * @param float $quantity
     * @param array $values
     * @param array $arRewriteFields
     * @throws void|Bitrix\Main\SystemException
     */
    protected function addProductToBasket($productID, $quantity, $values = array(), $arRewriteFields = array())
    {
    }
    /**
     * Check Required Modules
     * @throws Exception
     */
    protected function checkModules()
    {
    }
    /**
     * Prepare Component Params.
     *
     * @param array $params			Component parameters.
     * @return array
     */
    public function onPrepareComponentParams($params)
    {
    }
    protected function getSectionIdByCode($sectionCode = "")
    {
    }
    protected function getSectionIdByElement($elementId, $elementCode = '')
    {
    }
    protected function getProductIds()
    {
    }
    /**
     * Return viewed product ids map.
     *
     * @return array("KEY" => "VALUE")
     */
    protected function getProductIdsMap()
    {
    }
    /**
     * Returns catalog prices data by product.
     * @param array $item Product.
     * @return array
     */
    protected function getPriceDataByItem(array $item)
    {
    }
    /**
     * Resort $items field according to input ids parameter
     *
     * @param $productIds
     */
    protected function resortItemsByIds($productIds)
    {
    }
    /**
     * Create items links
     *
     * @return void
     */
    protected function makeItemsLinks()
    {
    }
    protected function separateItemsByIblock()
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
     * Get common data from cache.
     * @return mixed[]
     */
    protected function getReferences()
    {
    }
    protected function fillUrlTemplates()
    {
    }
    /**
     * Get items for view.
     * @return mixed[]  array('ID' => array(), 'ID' => array(), ...)
     */
    protected function getItems()
    {
    }
    /**
     * Gets catalog prices needed for component.
     *
     * @param array $priceCodes
     * @return array
     */
    protected function getCatalogPrices(array $priceCodes = array())
    {
    }
    /**
     * Get main data - viewed products.
     * @return void
     */
    protected function prepareData()
    {
    }
    /**
     * Fill system data.
     *
     * return void
     */
    protected function prepareSystemData()
    {
    }
    /**
     * Prepare data to render.
     * @return void
     */
    protected function formatResult()
    {
    }
    /**
     * set prices for all items
     * @return void
     */
    protected function setItemsPrices()
    {
    }
    /**
     * Sets measure for all viewed products.
     * @return void
     */
    protected function setItemsMeasure()
    {
    }
    /**
     * Add offers for each catalog product.
     * @return void
     */
    protected function setItemsOffers()
    {
    }
    /**
     * Prepares $this->filter for CIBlockElement::getList() method.
     * @return void
     */
    protected function prepareFilter()
    {
    }
    /**
     * Prepares $this->selectFields for CIBlockElement::getList() method.
     * @return void
     */
    protected function prepareSelectFields()
    {
    }
    /**
     * Returns element fields and old product fields.
     *
     * @return array
     */
    protected function getElementSelectFields() : array
    {
    }
    protected function getPriceSelectFields() : array
    {
    }
    protected function getPriceIds() : array
    {
    }
    protected function fillOldPriceFields() : void
    {
    }
    /**
     * Extract data from cache. No action by default.
     * @return bool
     */
    protected function extractDataFromCache()
    {
    }
    protected function putDataToCache()
    {
    }
    protected function abortDataCache()
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
     * Start Component
     */
    public function executeComponent()
    {
    }
}