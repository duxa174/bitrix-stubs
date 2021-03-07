<?php

namespace Bitrix\Clouds;

/**
 * Class DeleteQueueTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory </li>
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP' </li>
 * <li> BUCKET_ID int mandatory </li>
 * <li> FILE_PATH string(500) mandatory </li>
 * <li> BUCKET reference to {@link \Bitrix\Clouds\FileBucketTable} </li>
 * </ul>
 *
 * @package Bitrix\Clouds
 **/
class DeleteQueueTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for FILE_PATH field.
     *
     * @return array
     */
    public static function validateFilePath()
    {
    }
}