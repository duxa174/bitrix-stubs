<?php

class CSalePaySystemTarifPFC extends \CSalePaySystemTarif
{
    /* required inhereted methods */
    public static function getPrice(&$arPaySystem, $orderPrice, $deliveryPrice, $buyerLocationId)
    {
    }
    public static function getValues($psId = \false, $persId = \false)
    {
    }
    public static function extractFromField($strFieldContent)
    {
    }
    public static function prepareToField($arTarif)
    {
    }
    public static function getStructure($psId, $persId)
    {
    }
    private static function getRegionsList()
    {
    }
    public static function checkCompability(&$arOrder, $orderPrice, $deliveryPrice, $buyerLocationId)
    {
    }
    private static function setTarifConfig($tarifId, $tarifTitle, $arTarifs, &$arConfig)
    {
    }
    private static function getTarifArrayCSV($arTarifs)
    {
    }
    public static function getCMTarifsByRegionFromCsv($regionNameLang)
    {
    }
    public static function getAllCMTarifsFromCsv()
    {
    }
}