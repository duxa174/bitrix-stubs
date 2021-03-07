<?php

namespace Bitrix\Catalog;

/**
 * Class StoreTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TITLE string(75) optional
 * <li> ACTIVE bool optional default 'Y'
 * <li> ADDRESS string(245) mandatory
 * <li> DESCRIPTION string optional
 * <li> GPS_N string(15) optional
 * <li> GPS_S string(15) optional
 * <li> IMAGE_ID string(45) optional
 * <li> LOCATION_ID int optional
 * <li> DATE_MODIFY datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> DATE_CREATE datetime optional
 * <li> USER_ID int optional
 * <li> MODIFIED_BY int optional
 * <li> PHONE string(45) optional
 * <li> SCHEDULE string(255) optional
 * <li> XML_ID string(255) optional
 * <li> SORT int optional default 100
 * <li> EMAIL string(255) optional
 * <li> ISSUING_CENTER bool optional default 'Y'
 * <li> SHIPPING_CENTER bool optional default 'Y'
 * <li> SITE_ID string(2) optional
 * <li> CODE string(255) optional
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class StoreTable extends \Bitrix\Main\Entity\DataManager
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
     * Return uf identifier.
     *
     * @return string
     */
    public static function getUfId()
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
     * Returns validators for ADDRESS field.
     *
     * @return array
     */
    public static function validateAddress()
    {
    }
    /**
     * Returns validators for GPS_N field.
     *
     * @return array
     */
    public static function validateGpsN()
    {
    }
    /**
     * Returns validators for GPS_S field.
     *
     * @return array
     */
    public static function validateGpsS()
    {
    }
    /**
     * Returns validators for IMAGE_ID field.
     *
     * @return array
     */
    public static function validateImageId()
    {
    }
    /**
     * Returns validators for PHONE field.
     *
     * @return array
     */
    public static function validatePhone()
    {
    }
    /**
     * Returns validators for SCHEDULE field.
     *
     * @return array
     */
    public static function validateSchedule()
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
     * Returns validators for EMAIL field.
     *
     * @return array
     */
    public static function validateEmail()
    {
    }
    /**
     * Returns validators for SITE_ID field.
     *
     * @return array
     */
    public static function validateSiteId()
    {
    }
    /**
     * Returns validators for CODE field.
     *
     * @return array
     */
    public static function validateCode()
    {
    }
}