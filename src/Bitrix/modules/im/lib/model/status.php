<?php

namespace Bitrix\Im\Model;

/**
 * Class StatusTable
 *
 * Fields:
 * <ul>
 * <li> USER_ID int mandatory
 * <li> STATUS string(50) optional default 'online'
 * <li> STATUS_TEXT string(255) optional
 * <li> IDLE datetime optional default 0
 * <li> DESKTOP_LAST_DATE datetime optional default 0
 * <li> MOBILE_LAST_DATE datetime optional default 0
 * <li> EVENT_ID int optional default 0
 * <li> EVENT_UNTIL_DATE datetime optional default 0
 * </ul>
 *
 * @package Bitrix\Im
 **/
class StatusTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns path to the file which contains definition of the class.
     *
     * @return string
     */
    public static function getFilePath()
    {
    }
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
     * Returns validators for STATUS field.
     *
     * @return array
     */
    public static function validateStatus()
    {
    }
    /**
     * Returns validators for STATUS_TEXT field.
     *
     * @return array
     */
    public static function validateStatusText()
    {
    }
    public static function validateColor()
    {
    }
}