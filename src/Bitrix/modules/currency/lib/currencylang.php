<?php

namespace Bitrix\Currency;

/**
 * Class CurrencyLangTable
 *
 * Fields:
 * <ul>
 * <li> CURRENCY string(3) mandatory primary
 * <li> LID string(2) mandatory primary
 * <li> FORMAT_STRING string(50) mandatory
 * <li> FULL_NAME string(50) optional
 * <li> DEC_POINT string(16) optional default '.'
 * <li> THOUSANDS_SEP string(16) optional default ' '
 * <li> DECIMALS int optional default 2
 * <li> THOUSANDS_VARIANT string(1) optional
 * <li> HIDE_ZERO bool optional default 'N'
 * <li> CREATED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> MODIFIED_BY int optional
 * <li> TIMESTAMP_X datetime optional
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> LANGUAGE reference to {@link \Bitrix\Main\Localization\LanguageTable}
 * </ul>
 *
 * @package Bitrix\Currency
 **/
class CurrencyLangTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for LID field.
     *
     * @return array
     */
    public static function validateLid()
    {
    }
    /**
     * Returns validators for FORMAT_STRING field.
     *
     * @return array
     */
    public static function validateFormatString()
    {
    }
    /**
     * Returns validators for FULL_NAME field.
     *
     * @return array
     */
    public static function validateFullName()
    {
    }
    /**
     * Returns validators for DEC_POINT field.
     *
     * @return array
     */
    public static function validateDecPoint()
    {
    }
    /**
     * Returns validators for THOUSANDS_SEP field.
     *
     * @return array
     */
    public static function validateThousandsSep()
    {
    }
    /**
     * Returns validators for THOUSANDS_VARIANT field.
     *
     * @return array
     */
    public static function validateThousandsVariant()
    {
    }
}