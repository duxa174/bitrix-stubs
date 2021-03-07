<?php

class CSaleBasketHelper
{
    /*
     * Checks if basket item belongs to set (is parent or item of the set)
     *
     * @param $arItem - basket item fields array with SET_PARENT_ID and TYPE fields
     * @return bool
     */
    public static function isInSet($arItem)
    {
    }
    /*
     * Checks if basket item is set item (belongs to set, but not parent)
     *
     * @param $arItem - basket item fields array with SET_PARENT_ID and TYPE fields
     * @return bool
     */
    public static function isSetItem($arItem)
    {
    }
    /*
     * Checks if basket item is parent of the set
     *
     * @param $arItem - basket item fields array with SET_PARENT_ID and TYPE fields
     * @return bool
     */
    public static function isSetParent($arItem)
    {
    }
    /*
     * Checks if ALL set items are deducted (to update DEDUCTED = Y of the set parent)
     *
     * @param int $setParentID - set parent id
     * @return bool
     */
    public static function isSetDeducted($setParentID)
    {
    }
    /**
     * Helper method. Is used to re-sort basket items data so Set parents will be added before Set items
     * @param $arBasketItemA
     * @param $arBasketItemB
     * @return int
     */
    public static function cmpSetData($arBasketItemA, $arBasketItemB)
    {
    }
    public static function cmpBySort($array1, $array2)
    {
    }
    public static function filterFields($field)
    {
    }
    /**
     * resorting of elements in the parent
     * @param $basketItems
     * @param bool $setIndexAsId
     * @return array
     */
    public static function reSortItems($basketItems, $setIndexAsId = \false)
    {
    }
    /**
     * @param array $basketItemData
     *
     * @return float|int
     */
    public static function getVat(array $basketItemData)
    {
    }
    /**
     * @param array $basketItemData
     *
     * @return float|int
     */
    public static function getFinalPrice(array $basketItemData)
    {
    }
    /**
     * @param $quantity
     *
     * @return float
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function formatQuantity($quantity)
    {
    }
}