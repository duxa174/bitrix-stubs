<?php

/**
 * @deprecated deprecated since catalog 17.5.0
 * @see \Bitrix\Catalog\Product\CatalogProvider
 */
class CCatalogProductProvider implements \IBXSaleProductProvider
{
    protected static $errors = array();
    protected static $arOneTimeCoupons = array();
    // deprecated
    protected static $clearAutoCache = array();
    protected static $catalogList = array();
    protected static $userCache = array();
    protected static $priceTitleCache = array();
    protected static $proxyUserGroups = array();
    protected static $proxyIblockElementListPermN = array();
    protected static $proxyIblockElementListPermY = array();
    protected static $proxyIblockRights = array();
    protected static $proxyCatalogProduct = array();
    protected static $proxyStoresCount = array();
    protected static $hitCache = array();
    const CATALOG_PROVIDER_EMPTY_STORE_ID = 0;
    const CACHE_USER_GROUPS = 'USER_GROUPS';
    const CACHE_ITEM_WITHOUT_RIGHTS = 'IBLOCK_ELEMENT_PERM_N';
    const CACHE_ITEM_WITH_RIGHTS = 'IBLOCK_ELEMENT_PERM_Y';
    const CACHE_IBLOCK_RIGHTS_MODE = 'IBLOCK_RIGHTS_MODE';
    const CACHE_USER_RIGHTS = 'USER_RIGHT';
    const CACHE_PRODUCT = 'CATALOG_PRODUCT';
    const CACHE_VAT = 'VAT_INFO';
    const CACHE_IBLOCK_RIGHTS = 'IBLOCK_RIGHTS';
    const CACHE_STORE = 'CATALOG_STORE';
    const CACHE_STORE_PRODUCT = 'CATALOG_STORE_PRODUCT';
    const CACHE_PARENT_PRODUCT_ACTIVE = 'PARENT_PRODUCT_ACTIVE';
    /**
     * @param array $arParams
     * @return array|false
     */
    public static function GetProductData($arParams)
    {
    }
    /**
     * @param array $arParams
     * @return array|false
     */
    public static function OrderProduct($arParams)
    {
    }
    // in case product provider class is used,
    // instead of this method quantity is changed with ReserveProduct and DeductProduct methods
    public static function CancelProduct($arParams)
    {
    }
    public static function DeliverProduct($arParams)
    {
    }
    /**
     * @deprecated
     *
     * @param array $arParams
     * @return array|bool
     */
    public static function ViewProduct($arParams)
    {
    }
    public static function RecurringOrderProduct($arParams)
    {
    }
    public static function ReserveProduct($arParams)
    {
    }
    public static function DeductProduct($arParams)
    {
    }
    /**
     * @param \Bitrix\Sale\BasketItem $basketItem
     * @param string $reserved
     * @param array $basketStoreData
     * @param null $quantity
     * @return \Bitrix\Sale\Result
     */
    public static function tryShipmentProduct(\Bitrix\Sale\BasketItem $basketItem, $reserved = 'N', array $basketStoreData = array(), $quantity = \null)
    {
    }
    public static function tryUnshipmentProduct($productId)
    {
    }
    public static function GetStoresCount($arParams = array())
    {
    }
    public static function GetProductStores($arParams)
    {
    }
    public static function CheckProductBarcode($arParams)
    {
    }
    private static function GetProductCatalogInfo($productID)
    {
    }
    public static function GetSetItems($productID, $intType, $arProducInfo = array())
    {
    }
    protected static function isNeedClearPublicCache($currentQuantity, $newQuantity, $quantityTrace, $canBuyZero, $ratio = 1)
    {
    }
    protected static function clearPublicCache($productID, $productInfo = array())
    {
    }
    /**
     * @param $productId
     * @param null $userId
     * @return bool
     * @throws Main\ArgumentException
     */
    public static function getProductAvailableQuantity($productId, $userId = \null)
    {
    }
    protected static function getUserGroups($userId)
    {
    }
    protected static function getProductPoolQuantityByBasketItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    protected static function getPriceTitle($priceType)
    {
    }
    /**
     * Check exist and activity parent product.
     *
     * @param int $productId			Product Id.
     * @param int $iblockId				Iblock Id.
     * @return bool
     */
    protected static function checkParentActivity($productId, $iblockId = 0)
    {
    }
    /**
     * @internal
     * @param string $type
     * @param string $key
     * @return false|mixed
     */
    public static function getHitCache($type, $key)
    {
    }
    /**
     * @internal
     * @param string $type
     * @param string $key
     * @return bool
     */
    public static function isExistsHitCache($type, $key)
    {
    }
    /**
     * @internal
     * @param string $type
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function setHitCache($type, $key, $value)
    {
    }
    /**
     * @internal
     * @param string|null $type
     * @return void
     */
    public static function clearHitCache($type = \null)
    {
    }
    /**
     * @param \Bitrix\Sale\BasketItem $basketItem
     *
     * @return bool
     * @throws Main\ArgumentNullException
     */
    protected static function canProductAutoShip(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param \Bitrix\Sale\BasketItem $basketItem
     * @param $quantity
     *
     * @return array|bool
     */
    protected static function getProductStoreData(\Bitrix\Sale\BasketItem $basketItem, $quantity)
    {
    }
    /**
     * @param \Bitrix\Sale\BasketItem $basketItem
     * @param $quantity
     *
     * @return array|bool
     */
    protected static function getProductOneStoreData(\Bitrix\Sale\BasketItem $basketItem, $quantity)
    {
    }
    protected static function getStoreIds(array $params)
    {
    }
    /**
     * Check available set items.
     * Error text return in static::$errors
     *
     * @param int $productId        Product id.
     * @return bool
     */
    protected static function checkProductSet($productId)
    {
    }
    /**
     * @return bool
     */
    public static function isReservationEnabled()
    {
    }
    /**
     * @return bool
     */
    public static function isNeedShip()
    {
    }
}