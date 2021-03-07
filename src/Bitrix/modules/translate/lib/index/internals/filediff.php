<?php

namespace Bitrix\Translate\Index\Internals;

/**
 * Class FileDiffTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> FILE_ID int mandatory
 * <li> PATH_ID int mandatory
 * <li> LANG_ID string(2) mandatory
 * <li> AGAINST_LANG_ID string(2) mandatory
 * <li> EXCESS_COUNT int
 * <li> DEFICIENCY_COUNT int
 * </ul>
 *
 **/
class FileDiffTable extends \Bitrix\Main\ORM\Data\DataManager
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