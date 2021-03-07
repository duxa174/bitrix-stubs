<?php

class CAllSaleOrderTax
{
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    protected static function isOrderExists($id)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function DeleteEx($ORDER_ID)
    {
    }
    public static function GetByID($ID)
    {
    }
    // The function does not handle fixed-rate taxes. Only with interest!
    // any tax returns for the price
    // the second argument ($ arTaxList [] ["TAX_VAL"]) returns the value of the tax for that price
    function CountTaxes($Price, &$arTaxList, $DefCurrency)
    {
    }
    /**
     * @return string
     */
    protected static function getTableName()
    {
    }
}