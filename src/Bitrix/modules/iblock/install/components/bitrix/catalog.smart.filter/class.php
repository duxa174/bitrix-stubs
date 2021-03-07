<?php

/*DEMO CODE for component inheritance
CBitrixComponent::includeComponentClass("bitrix::news.base");
class CBitrixCatalogSmartFilter extends CBitrixNewsBase
*/
class CBitrixCatalogSmartFilter extends \CBitrixComponent
{
    public $IBLOCK_ID = 0;
    public $SKU_IBLOCK_ID = 0;
    public $SKU_PROPERTY_ID = 0;
    public $SECTION_ID = 0;
    public $FILTER_NAME = "";
    public $SAFE_FILTER_NAME = "";
    public $convertCurrencyId = "";
    protected $currencyTagList = array();
    protected $currencyCache = array();
    protected $cache = array();
    protected static $catalogIncluded = \null;
    protected static $iblockIncluded = \null;
    /** @var \Bitrix\Iblock\PropertyIndex\Facet **/
    protected $facet = \null;
    public function onPrepareComponentParams($arParams)
    {
    }
    public function executeComponent()
    {
    }
    public function getIBlockItems($IBLOCK_ID)
    {
    }
    public function getPriceItems()
    {
    }
    public function getResultItems()
    {
    }
    public function processProperties(array &$resultItem, array $elements, array $dictionaryID, array $directoryPredict = [])
    {
    }
    public function predictIBSectionFetch($id = array())
    {
    }
    public function predictIBElementFetch($id = array())
    {
    }
    public function predictHlFetch($userType, $valueIDs)
    {
    }
    public function fillItemPrices(&$resultItem, $arElement)
    {
    }
    public function convertPrice($price, $currency)
    {
    }
    public function fillItemValues(&$resultItem, $arProperty, $flag = \null)
    {
    }
    function combineCombinations(&$arCombinations)
    {
    }
    function filterCombinations(&$arCombinations, $arItems, $currentPID)
    {
    }
    function combinationMatch($combination, $arItems, $currentPID)
    {
    }
    function matchProperty($value, $arValues)
    {
    }
    public function _sort($v1, $v2)
    {
    }
    /*
    This function takes an array (arTuple) which is mix of scalar values and arrays
    and return "rectangular" array of arrays.
    For example:
    array(1, array(1, 2), 3, arrays(4, 5))
    will be transformed as
    array(
    	array(1, 1, 3, 4),
    	array(1, 1, 3, 5),
    	array(1, 2, 3, 4),
    	array(1, 2, 3, 5),
    )
    */
    function ArrayMultiply(&$arResult, $arTuple, $arTemp = array())
    {
    }
    function makeFilter($FILTER_NAME)
    {
    }
    public function getCurrencyFullName($currencyId)
    {
    }
    public function searchPrice($items, $lookupValue)
    {
    }
    public function searchProperty($items, $lookupValue)
    {
    }
    public function searchValue($item, $lookupValue)
    {
    }
    public function convertUrlToCheck($url)
    {
    }
    public function makeSmartUrl($url, $apply, $checkedControlId = \false)
    {
    }
    public function encodeSmartParts($smartParts)
    {
    }
    public function setCurrencyTag()
    {
    }
    public function setIblockTag()
    {
    }
}