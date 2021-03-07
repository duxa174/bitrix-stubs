<?php

namespace Bitrix\Translate\Index\Internals;

/**
 * Class PathCacheTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PATH string(255)
 * </ul>
 *
 **/
class PathLangTable extends \Bitrix\Main\ORM\Data\DataManager
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
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Drops index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return void
     */
    public static function purge(\Bitrix\Translate\Filter $filter = null)
    {
    }
}