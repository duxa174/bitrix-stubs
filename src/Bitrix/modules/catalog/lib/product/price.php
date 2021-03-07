<?php

namespace Bitrix\Catalog\Product;

/**
 * Class Price
 * Provides various useful methods for prices.
 *
 * @package Bitrix\Catalog\Product
 */
class Price
{
    /* cache id template */
    const CACHE_ID = 'catalog_price_round_';
    /* cache time */
    const CACHE_TIME = 360000;
    /* maximal precision */
    const VALUE_EPS = 1.0E-6;
    /* static cache */
    protected static $roundRules = array();
    /**
     * Handler onAfterUpdateCurrencyBaseRate for update field PRICE_SCALE after change currency base rate.
     *
     * @param Main\Event $event			Event data (old and new currency rate).
     * @return void
     */
    public static function handlerAfterUpdateCurrencyBaseRate(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Load round rules list for price types.
     *
     * @param array $priceTypes		Price type ids.
     * @return void
     */
    public static function loadRoundRules(array $priceTypes)
    {
    }
    /**
     * Return round rules list for price type.
     *
     * @param int $priceType		Price type id.
     * @return array
     */
    public static function getRoundRules($priceType)
    {
    }
    /**
     * Clear cache rules for price type.
     *
     * @param int $priceType		Price type id.
     * @return void
     */
    public static function clearRoundRulesCache($priceType)
    {
    }
    /**
     * Get rule for price value.
     *
     * @param int $priceType		Price type id.
     * @param float|int $price		Price value.
     * @param string $currency		Price currency.
     * @return array
     */
    public static function searchRoundRule(
        $priceType,
        $price,
        /** @noinspection PhpUnusedParameterInspection */
        $currency = ''
    )
    {
    }
    /**
     * Round price.
     *
     * @param int $priceType		Price type id.
     * @param float|int $price		Price value.
     * @param string $currency		Currency.
     * @return float|int
     */
    public static function roundPrice($priceType, $price, $currency)
    {
    }
    /**
     * Round value with arbitrary precision.
     *
     * @param float|int $value			Round value.
     * @param float|int $precision		Precision.
     * @param int $type					Round type.
     * @return float|int
     */
    public static function roundValue($value, $precision, $type)
    {
    }
    /**
     * Return cache id for price type.
     *
     * @param string|int $priceType		Price type id.
     * @return string
     */
    protected static function getRulesCacheId($priceType)
    {
    }
    /**
     * Round whole part.
     *
     * @param float|int $value			Round value.
     * @param float|int $precision		Precision.
     * @param int $type					Round type.
     * @return float|int
     */
    protected static function roundWhole($value, $precision, $type)
    {
    }
    /**
     * Round fraction part.
     *
     * @param float|int $value			Round value.
     * @param float|int $precision		Precision.
     * @param int $type					Round type.
     * @return float
     */
    protected static function roundFraction($value, $precision, $type)
    {
    }
}