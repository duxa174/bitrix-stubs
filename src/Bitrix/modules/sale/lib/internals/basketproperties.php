<?php

namespace Bitrix\Sale\Internals;

/**
 * Class BasketPropsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> BASKET_ID int mandatory
 * <li> NAME string(255) mandatory
 * <li> VALUE string(255) optional
 * <li> CODE string(255) optional
 * <li> SORT int optional default 100
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class BasketPropertyTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
    {
    }
    /**
     * Returns validators for VALUE field.
     *
     * @return array
     */
    public static function validateValue()
    {
    }
    /**
     * Returns validators for CODE field.
     *
     * @return array
     */
    public static function validateCode()
    {
    }
}