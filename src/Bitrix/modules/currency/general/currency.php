<?php

class CAllCurrency
{
    protected static $currencyCache = array();
    /*
    * @deprecated deprecated since currency 9.0.0
    * @see CCurrency::GetByID()
    */
    public static function GetCurrency($currency)
    {
    }
    public function CheckFields($ACTION, &$arFields, $strCurrencyID = \false)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($currency, $arFields)
    {
    }
    public static function Delete($currency)
    {
    }
    public static function GetByID($currency)
    {
    }
    /**
     * @deprecated deprecated since currency 16.0.0
     * @see \Bitrix\Currency\CurrencyManager::getBaseCurrency
     *
     * @return string
     */
    public static function GetBaseCurrency()
    {
    }
    public static function SetBaseCurrency($currency)
    {
    }
    public static function SelectBox($sFieldName, $sValue, $sDefaultValue = '', $bFullName = \true, $JavaFunc = '', $sAdditionalParams = '')
    {
    }
    /**
     * @deprecated deprecated since currency 16.5.0
     * @see \Bitrix\Currency\CurrencyTable::getList
     *
     * @param string &$by
     * @param string &$order
     * @param string $lang
     * @return CDBResult
     */
    public static function GetList(&$by, &$order, $lang = \LANGUAGE_ID)
    {
    }
    /**
     * @deprecated deprecated since currency 16.5.0
     * @see \Bitrix\Currency\CurrencyTable::getList
     *
     * @param string &$by
     * @param string &$order
     * @param string $lang
     * @return CDBResult
     */
    public static function __GetList(&$by, &$order, $lang = \LANGUAGE_ID)
    {
    }
    public static function isUserExists()
    {
    }
    /**
     * @deprecated deprecated since currency 16.5.0
     * @see \Bitrix\Currency\CurrencyManager::getInstalledCurrencies
     *
     * @return array
     */
    public static function getInstalledCurrencies()
    {
    }
    /**
     * @deprecated deprecated since currency 16.5.0
     * @see \Bitrix\Currency\CurrencyManager::clearCurrencyCache
     *
     * @return void
     */
    public static function clearCurrencyCache()
    {
    }
    /**
     * @deprecated deprecated since currency 16.5.0
     * @see \Bitrix\Currency\CurrencyManager::clearTagCache
     *
     * @param string $currency
     * @return void
     */
    public static function clearTagCache($currency)
    {
    }
    public static function checkCurrencyID($currency)
    {
    }
    /**
     * @deprecated deprecated since currency 16.0.0
     * @see \Bitrix\Currency\CurrencyManager::updateBaseRates
     *
     * @param string $currency
     * @return void
     */
    public static function updateCurrencyBaseRate($currency)
    {
    }
    /**
     * @deprecated deprecated since currency 16.0.0
     * @see \Bitrix\Currency\CurrencyManager::updateBaseRates
     *
     * @return void
     */
    public static function updateAllCurrencyBaseRate()
    {
    }
    public static function initCurrencyBaseRateAgent()
    {
    }
    /**
     * @deprecated deprecated since currency 16.0.0
     * @see \Bitrix\Currency\CurrencyManager::updateBaseCurrency
     *
     * @param string $currency
     * @return bool
     */
    protected static function updateBaseCurrency($currency)
    {
    }
    /**
     * @deprecated deprecated since currency 16.0.0
     * @see \Bitrix\Currency\CurrencyManager::updateBaseRates
     *
     * @param string $currency
     * @param string $updateCurrency
     */
    protected static function updateBaseRates($currency = '', $updateCurrency = '')
    {
    }
    protected static function clearFields($value)
    {
    }
}
class CCurrency extends \CAllCurrency
{
}