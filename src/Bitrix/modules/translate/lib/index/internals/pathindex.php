<?php

namespace Bitrix\Translate\Index\Internals;

/**
 * Class PathTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PARENT_ID int
 * <li> PATH string(255)
 * <li> NAME string(255)
 * <li> MODULE_ID string(50) optional
 * <li> ASSIGNMENT string(50) optional
 * <li> DEPTH_LEVEL int optional
 * <li> SORT int optional
 * <li> IS_LANG bool optional
 * <li> IS_DIR bool optional
 * <li> INDEXED bool optional
 * <li> INDEXED_TIME datetime default 'CURRENT_TIMESTAMP'
 * <li> HAS_SETTINGS bool optional
 * </ul>
 *
 **/
class PathIndexTable extends \Bitrix\Main\ORM\Data\DataManager
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
     * @param ORM\Event $event Triggered ORM event.
     *
     * @return ORM\EventResult|void
     */
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param ORM\Event $event Triggered ORM event.
     *
     * @return ORM\EventResult|void
     */
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event)
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