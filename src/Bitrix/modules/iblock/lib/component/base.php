<?php

namespace Bitrix\Iblock\Component;

abstract class Base extends \CBitrixComponent
{
    const ACTION_BUY = 'BUY';
    const ACTION_ADD_TO_BASKET = 'ADD2BASKET';
    const ACTION_SUBSCRIBE = 'SUBSCRIBE_PRODUCT';
    const ACTION_ADD_TO_COMPARE = 'ADD_TO_COMPARE_LIST';
    const ACTION_DELETE_FROM_COMPARE = 'DELETE_FROM_COMPARE_LIST';
    const ERROR_TEXT = 1;
    const ERROR_404 = 2;
    const PARAM_TITLE_MASK = '/^[A-Za-z_][A-Za-z01-9_]*$/';
    const SORT_ORDER_MASK = '/^(asc|desc|nulls)(,asc|,desc|,nulls){0,1}$/i';
    private $action = '';
    private $cacheUsage = true;
    private $extendedMode = true;
    /** @var ErrorCollection */
    protected $errorCollection;
    protected $separateLoading = false;
    protected $selectFields = array();
    protected $filterFields = array();
    protected $sortFields = array();
    /** @var array Array of ids to show directly */
    protected $productIds = array();
    protected $productIdMap = array();
    protected $iblockProducts = array();
    protected $elements = array();
    protected $elementLinks = array();
    protected $productWithOffers = array();
    protected $productWithPrices = array();
    protected $globalFilter = array();
    protected $navParams = false;
    protected $useCatalog = false;
    protected $isIblockCatalog = false;
    protected $useDiscountCache = false;
    /** @var bool Fill old format $arResult and enable deprecated functionality for existing components (catalog.section, catalog.element, etc) */
    protected $compatibleMode = false;
    protected $oldData = array();
    /** @var array Item prices (new format) */
    protected $prices = array();
    protected $calculatePrices = array();
    protected $measures = array();
    protected $ratios = array();
    protected $quantityRanges = array();
    protected $storage = array();
    protected $recommendationIdToProduct = array();
    /**
     * Base constructor.
     * @param \CBitrixComponent|null $component		Component object if exists.
     */
    public function __construct($component = null)
    {
    }
    /**
     * Return current action.
     *
     * @return string
     */
    public function getAction()
    {
    }
    /**
     * Action setter.
     *
     * @param string $action		Action code.
     * @return void
     */
    protected function setAction($action)
    {
    }
    /**
     * Return true if errors exist.
     *
     * @return bool
     */
    protected function hasErrors()
    {
    }
    /**
     * Errors processing depending on error codes.
     *
     * @return bool
     */
    protected function processErrors()
    {
    }
    /**
     * Cache usage setter. Enable it to ignore cache.
     *
     * @param bool $state	Cache usage mode.
     * @return $this
     */
    protected function setCacheUsage($state)
    {
    }
    /**
     * Check if cache disabled.
     *
     * @return bool
     */
    public function isCacheDisabled()
    {
    }
    /**
     * Extended mode setter.
     * Enabled - adds result_modifier.php template logic in component class.
     * In both cases(true or false) result_modifier.php will be included.
     *
     * @param bool $state	New extended mode.
     * @return $this
     */
    protected function setExtendedMode($state)
    {
    }
    /**
     * Check if extended mode is enabled.
     *
     * @return bool
     */
    public function isExtendedMode()
    {
    }
    /**
     * Enable/disable fill old keys in result data and use of outdated settings. Strict use only for catalog.element, .section, .top, etc.
     *
     * @param bool $state		Enable/disable state.
     * @return void
     */
    protected function setCompatibleMode($state)
    {
    }
    /**
     * Return state filling old keys in result data. This method makes no sense for the new components.
     *
     * @return bool
     */
    public function isEnableCompatible()
    {
    }
    /**
     * @param $state
     * @return void
     */
    protected function setSeparateLoading($state)
    {
    }
    /**
     * @return bool
     */
    protected function isSeparateLoading()
    {
    }
    /**
     * Return settings script path with modified time postfix.
     *
     * @param string $componentPath		Path to component.
     * @param string $settingsName		Settings name.
     * @return string
     */
    public static function getSettingsScript($componentPath, $settingsName)
    {
    }
    /**
     * Processing of component parameters.
     *
     * @param array $params			Raw component parameters values.
     * @return mixed
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * Check necessary modules for component.
     *
     * @return bool
     */
    protected function checkModules()
    {
    }
    /**
     * Fill discount cache before price calculation.
     *
     * @return void
     */
    protected function initCatalogDiscountCache()
    {
    }
    /**
     * Clear discount cache.
     *
     * @return void
     */
    protected function clearCatalogDiscountCache()
    {
    }
    /**
     * Check the settings for the output price currency.
     *
     * @return void
     */
    protected function initCurrencyConvert()
    {
    }
    /**
     * Check offers iblock.
     *
     * @param int $iblockId		Iblock Id.
     * @return bool
     */
    protected function offerIblockExist($iblockId)
    {
    }
    /**
     * Load used iblocks info to component storage.
     *
     * @return void
     */
    protected function initCatalogInfo()
    {
    }
    protected function getProductInfo($productId)
    {
    }
    /**
     * Load catalog prices in component storage.
     *
     * @return void
     */
    protected function initPrices()
    {
    }
    /**
     * Load catalog vats in component storage.
     *
     * @return void
     */
    protected function initVats()
    {
    }
    /**
     * @return void
     */
    protected function initIblockPropertyFeatures()
    {
    }
    /**
     * Initialize and data process of iblock elements.
     *
     * @return void
     */
    protected function initElementList()
    {
    }
    /**
     * Return elements.
     *
     * @param \CIBlockResult $elementIterator		Iterator.
     * @return mixed
     */
    protected abstract function getIblockElements($elementIterator);
    /**
     * Sort elements by original position (in case when product ids used in GetList).
     *
     * @return void
     */
    protected function sortElementList()
    {
    }
    /**
     * Create link to elements for fast access.
     *
     * @return void
     */
    protected function makeElementLinks()
    {
    }
    /**
     * Return array of iblock element ids to show for "initialLoad" action.
     *
     * @return bool|array
     */
    protected function getProductIds()
    {
    }
    /**
     * Return array of iblock element ids to show for "bigDataLoad" action.
     *
     * @return array
     */
    protected function getBigDataProductIds()
    {
    }
    /**
     * Return recommended best seller products ids.
     *
     * @param array $ids		Products id.
     * @return array
     */
    protected function getBestSellersRecommendation($ids)
    {
    }
    /**
     * Return recommended most viewed products ids.
     *
     * @param array $ids		Products id.
     * @return array
     */
    protected function getMostViewedRecommendation($ids)
    {
    }
    /**
     * Return random products ids.
     *
     * @param array $ids		Products id.
     * @return array
     */
    protected function getRandomRecommendation($ids)
    {
    }
    /**
     * Filter correct product ids.
     *
     * @param array $ids				Items ids.
     * @param array $filterIds			Filtered ids.
     * @param bool $useSectionFilter	Check filter by section.
     * @return array
     */
    protected function filterByParams($ids, $filterIds = array(), $useSectionFilter = true)
    {
    }
    /**
     * Return section ID by CODE.
     *
     * @param string $sectionCode			Iblock section code.
     * @return int
     */
    protected function getSectionIdByCode($sectionCode = '')
    {
    }
    /**
     * Return section ID by element ID.
     *
     * @param int $elementId				Iblock element id.
     * @param string $elementCode			Iblock element code.
     * @return int
     */
    protected function getSectionIdByElement($elementId, $elementCode = '')
    {
    }
    protected function filterIdBySection($elementIds, $iblockId, $sectionId, $limit, $depth = 0)
    {
    }
    /**
     * Return random element ids to fill partially empty space in row when lack of big data elements.
     * Does not fill rows with no big data elements at all.
     *
     * @param array $ids
     * @return int
     */
    protected function getRecommendationLimit($ids)
    {
    }
    protected function getBigDataServiceRequestParams($type = '')
    {
    }
    /**
     * Return best seller product ids.
     *
     * @return array
     */
    protected function getBestSellersProductIds()
    {
    }
    protected function getBestSellersFilter()
    {
    }
    /**
     * Return array of iblock element ids to show for "initialLoad" action.
     *
     * @return array
     */
    protected function getDeferredProductIds()
    {
    }
    protected function getProductIdMap($productIds)
    {
    }
    /**
     * Returns ids map: SKU_PRODUCT_ID => PRODUCT_ID.
     *
     * @param array $originalIds			Input products ids.
     * @return array
     */
    public static function getProductsMap(array $originalIds = array())
    {
    }
    /**
     * Return array map of iblock products.
     * 3 following cases to process $productIdMap:
     * ~ $productIdMap is array with ids	- show elements with presented ids
     * ~ $productIdMap is empty array		- nothing to show
     * ~ $productIdMap === false				- show elements via filter(e.g. $arParams['IBLOCK_ID'],  arParams['ELEMENT_ID'])
     *
     * @return array
     */
    protected function getProductsSeparatedByIblock()
    {
    }
    /**
     * Return default measure.
     *
     * @return array|null
     */
    protected function getDefaultMeasure()
    {
    }
    /**
     * Return \CIBlockResult iterator for current iblock ID.
     *
     * @param int $iblockId
     * @param array|int $products
     * @return \CIBlockResult|int
     */
    protected function getElementList($iblockId, $products)
    {
    }
    /**
     * @param array $params
     * @return \CIBlockResult
     */
    protected function getSeparateList(array $params)
    {
    }
    /**
     * @param array $params
     * @return \CIBlockResult
     */
    protected function getFullIterator(array $params)
    {
    }
    /**
     * Initialization of general query fields.
     *
     * @return void
     */
    protected function initQueryFields()
    {
    }
    /**
     * Return select fields to execute.
     *
     * @return array
     */
    protected function getSelect()
    {
    }
    /**
     * Return filter fields to execute.
     *
     * @return array
     */
    protected function getFilter()
    {
    }
    /**
     * Return sort fields to execute.
     *
     * @return array
     */
    protected function getSort()
    {
    }
    /**
     * Prepare element getList parameters.
     *
     * @return void
     */
    protected function prepareElementQueryFields()
    {
    }
    /**
     * Prepare select, filter, order.
     *
     * @param array $select
     * @param array $filter
     * @param array $order
     * @return array
     */
    protected function prepareQueryFields(array $select, array $filter, array $order)
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Iblock\Component\Base::prepareElementQueryFields
     */
    protected function initPricesQuery()
    {
    }
    /**
     * Return select product fields to execute.
     *
     * @param int $iblockId
     * @param array $selectFields
     * @return array
     */
    protected function getProductSelect($iblockId, array $selectFields)
    {
    }
    /**
     * Returns product fields for iblock.
     *
     * @param int $iblockId
     * @return array
     */
    protected function getProductFields($iblockId)
    {
    }
    /**
     * Convert old product selected fields to new.
     *
     * @param array $select
     * @return array
     */
    protected function convertSelect(array $select)
    {
    }
    /**
     * Convert old product filter keys to new.
     *
     * @param array $filter
     * @return array
     */
    protected function convertFilter(array $filter)
    {
    }
    /**
     * Convert old product order keys to new.
     *
     * @param array $order
     * @return array
     */
    protected function convertOrder(array $order)
    {
    }
    protected function getIblockSelectFields($iblockId)
    {
    }
    /**
     * Return parsed conditions array.
     *
     * @param $condition
     * @param $params
     * @return array
     */
    protected function parseCondition($condition, $params)
    {
    }
    protected function parseConditionLevel($condition, $params)
    {
    }
    protected function parseConditionName(array $condition)
    {
    }
    protected function parseConditionOperator($condition)
    {
    }
    protected function parseConditionValue($condition, $name)
    {
    }
    protected function parsePropertyCondition(array &$result, array $condition, $params)
    {
    }
    /**
     * Process element data to set in $arResult.
     *
     * @param array &$element
     * @return void
     */
    protected function processElement(array &$element)
    {
    }
    /**
     * Fill various common fields for element.
     *
     * @param array &$element			Element data.
     * @return void
     */
    protected function modifyElementCommonData(array &$element)
    {
    }
    /**
     * Add Hermitage button links for element.
     *
     * @param array &$element			Element data.
     * @return void
     */
    protected function setElementPanelButtons(&$element)
    {
    }
    /**
     * Process element display properties by iblock parameters.
     *
     * @param int $iblock					Iblock ID.
     * @param array &$iblockElements		Items.
     * @return void
     */
    protected function modifyDisplayProperties($iblock, &$iblockElements)
    {
    }
    protected function getPropertyList($iblock, $propertyCodes)
    {
    }
    /**
     * Clear products data.
     *
     * @return void
     */
    protected function clearItems()
    {
    }
    /**
     * Load measure ratios for items.
     *
     * @param array $itemIds		Items id list.
     *
     * @return void
     */
    protected function loadMeasureRatios(array $itemIds)
    {
    }
    /**
     * Return default empty ratio (unexist in database).
     *
     * @return array
     */
    protected function getEmptyRatio()
    {
    }
    /**
     * Init measure for items.
     *
     * @param array &$items			Items list.
     * @return void
     */
    protected function initItemsMeasure(array &$items)
    {
    }
    /**
     * Return measure ids for items.
     *
     * @param array $items			Items data.
     * @return array
     */
    protected function getMeasureIds(array $items)
    {
    }
    /**
     * Load measures data.
     *
     * @param array $measureIds
     * @return void
     */
    protected function loadMeasures(array $measureIds)
    {
    }
    /**
     * Load prices for items.
     *
     * @param array $itemIds		Item ids.
     * @return void
     */
    protected function loadPrices(array $itemIds)
    {
    }
    protected function calculateItemPrices(array &$items)
    {
    }
    protected function transferItems(array &$items)
    {
    }
    /**
     * Calculate price block (simple price, quantity range, etc).
     *
     * @param array $product            Product data.
     * @param array $priceBlock         Prices.
     * @param int|float $ratio          Measure ratio value.
     * @param bool $defaultBlock        Save result to old keys (PRICES, PRICE_MATRIX, MIN_PRICE).
     * @return array|null
     */
    protected function calculatePriceBlock(array $product, array $priceBlock, $ratio, $defaultBlock = false)
    {
    }
    protected function searchItemSelectedRatioId($id)
    {
    }
    protected function compactItemRatios($id)
    {
    }
    protected function getQuantityRangeHash(array $range)
    {
    }
    protected function getFullQuantityRange()
    {
    }
    protected function searchItemSelectedQuantityRangeHash($id)
    {
    }
    /**
     * Load URLs for different actions to storage.
     *
     * @return void
     */
    protected function initUrlTemplates()
    {
    }
    /**
     * Process element prices.
     *
     * @param array &$element		Item data.
     * @return void
     */
    protected function modifyElementPrices(&$element)
    {
    }
    /**
     * Load, calculate and fill data (prices, measures, discounts, deprecated fields) for simple products.
     *
     * @return void.
     */
    protected function processProducts()
    {
    }
    /**
     * Load, calculate and fill data (prices, measures, discounts, deprecated fields) for offers.
     * Link offers to products.
     *
     * @return void
     */
    protected function processOffers()
    {
    }
    /**
     * Return offers array for current iblock.
     *
     * @param $iblockId
     * @return array
     */
    protected function getIblockOffers($iblockId)
    {
    }
    protected function getOffersFilter($iblockId)
    {
    }
    /**
     * Return offers sort fields to execute.
     *
     * @return array
     */
    protected function getOffersSort()
    {
    }
    protected function modifyOffers($offers)
    {
    }
    protected abstract function chooseOffer($offers, $iblockId);
    protected function initResultCache()
    {
    }
    protected function getCacheKeys()
    {
    }
    /**
     * All iblock/section/element/offer initializations starts here.
     * If have no errors - result showed in $arResult.
     */
    protected function processResultData()
    {
    }
    /**
     * Check for correct iblocks.
     */
    protected function checkIblock()
    {
    }
    protected function prepareData()
    {
    }
    protected function filterPureOffers()
    {
    }
    /**
     * Set component data from storage to $arResult.
     */
    protected function makeOutputResult()
    {
    }
    /**
     * Process of buy/add-to-basket/etc actions.
     */
    protected function processLinkAction()
    {
    }
    protected function checkProductSection($productId, $sectionId = 0, $sectionCode = '')
    {
    }
    protected function addProductToBasket($productId, $action)
    {
    }
    protected function getRewriteFields($action)
    {
    }
    /**
     * This method executes when "deferredLoad" action chosen.
     * Override getDeferredProductIds method to return needed product ids array.
     */
    protected function deferredLoadAction()
    {
    }
    /**
     * This method executes when "bigDataLoad" action is chosen.
     */
    protected function bigDataLoadAction()
    {
    }
    /**
     * Mark last usage of BigData.
     */
    protected function initBigDataLastUsage()
    {
    }
    /**
     * This method executes when "initialLoad" action is chosen.
     */
    protected function initialLoadAction()
    {
    }
    /**
     * Show cached component data or load if outdated.
     * If extended mode enabled - uses result_modifier.php logic in component (be careful not to duplicate it).
     */
    protected function loadData()
    {
    }
    /**
     * Return component cache identifier.
     *
     * @return mixed
     */
    protected abstract function getAdditionalCacheId();
    /**
     * Return component cache path.
     *
     * @return mixed
     */
    protected abstract function getComponentCachePath();
    public function getTemplateEmptyPreview()
    {
    }
    protected function sliceItemsForSlider(&$items)
    {
    }
    protected function getTemplateCurrencies()
    {
    }
    /**
     * Send answer for AJAX request.
     *
     * @param array $result
     */
    public static function sendJsonAnswer(array $result = array())
    {
    }
    /**
     * Action preparing to execute in doAction method with postfix "Action".
     * E.g. action "initialLoad" calls "initialLoadAction".
     *
     * @return string
     */
    protected function prepareAction()
    {
    }
    /**
     * Action executor.
     */
    protected function doAction()
    {
    }
    /**
     * @return bool
     */
    public function executeComponent()
    {
    }
    public function applyTemplateModifications()
    {
    }
    protected function prepareTemplateParams()
    {
    }
    protected function getTemplateDefaultParams()
    {
    }
    protected function checkTemplateTheme()
    {
    }
    protected function editTemplateData()
    {
    }
    public static function checkEnlargedData(&$item, $propertyCode)
    {
    }
    protected function editTemplateProductSlider(&$item, $iblock, $limit = 0, $addDetailToSlider = true, $default = array())
    {
    }
    protected function editTemplateOfferSlider(&$item, $iblock, $limit = 0, $addDetailToSlider = true, $default = array())
    {
    }
    protected function editTemplateCatalogInfo(&$item)
    {
    }
    protected function getTemplatePropCell($code, $offer, &$matrixFields, $skuPropList)
    {
    }
    protected function getOffersIblockId($iblockId)
    {
    }
    /**
     * @param int $iblockId
     * @return void
     */
    protected function loadDisplayPropertyCodes($iblockId)
    {
    }
    protected function loadBasketPropertyCodes($iblockId)
    {
    }
    protected function loadOfferTreePropertyCodes($iblockId)
    {
    }
    /* product tools */
    /**
     * Return true, if enable quantity trace and disable make out-of-stock items available for purchase.
     *
     * @param array $product        Product data.
     * @return bool
     */
    protected function isNeedCheckQuantity(array $product)
    {
    }
    /* product tools end */
    /* user tools */
    /**
     * Return user groups. Now worked only with current user.
     *
     * @return array
     */
    protected function getUserGroups()
    {
    }
    /**
     * Return user groups string for cache id.
     *
     * @return string
     */
    protected function getUserGroupsCacheId()
    {
    }
    /* user tools end */
    /* compatibility tools */
    /**
     * Filling deprecated fields of items for compatibility with old templates.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param array $items			Product list.
     * @return void
     */
    protected function initCompatibleFields(array $items)
    {
    }
    /**
     * Fill deprecated raw price data from database.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param int $id			Item id.
     * @param array $prices		Price rows from database.
     * @return void
     */
    protected function fillCompatibleRawPriceFields($id, array $prices)
    {
    }
    /**
     * Return deprecated field value for item.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param int $id				Item id.
     * @param string $field			Field name.
     * @return null|mixed
     */
    protected function getCompatibleFieldValue($id, $field)
    {
    }
    /**
     * Check quantity range for emulate CATALOG_SHOP_QUANTITY_* filter.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param array $row		Price row from database.
     * @return bool
     */
    protected function checkQuantityRange(array $row)
    {
    }
    /**
     * Returns old price result format for product with price ranges. Do not use this method.
     *
     * @return array
     */
    protected function getEmptyPriceMatrix() : array
    {
    }
    /**
     * Resort old price format for compatibility. Do not use this method.
     * @internl
     *
     * @param int $id		Item id.
     * @return void
     */
    private function resortOldPrices($id)
    {
    }
    /**
     * Returns old product keys.
     *
     * @return array
     */
    protected function getCompatibleProductFields()
    {
    }
    /* compatibility tools end */
}