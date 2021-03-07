<?php

function GetBasketListSimple($bSkipFUserInit = \true)
{
}
function GetBasketList($bSkipFUserInit = \true)
{
}
function SaleFormatCurrency($fSum, $strCurrency, $OnlyValue = \false, $withoutFormat = \false)
{
}
function AutoPayOrder($ORDER_ID)
{
}
function CurrencyModuleUnInstallSale()
{
}
function PayUserAccountDeliveryOrderCallback($productID, $userID, $bPaid, $orderID, $quantity = 1)
{
}
/*
* Formats user name. Used everywhere in 'sale' module
*
*/
function GetFormatedUserName($userId, $bEnableId = \true, $createEditLink = \true)
{
}
/*
 * Updates basket item arrays with information about measures from catalog
 * Basically adds MEASURE_TEXT field with the measure name to each basket item array
 *
 * @param array $arBasketItems - array of basket items' arrays
 * @return array|bool
 */
function getMeasures($arBasketItems)
{
}
/*
 * Updates basket items' arrays with information about ratio from catalog
 * Basically adds MEASURE_RATIO field with the ratio coefficient to each basket item array
 *
 * @param array $arBasketItems - array of basket items' arrays
 * @return mixed
 */
function getRatio($arBasketItems)
{
}
/*
 * Creates an array of iblock properties for the elements with certain IDs
 *
 * @param array $arElementId - array of element id
 * @param array $arSelect - properties to select
 * @return array - array of properties' values in the form of array("ELEMENT_ID" => array of props)
 */
function getProductProps($arElementId, $arSelect)
{
}
function checkProductPropCode($selectItem)
{
}
function updateBasketOffersProps($oldProps, $newProps)
{
}