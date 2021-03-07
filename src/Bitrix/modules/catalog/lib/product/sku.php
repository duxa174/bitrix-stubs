<?php

namespace Bitrix\Catalog\Product;

/**
 * Class Sku
 * Provides various useful methods for sku data.
 *
 * @package Bitrix\Catalog\Product
 */
class Sku
{
    const OFFERS_ERROR = 0x0;
    const OFFERS_NOT_EXIST = 0x1;
    const OFFERS_NOT_AVAILABLE = 0x2;
    const OFFERS_AVAILABLE = 0x4;
    protected static $allowUpdateAvailable = 0;
    protected static $allowPropertyHandler = 0;
    protected static $productIds = array();
    protected static $offers = array();
    private static $changeActive = array();
    private static $currentActive = array();
    private static $separateSkuMode = null;
    private static $deferredCalculation = -1;
    private static $calculateAvailable = false;
    private static $calculatePriceTypes = array();
    private static $deferredSku = array();
    private static $deferredOffers = array();
    private static $deferredUnknown = array();
    private static $skuExist = array();
    private static $skuAvailable = array();
    private static $offersIds = array();
    private static $offersMap = array();
    private static $skuPrices = array();
    /**
     * Enable automatic update parent product available and prices.
     *
     * @return void
     */
    public static function enableUpdateAvailable()
    {
    }
    /**
     * Disable automatic update parent product available and prices.
     *
     * @return void
     */
    public static function disableUpdateAvailable()
    {
    }
    /**
     * Return true if allowed automatic update parent product available and prices.
     *
     * @return bool
     */
    public static function allowedUpdateAvailable()
    {
    }
    /**
     * Enable deferred calculation parent product available and prices.
     *
     * @return void
     */
    public static function enableDeferredCalculation()
    {
    }
    /**
     * Disable deferred calculation parent product available and prices.
     *
     * @return void
     */
    public static function disableDeferredCalculation()
    {
    }
    /**
     * Return true if allowed deferred calculation parent product available and prices.
     *
     * @return bool
     */
    public static function usedDeferredCalculation()
    {
    }
    /**
     * Return default settings for product with sku.
     *
     * @param int $state			State flag.
     * @param bool $productIblock   Is iblock (no catalog) with offers.
     * @return array
     */
    public static function getDefaultParentSettings($state, $productIblock = false)
    {
    }
    /**
     * Update product available.
     *
     * @deprecated deprecated since catalog 17.6.0
     * @see Sku::calculateComplete (for sku) and Catalog\Model\Product::update (for all product types)
     *
     * @param int $productId			Product Id.
     * @param int $iblockId				Iblock Id (optional).
     * @param array $productFields		Product fields (optional).
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function updateAvailable($productId, $iblockId = 0, array $productFields = array())
    {
    }
    /**
     * Prepare data for update parent product available and prices. Run calculate, if disable deferred calculation.
     *
     * @param int $id				Product id (sku, offer).
     * @param null|int $iblockId	Product iblock (null, if unknown).
     * @param null|int $type		Real product type (or null, if unknown).
     *
     * @return void
     */
    public static function calculateComplete($id, $iblockId = null, $type = null)
    {
    }
    /**
     * Prepare data for update parent product prices. Run calculate, if disable deferred calculation.
     *
     * @param int $id				Product id (sku, offer).
     * @param null|int $iblockId	Product iblock (null, if unknown).
     * @param null|int $type		Real product type (or null, if unknown).
     * @param array $priceTypes		Price type ids for calculation (empty, if need all price types).
     *
     * @return void
     */
    public static function calculatePrice($id, $iblockId = null, $type = null, array $priceTypes = [])
    {
    }
    /**
     * Run calculate parent product available and prices. Need data must will be prepared in Sku::calculateComplete or Sku::calculatePrice.
     *
     * @return void
     */
    public static function calculate()
    {
    }
    /**
     * OnIBlockElementAdd event handler. Do not use directly.
     *
     * @param array $fields				Element data.
     * @return void
     */
    public static function handlerIblockElementAdd($fields)
    {
    }
    /**
     * OnAfterIBlockElementAdd event handler. Do not use directly.
     *
     * @param array &$fields			Element data.
     *
     * @return void
     */
    public static function handlerAfterIblockElementAdd(&$fields)
    {
    }
    /**
     * OnIBlockElementUpdate event handler. Do not use directly.
     *
     * @param array $newFields			New element data.
     * @param array $oldFields			Current element data.
     *
     * @return void
     */
    public static function handlerIblockElementUpdate($newFields, $oldFields)
    {
    }
    /**
     * OnAfterIBlockElementUpdate event handler. Do not use directly.
     *
     * @param array &$fields			New element data.
     *
     * @return void
     */
    public static function handlerAfterIblockElementUpdate(&$fields)
    {
    }
    /**
     * OnIBlockElementDelete event handler. Do not use directly.
     *
     * @param int $elementId			Element id.
     * @param array $elementData		Element data.
     *
     * @return void
     */
    public static function handlerIblockElementDelete($elementId, $elementData)
    {
    }
    /**
     * OnAfterIBlockElementDelete event handler. Do not use directly.
     *
     * @param array $elementData		Element data.
     *
     * @return void
     */
    public static function handlerAfterIblockElementDelete($elementData)
    {
    }
    /**
     * OnIBlockElementSetPropertyValues event handler. Do not use directly.
     *
     * @param int $elementId							Element id.
     * @param int $iblockId								Iblock id.
     * @param array $newValues							New properties values.
     * @param int|string|false $propertyIdentifyer		Property identifier.
     * @param array $propertyList						Changed property list.
     * @param array $currentValues						Current properties values.
     *
     * @return void
     */
    public static function handlerIblockElementSetPropertyValues($elementId, $iblockId, $newValues, $propertyIdentifyer, $propertyList, $currentValues)
    {
    }
    /**
     * OnAfterIBlockElementSetPropertyValues event handler. Do not use directly.
     *
     * @param int $elementId							Element id.
     * @param int $iblockId								Iblock id.
     * @param array $newValues							New properties values.
     * @param int|string|false $propertyIdentifyer		Property identifier.
     *
     * @return void
     */
    public static function handlerAfterIBlockElementSetPropertyValues($elementId, $iblockId, $newValues, $propertyIdentifyer)
    {
    }
    /**
     * OnIBlockElementSetPropertyValuesEx event handler. Do not use directly.
     *
     * @param int $elementId							Element id.
     * @param int $iblockId								Iblock id.
     * @param array $newValues							New properties values.
     * @param array $propertyList						Changed property list.
     * @param array $currentValues						Current properties values.
     *
     * @return void
     */
    public static function handlerIblockElementSetPropertyValuesEx($elementId, $iblockId, $newValues, $propertyList, $currentValues)
    {
    }
    /**
     * OnAfterIBlockElementSetPropertyValuesEx event handler. Do not use directly.
     *
     * @param int $elementId							Element id.
     * @param int $iblockId								Iblock id.
     * @param array $newValues							New properties values.
     * @param array $flags								Flags from \CIBlockElement::SetPropertyValuesEx.
     *
     * @return void
     */
    public static function handlerAfterIblockElementSetPropertyValuesEx($elementId, $iblockId, $newValues, $flags)
    {
    }
    /**
     * Return available and exist product offers.
     *
     * @param int $productId			Product id.
     * @param int $iblockId				Iblock id.
     *
     * @return int
     *
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getOfferState($productId, $iblockId = 0)
    {
    }
    /**
     * Update sku product available.
     * @deprecated deprecated since catalog 17.6.0
     * @see Sku::calculateComplete
     *
     * @param int $productId			Product id.
     * @param int|null $iblockId		Iblock id.
     *
     * @return bool
     */
    protected static function updateProductAvailable($productId, $iblockId)
    {
    }
    /**
     * Update offer product type.
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Product::update
     *
     * @param int $offerId				Offer id.
     * @param int $type					Product type.
     *
     * @return bool
     *
     * @throws \Exception
     */
    protected static function updateOfferType($offerId, $type)
    {
    }
    /**
     * Enable property handlers.
     *
     * @return void
     */
    protected static function enablePropertyHandler()
    {
    }
    /**
     * Disable property handlers.
     *
     * @return void
     */
    protected static function disablePropertyHandler()
    {
    }
    /**
     * Return is enabled property handlers.
     *
     * @return bool
     */
    protected static function allowedPropertyHandler()
    {
    }
    /**
     * Method for array_filter.
     *
     * @param array $row			Product/ Offer data.
     *
     * @return bool
     */
    protected static function filterActive(array $row)
    {
    }
    /**
     * Return separate sku mode (catalog option).
     * @internal
     *
     * @return bool
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private static function isSeparateSkuMode()
    {
    }
    /**
     * Calculate available for product with sku as simple product. Compatible only.
     * @internal
     *
     * @param int $productId				Product id.
     * @param array $productFields			Product fields (optional).
     *
     * @return array
     *
     * @throws Main\ArgumentException
     */
    private static function getParentDataAsProduct($productId, array $productFields = array())
    {
    }
    /**
     * Returns the current calculated availability of the product if it is necessary to update it.
     * @internal
     *
     * @param int $productId            Product id.
     * @param array $productFields      Current product values. Can be empty.
     *
     * @return array
     */
    private static function getProductAvailable($productId, array $productFields)
    {
    }
    /**
     * Change parent available.
     * @internal
     *
     * @param int $parentId             Parent id.
     * @param int $parentIblockId       Parent iblock id.
     * @return bool
     */
    private static function updateParentAvailable($parentId, $parentIblockId)
    {
    }
    /**
     * Check product type for unknown id and transfer to offer list or parent product list.
     * @internal
     *
     * @return void
     *
     * @throws Main\ArgumentException
     */
    private static function updateDeferredSkuList()
    {
    }
    /**
     * Fill entity list for calculation.
     * @internal
     *
     * @param array &$list			Item storage.
     * @param int $id				Item id.
     * @param null|int $iblockId	Iblock id (null if unknown).
     *
     * @return void
     */
    private static function setCalculateData(array &$list, $id, $iblockId)
    {
    }
    /**
     * Fill price type list for calculation.
     * @internal
     *
     * @param array &$list				Item storage.
     * @param int $id					Product id.
     * @param null|int $iblockId		Iblock id.
     * @param array $priceTypes			Price types (empty if need all).
     *
     * @return void
     */
    private static function setCalculatePriceTypes(array &$list, $id, $iblockId, array $priceTypes)
    {
    }
    /**
     * Remove data from unknown list to parent product list or offer list.
     * @internal
     *
     * @param array &$source		Source storage.
     * @param array &$destination	Destination storage
     * @param int $id				Product id.
     *
     * @return void
     */
    private static function migrateCalculateData(array &$source, array &$destination, $id)
    {
    }
    /**
     * Transfer data from unknown list to parent product list or offer list with change id.
     * @internal
     *
     * @param array &$source		Source storage.
     * @param array &$destination	Destination storage
     * @param int $sourceId			Product source id.
     * @param int $destinationId	Product destination id.
     * @param null|int $iblockId	Iblock id (null, if unknown).
     *
     * @return void
     */
    private static function transferCalculationData(array &$source, array &$destination, $sourceId, $destinationId, $iblockId)
    {
    }
    /**
     * Clear internal calculate data.
     * @internal
     *
     * @return void
     */
    private static function clearStepData()
    {
    }
    /**
     * Get iblock ids for products.
     * @internal
     *
     * @return void
     */
    private static function loadProductIblocks()
    {
    }
    /**
     * Load parent product data (offers exists and state, exist in database, etc).
     * @internal
     *
     * @param array $listIds	Product ids.
     *
     * @return void
     */
    private static function loadProductData(array $listIds)
    {
    }
    /**
     * Save available for parent products.
     * @internal
     *
     * @param array $listIds	Product ids.
     *
     * @return void
     */
    private static function updateProductData(array $listIds)
    {
    }
    /**
     * Load exist parent product prices.
     * @internal
     *
     * @return void
     *
     * @throws Main\ArgumentException
     */
    private static function loadProductPrices()
    {
    }
    /**
     * Update parent product prices.
     * @internal
     *
     * @param array $listIds	Product ids.
     *
     * @return void
     *
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws \Exception
     */
    private static function updateProductPrices(array $listIds)
    {
    }
    /**
     * Update parent product facet index.
     * @internal
     *
     * @param array $listIds	Product ids.
     *
     * @return void
     */
    private static function updateProductFacetIndex(array $listIds)
    {
    }
    /**
     * Update parent product data from iblock event handlers.
     *
     * @param int $elementId	Offer id.
     * @param int $iblockId		Offer iblock id.
     *
     * @return void
     */
    private static function calculateOfferChange($elementId, $iblockId)
    {
    }
}