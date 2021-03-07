<?php

class CAllCatalogDiscount
{
    const TYPE_PERCENT = 'P';
    const TYPE_FIX = 'F';
    const TYPE_SALE = 'S';
    const ENTITY_ID = 0;
    const CURRENT_FORMAT = 2;
    const OLD_FORMAT = 1;
    private const NOTIFY_DISCOUNT_REINDEX_ID = 'CATALOG_DISC_FORMAT';
    protected static $arCacheProduct = array();
    protected static $arCacheDiscountFilter = array();
    protected static $arCacheDiscountResult = array();
    protected static $arCacheProductSectionChain = array();
    protected static $arCacheProductSections = array();
    protected static $arCacheProductProperties = array();
    protected static $cacheDiscountHandlers = array();
    protected static $usedModules = array();
    protected static $existCouponsManager = \null;
    protected static $useSaleDiscount = \null;
    protected static $getPriceTypesOnly = \false;
    protected static $getPercentFromBasePrice = \null;
    private static $needDiscountCache = [];
    private static function calculatePriceByDiscount($basePrice, $currentPrice, $oneDiscount, &$needErase)
    {
    }
    /**
     * @return string
     */
    public static function execAgent() : string
    {
    }
    public static function GetDiscountTypes($boolFull = \false)
    {
    }
    public static function setSaleDiscountFilter($priceTypesOnly = \false)
    {
    }
    /**
     * Return calculate discount percent mode.
     *
     * @return bool
     */
    public static function getUseBasePrice()
    {
    }
    /**
     * Set calculate discount percent mode.
     *
     * @param bool $useBasePrice		Set calculate discount percent mode.
     * @return void
     */
    public static function setUseBasePrice($useBasePrice)
    {
    }
    public function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public function Add($arFields)
    {
    }
    public function Update($ID, $arFields)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::SetCoupon()
     *
     * @param string $coupon
     * @return bool
     */
    public static function SetCoupon($coupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::GetCoupons()
     *
     * @return array
     */
    public static function GetCoupons()
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::EraseCoupon()
     *
     * @param string $strCoupon
     * @return bool
     */
    public static function EraseCoupon($strCoupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::ClearCoupon()
     *
     * @return void
     */
    public static function ClearCoupon()
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::SetCouponByManage()
     *
     * @param int $intUserID
     * @param string $strCoupon
     * @return bool
     */
    public static function SetCouponByManage($intUserID, $strCoupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::GetCouponsByManage()
     *
     * @param int $intUserID
     * @return array
     */
    public static function GetCouponsByManage($intUserID)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::EraseCouponByManage()
     *
     * @param int $intUserID
     * @param string $strCoupon
     * @return bool
     */
    public static function EraseCouponByManage($intUserID, $strCoupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::ClearCouponsByManage()
     *
     * @param int $intUserID		User id.
     * @return bool
     */
    public static function ClearCouponsByManage($intUserID)
    {
    }
    public static function OnCurrencyDelete($Currency)
    {
    }
    public static function OnGroupDelete($GroupID)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     *
     * @param int $ID
     * @return void
     */
    public function GenerateDataFile($ID)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     *
     * @param int $ID
     * @param bool|string $strDataFileName
     * @return void
     */
    public function ClearFile($ID, $strDataFileName = \false)
    {
    }
    public static function GetDiscountByPrice($productPriceID, $arUserGroups = array(), $renewal = "N", $siteID = \false, $arDiscountCoupons = \false)
    {
    }
    public static function GetDiscountByProduct($productID = 0, $arUserGroups = array(), $renewal = "N", $arCatalogGroups = array(), $siteID = \false, $arDiscountCoupons = \false)
    {
    }
    private static function getDiscountsFromApplyResult(array $calcResults, \Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    private static function getReformattedDiscounts(array $finalDiscountList, array $calcResults, $siteId, $isRenewal = \false)
    {
    }
    private static function getSaleDiscountsByProduct(array $product, $siteId, array $userGroups, array $priceRow, $isRenewal, $coupons)
    {
    }
    /**
     * @param int $intProductID
     * @param int $intIBlockID
     * @param array $arCatalogGroups
     * @param array $arUserGroups
     * @param string $strRenewal
     * @param bool|string $siteID
     * @param bool|array $arDiscountCoupons
     * @param bool $boolSKU
     * @param bool $boolGetIDS
     * @return array|false
     */
    public static function GetDiscount($intProductID, $intIBlockID, $arCatalogGroups = array(), $arUserGroups = array(), $strRenewal = "N", $siteID = \false, $arDiscountCoupons = \false, $boolSKU = \true, $boolGetIDS = \false)
    {
    }
    public static function HaveCoupons($ID, $excludeID = 0)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::OnSetCouponList()
     *
     * @param int $intUserID
     * @param array|string $arCoupons
     * @param array $arModules
     * @return bool
     */
    public static function OnSetCouponList($intUserID, $arCoupons, $arModules)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::OnClearCouponList()
     *
     * @param int $intUserID
     * @param array|string $arCoupons
     * @param array $arModules
     * @return bool
     */
    public static function OnClearCouponList($intUserID, $arCoupons, $arModules)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     * @see CCatalogDiscountCoupon::OnDeleteCouponList()
     *
     * @param int $intUserID
     * @param array $arModules
     * @return bool
     */
    public static function OnDeleteCouponList($intUserID, $arModules)
    {
    }
    /**
     * @param array $arProduct
     * @param bool|array $arParams
     * @return array
     */
    public static function GetDiscountForProduct($arProduct, $arParams = \false)
    {
    }
    protected static function getAllUserGroups()
    {
    }
    public static function GetRestrictions($arParams, $boolKeys = \true, $boolRevert = \true)
    {
    }
    public static function CheckDiscount($arProduct, $arDiscount)
    {
    }
    public static function applyDiscountList($price, $currency, &$discountList)
    {
    }
    public static function calculateDiscountList($priceData, $currency, &$discountList, $getWithVat = \true)
    {
    }
    public static function getDiscountDescription(array $discount)
    {
    }
    public static function ExtendBasketItems(&$arBasket, $arExtend)
    {
    }
    /**
     * @param array $arProduct
     * @param bool|array $arParams
     * @return bool
     */
    protected static function __GenerateFields(&$arProduct, $arParams = \false)
    {
    }
    protected static function __GetSectionList($intIBlockID, $intProductID)
    {
    }
    /**
     * @param array $arProduct
     * @param array $arProps
     * @param bool|array $arParams
     */
    protected static function __ConvertProperties(&$arProduct, &$arProps, $arParams = \false)
    {
    }
    protected static function __GenerateParent(&$product, $sku)
    {
    }
    protected static function __ParseArrays(&$arFields)
    {
    }
    protected function __CheckOneEntity(&$arFields, $strEntityID)
    {
    }
    protected function __ArrayMultiple($arOrder, &$arResult, $arTuple, $arTemp = array())
    {
    }
    protected static function __Unpack(
        /** @noinspection PhpUnusedParameterInspection */
        $arProduct,
        $strUnpack
    )
    {
    }
    protected function __ConvertOldConditions($strAction, &$arFields)
    {
    }
    protected function __ConvertOldOneEntity(&$arFields, $strEntityID)
    {
    }
    protected function __AddOldOneEntity(&$arConditions, $strCondID, $arEntityValues, $boolOneEntity)
    {
    }
    protected function __GetConditionValues(&$arFields)
    {
    }
    protected function __GetOldOneEntity(&$arFields, &$arCondList, $strEntityID, $strCondID)
    {
    }
    protected function __UpdateOldOneEntity($intID, &$arFields, $arParams, $boolUpdate)
    {
    }
    public static function SetDiscountFilterCache($arDiscountIDs, $arCatalogGroups, $arUserGroups)
    {
    }
    public static function SetAllDiscountFilterCache($arDiscountCache, $boolNeedClear = \true)
    {
    }
    public static function GetDiscountFilterCache($arCatalogGroups, $arUserGroups)
    {
    }
    public static function IsExistsDiscountFilterCache($arCatalogGroups, $arUserGroups)
    {
    }
    public static function GetDiscountFilterCacheByKey($strCacheKey)
    {
    }
    public static function IsExistsDiscountFilterCacheByKey($strCacheKey)
    {
    }
    public static function GetDiscountFilterCacheKey($arCatalogGroups, $arUserGroups, $boolNeedClear = \true)
    {
    }
    public static function SetDiscountResultCache($arDiscountList, $arDiscountIDs, $strSiteID, $strRenewal)
    {
    }
    public static function SetAllDiscountResultCache($arDiscountResultCache)
    {
    }
    public static function GetDiscountResultCacheKey($arDiscountIDs, $strSiteID, $strRenewal, $boolNeedClear = \true)
    {
    }
    public static function SetDiscountProductCache($arItem, $arParams = array())
    {
    }
    public static function getCachedProductData($productId)
    {
    }
    public static function SetProductSectionsCache($arItemIDs)
    {
    }
    public static function SetProductPropertiesCache($intProductID, $arProps)
    {
    }
    public static function ClearDiscountCache($arTypes)
    {
    }
    public static function isUsedSaleDiscountOnly()
    {
    }
    protected static function primaryDiscountFilter($price, $currency, &$discountList, &$priceDiscountList, &$accumulativeDiscountList)
    {
    }
    protected static function calculatePriorityLevel($basePrice, $price, $currency, &$discountList, &$resultDiscount)
    {
    }
    protected static function calculateDiscSave($basePrice, $price, $currency, &$discsaveList, &$resultDiscount)
    {
    }
    protected static function clearFields($value)
    {
    }
    protected static function initDiscountSettings()
    {
    }
}