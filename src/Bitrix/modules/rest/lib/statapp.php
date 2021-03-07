<?php

namespace Bitrix\Rest;

/**
 * Class StatAppTable
 * 
 * Fields:
 * <ul>
 * <li> APP_ID int mandatory
 * <li> APP_CODE string(128) mandatory
 * <li> APP reference to {@link \Bitrix\Rest\AppTable}
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class StatAppTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for APP_CODE field.
     *
     * @return array
     */
    public static function validateAppCode()
    {
    }
    /**
     * Adds a relation between application id and it's code.
     *
     * @return void
     */
    public static function register($appInfo)
    {
    }
}