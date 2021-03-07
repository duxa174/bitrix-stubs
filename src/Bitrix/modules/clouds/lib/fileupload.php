<?php

namespace Bitrix\Clouds;

/**
 * Class FileUploadTable
 * 
 * Fields:
 * <ul>
 * <li> ID string(32) mandatory </li>
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP' </li>
 * <li> FILE_PATH string(500) mandatory </li>
 * <li> FILE_SIZE int optional </li>
 * <li> TMP_FILE string(500) optional </li>
 * <li> BUCKET_ID int mandatory </li>
 * <li> PART_SIZE int mandatory </li>
 * <li> PART_NO int mandatory </li>
 * <li> PART_FAIL_COUNTER int mandatory </li>
 * <li> NEXT_STEP string optional </li>
 * <li> BUCKET reference to {@link \Bitrix\Clouds\FileBucketTable} </li>
 * </ul>
 *
 * @package Bitrix\Clouds
 **/
class FileUploadTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for ID field.
     *
     * @return array
     */
    public static function validateId()
    {
    }
    /**
     * Returns validators for FILE_PATH field.
     *
     * @return array
     */
    public static function validateFilePath()
    {
    }
    /**
     * Returns validators for TMP_FILE field.
     *
     * @return array
     */
    public static function validateTmpFile()
    {
    }
}