<?php

class CCatalogStoreControlUtil
{
    protected static $storeNames = array();
    /** By store ID, returns its title and\or address.
     * @param $storeId
     * @return string
     */
    public static function getStoreName($storeId)
    {
    }
    /** Returns an array, containing information about the product block on its ID.
     * @param $elementId
     * @return array|string
     */
    public static function getProductInfo($elementId)
    {
    }
    /** Checks whether the same method in the class, describing the transmitted document type. Calls this method and returns a set of fields for this type of document.
     * @param $docType
     * @return bool
     */
    public static function getFields($docType)
    {
    }
    /** Generate a list of products on which did not match the total number and amount of all warehouses.
     * @param $arProduct
     * @param int $numberDisplayedElements
     * @return string
     */
    public static function showErrorProduct($arProduct, $numberDisplayedElements = 10)
    {
    }
    public static function getQuantityInformation($productId)
    {
    }
    public static function clearStoreName($storeId)
    {
    }
    public static function clearAllStoreNames()
    {
    }
    public static function loadAllStoreNames($active = \true)
    {
    }
}