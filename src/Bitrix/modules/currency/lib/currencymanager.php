<?php

namespace Bitrix\Currency;

/**
 * Class CurrencyTable
 *
 * @package Bitrix\Currency
 **/
class CurrencyManager
{
    const CACHE_BASE_CURRENCY_ID = 'currency_base_currency';
    const CACHE_CURRENCY_LIST_ID = 'currency_currency_list';
    const CACHE_CURRENCY_SHORT_LIST_ID = 'currency_short_list_';
    const EVENT_ON_AFTER_UPDATE_BASE_RATE = 'onAfterUpdateCurrencyBaseRate';
    const EVENT_ON_UPDATE_BASE_CURRENCY = 'onUpdateBaseCurrency';
    const EVENT_ON_AFTER_UPDATE_BASE_CURRENCY = 'onAfterUpdateBaseCurrency';
    protected static $baseCurrency = '';
    /**
     * Check currency id.
     *
     * @param string $currency	Currency id.
     * @return bool|string
     */
    public static function checkCurrencyID($currency)
    {
    }
    /**
     * Check language id.
     *
     * @param string $language	Language.
     * @return bool|string
     */
    public static function checkLanguage($language)
    {
    }
    /**
     * Return base currency.
     *
     * @return string
     */
    public static function getBaseCurrency()
    {
    }
    /**
     * Return currency short list.
     *
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getCurrencyList()
    {
    }
    /**
     * Verifying the existence of the currency by its code.
     *
     * @param string $currency		Currency code.
     * @return bool
     */
    public static function isCurrencyExist($currency)
    {
    }
    /**
     * Return currency list, create to install module.
     *
     * @return array
     */
    public static function getInstalledCurrencies()
    {
    }
    /**
     * Clear currency cache.
     *
     * @param string $language		Language id.
     * @return void
     */
    public static function clearCurrencyCache($language = '')
    {
    }
    /**
     * Clear tag currency cache.
     *
     * @param string $currency	Currency id.
     * @return void
     */
    public static function clearTagCache($currency)
    {
    }
    /**
     * Agent for update current currencies rates to base currency.
     *
     * @return string
     */
    public static function currencyBaseRateAgent()
    {
    }
    /**
     * Update current currencies rates to base currency.
     *
     * @param string $updateCurrency		Update currency id.
     * @return void
     * @throws Main\ArgumentException
     * @throws \Exception
     */
    public static function updateBaseRates($updateCurrency = '')
    {
    }
    /**
     * Update base currency.
     *
     * @param string $currency			Currency id.
     * @return bool
     */
    public static function updateBaseCurrency($currency)
    {
    }
}