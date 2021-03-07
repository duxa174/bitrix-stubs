<?php

namespace Bitrix\Translate\Index\Internals;

/**
 * Class PathTreeTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PARENT_ID int
 * <li> PATH_ID int
 * <li> DEPTH_LEVEL int
 * </ul>
 *
 **/
class PathTreeTable extends \Bitrix\Main\ORM\Data\DataManager
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
     * Drop index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return void
     */
    public static function purge(\Bitrix\Translate\Filter $filter = null)
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