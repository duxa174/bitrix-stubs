<?php

class CPrice extends \CAllPrice
{
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::getList
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
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::getList
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public static function GetListEx($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
}