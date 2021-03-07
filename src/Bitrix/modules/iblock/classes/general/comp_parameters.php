<?php

class CIBlockParameters
{
    protected static $catalogIncluded = \null;
    static $elementPropertyCache = array();
    private static function getIblockElementProperties($iblock_id)
    {
    }
    static $catalogStoreCache = \null;
    private static function getCatalogStores()
    {
    }
    static $catalogPriceCache = \null;
    private static function getCatalogPrices()
    {
    }
    public static function GetFieldCode($name, $parent, $options = array())
    {
    }
    public static function GetSectionFieldCode(
        $name,
        $parent,
        /** @noinspection PhpUnusedParameterInspection */
        $options = array()
    )
    {
    }
    public static function GetDateFormat($name, $parent)
    {
    }
    public static function GetPathTemplateMenuItems($menuType, $action_function, $menuID, $inputID = "")
    {
    }
    public static function GetInheritedPropertyTemplateSectionMenuItems($iblock_id, $action_function, $menuID, $inputID = "")
    {
    }
    public static function GetInheritedPropertyTemplateElementMenuItems($iblock_id, $action_function, $menuID, $inputID = "")
    {
    }
    public static function GetPathTemplateParam($menuType, $ID, $parameterName, $defaultValue = "", $parentID = "URL_TEMPLATES")
    {
    }
    public static function AddPagerSettings(&$arComponentParameters, $pager_title, $bDescNumbering = \true, $bShowAllParam = \false, $bBaseLink = \false, $bBaseLinkEnabled = \false)
    {
    }
    public static function Add404Settings(&$arComponentParameters, $arCurrentValues, $bStatus = \true, $bPage = \true)
    {
    }
    /**
     * @param bool|array $arTop
     * @return array
     */
    public static function GetIBlockTypes($arTop = \false)
    {
    }
    public static function GetElementSortFields($arFields = array(), $arOptions = array())
    {
    }
    public static function GetSectionSortFields($arFields = array(), $arOptions = array())
    {
    }
    public static function checkParamValues($value)
    {
    }
}