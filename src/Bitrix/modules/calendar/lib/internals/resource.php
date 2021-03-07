<?php

namespace Bitrix\Calendar\Internals;

/**
 * Class ResourceTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> EVENT_ID int optional
 * <li> CAL_TYPE string(100) optional
 * <li> RESOURCE_ID int mandatory
 * <li> PARENT_TYPE string(100) optional
 * <li> PARENT_ID int mandatory
 * <li> UF_ID int optional
 * <li> DATE_FROM_UTC datetime optional
 * <li> DATE_TO_UTC datetime optional
 * <li> DATE_FROM datetime optional
 * <li> DATE_TO datetime optional
 * <li> DURATION int optional
 * <li> SKIP_TIME string(1) optional
 * <li> TZ_FROM string(50) optional
 * <li> TZ_TO string(50) optional
 * <li> TZ_OFFSET_FROM int optional
 * <li> TZ_OFFSET_TO int optional
 * <li> CREATED_BY int mandatory
 * <li> DATE_CREATE datetime optional
 * <li> TIMESTAMP_X datetime optional
 * <li> SERVICE_NAME string(200) optional
 * </ul>
 *
 * @package Bitrix\Calendar
 **/
class ResourceTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for CAL_TYPE field.
     *
     * @return array
     */
    public static function validateCalType()
    {
    }
    /**
     * Returns validators for PARENT_TYPE field.
     *
     * @return array
     */
    public static function validateParentType()
    {
    }
    /**
     * Returns validators for SKIP_TIME field.
     *
     * @return array
     */
    public static function validateSkipTime()
    {
    }
    /**
     * Returns validators for TZ_FROM field.
     *
     * @return array
     */
    public static function validateTzFrom()
    {
    }
    /**
     * Returns validators for TZ_TO field.
     *
     * @return array
     */
    public static function validateTzTo()
    {
    }
    /**
     * Returns validators for SERVICE_NAME field.
     *
     * @return array
     */
    public static function validateServiceName()
    {
    }
}