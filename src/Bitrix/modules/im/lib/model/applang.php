<?php

namespace Bitrix\Im\Model;

/**
 * Class AppLangTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> APP_ID int mandatory
 * <li> LANGUAGE_ID string(2) mandatory
 * <li> TITLE string(255) optional
 * <li> DESCRIPTION string(255) optional
 * <li> COPYRIGHT string(255) optional
 * </ul>
 *
 * @package Bitrix\Im
 **/
class AppLangTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for DESCRIPTION field.
     *
     * @return array
     */
    public static function validateDescription()
    {
    }
    /**
     * Returns validators for COPYRIGHT field.
     *
     * @return array
     */
    public static function validateCopyright()
    {
    }
}