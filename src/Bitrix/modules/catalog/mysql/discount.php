<?php

class CCatalogDiscount extends \CAllCatalogDiscount
{
    public function _Add(&$arFields)
    {
    }
    public function _Update($ID, &$arFields)
    {
    }
    public function Delete($ID)
    {
    }
    /**
     * @param int $ID
     * @return array|bool
     */
    public static function GetByID($ID)
    {
    }
    /**
     * @param mixed $val
     * @param mixed $key
     * @param string $operation
     * @param string $negative
     * @param string $field
     * @param array $arField
     * @param array $arFilter
     * @return bool|string
     * @noinspection PhpUnusedParameterInspection
     */
    public static function PrepareSection4Where($val, $key, $operation, $negative, $field, $arField, $arFilter)
    {
    }
    /**
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
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public function GetDiscountGroupsList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public function GetDiscountCatsList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public function GetDiscountProductsList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public function GetDiscountSectionsList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array$arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public function GetDiscountIBlocksList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    protected function __GetDiscountEntityList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 12.0.0
     *
     * @return void
     *
     * @noinspection PhpDeprecationInspection
     */
    public function SaveFilterOptions()
    {
    }
    /**
     * @deprecated deprecated since catalog 14.5.6
     *
     * @param array $arParams
     * @return void
     */
    protected function __SaveFilterForEntity($arParams)
    {
    }
    protected function __UpdateSubdiscount($intDiscountID, &$arConditions, $active = '')
    {
    }
    protected function __GetDiscountID($arFilter)
    {
    }
    protected function __UpdateOldEntities($ID, &$arFields, $boolUpdate)
    {
    }
    protected function __FillArrays($intDiscountID, &$arFields, $strEntityID)
    {
    }
    protected function updateDiscountHandlers($discountID, $handlers, $update)
    {
    }
    protected function getDiscountHandlers($discountList)
    {
    }
}