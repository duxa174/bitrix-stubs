<?php

/**
* CSalePaySystemTarif
*	Abstract class for counting the pay system service's price etc.
*/
abstract class CSalePaySystemTarif
{
    private static $arItems = array();
    /**
     * getPrice
     * Calculate price for pay system service
     * @return float
     */
    public static abstract function getPrice(&$arPaySystem, $orderPrice, $deliveryPrice, $buyerLocationId);
    /**
     * getStructure
     * Describe tarif params structure
     * @return array
     */
    public static abstract function getStructure($psId, $persId);
    /**
     * checkCompability
     * Check if we can use this pay system
     * @return bool
     */
    public static abstract function checkCompability(&$arOrder, $orderPrice, $deliveryPrice, $buyerLocationId);
    public static function extractFromField($strFieldContent)
    {
    }
    public static function prepareToField($arTarif)
    {
    }
    /**
     * getByPaySystemId
     * returns saved tarif's values
     * @return array
     */
    protected static function getValuesByPSAId($psaId)
    {
    }
}