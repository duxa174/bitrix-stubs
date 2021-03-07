<?php

class CAllCurrencyRates
{
    protected static $currentCache = array();
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
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
    public static function GetByID($ID)
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array())
    {
    }
    public static function ConvertCurrency($valSum, $curFrom, $curTo, $valDate = "")
    {
    }
    /**
     * @deprecated deprecated since currency 16.0.0
     * @see CCurrencyRates::GetConvertFactorEx
     *
     * @param float|int $curFrom
     * @param float|int $curTo
     * @param string $valDate
     * @return float|int
     */
    public static function GetConvertFactor($curFrom, $curTo, $valDate = "")
    {
    }
    /**
     * @param float|int $curFrom
     * @param float|int $curTo
     * @param string $valDate
     * @return float|int
     */
    public static function GetConvertFactorEx($curFrom, $curTo, $valDate = "")
    {
    }
    public static function _get_last_rates($valDate, $cur)
    {
    }
}