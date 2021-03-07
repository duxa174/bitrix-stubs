<?php

class CSaleLang
{
    function Add($arFields)
    {
    }
    function Update($siteId, $arFields)
    {
    }
    function Delete($siteId)
    {
    }
    public static function GetByID($siteId)
    {
    }
    /**
     * Return site currency.
     *
     * @deprecated deprecated since sale 15.0.0
     * @see \Bitrix\Sale\Internals\SiteCurrencyTable::getSiteCurrency
     *
     * @param string $siteId        Site identifier.
     * @return string
     */
    public static function GetLangCurrency($siteId)
    {
    }
    public static function OnBeforeCurrencyDelete($currency)
    {
    }
}
class CAllSaleGroupAccessToSite
{
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Update($ID, &$arFields)
    {
    }
    function GetByID($ID)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteBySite($SITE_ID)
    {
    }
    function DeleteByGroup($GROUP_ID)
    {
    }
}
class CAllSaleGroupAccessToFlag
{
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Update($ID, &$arFields)
    {
    }
    function GetByID($ID)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteByGroup($GROUP_ID)
    {
    }
    function DeleteByFlag($ORDER_FLAG)
    {
    }
}