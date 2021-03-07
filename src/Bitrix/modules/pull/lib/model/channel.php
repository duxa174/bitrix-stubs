<?php

namespace Bitrix\Pull\Model;

/**
 * Class ChannelTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int mandatory
 * <li> CHANNEL_TYPE string(50) optional
 * <li> CHANNEL_ID string(50) mandatory
 * <li> LAST_ID int optional
 * <li> DATE_CREATE datetime mandatory
 * <li> USER reference to {@link \Bitrix\User\UserTable}
 * </ul>
 *
 * @package Bitrix\Pull
 **/
class ChannelTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for CHANNEL_TYPE field.
     *
     * @return array
     */
    public static function validateChannelType()
    {
    }
    /**
     * Returns validators for CHANNEL_ID field.
     *
     * @return array
     */
    public static function validateChannelId()
    {
    }
    /**
     * Return current date for DATE_CREATE field.
     *
     * @return array
     */
    public static function getCurrentDate()
    {
    }
}