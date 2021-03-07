<?php

namespace Bitrix\Currency;

/**
 * Class CurrencyTable
 *
 * Fields:
 * <ul>
 * <li> CURRENCY string(3) mandatory
 * <li> AMOUNT_CNT int optional default 1
 * <li> AMOUNT float optional
 * <li> SORT int optional default 100
 * <li> DATE_UPDATE datetime mandatory
 * <li> NUMCODE string(3) optional
 * <li> BASE string(1) mandatory
 * <li> CREATED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> MODIFIED_BY int optional
 * <li> CURRENT_BASE_RATE float optional
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> LANG_FORMAT reference to {@link \Bitrix\Currency\CurrencyLangTable}
 * <li> CURRENT_LANG_FORMAT reference to {@link \Bitrix\Currency\CurrencyLangTable} with current language (LANGUAGE_ID)
 * </ul>
 *
 * @package Bitrix\Currency
 **/
class CurrencyTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for CURRENCY field.
     *
     * @return array
     */
    public static function validateCurrency()
    {
    }
    /**
     * Returns validators for NUMCODE field.
     *
     * @return array
     */
    public static function validateNumcode()
    {
    }
    /**
     * @deprecated deprecated since currency 16.0.0
     * @see \Bitrix\Currency\CurrencyManager::currencyBaseRateAgent();
     *
     * @return string
     */
    public static function currencyBaseRateAgent()
    {
    }
}