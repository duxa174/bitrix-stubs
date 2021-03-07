<?php

class CCatalogProduct extends \CAllCatalogProduct
{
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see Catalog\Model\Product::getList or Catalog\ProductTable::getList
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public static function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 8.5.1
     * @see CCatalogProduct::GetList()
     *
     * @param array $arOrder
     * @param array $arFilter
     *
     * @return false
     *
     */
    public static function GetListEx($arOrder = array("SORT" => "ASC"), $arFilter = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.3
     * @see CCatalogProduct::GetVATDataByID
     *
     * @param int $PRODUCT_ID
     * @return false|CDBResult
     */
    public static function GetVATInfo($PRODUCT_ID)
    {
    }
    /**
     * @param array $list
     *
     * @return array
     */
    public static function GetVATDataByIDList(array $list)
    {
    }
    /**
     * @param int $id
     *
     * @return false|array
     */
    public static function GetVATDataByID($id)
    {
    }
    /**
     * @param array $list
     *
     * @return array
     */
    private static function loadVatInfoFromDB(array $list)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see Catalog\Model\Product::update
     * @param int $intID
     * @param int $intTypeID
     * @return bool
     */
    public static function SetProductType($intID, $intTypeID)
    {
    }
}