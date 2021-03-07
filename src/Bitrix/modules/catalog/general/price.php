<?php

class CAllPrice
{
    /**
     * @deprecated deprecated since catalog 17.6.0
     *
     * @param string $ACTION
     * @param array &$arFields
     * @param int $ID
     * @return bool
     */
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    /**
     * @param int $id
     * @return array|false
     */
    public static function GetByID($id)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::add
     *
     * @param array $fields
     * @param bool $recount
     * @return bool|int
     */
    public static function Add($fields, $recount = \false)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::update
     *
     * @param $id
     * @param array $fields
     * @param bool $recount
     * @return bool|int
     */
    public static function Update($id, $fields, $recount = \false)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::delete
     *
     * @param $id
     * @return bool
     */
    public static function Delete($id)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::getList
     *
     * @param $productID
     * @param bool $quantityFrom
     * @param bool $quantityTo
     * @param bool $boolExt
     * @return array|bool|false|mixed|null
     */
    public static function GetBasePrice($productID, $quantityFrom = \false, $quantityTo = \false, $boolExt = \true)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::add and \Bitrix\Catalog\Model\Price::update
     *
     * @param int $ProductID
     * @param int|float $Price
     * @param string $Currency
     * @param bool $quantityFrom
     * @param bool $quantityTo
     * @param bool $bGetID
     * @return bool|int
     */
    public static function SetBasePrice($ProductID, $Price, $Currency, $quantityFrom = \false, $quantityTo = \false, $bGetID = \false)
    {
    }
    public static function ReCalculate($TYPE, $ID, $VAL)
    {
    }
    public static function OnCurrencyDelete($Currency)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Product::delete
     *
     * @param int $ProductID
     * @return bool
     */
    public static function OnIBlockElementDelete($ProductID)
    {
    }
    public static function DeleteByProduct($ProductID, $arExceptionIDs = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::add and \Bitrix\Catalog\Model\Price::update
     *
     * @param array &$arFields
     * @return void
     */
    public static function ReCountForBase(&$arFields)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * @see \Bitrix\Catalog\Model\Price::add and \Bitrix\Catalog\Model\Price::update
     *
     * @param array &$arFields
     * @param bool &$boolBase
     * @return void
     */
    public static function ReCountFromBase(&$arFields, &$boolBase)
    {
    }
    private static function convertErrors(\Bitrix\Main\Entity\Result $result)
    {
    }
    private static function normalizeFields(array &$fields)
    {
    }
}