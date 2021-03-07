<?php

namespace Bitrix\Clouds;

/**
 * Class FileSaveTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> BUCKET_ID int mandatory
 * <li> SUBDIR string(255) optional
 * <li> FILE_NAME string(255) mandatory
 * <li> EXTERNAL_ID string(50) optional
 * <li> FILE_SIZE int optional
 * </ul>
 *
 * @package Bitrix\Clouds
 **/
class FileSaveTable extends \Bitrix\Main\ORM\Data\DataManager
{
    private static $files = array();
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
     * Returns validators for SUBDIR field.
     *
     * @return array
     */
    public static function validateSubdir()
    {
    }
    /**
     * Returns validators for FILE_NAME field.
     *
     * @return array
     */
    public static function validateFileName()
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
     * Creates and file save task object, saves it to the database and returns as a result.
     *
     * @param integer $bucketId Clouds storage bucket identifier.
     * @param string $subDir File directory.
     * @param string $fileName File name.
     * @param string $externalId File external identifier.
     *
     * @return void
     */
    public static function startFileOperation($bucketId, $subDir, $fileName, $externalId)
    {
    }
    /**
     * Assignes the file size to a file save task object.
     *
     * @param integer $bucketId Clouds storage bucket identifier.
     * @param string $subDir File directory.
     * @param string $fileName File name.
     * @param integer $fileSize File size.
     *
     * @return void
     */
    public static function setFileSize($bucketId, $subDir, $fileName, $fileSize)
    {
    }
    /**
     * Deletes the file save task object from the database.
     *
     * @param integer $bucketId Clouds storage bucket identifier.
     * @param string $subDir File directory.
     * @param string $fileName File name.
     *
     * @return void
     */
    public static function endFileOperation($bucketId, $subDir, $fileName)
    {
    }
}