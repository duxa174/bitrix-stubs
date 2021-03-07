<?php

class CAllSaleTax
{
    public static function DoProcessOrderBasket(&$arOrder, $arOptions, &$arErrors)
    {
    }
    /**
     * @internal
     * @param $arOrder
     * @param $arOptions
     * @param $arErrors
     */
    public static function calculateTax(&$arOrder, $arOptions, &$arErrors)
    {
    }
    public static function DoProcessOrderDelivery(&$arOrder, $arOptions, &$arErrors)
    {
    }
    /**
     * @internal
     * @param $arOrder
     * @param $arOptions
     * @param $arErrors
     */
    public static function calculateDeliveryTax(&$arOrder, $arOptions, &$arErrors)
    {
    }
    static function DoSaveOrderTax($orderId, $taxList, &$arErrors)
    {
    }
    function CheckFields($ACTION, &$arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function Delete($ID)
    {
    }
    function GetByID($ID)
    {
    }
    function GetList($arOrder = array("NAME" => "ASC"), $arFilter = array())
    {
    }
    function GetExemptList($arFilter = array())
    {
    }
    function AddExempt($arFields)
    {
    }
    function DeleteExempt($arFields)
    {
    }
    /**
     * @return string
     */
    protected static function getOrderTaxEntityName()
    {
    }
    /**
     * @return string
     */
    protected static function getHistoryEntityName()
    {
    }
}