<?php

// some of this functions should probably migrate to CSaleHelper
/*
 * get clean content for CRM
 */
function CRMModeOutput($text)
{
}
/*
 * get user name
 */
function fGetUserName($USER_ID)
{
}
/*
 * get template recomendet & basket product
 */
function fGetFormatedProductData($USER_ID, $LID, $arData, $CNT, $currency, $type, $crmMode = \false)
{
}
function fChangeOrderStatus($ID, $STATUS_ID)
{
}
/*
 * shows file property input control
 */
function fShowFilePropertyField($name, $property_fields, $values, $max_file_size_show = 50000)
{
}
/*
 * get count name, mail, phones in profiles
 */
function fGetCountProfileProps($PERSON_TYPE_ID)
{
}
/*
 * user property (parameters order)
 */
function fGetBuyerType($PERSON_TYPE_ID, $LID, $USER_ID = '', $ORDER_ID = 0, $formVarsSubmit = \false)
{
}
/*
 * Returns HTML controls of the order properties
 *
 * Currently is used to show order properties related to payment/delivery systems in the order_new form
 */
function getOrderPropertiesHTML($arOrderProps, $arPropValues = array(), $LID, $USER_ID = '', $ORDER_ID = 0, $formVarsSubmit = \false)
{
}
/*
 * Returns HTML control with payment systems data
 */
function fGetPaySystemsHTML($PERSON_TYPE_ID, $PAY_SYSTEM_ID)
{
}
/*
 * user profile
 */
function fUserProfile($USER_ID, $BUYER_TYPE = '', $default = '')
{
}
/*
 * user balance
 */
function fGetPayFromAccount($USER_ID, $CURRENCY)
{
}
/**
 * Returns HTML select control with delivery services data for admin pages
 * @deprecated
 */
function fGetDeliverySystemsHTML($location, $locationZip, $weight, $price, $currency, $siteId, $defaultDelivery, $arShoppingCart)
{
}
/*
 * coupons
 */
function fGetCoupon($COUPON)
{
}
/*
 * get location ID and ZIP
 */
function fGetLocationID($PERSON_TYPE_ID)
{
}
/*
 * product basket array
 */
function fGetUserShoppingCart($arProduct, $LID, $recalcOrder)
{
}
/*
 * Returns HTML for recommended product, basket product or product from the viewed list
 */
function fGetFormatedProduct($USER_ID, $LID, $arData, $currency, $type = '')
{
}
function fDeleteDoubleProduct($arShoppingCart = array(), $arDelete = array(), $showAll = 'N')
{
}
function getNameCount($propName, $propCode, $arProps)
{
}
function getIblockNames($arIblockIDs, $arIblockNames)
{
}
function getAdditionalColumns()
{
}
/*
 * Returns old history data records (used before august 2013) in the new format
 */
function convertHistoryToNewFormat($arFields)
{
}
/*
 * Returns HTML to download or view file (if image) in the order_detail
 */
function showImageOrDownloadLink($fileId, $orderId = 0, $arSize = array("WIDTH" => 90, "HEIGHT" => 90))
{
}
function getIblockPropInfo($value, $propData, $arSize = array("WIDTH" => 90, "HEIGHT" => 90), $orderId = 0)
{
}
/*
 * Returns HTML of columns names (<td></td>) for the basket items table
 * Used in the order_new and order_detail
 */
function getColumnsHeaders($arUserColumns, $page = "edit", $bWithStores = \false)
{
}
/*
 * Returns appropriate css class for the input control if barcode is valid or not
 */
function setBarcodeClass($barcodeValue)
{
}
/*
 * Returns array of product parameters to fill basket table row in the order_new form
 * Can be called recursively to get data about Set items
 */
function getProductDataToFillBasket($productId, $quantity, $userId, $LID, $userColumns, $tmpId = "")
{
}