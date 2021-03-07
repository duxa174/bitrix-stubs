<?php

/*************************************************************/
/**
 * @deprecated deprecated since catalog 17.0.0
 * @see \Bitrix\Catalog\GroupTable::getList()
 *
 * @param string $by
 * @param string $order
 * @return bool|CDBResult
 */
function GetCatalogGroups($by = "SORT", $order = "ASC")
{
}
/**
 * @deprecated deprecated since catalog 17.0.0
 * @see \Bitrix\Catalog\GroupTable::getList()
 *
 * @param int $CATALOG_GROUP_ID
 * @return array|false
 */
function GetCatalogGroup($CATALOG_GROUP_ID)
{
}
/**
 * @deprecated deprecated since catalog 17.0.0
 * @see \Bitrix\Catalog\GroupLangTable::getList()
 *
 * @param int $CATALOG_GROUP_ID
 * @return string|null
 */
function GetCatalogGroupName($CATALOG_GROUP_ID)
{
}
/**
 * @deprecated deprecated since catalog 17.0.0
 * @see \Bitrix\Catalog\ProductTable::getList()
 *
 * @param int $PRODUCT_ID
 * @return array|false
 */
function GetCatalogProduct($PRODUCT_ID)
{
}
/**
 * @deprecated deprecated since catalog 17.0.0
 * @see CCatalogProduct::GetByIDEx or write optimal code
 *
 * @param int $PRODUCT_ID
 * @param bool $boolAllValues
 * @return array|bool
 */
function GetCatalogProductEx($PRODUCT_ID, $boolAllValues = \false)
{
}
/**
 * @deprecated deprecated since catalog 17.0.0
 * @see \Bitrix\Catalog\PriceTable::getList()
 *
 * @param int $PRODUCT_ID
 * @param int $CATALOG_GROUP_ID
 * @return array|false
 */
function GetCatalogProductPrice($PRODUCT_ID, $CATALOG_GROUP_ID)
{
}
/**
 * @deprecated deprecated since catalog 17.0.0
 * @see \Bitrix\Catalog\PriceTable::getList()
 *
 * @param int $PRODUCT_ID
 * @param string $by
 * @param string $order
 * @return array
 */
function GetCatalogProductPriceList($PRODUCT_ID, $by = "SORT", $order = "ASC")
{
}
/**
 * @deprecated
 *
 * @param int $IBLOCK
 * @param bool $SECT_ID
 * @param array $arOrder
 * @param int $cnt
 * @return false
 */
function GetCatalogProductTable($IBLOCK, $SECT_ID = \false, $arOrder = array("sort" => "asc"), $cnt = 0)
{
}
/**
 * @deprecated deprecated since catalog 9.0.0
 * @see CCurrencyLang::CurrencyFormat()
 *
 * @param int|float|string $fSum
 * @param string $strCurrency
 * @return string
 */
function FormatCurrency($fSum, $strCurrency)
{
}
/**
 * @deprecated deprecated since catalog 12.5.0
 * @see CCatalogProductProvider::GetProductData()
 *
 * @param int $productID
 * @param int|float $quantity
 * @param string $renewal
 * @param int $intUserID
 * @param bool|string $strSiteID
 * @return array|false
 */
function CatalogBasketCallback($productID, $quantity = 0, $renewal = "N", $intUserID = 0, $strSiteID = \false)
{
}
/**
 * @deprecated deprecated since catalog 12.5.0
 * @see CCatalogProductProvider::OrderProduct()
 *
 * @param int $productID
 * @param int|float $quantity
 * @param string $renewal
 * @param int $intUserID
 * @param bool|string $strSiteID
 * @return array|false
 */
function CatalogBasketOrderCallback($productID, $quantity, $renewal = "N", $intUserID = 0, $strSiteID = \false)
{
}
/**
 * @deprecated
 *
 * @param int $productID
 * @param int $UserID
 * @param bool|mixed|string $strSiteID
 * @return array|bool
 */
function CatalogViewedProductCallback($productID, $UserID, $strSiteID = \SITE_ID)
{
}
/**
 * @deprecated deprecated since catalog 12.5.6
 * @see CCatalogDiscountCoupon::CouponOneOrderDisable()
 *
 * @param int $intOrderID
 * @return void
 */
function CatalogDeactivateOneTimeCoupons($intOrderID = 0)
{
}
function CatalogPayOrderCallback($productID, $userID, $bPaid, $orderID)
{
}
function CatalogRecurringCallback($productID, $userID)
{
}
function CatalogBasketCancelCallback($PRODUCT_ID, $QUANTITY, $bCancel)
{
}
/**
 * @param int $PRICE_ID
 * @param float|int $QUANTITY
 * @param array $arRewriteFields
 * @param array $arProductParams
 * @return bool|int
 */
function Add2Basket($PRICE_ID, $QUANTITY = 1, $arRewriteFields = array(), $arProductParams = array())
{
}
/**
 * @deprecated deprecated since catalog 17.5.9
 * @see \Bitrix\Catalog\Product\Basket::addProduct
 *
 * @param int $productId
 * @param float|int $quantity
 * @param array $rewriteFields
 * @param bool|array $productParams
 * @return false|int
 */
function Add2BasketByProductID($productId, $quantity = 1, $rewriteFields = array(), $productParams = \false)
{
}
/**
 * @param int $intProductID
 * @param array $arRewriteFields
 * @param array $arProductParams
 * @return bool|int
 */
function SubscribeProduct($intProductID, $arRewriteFields = array(), $arProductParams = array())
{
}
/**
 * @deprecated deprecated since catalog 17.0.0
 *
 * @param $ID
 * @param int|float $filterQauntity
 * @param array $arFilterType
 * @param string $VAT_INCLUDE
 * @param array $arCurrencyParams
 * @return array|bool
 */
function CatalogGetPriceTableEx($ID, $filterQauntity = 0, $arFilterType = array(), $VAT_INCLUDE = 'Y', $arCurrencyParams = array())
{
}
function CatalogGetPriceTable($ID)
{
}
function __CatalogGetMicroTime()
{
}
function __CatalogSetTimeMark($text, $startStop = "")
{
}
function CatalogGetVATArray($arFilter = array(), $bInsertEmptyLine = \false)
{
}
function CurrencyModuleUnInstallCatalog()
{
}
function CatalogGenerateCoupon()
{
}
function __GetCatLangMessages($strBefore, $strAfter, $MessID, $strDefMess = \false, $arLangList = array())
{
}
/**
 * @deprecated deprecated since catalog 16.0.0
 * @see \Bitrix\Main\Type\Collection::normalizeArrayValuesByInt
 *
 * @param array &$arMap
 * @param bool $boolSort
 * @return void
 */
function CatalogClearArray(&$arMap, $boolSort = \true)
{
}