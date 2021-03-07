<?php

class CIBlockPriceTools
{
    protected static $catalogIncluded = \null;
    protected static $highLoadInclude = \null;
    protected static $saleIncluded = \null;
    protected static $needDiscountCache = \null;
    protected static $calculationDiscounts = 0;
    /**
     * @param int $IBLOCK_ID
     * @param array $arPriceCode
     * @return array
     * @throws Main\LoaderException
     */
    public static function GetCatalogPrices($IBLOCK_ID, $arPriceCode)
    {
    }
    /**
     * @param array $arPriceTypes
     * @return array
     */
    public static function GetAllowCatalogPrices($arPriceTypes)
    {
    }
    public static function SetCatalogDiscountCache($arCatalogGroups, $arUserGroups, $siteId = \false)
    {
    }
    public static function GetItemPrices(
        /** @noinspection PhpUnusedParameterInspection */
        $IBLOCK_ID,
        $arCatalogPrices,
        $arItem,
        $bVATInclude = \true,
        $arCurrencyParams = array(),
        $USER_ID = 0,
        $LID = \SITE_ID
    )
    {
    }
    /**
     * @param int $IBLOCK_ID
     * @param array $arCatalogPrices
     * @param array $arItem
     * @return bool
     */
    public static function CanBuy(
        /** @noinspection PhpUnusedParameterInspection */
        $IBLOCK_ID,
        $arCatalogPrices,
        $arItem
    )
    {
    }
    public static function GetProductProperties(
        $IBLOCK_ID,
        /** @noinspection PhpUnusedParameterInspection */
        $ELEMENT_ID,
        $arPropertiesList,
        $arPropertiesValues
    )
    {
    }
    public static function getFillProductProperties($productProps)
    {
    }
    /*
    Checks arPropertiesValues against DB values
    returns array on success
    or number on fail (may be used for debug)
    */
    public static function CheckProductProperties($iblockID, $elementID, $propertiesList, $propertiesValues, $enablePartialList = \false)
    {
    }
    public static function GetOffersIBlock($IBLOCK_ID)
    {
    }
    public static function GetOfferProperties($offerID, $iblockID, $propertiesList, $skuTreeProps = '')
    {
    }
    public static function GetOffersArray($arFilter, $arElementID, $arOrder, $arSelectFields, $arSelectProperties, $limit, $arPrices, $vat_include, $arCurrencyParams = array(), $USER_ID = 0, $LID = \SITE_ID)
    {
    }
    /**
     * @deprecated since 14.5.0
     * @see CCatalogMeasure::getDefaultMeasure
     *
     * @return array|null
     * @throws Main\LoaderException
     */
    public static function GetDefaultMeasure()
    {
    }
    public static function setRatioMinPrice(&$item, $replaceMinPrice = \false)
    {
    }
    public static function checkPropDirectory(&$property, $getPropInfo = \false)
    {
    }
    public static function getTreeProperties($skuInfo, $propertiesCodes, $defaultFields = array())
    {
    }
    public static function getTreePropertyValues(&$propList, &$propNeedValues)
    {
    }
    public static function getMinPriceFromOffers(&$offers, $currency, $replaceMinPrice = \true)
    {
    }
    public static function getDoublePicturesForItem(&$item, $propertyCode, $encode = \true)
    {
    }
    public static function getSliderForItem(&$item, $propertyCode, $addDetailToSlider, $encode = \true)
    {
    }
    public static function getLabel(&$item, $propertyCode)
    {
    }
    public static function clearProperties(&$properties, $clearCodes)
    {
    }
    public static function getMinPriceFromList($priceList)
    {
    }
    public static function isEnabledCalculationDiscounts()
    {
    }
    public static function enableCalculationDiscounts()
    {
    }
    public static function disableCalculationDiscounts()
    {
    }
}