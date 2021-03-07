<?php

class CAllCatalogVat
{
    /**
     * @deprecated deprecated since catalog 12.5.6
     */
    public static function err_mess()
    {
    }
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    /**
     * @deprecated deprecated since catalog 20.0.200
     * @see \Bitrix\Catalog\VatTable::getById()
     *
     * @param int $ID
     * @return CDBResult|false
     */
    public static function GetByID($ID)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.5.6
     * @see CCatalogVat::GetListEx()
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param array $arFields
     * @return CDBResult|false
     */
    public static function GetList($arOrder = array('SORT' => 'ASC'), $arFilter = array(), $arFields = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 12.5.6
     * @see CCatalogVat::Add()
     * @see CCatalogVat::Update()
     *
     * @param array $arFields
     * @return int|false
     */
    public static function Set($arFields)
    {
    }
    public static function GetByProductID($PRODUCT_ID)
    {
    }
}