<?php

class CAllCatalogProduct
{
    const TYPE_PRODUCT = \Bitrix\Catalog\ProductTable::TYPE_PRODUCT;
    const TYPE_SET = \Bitrix\Catalog\ProductTable::TYPE_SET;
    const TYPE_SKU = \Bitrix\Catalog\ProductTable::TYPE_SKU;
    const TYPE_OFFER = \Bitrix\Catalog\ProductTable::TYPE_OFFER;
    const TYPE_FREE_OFFER = \Bitrix\Catalog\ProductTable::TYPE_FREE_OFFER;
    const TYPE_EMPTY_SKU = \Bitrix\Catalog\ProductTable::TYPE_EMPTY_SKU;
    const TIME_PERIOD_HOUR = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_HOUR;
    const TIME_PERIOD_DAY = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_DAY;
    const TIME_PERIOD_WEEK = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_WEEK;
    const TIME_PERIOD_MONTH = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_MONTH;
    const TIME_PERIOD_QUART = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_QUART;
    const TIME_PERIOD_SEMIYEAR = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_SEMIYEAR;
    const TIME_PERIOD_YEAR = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_YEAR;
    const TIME_PERIOD_DOUBLE_YEAR = \Bitrix\Catalog\ProductTable::PAYMENT_PERIOD_DOUBLE_YEAR;
    /** @deprecated deprecated since catalog 17.6.3 */
    protected static $arProductCache = array();
    /** @deprecated deprecated since catalog 17.0.11 */
    protected static $usedCurrency = \null;
    /** @deprecated deprecated since catalog 17.5.1 */
    protected static $optimalPriceWithVat = \true;
    /** @deprecated deprecated since catalog 17.5.1 */
    protected static $useDiscount = \true;
    protected static $saleIncluded = \null;
    protected static $useSaleDiscount = \null;
    protected static $vatCache = array();
    private static $existPriceTypeDiscounts = \false;
    /**
     * @deprecated deprecated since catalog 17.0.11
     * @see \Bitrix\Catalog\Product\Price\Calculation::setConfig()
     *
     * @param string $currency
     * @return void
     */
    public static function setUsedCurrency($currency)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.0.11
     * @see \Bitrix\Catalog\Product\Price\Calculation::getConfig()
     *
     * @return null|string
     */
    public static function getUsedCurrency()
    {
    }
    /**
     * @deprecated deprecated since catalog 17.0.11
     * @see \Bitrix\Catalog\Product\Price\Calculation::setConfig()
     *
     * @return void
     */
    public static function clearUsedCurrency()
    {
    }
    /**
     * @deprecated deprecated since catalog 17.5.1
     * @see \Bitrix\Catalog\Product\Price\Calculation::setConfig()
     *
     * @param bool $mode
     * @return void
     */
    public static function setPriceVatIncludeMode($mode)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.5.1
     * @see \Bitrix\Catalog\Product\Price\Calculation::setConfig()
     *
     * @return bool
     */
    public static function getPriceVatIncludeMode()
    {
    }
    /**
     * @deprecated deprecated since catalog 17.5.1
     * @see \Bitrix\Catalog\Product\Price\Calculation::setConfig()
     *
     * @param bool $use
     * @return void
     */
    public static function setUseDiscount($use)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.5.1
     * @see \Bitrix\Catalog\Product\Price\Calculation::getConfig()
     *
     * @return bool
     */
    public static function getUseDiscount()
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.3
     *
     * @return void
     */
    public static function ClearCache()
    {
    }
    /**
     * @param array $product
     * @return bool
     */
    public static function isAvailable($product)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.5.2
     * @see \Bitrix\Catalog\ProductTable::isExistProduct()
     *
     * @param int $intID
     * @return bool
     */
    public static function IsExistProduct($intID)
    {
    }
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Product::add
     *
     * @param array $fields
     * @param bool $checkExist
     * @return bool
     */
    public static function Add($fields, $checkExist = \true)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Product::update
     *
     * @param int $id
     * @param array $fields
     * @return bool
     */
    public static function Update($id, $fields)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Product::delete
     *
     * @param int $id
     * @return bool
     */
    public static function Delete($id)
    {
    }
    public static function ParseQueryBuildField($field)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.2
     * @see Catalog\Model\Product::getList
     *
     * @param int $ID
     * @return array|false
     */
    public static function GetByID($ID)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     *
     * @param $ID
     * @param bool $boolAllValues
     * @return array|bool
     */
    public static function GetByIDEx($ID, $boolAllValues = \false)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.0
     * @see \CCatalogProductProvider
     *
     * @param int $ProductID
     * @param int|float $DeltaQuantity
     * @return bool
     */
    public static function QuantityTracer($ProductID, $DeltaQuantity)
    {
    }
    /**
     * @param int $productID
     * @param int|float $quantity
     * @param array $arUserGroups
     * @return bool|float|int
     */
    public static function GetNearestQuantityPrice($productID, $quantity = 1, $arUserGroups = array())
    {
    }
    /**
     * @param int $intProductID
     * @param int|float $quantity
     * @param array $arUserGroups
     * @param string $renewal
     * @param array $priceList
     * @param bool|string $siteID
     * @param bool|array $arDiscountCoupons
     * @return array|bool
     */
    public static function GetOptimalPrice($intProductID, $quantity = 1, $arUserGroups = array(), $renewal = "N", $priceList = array(), $siteID = \false, $arDiscountCoupons = \false)
    {
    }
    public static function GetOptimalPriceList(array $products, $arUserGroups = array(), $renewal = "N", $priceList = array(), $siteID = \false, $needCoupons = \true)
    {
    }
    /**
     * @param $productId
     * @param $basketCode
     *
     * @return array|bool
     */
    private static function getCoupons($productId, $basketCode)
    {
    }
    /**
     * @param float $price
     * @param string $currency
     * @param array $discounts
     * @return bool|float
     */
    public static function CountPriceWithDiscount($price, $currency, $discounts)
    {
    }
    public static function GetProductSections($ID)
    {
    }
    public static function OnIBlockElementDelete($ProductID)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.3
     *
     * @param array $arFields
     */
    public static function OnAfterIBlockElementUpdate($arFields)
    {
    }
    public static function CheckProducts($arItemIDs)
    {
    }
    /**
     * @deprecated deprecated since catalog 18.7.0
     * @see \CProductQueryBuilder::makeQuery()
     *
     * @param array $order
     * @param array $filter
     * @param array $select
     * @return array
     */
    public static function GetQueryBuildArrays($order, $filter, $select)
    {
    }
    /**
     * Return payment period list.
     *
     * @deprecated deprected since catalog 17.0.0
     * @see \Bitrix\Catalog\ProductTable::getPaymentPeriods
     *
     * @param bool $boolFull		With description.
     * @return array
     */
    public static function GetTimePeriodTypes($boolFull = \false)
    {
    }
    /**
     * Update result user handlers for event OnGetOptimalPrice.
     *
     * @param array &$userResult		Optimal price array.
     * @param array $params             GetOptimalPrice parameters.
     * @return void
     */
    private static function updateUserHandlerOptimalPrice(&$userResult, array $params)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.0
     * @see CCatalogDiscount::applyDiscountList()
     * @see CCatalogDiscount::primaryDiscountFilter()
     *
     * @param array &$arDiscount
     * @param array &$arPriceDiscount
     * @param array &$arDiscSave
     * @param array &$arParams
     *
     * @return void
     */
    protected static function __PrimaryDiscountFilter(&$arDiscount, &$arPriceDiscount, &$arDiscSave, &$arParams)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.0
     * @see CCatalogDiscount::applyDiscountList()
     * @see CCatalogDiscount::calculatePriorityLevel()
     *
     * @param array &$arDiscounts
     * @param array &$arResultDiscount
     * @param array &$arParams
     *
     * @return bool
     */
    protected static function __CalcOnePriority(&$arDiscounts, &$arResultDiscount, &$arParams)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.0
     * @see CCatalogDiscount::applyDiscountList()
     * @see CCatalogDiscount::calculateDiscSave()
     *
     * @param array &$arDiscSave
     * @param array &$arResultDiscount
     * @param array &$arParams
     *
     * @return bool
     */
    protected static function __CalcDiscSave(&$arDiscSave, &$arResultDiscount, &$arParams)
    {
    }
    protected static function getQueryBuildCurrencyScale($filter, $priceTypeId)
    {
    }
    protected static function getQueryBuildPriceScaled($prices, $scale)
    {
    }
    protected static function initSaleSettings()
    {
    }
    private static function isNeedleToMinimizeCatalogGroup(array $priceList)
    {
    }
    private static function getPossibleSalePrice($intProductID, array $priceData, $quantity, $siteID, array $userGroups, $coupons)
    {
    }
    private static function checkPriceValue($price)
    {
    }
    private static function checkPriceCurrency($currency)
    {
    }
    /**
     * @param array $userGroups
     * @return array
     */
    private static function getAllowedPriceTypes(array $userGroups)
    {
    }
    private static function convertErrors(\Bitrix\Main\Entity\Result $result)
    {
    }
    private static function normalizeFields(array &$fields)
    {
    }
}