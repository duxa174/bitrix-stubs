<?php

class CAllCatalogSku
{
    const TYPE_CATALOG = 'D';
    const TYPE_PRODUCT = 'P';
    const TYPE_OFFERS = 'O';
    const TYPE_FULL = 'X';
    protected static $arOfferCache = array();
    protected static $arProductCache = array();
    protected static $arPropertyCache = array();
    protected static $arIBlockCache = array();
    protected static $parentCache = array();
    public static function GetCatalogTypes($boolFull = \false)
    {
    }
    public static function GetProductInfo($intOfferID, $intIBlockID = 0)
    {
    }
    public static function GetInfoByOfferIBlock($intIBlockID)
    {
    }
    public static function GetInfoByProductIBlock($intIBlockID)
    {
    }
    public static function GetInfoByLinkProperty($intPropertyID)
    {
    }
    public static function GetInfoByIBlock($intIBlockID)
    {
    }
    /*
     * @deprecated deprecated since catalog 15.0.1
     * @see CCatalogSKU::getExistOffers()
     */
    public static function IsExistOffers($intProductID, $intIBlockID = 0)
    {
    }
    public static function getExistOffers($productID, $iblockID = 0)
    {
    }
    /**
     * @param int|array $productID
     * @param int $iblockID
     * @param array $skuFilter
     * @param array $fields
     * @param array $propertyFilter
     * @param array $options
     * @param array $order
     * @return array|bool
     */
    public static function getOffersList($productID, $iblockID = 0, $skuFilter = array(), $fields = array(), $propertyFilter = array(), $options = array(), $order = array())
    {
    }
    public static function getProductList($offerID, $iblockID = 0)
    {
    }
    public static function ClearCache()
    {
    }
}
class CCatalogSku extends \CAllCatalogSku
{
}