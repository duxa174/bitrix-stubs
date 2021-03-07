<?php

namespace Bitrix\Catalog;

/**
 * Class MeasureTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CODE int mandatory
 * <li> MEASURE_TITLE string(500) optional
 * <li> SYMBOL_RUS string(20) optional
 * <li> SYMBOL_INTL string(20) optional
 * <li> SYMBOL_LETTER_INTL string(20) optional
 * <li> IS_DEFAULT bool optional default 'N'
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class MeasureTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
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
     * Returns validators for MEASURE_TITLE field.
     *
     * @return array
     */
    public static function validateMeasureTitle()
    {
    }
    /**
     * Returns validators for SYMBOL field.
     *
     * @return array
     */
    public static function validateSymbol()
    {
    }
    /**
     * Returns validators for SYMBOL_INTL field.
     *
     * @return array
     */
    public static function validateSymbolIntl()
    {
    }
    /**
     * Returns validators for SYMBOL_LETTER_INTL field.
     *
     * @return array
     */
    public static function validateSymbolLetterIntl()
    {
    }
}