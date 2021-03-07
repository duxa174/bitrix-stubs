<?php

namespace Bitrix\Clouds;

/**
 * Class FileResizeTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory </li>
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP' </li>
 * <li> ERROR_CODE string(1) mandatory </li>
 * <li> FILE_ID int optional </li>
 * <li> PARAMS string optional </li>
 * <li> FROM_PATH string(500) optional </li>
 * <li> TO_PATH string(500) optional </li>
 * <li> FILE reference to {@link \Bitrix\Main\FileTable} </li>
 * </ul>
 *
 * @package Bitrix\Clouds
 **/
class FileResizeTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for ERROR_CODE field.
     *
     * @return array
     */
    public static function validateErrorCode()
    {
    }
    /**
     * Returns validators for FROM_PATH field.
     *
     * @return array
     */
    public static function validateFromPath()
    {
    }
    /**
     * Returns validators for TO_PATH field.
     *
     * @return array
     */
    public static function validateToPath()
    {
    }
}