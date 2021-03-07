<?php

class CSaleBasket extends \CAllSaleBasket
{
    /**
     * The function remove old subscribe product
     *
     * @param string $LID - site for cleaning
     * @return true false
     */
    function _ClearProductSubscribe($LID)
    {
    }
    public static function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    function GetPropsList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    //************** ADD, UPDATE, DELETE ********************//
    /**
     * Adds item to the basket.
     * Automatically adds Set items to the basket if Set parents is added
     *
     * @param $arFields
     * @return mixed - int ID or false
     */
    function Add($arFields)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteAll($FUSER_ID = 0, $bIncOrdered = \false)
    {
    }
    function GetLeave($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
}
class CSaleUser extends \CAllSaleUser
{
    function Add()
    {
    }
    function _Add($arFields)
    {
    }
    function DeleteOld($nDays)
    {
    }
    function GetBuyersList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    function GetUserID($intFUserID)
    {
    }
}