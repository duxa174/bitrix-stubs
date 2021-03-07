<?php

namespace Bitrix\Catalog\Product\Price;

/**
 * Class Calculation
 * Provides methods for product price calculation (discounts, round, precision).
 *
 * @package Bitrix\Catalog\Product\Price
 */
class Calculation
{
    const RESULT_MODE_COMPONENT = 1;
    const RESULT_MODE_RAW = 2;
    protected static $config = array('CURRENCY' => null, 'PRECISION' => null, 'USE_DISCOUNTS' => true, 'RESULT_WITH_VAT' => true, 'RESULT_MODE' => self::RESULT_MODE_COMPONENT);
    private static $stack = array();
    /**
     * Set calculation settings.
     *
     * @param array $config
     *  keys are case sensitive:
     *		<ul>
     * 		<li>string CURRENCY				Result currency (can be null - use base currency (compatibility only)).
     *		<li>int PRECISION				Calculation precision (can be null - use default catalog precision - CATALOG_VALUE_PRECISION).
     *		<li>bool USE_DISCOUNTS			Use discounts for calculation (by default use discounts is allowed).
     *		<li>bool RESULT_WITH_VAT		Returns result price without/with VAT (by default return price with VAT).
     *		<li>int RESULT_MODE				Returns raw result for provider or prepared result for components (by default - for components).
     *		</ul>
     * @return void
     */
    public static function setConfig(array $config)
    {
    }
    /**
     * Returns current calculation settings.
     *
     * @return array
     */
    public static function getConfig()
    {
    }
    /**
     * Save current calculation settings to the stack before the changes.
     *
     * @return void
     */
    public static function pushConfig()
    {
    }
    /**
     * Set the calculation settings from the stack, if it is not empty.
     *
     * @return void
     */
    public static function popConfig()
    {
    }
    /**
     * Returns result calculation currency.
     *
     * @return string
     */
    public static function getCurrency()
    {
    }
    /**
     * Returns calculation precision.
     *
     * @return int
     */
    public static function getPrecision()
    {
    }
    /**
     * Returns true if allowed use discounts.
     *
     * @return bool
     */
    public static function isAllowedUseDiscounts()
    {
    }
    /**
     * Returns true if result price with VAT.
     *
     * @return bool
     */
    public static function isIncludingVat()
    {
    }
    public static function getResultMode()
    {
    }
    public static function isComponentResultMode()
    {
    }
    public static function isRawResultMode()
    {
    }
    /**
     * Rounding the price or discount to a specified number of decimal places.
     *
     * @param float|int $value		Value for rounding.
     * @return float
     */
    public static function roundPrecision($value)
    {
    }
    /**
     * Returns the result of comparing two values with the precision of rounding.
     *
     * @param float|int $firstValue         First value.
     * @param float|int $secondValue        Second value.
     * @param string $operator              Compare operator ( >, >=, <, <=, ==, !=).
     * @return bool
     */
    public static function compare($firstValue, $secondValue, $operator)
    {
    }
    /**
     * Validate new settings (allowed keys and values).
     * @internal
     *
     * @param array $config		New config.
     * @return array
     */
    protected static function checkConfig(array $config)
    {
    }
}