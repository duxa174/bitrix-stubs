<?php

class CCatalogAdminToolsAll
{
    const TAB_CATALOG = 'P';
    const TAB_SKU = 'O';
    const TAB_SET = 'S';
    const TAB_GROUP = 'G';
    const TAB_KEY = 'PRODUCT_TYPE';
    protected static $strMainPrefix = '';
    protected static $arErrors = array();
    protected static $arCheckResult = array();
    public static function getTabList($boolFull = \false)
    {
    }
    public static function getIBlockElementMenu($intIBlockID, &$arCatalog, $arParams, \Bitrix\Iblock\Url\AdminPage\BaseBuilder $urlBuilder = \null)
    {
    }
    public static function getIBlockElementContentMenu($intIBlockID, $intID, &$arCatalog, $arParams)
    {
    }
    public static function getShowTabs($intIBlockID, $intID, &$arCatalog)
    {
    }
    public static function getFormParams($params = array())
    {
    }
    public static function showFormParams()
    {
    }
    public static function setCatalogPanelButtons(&$buttons, $iblock, $catalogButtons, $params, $windowParams)
    {
    }
    public static function setMainPrefix($strPrefix)
    {
    }
    public static function getMainPrefix()
    {
    }
    public static function setProductFormParams()
    {
    }
    public static function setSkuFormParams()
    {
    }
    public static function getErrors()
    {
    }
    public static function changeTabs($intIBlockID, $intID, &$arCatalog)
    {
    }
    public static function addTabParams(&$arParams)
    {
    }
    public static function clearTabParams()
    {
    }
    /**
     * @param int $iblockId
     * @param bool $withDescr
     * @return array|mixed
     */
    public static function getIblockProductTypeList($iblockId, $withDescr = \false)
    {
    }
    /**
     * @param bool $withDescr
     * @return array
     */
    public static function getProductTypeList($withDescr = \false)
    {
    }
}
class CCatalogAdminTools extends \CCatalogAdminToolsAll
{
}
class CCatalogAdminProductSetEdit
{
    const NEW_ITEM_COUNT = 3;
    const PREFIX_SET = 'PRODUCT_SET';
    const PREFIX_GROUP = 'PRODUCT_GROUP';
    protected static $strMainPrefix = '';
    protected static $intTypeID = 0;
    protected static $arErrors = array();
    protected static $arSrcValues = array();
    protected static $arCheckValues = array();
    public static function setMainPrefix($strPrefix)
    {
    }
    public static function getMainPrefix()
    {
    }
    public static function setTypeID($intTypeID)
    {
    }
    public static function getTypeID()
    {
    }
    public static function setProductFormParams($arParams)
    {
    }
    public static function setSkuFormParams($arParams)
    {
    }
    public static function getEmptySet($intProductID)
    {
    }
    public static function getEmptyItem($arParams)
    {
    }
    public static function getFormValues(&$arSets)
    {
    }
    public static function addEmptyValues(&$arSets)
    {
    }
    public static function getItemsInfo(&$arSets)
    {
    }
    public static function clearOwnerSet(&$arSets)
    {
    }
    public static function showEditForm($arSets)
    {
    }
    public static function showItemRow($arRow, $arParams)
    {
    }
    protected static function getJSRow($arParams)
    {
    }
    public static function checkFormValues($arItem)
    {
    }
    public static function saveFormValues($arItem)
    {
    }
    public static function getErrors()
    {
    }
}