<?php

class CAllCatalog
{
    protected static $arCatalogCache = array();
    protected static $catalogVatCache = array();
    private static $disableCheckIblock = 0;
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetFilterOperation($key)
    {
    }
    public static function PrepareSql(&$arFields, $arOrder, $arFilter, $arGroupBy, $arSelectFields)
    {
    }
    public static function _PrepareSql(&$arFields, $arOrder, $arFilter, $arGroupBy, $arSelectFields)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function OnIBlockDelete($ID)
    {
    }
    public static function PreGenerateXML($xml_type = 'yandex')
    {
    }
    /**
     * @deprecated deprecated since catalog 11.0.2
     * @see CCatalogSku::GetInfoByProductIBlock()
     *
     * @param int $ID
     * @return false|array
     */
    public static function GetSkuInfoByProductID($ID)
    {
    }
    /**
     * @deprecated deprecated since catalog 11.0.2
     * @see CCatalogSku::GetInfoByLinkProperty()
     *
     * @param int $ID
     * @return false|array
     */
    public static function GetSkuInfoByPropID($ID)
    {
    }
    public static function OnBeforeIBlockElementDelete($ID)
    {
    }
    public static function OnBeforeCatalogDelete($ID)
    {
    }
    /**
     * @param array &$fields
     * @return bool
     */
    public static function OnBeforeIBlockPropertyUpdate(array &$fields)
    {
    }
    /**
     * @param int $intPropertyID
     * @return bool
     */
    public static function OnBeforeIBlockPropertyDelete($intPropertyID)
    {
    }
    public static function OnIBlockModuleUnInstall()
    {
    }
    public static function OnBeforeIBlockUpdate(array &$fields)
    {
    }
    public static function OnAfterIBlockUpdate(array &$fields)
    {
    }
    /**
     * @deprecated deprecated since catalog 14.0.0
     * @see CCatalogSku::GetInfoByIBlock()
     *
     * @param int $ID
     * @return false|array
     */
    public static function GetByIDExt($ID)
    {
    }
    public static function UnLinkSKUIBlock($ID)
    {
    }
    /**
     * @deprecated deprecated since catalog 16.0.0
     * @see CIBlockPropertyTools::createProperty
     *
     * @param int $ID				Parent iblock id.
     * @param int $SKUID			Offer iblock id.
     * @return int|false
     */
    public static function LinkSKUIBlock($ID, $SKUID)
    {
    }
    /**
     * @deprecated deprecated since catalog 10.0.3
     * @internal
     *
     * @return array
     */
    public static function GetCatalogFieldsList()
    {
    }
    public static function IsUserExists()
    {
    }
    public static function clearCache()
    {
    }
    private static function disableHandler()
    {
    }
    private static function enableHandler()
    {
    }
    private static function isEnabledHandler()
    {
    }
}