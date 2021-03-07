<?php

namespace Bitrix\Im\Model;

/**
 * Class CommandLangTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> COMMAND_ID int mandatory
 * <li> LANGUAGE_ID string(2) mandatory
 * <li> TITLE string(255) optional
 * <li> PARAMS string(255) optional
 * </ul>
 *
 * @package Bitrix\Im
 **/
class CommandLangTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for LANGUAGE_ID field.
     *
     * @return array
     */
    public static function validateLanguageId()
    {
    }
    /**
     * Returns validators for TITLE field.
     *
     * @return array
     */
    public static function validateTitle()
    {
    }
    /**
     * Returns validators for PARAMS field.
     *
     * @return array
     */
    public static function validateParams()
    {
    }
}