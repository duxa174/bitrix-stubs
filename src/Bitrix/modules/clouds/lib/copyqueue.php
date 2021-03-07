<?php

namespace Bitrix\Clouds;

/**
 * Class CopyQueueTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory </li>
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP' </li>
 * <li> OP enum optional default 'C' </li>
 * <li> SOURCE_BUCKET_ID int mandatory </li>
 * <li> SOURCE_FILE_PATH string(500) mandatory </li>
 * <li> TARGET_BUCKET_ID int mandatory </li>
 * <li> TARGET_FILE_PATH string(500) mandatory </li>
 * <li> FILE_SIZE int mandatory default -1 </li>
 * <li> FILE_POS int mandatory </li>
 * <li> STATUS enum optional default 'Y' </li>
 * <li> ERROR_MESSAGE string(500) optional </li>
 * <li> SOURCE_BUCKET reference to {@link \Bitrix\Clouds\FileBucketTable} </li>
 * <li> TARGET_BUCKET reference to {@link \Bitrix\Clouds\FileBucketTable} </li>
 * </ul>
 *
 * @package Bitrix\Clouds
 **/
class CopyQueueTable extends \Bitrix\Main\Entity\DataManager
{
    const OP_COPY = 'C';
    const OP_RENAME = 'R';
    const OP_SYNC = 'S';
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
     * Returns validators for SOURCE_FILE_PATH field.
     *
     * @return array
     */
    public static function validateSourceFilePath()
    {
    }
    /**
     * Returns validators for TARGET_FILE_PATH field.
     *
     * @return array
     */
    public static function validateTargetFilePath()
    {
    }
    /**
     * Returns validators for CONTENT_TYPE field.
     *
     * @return array
     */
    public static function validateContentType()
    {
    }
    /**
     * Returns validators for ERROR_MESSAGE field.
     *
     * @return array
     */
    public static function validateErrorMessage()
    {
    }
}