<?php

namespace Bitrix\Im\Model;

/**
 * Class BotTable
 *
 * Fields:
 * <ul>
 * <li> BOT_ID int mandatory
 * <li> MODULE_ID int mandatory
 * <li> TO_CLASS string(255) optional
 * <li> TO_METHOD string(255) optional
 * </ul>
 *
 * @package Bitrix\Im
 **/
class BotTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for CODE field.
     *
     * @return array
     */
    public static function validateBotCode()
    {
    }
    /**
     * Returns validators for CLASS field.
     *
     * @return array
     */
    public static function validateToClass()
    {
    }
    /**
     * Returns validators for MODULE_ID field.
     *
     * @return array
     */
    public static function validateModuleId()
    {
    }
    /**
     * Returns validators for METHODS field.
     *
     * @return array
     */
    public static function validateToMethod()
    {
    }
    /**
     * Returns validators for APP_ID field.
     *
     * @return array
     */
    public static function validateAppId()
    {
    }
    /**
     * Returns validators for TYPE field.
     *
     * @return array
     */
    public static function validateBotType()
    {
    }
    /**
     * Returns validators for TYPE field.
     *
     * @return array
     */
    public static function validateLanguage()
    {
    }
}