<?php

abstract class CBaseSaleReportHelper extends \CReportHelper
{
    // names of base entities for report construction (name with 0 index is default)
    private static $owners = array();
    private static $fInit = \false;
    private static $fOwnersInit = \false;
    protected static $fDecimalQuant = \false;
    protected static $iblockSite = array();
    protected static $sitelist = array();
    protected static $defaultSiteId = '';
    protected static $siteCookieId = '';
    protected static $statuslist = array();
    protected static $paySystemList = array();
    protected static $deliveryList = array();
    protected static $catalogSections = array();
    protected static $catalogs = array();
    protected static $productStores = array();
    protected static $genders = array();
    protected static $personTypes = array();
    protected static $weightOptions = array();
    protected static $priceTypes = array();
    protected static $bUsePriceTypesColumns = \false;
    protected static $currencies = array();
    protected static $reportCurrencyId = \null;
    protected static $siteCurrencyId = '';
    private static function localUpdate_17_5_0()
    {
    }
    private static function localUpdate()
    {
    }
    public static function init()
    {
    }
    public static function isInitialized()
    {
    }
    public static function initOwners()
    {
    }
    public static function getSiteList()
    {
    }
    public static function getWeightOptions()
    {
    }
    public static function getPriceTypes()
    {
    }
    public static function setSelectedPriceTypes($arSelected)
    {
    }
    public static function getCurrencies()
    {
    }
    public static function setSelectedCurrency($currencyId)
    {
    }
    public static function setSiteCurrencyId($currencyId)
    {
    }
    public static function getSiteCurrencyId()
    {
    }
    public static function getReportCurrencyId()
    {
    }
    public static function getSiteCookieId()
    {
    }
    public static function getStatusList()
    {
    }
    public static function getGenders()
    {
    }
    public static function getPersonTypes()
    {
    }
    public static function getDefaultSiteId()
    {
    }
    public static function isCatalogCorrespondsDefSite($catalogId)
    {
    }
    public static function getDefaultSiteWeightUnits()
    {
    }
    public static function getDefaultSiteWeightDivider()
    {
    }
    public static function setDefaultSiteId($siteId)
    {
    }
    public static function getPaySystemList()
    {
    }
    public static function getDeliveryList()
    {
    }
    protected static function addOwner($ownerName)
    {
    }
    public static function getOwners()
    {
    }
    public static function getCatalogSections()
    {
    }
    public static function getProductStores()
    {
    }
    public static function getHelperByOwner($ownerId)
    {
    }
    public static function getDefaultReports()
    {
    }
    public static function getCurrentVersion()
    {
    }
    public static function getFirstVersion()
    {
    }
    public static function getAjaxResponse($arRequestData)
    {
    }
    public static function getSectionsSelectHTMLOptions()
    {
    }
    public static function calculateInReportCurrency($value)
    {
    }
}
class CSaleReportSaleOrderHelper extends \CBaseSaleReportHelper
{
    private static $monetaryFields = array('TAX_VALUE', 'PRICE_DELIVERY', 'DISCOUNT_ALL', 'PRICE', 'SUM_PAID_FORREP', 'PAYMENT_ORDER_SUM');
    private static $goodsQuantityFields = array('PRODUCTS_QUANT');
    private static $withoutTotalFields = array('PERSON_TYPE_ID');
    private static $userNotAuthNameFields = array();
    public static function getEntityName()
    {
    }
    public static function getOwnerId()
    {
    }
    public static function getColumnList()
    {
    }
    public static function getDefaultColumns()
    {
    }
    public static function getCalcVariations()
    {
    }
    public static function getCompareVariations()
    {
    }
    public static function getPeriodFilter($date_from, $date_to)
    {
    }
    public static function fillFilterReferenceColumn(&$filterElement, \Bitrix\Main\Entity\ReferenceField $field)
    {
    }
    /* remove it when PHP 5.3 available */
    public static function formatResults(&$rows, &$columnInfo, $total)
    {
    }
    /* \remove it */
    public static function formatResultValue($k, &$v, &$row, &$cInfo, $total, &$customChartValue = \null)
    {
    }
    public static function formatResultGroupingTotal($params)
    {
    }
    public static function formatResultsTotal(&$total, &$columnInfo, &$bFormatOnly = \null)
    {
    }
    public static function getDefaultElemHref($elem, $fList)
    {
    }
}
class CSaleReportUserHelper extends \CBaseSaleReportHelper
{
    private static $monetaryFields = array(
        'DISCOUNT_ALL',
        'PRICE',
        'SUM_PAID_FORREP',
        // Order fields
        'TAX_VALUE',
        'PRICE_DELIVERY',
        'DISCOUNT_ALL',
        'PRICE',
        'SUM_PAID_FORREP',
    );
    private static $goodsQuantityFields = array(
        'SALE_ORDER_USER_PRODUCTS_QUANT',
        // Order fields
        'PRODUCTS_QUANT',
    );
    private static $withoutTotalFields = array(
        // Order fields
        'PERSON_TYPE_ID',
    );
    private static $userNotAuthNameFields = array();
    public static function getEntityName()
    {
    }
    public static function getOwnerId()
    {
    }
    public static function getColumnList()
    {
    }
    public static function getCalcVariations()
    {
    }
    public static function getCompareVariations()
    {
    }
    public static function getDefaultColumns()
    {
    }
    public static function getPeriodFilter($date_from, $date_to)
    {
    }
    public static function fillFilterReferenceColumn(&$filterElement, \Bitrix\Main\Entity\ReferenceField $field)
    {
    }
    public static function confirmFilterBackReferenceRewrite($fElem, $chain)
    {
    }
    public static function confirmSelectBackReferenceRewrite($elem, $chain)
    {
    }
    private static function fieldInFilter(&$filter, $fieldPathStr)
    {
    }
    private static function filterBySiteNeeded(&$select, &$filter)
    {
    }
    public static function beforeViewDataQuery(&$select, &$filter, &$group, &$order, &$limit, &$options, &$runtime = \null)
    {
    }
    /* remove it when PHP 5.3 available */
    public static function formatResults(&$rows, &$columnInfo, $total)
    {
    }
    /* \remove it */
    public static function formatResultValue($k, &$v, &$row, &$cInfo, $total, &$customChartValue = \null)
    {
    }
    public static function formatResultGroupingTotal($params)
    {
    }
    public static function formatResultsTotal(&$total, &$columnInfo, &$bFormatOnly = \null)
    {
    }
    public static function getDefaultElemHref($elem, $fList)
    {
    }
}
class CSaleReportSaleBasketHelper extends \CBaseSaleReportHelper
{
    private static $monetaryFields = array(
        'PRICE',
        'DISCOUNT_PRICE',
        'SUMMARY_PRICE',
        'VAT_RATE_PRC',
        // Order fields
        'TAX_VALUE',
        'PRICE_DELIVERY',
        'DISCOUNT_ALL',
        'PRICE',
        'SUM_PAID_FORREP',
        'PAYMENT_ORDER_SUM',
        'PRODUCT_PURCHASING_PRICE_IN_SITE_CURRENCY',
        'GROSS_PROFIT',
        'PROFITABILITY',
    );
    private static $goodsQuantityFields = array(
        'QUANTITY',
        'PRODUCT_QUANTITY',
        // Order fields
        'PRODUCTS_QUANT',
    );
    private static $withoutTotalFields = array(
        'PRODUCT_ID',
        'FUSER_ID',
        'ORDER_ID',
        'PRODUCT_SALE_GOODS_SECTION_PROD_SECT_ID',
        'PRODUCT_SALE_GOODS_SECTION_PROD_SECT_NAME',
        'VAT_RATE_PRC',
        // Order fields
        'PERSON_TYPE_ID',
    );
    private static $avgGroupingAggregationFields = array('PROFITABILITY');
    private static $userNotAuthNameFields = array('FUSER_USER_SHORT_NAME');
    private static $currentIblockFilter = array('value' => \null, 'compare' => \null);
    public static function getEntityName()
    {
    }
    public static function getOwnerId()
    {
    }
    public static function getColumnList()
    {
    }
    public static function getDefaultColumns()
    {
    }
    public static function getCalcVariations()
    {
    }
    public static function getCompareVariations()
    {
    }
    public static function getPeriodFilter($date_from, $date_to)
    {
    }
    public static function beforeFilterBackReferenceRewrite(&$filter, $viewColumns)
    {
    }
    public static function beforeViewDataQuery(&$select, &$filter, &$group, &$order, &$limit, &$options, &$runtime = \null)
    {
    }
    public static function fillFilterReferenceColumn(&$filterElement, \Bitrix\Main\Entity\ReferenceField $field)
    {
    }
    /* remove it when PHP 5.3 available */
    public static function formatResults(&$rows, &$columnInfo, $total)
    {
    }
    /* \remove it */
    public static function formatResultValue($k, &$v, &$row, &$cInfo, $total, &$customChartValue = \null)
    {
    }
    public static function formatResultGroupingTotal($params)
    {
    }
    public static function formatResultsTotal(&$total, &$columnInfo, &$bFormatOnly = \null)
    {
    }
    public static function getDefaultElemHref($elem, $fList)
    {
    }
}
class CSaleReportSaleProductHelper extends \CBaseSaleReportHelper
{
    private static $customProductFilter = 'all';
    private static $monetaryFields = array('PRICE_IN_SITE_CURRENCY', 'SUMMARY_PRICE_IN_SITE_CURRENCY', 'PURCHASING_PRICE_IN_SITE_CURRENCY');
    private static $goodsQuantityFields = array('QUANTITY', 'SALED_PRODUCTS_IN_PERIOD_BY_SHOP', 'CONSUMED_PRODUCTS_IN_PERIOD_BY_SHOP', 'ARRIVED_PRODUCTS_IN_PERIOD_BY_SHOP', 'ARRIVED_PRODUCTS_IN_PERIOD_BY_STORE', 'EXPENSE_PRODUCTS_IN_PERIOD_BY_STORE', 'STORE_PRODUCT_SALE_PRODUCT_AMOUNT');
    private static $withoutTotalFields = array('CONVERSION', 'PRODUCT_STORE_ID');
    private static $userNotAuthNameFields = array();
    private static $currentIblockFilter = array('value' => \null, 'compare' => \null);
    public static function setCustomProductFilter($strFilterValue)
    {
    }
    public static function enablePriceTypesColumns($bUsePriceTypesColumns)
    {
    }
    public static function getCustomProductFilter()
    {
    }
    public static function getEntityName()
    {
    }
    public static function getOwnerId()
    {
    }
    public static function getColumnList()
    {
    }
    public static function setRuntimeFields(\Bitrix\Main\Entity\Base $entity, $sqlTimeInterval)
    {
    }
    public static function getDefaultColumns()
    {
    }
    public static function getCompareVariations()
    {
    }
    public static function getCalcVariations()
    {
    }
    public static function getPeriodFilter($date_from, $date_to)
    {
    }
    public static function getEntityFilterPrimaryFieldName($fElem)
    {
    }
    public static function confirmFilterBackReferenceRewrite($fElem, $chain)
    {
    }
    public static function confirmSelectBackReferenceRewrite($elem, $chain)
    {
    }
    public static function beforeFilterBackReferenceRewrite(&$filter, $viewColumns)
    {
    }
    public static function beforeViewDataQuery(&$select, &$filter, &$group, &$order, &$limit, &$options, &$runtime = \null)
    {
    }
    /* remove it when PHP 5.3 available */
    public static function formatResults(&$rows, &$columnInfo, $total)
    {
    }
    /* \remove it */
    // format result value in grouping mode
    /*public static function formatResultGroupingValue($params)
    	{
    		$k = $params['k'];
    		$v = $params['v'];
    		$row = $params['row'];
    		$cInfo = $params['cInfo'];
    		static::formatResultValue($k, $v, $row, $cInfo, array());
    	}*/
    public static function formatResultValue($k, &$v, &$row, &$cInfo, $total, &$customChartValue = \null)
    {
    }
    public static function formatResultGroupingTotal($params)
    {
    }
    public static function formatResultsTotal(&$total, &$columnInfo, &$bFormatOnly = \null)
    {
    }
    public static function getDefaultElemHref($elem, $fList)
    {
    }
}