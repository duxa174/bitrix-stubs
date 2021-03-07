<?php

namespace Bitrix\Main;

/**
 * Class FileTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> MODULE_ID string(50) optional
 * <li> HEIGHT int optional
 * <li> WIDTH int optional
 * <li> FILE_SIZE int optional
 * <li> CONTENT_TYPE string(255) optional default 'IMAGE'
 * <li> SUBDIR string(255) optional
 * <li> FILE_NAME string(255) mandatory
 * <li> ORIGINAL_NAME string(255) optional
 * <li> DESCRIPTION string(255) optional
 * <li> HANDLER_ID string(50) optional
 * <li> EXTERNAL_ID string(50) optional
 * </ul>
 *
 * @package Bitrix\File
 * @internal
 **/
class FileTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for MODULE_ID field.
     *
     * @return array
     */
    public static function validateModuleId()
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
     * Returns validators for ORIGINAL_NAME field.
     *
     * @return array
     */
    public static function validateOriginalName()
    {
    }
    /**
     * Returns validators for DESCRIPTION field.
     *
     * @return array
     */
    public static function validateDescription()
    {
    }
    /**
     * Returns validators for HANDLER_ID field.
     *
     * @return array
     */
    public static function validateHandlerId()
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
     * Adds row to entity table
     *
     * @param array $data
     *
     * @return Entity\AddResult Contains ID of inserted row
     *
     * @throws \Exception
     */
    public static function add(array $data)
    {
    }
    /**
     * Updates row in entity table by primary key
     *
     * @param mixed $primary
     * @param array $data
     *
     * @return Entity\UpdateResult
     *
     * @throws \Exception
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * Deletes row in entity table by primary key
     *
     * @param mixed $primary
     *
     * @return Entity\DeleteResult
     *
     * @throws \Exception
     */
    public static function delete($primary)
    {
    }
}