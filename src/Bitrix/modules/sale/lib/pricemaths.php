<?php

namespace Bitrix\Sale;

class PriceMaths
{
    private static $valuePrecision = null;
    /**
     * @param $value
     *
     * @return float
     * @throws Main\ArgumentNullException
     */
    public static function roundPrecision($value)
    {
    }
    /**
     * @deprecated Use \Bitrix\Sale\PriceMaths::roundPrecision instead it
     *
     * @param $price
     * @param $currency
     * 
     * @return float
     */
    public static function roundByFormatCurrency($price, $currency)
    {
    }
}