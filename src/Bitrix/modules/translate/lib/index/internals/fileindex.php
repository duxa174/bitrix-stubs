<?php

namespace Bitrix\Translate\Index\Internals;

/**
 * Class FileTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PATH_ID int mandatory
 * <li> LANG_ID string(2) mandatory
 * <li> FULL_PATH string(255) mandatory
 * <li> CHECK_HASH string optional
 * <li> PHRASE_COUNT int optional
 * <li> MISSING_COUNT int optional
 * </ul>
 *
 **/
class FileIndexTable extends \Bitrix\Main\ORM\Data\DataManager
{
    use \Bitrix\Translate\Index\Internals\BulkOperation;
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns class of Object for current entity.
     *
     * @return string
     */
    public static function getObjectClass()
    {
    }
    /**
     * Returns class of Object collection for current entity.
     *
     * @return string
     */
    public static function getCollectionClass()
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
     * Drop index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     * @param bool $recursively Drop index recursively.
     *
     * @return void
     */
    public static function purge(\Bitrix\Translate\Filter $filter = null, $recursively = true)
    {
    }
    /**
     * Processes filter params to convert them into orm type.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return array|bool
     */
    public static function processFilter(\Bitrix\Translate\Filter $filter = null)
    {
    }
}