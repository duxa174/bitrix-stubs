<?php

namespace Bitrix\Rest;

/**
 * Class AppLangTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> APP_ID int mandatory
 * <li> LANGUAGE_ID string(2) mandatory
 * <li> MENU_NAME string(500) mandatory
 * </ul>
 *
 * @package Bitrix\Rest
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
    public static function deleteByApp($appId)
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
     * Returns validators for MENU_NAME field.
     *
     * @return array
     */
    public static function validateMenuName()
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}