<?php

namespace Bitrix\Calendar\Internals;

/**
 * Class SectionTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> NAME string(255) optional
 * <li> XML_ID string(100) optional
 * <li> EXTERNAL_ID string(100) optional
 * <li> ACTIVE bool optional default 'Y'
 * <li> DESCRIPTION string optional
 * <li> COLOR string(10) optional
 * <li> TEXT_COLOR string(10) optional
 * <li> EXPORT string(255) optional
 * <li> SORT int optional default 100
 * <li> CAL_TYPE string(100) optional
 * <li> OWNER_ID int optional
 * <li> CREATED_BY int mandatory
 * <li> PARENT_ID int optional
 * <li> DATE_CREATE datetime optional
 * <li> TIMESTAMP_X datetime optional
 * <li> DAV_EXCH_CAL string(255) optional
 * <li> DAV_EXCH_MOD string(255) optional
 * <li> CAL_DAV_CON string(255) optional
 * <li> CAL_DAV_CAL string(255) optional
 * <li> CAL_DAV_MOD string(255) optional
 * <li> IS_EXCHANGE string(1) optional
 * <li> GAPI_CALENDAR_ID string(255) optional
 * <li> SYNC_TOKEN string(100) optional
 * <li> EXTERNAL_TYPE string(20) optional
 * </ul>
 *
 * @package Bitrix\Calendar
 **/
class SectionTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
    {
    }
    /**
     * Returns validators for XML_ID field.
     *
     * @return array
     */
    public static function validateXmlId()
    {
    }
    /**
     * Returns validators for EXTERNAL_ID field.
     *
     * @return array
     */
    public static function validateExternalId()
    {
    }
    /**
     * Returns validators for COLOR field.
     *
     * @return array
     */
    public static function validateColor()
    {
    }
    /**
     * Returns validators for TEXT_COLOR field.
     *
     * @return array
     */
    public static function validateTextColor()
    {
    }
    /**
     * Returns validators for EXPORT field.
     *
     * @return array
     */
    public static function validateExport()
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
     * Returns validators for DAV_EXCH_CAL field.
     *
     * @return array
     */
    public static function validateDavExchCal()
    {
    }
    /**
     * Returns validators for DAV_EXCH_MOD field.
     *
     * @return array
     */
    public static function validateDavExchMod()
    {
    }
    /**
     * Returns validators for CAL_DAV_CON field.
     *
     * @return array
     */
    public static function validateCalDavCon()
    {
    }
    /**
     * Returns validators for CAL_DAV_CAL field.
     *
     * @return array
     */
    public static function validateCalDavCal()
    {
    }
    /**
     * Returns validators for CAL_DAV_MOD field.
     *
     * @return array
     */
    public static function validateCalDavMod()
    {
    }
    /**
     * Returns validators for IS_EXCHANGE field.
     *
     * @return array
     */
    public static function validateIsExchange()
    {
    }
    /**
     * Returns validators for GAPI_CALENDAR_ID field.
     *
     * @return array
     */
    public static function validateGapiCalendarId()
    {
    }
    /**
     * Returns validators for SYNC_TOKEN field.
     *
     * @return array
     */
    public static function validateSyncToken()
    {
    }
    /**
     * Returns validators for SYNC_TOKEN field.
     *
     * @return array
     */
    public static function validateExternalType()
    {
    }
}