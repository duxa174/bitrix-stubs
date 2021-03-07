<?php

namespace Bitrix\Clouds;

/**
 * Class FileBucketTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory </li>
 * <li> ACTIVE bool optional default 'Y' </li>
 * <li> SORT int optional default 500 </li>
 * <li> READ_ONLY bool optional default 'N' </li>
 * <li> SERVICE_ID string(50) optional </li>
 * <li> BUCKET string(63) optional </li>
 * <li> LOCATION string(50) optional </li>
 * <li> CNAME string(100) optional </li>
 * <li> FILE_COUNT int optional </li>
 * <li> FILE_SIZE double optional </li>
 * <li> LAST_FILE_ID int optional </li>
 * <li> PREFIX string(100) optional </li>
 * <li> SETTINGS string optional </li>
 * <li> FILE_RULES string optional </li>
 * <li> FAILOVER_ACTIVE bool optional default 'N' </li>
 * <li> FAILOVER_BUCKET_ID int optional </li>
 * <li> FAILOVER_COPY bool optional default 'N' </li>
 * <li> FAILOVER_DELETE bool optional default 'N' </li>
 * <li> FAILOVER_DELETE_DELAY int optional </li>
 * <li> FAILOVER_BUCKET reference to {@link \Bitrix\Clouds\FileBucketTable} </li>
 * </ul>
 *
 * @package Bitrix\Clouds
 **/
class FileBucketTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for SERVICE_ID field.
     *
     * @return array
     */
    public static function validateServiceId()
    {
    }
    /**
     * Returns validators for BUCKET field.
     *
     * @return array
     */
    public static function validateBucket()
    {
    }
    /**
     * Returns validators for LOCATION field.
     *
     * @return array
     */
    public static function validateLocation()
    {
    }
    /**
     * Returns validators for CNAME field.
     *
     * @return array
     */
    public static function validateCname()
    {
    }
    /**
     * Returns validators for PREFIX field.
     *
     * @return array
     */
    public static function validatePrefix()
    {
    }
}