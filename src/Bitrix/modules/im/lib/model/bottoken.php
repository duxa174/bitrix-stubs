<?php

namespace Bitrix\Im\Model;

/**
 * Class BotTokenTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TOKEN string(32) optional
 * <li> DATE_CREATE datetime mandatory
 * <li> DATE_EXPIRE datetime optional
 * <li> BOT_ID int optional
 * <li> DIALOG_ID string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Im
 **/
class BotTokenTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for TOKEN field.
     *
     * @return array
     */
    public static function validateToken()
    {
    }
    /**
     * Returns validators for DIALOG_ID field.
     *
     * @return array
     */
    public static function validateDialogId()
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