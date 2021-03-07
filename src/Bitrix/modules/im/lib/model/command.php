<?php

namespace Bitrix\Im\Model;

/**
 * Class CommandTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> BOT_ID int optional
 * <li> COMMAND string(255) mandatory
 * <li> COMMON bool optional default 'N'
 * <li> HIDDEN bool optional default 'N'
 * <li> SONET_SUPPORT bool optional default 'N'
 * <li> EXTRANET_SUPPORT bool optional default 'N'
 * <li> CLASS string(255) optional
 * <li> METHOD_COMMAND_ADD string(255) optional
 * <li> METHOD_LANG_GET string(255) optional
 * <li> MODULE_ID string(50) mandatory
 * </ul>
 *
 * @package Bitrix\Im
 **/
class CommandTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for APP_ID field.
     *
     * @return array
     */
    public static function validateAppId()
    {
    }
    /**
     * Returns validators for COMMAND field.
     *
     * @return array
     */
    public static function validateCommand()
    {
    }
    /**
     * Returns validators for CLASS field.
     *
     * @return array
     */
    public static function validateClass()
    {
    }
    /**
     * Returns validators for METHOD_COMMAND_ADD field.
     *
     * @return array
     */
    public static function validateMethodCommandAdd()
    {
    }
    /**
     * Returns validators for METHOD_LANG_GET field.
     *
     * @return array
     */
    public static function validateMethodLangGet()
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
}