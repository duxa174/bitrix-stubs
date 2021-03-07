<?php

namespace Bitrix\Clouds;

/**
li
 * <li> FILE_PATH string(600) mandatory
 * <li> FILE_SIZE int optional
 * <li> FILE_MTIME datetime optional
 * <li> FILE_HASH string(50) optional
 * </ul>
 *
 * @package Bitrix\Clouds
 **/
class FileHashTable extends \Bitrix\Main\Entity\DataManager
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
    /**
     * Returns validators for FILE_HASH field.
     *
     * @return array
     */
    public static function validateFileHash()
    {
    }
    /**
     * Stores file hashes to the database.
     *
     * @param integer $bucketId Clouds storage bucket identifier.
     * @param array $files File list as it returned by CCloudStorageBucket::ListFiles.
     *
     * @return Main\DB\Result
     * @see CCloudStorageBucket::ListFiles
     */
    public static function addList($bucketId, array $files)
    {
    }
    /**
     * Returns last stored key for given bucket.
     *
     * @param integer $bucketId Clouds storage bucket identifier.
     *
     * @return string
     */
    public static function getLastKey($bucketId)
    {
    }
    /**
     * Clears all stored file hashes for the bucket.
     *
     * @param integer $bucketId Clouds storage bucket identifier.
     *
     * @return Main\DB\Result
     */
    public static function deleteAll($bucketId)
    {
    }
}