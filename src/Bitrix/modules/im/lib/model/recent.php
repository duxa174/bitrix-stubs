<?php

namespace Bitrix\Im\Model;

/**
 * Class RecentTable
 *
 * Fields:
 * <ul>
 * <li> USER_ID int mandatory
 * <li> ITEM_TYPE string(1) mandatory default 'P'
 * <li> ITEM_ID int mandatory
 * <li> ITEM_MID int mandatory
 * </ul>
 *
 * @package Bitrix\Im
 **/
class RecentTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for ITEM_TYPE field.
     *
     * @return array
     */
    public static function validateItemType()
    {
    }
    /**
     * Return current date for DATE_CREATE field.
     *
     * @return \Bitrix\Main\Type\DateTime
     */
    public static function getCurrentDate()
    {
    }
}