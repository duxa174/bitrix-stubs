<?php

namespace Bitrix\Calendar;

/**
 * Class PushTable
 *
 * Fields:
 * <ul>
 * <li> ENTITY_TYPE string(24) mandatory
 * <li> ENTITY_ID int mandatory
 * <li> CHANNEL_ID string(128) mandatory
 * <li> RESOURCE_ID string(128) mandatory
 * <li> EXPIRES datetime mandatory
 * <li> NOT_PROCESSED bool optional default 'N'
 * <li> FIRST_PUSH_DATE datetime optional
 * </ul>
 *
 * @package Bitrix\Calendar
 **/
class PushTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for ENTITY_TYPE field.
     *
     * @return array
     */
    public static function validateEntityType()
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
     * Returns validators for RESOURCE_ID field.
     *
     * @return array
     */
    public static function validateResourceId()
    {
    }
}