<?php

abstract class CCatalogProductSetAll
{
    const TYPE_SET = 1;
    const TYPE_GROUP = 2;
    protected static $arErrors = array();
    protected static $disableShowErrors = 0;
    protected static $disableCheckProduct = \false;
    protected static $recalculateSet = 0;
    public static function enableShowErrors()
    {
    }
    public static function disableShowErrors()
    {
    }
    public static function isEnabledShowErrors()
    {
    }
    public static function enableRecalculateSet()
    {
    }
    public static function disableRecalculateSet()
    {
    }
    public static function isEnabledRecalculateSet()
    {
    }
    public static function getErrors()
    {
    }
    public static function setCheckParams($params)
    {
    }
    public static function clearCheckParams()
    {
    }
    public static function checkFields($strAction, &$arFields, $intID = 0)
    {
    }
    public static function add($arFields)
    {
    }
    public static function update($intID, $arFields)
    {
    }
    public static function delete($intID)
    {
    }
    /**
     * @param int $intProductID
     * @param int $intSetType
     * @return bool
     */
    public static function isProductInSet($intProductID, $intSetType = 0)
    {
    }
    /**
     * @param int|array $arProductID
     * @param int $intSetType
     * @return bool
     */
    public static function isProductHaveSet($arProductID, $intSetType = 0)
    {
    }
    public static function canCreateSetByProduct($intProductID, $intSetType)
    {
    }
    /**
     * @param int $intProductID
     * @param int $intSetType
     * @return array|false
     */
    public static function getAllSetsByProduct($intProductID, $intSetType)
    {
    }
    /**
     * @param int $intID
     * @return array|false
     */
    public static function getSetByID($intID)
    {
    }
    public static function deleteAllSetsByProduct($intProductID, $intSetType)
    {
    }
    /**
     * @param int $product
     * @return void
     */
    public static function recalculateSetsByProduct($product)
    {
    }
    public static function recalculateSet($setID, $productID = 0)
    {
    }
    protected static function checkFieldsToAdd(&$arFields, $boolCheckNew = \false)
    {
    }
    protected static function checkFieldsToUpdate($intID, &$arFields)
    {
    }
    protected static function getSetID($intID)
    {
    }
    protected static function getEmptySet($intSetType)
    {
    }
    protected static function deleteFromSet($intID, $arEx)
    {
    }
    protected static function setItemFieldsForAdd(&$arFields)
    {
    }
    protected static function setItemFieldsForUpdate(&$arFields, $arCurrent)
    {
    }
    protected static function clearFieldsForUpdate(&$arFields, $intSetType)
    {
    }
    protected static function getEmptyFields()
    {
    }
    protected static function getEmptyItemFields()
    {
    }
    protected static function searchItem($intItemID, &$arItems)
    {
    }
    protected static function calculateSetParams($productID, $items)
    {
    }
    protected static function fillSetItemsParams(&$items)
    {
    }
    protected static function createSetItemsParamsFromAdd($items)
    {
    }
    protected static function createSetItemsParamsFromUpdate($setID, $getProductID = \false)
    {
    }
    protected static function isTracedItem($item)
    {
    }
    protected static function checkProducts($type, array $productList)
    {
    }
}