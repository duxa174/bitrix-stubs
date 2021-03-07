<?php

class CCatalogProductSet extends \CCatalogProductSetAll
{
    public static function add($arFields)
    {
    }
    public static function update($intID, $arFields)
    {
    }
    public static function delete($intID)
    {
    }
    public static function getList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelect = array())
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
    /**
     * @param int $product
     * @return void
     */
    public static function recalculateSetsByProduct($product)
    {
    }
    protected static function getSetID($intID)
    {
    }
    protected static function deleteFromSet($intID, $arEx)
    {
    }
    protected static function calculateSetParams($productID, $items)
    {
    }
    protected static function createSetItemsParamsFromUpdate($setID, $getProductID = \false)
    {
    }
}