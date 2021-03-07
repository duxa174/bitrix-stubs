<?php

namespace Bitrix\Main\Composite\Internals\Model;

/**
 * Class PageTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CACHE_KEY string(2000) mandatory
 * <li> URI string(2000) mandatory
 * <li> TITLE string(250) optional
 * <li> CREATED datetime mandatory
 * <li> CHANGED datetime mandatory
 * <li> LAST_VIEWED datetime mandatory
 * <li> VIEWS int mandatory
 * <li> REWRITES int mandatory
 * <li> SIZE int mandatory
 * </ul>
 *
 * @package Bitrix\Composite
 **/
class PageTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for CACHE_KEY field.
     *
     * @return array
     */
    public static function validateCacheKey()
    {
    }
    /**
     * Returns validators for URI field.
     *
     * @return array
     */
    public static function validateHost()
    {
    }
    /**
     * Returns validators for URI field.
     *
     * @return array
     */
    public static function validateUri()
    {
    }
    /**
     * Returns validators for TITLE field.
     *
     * @return array
     */
    public static function validateTitle()
    {
    }
    public static function deleteAll()
    {
    }
    /**
     * Deletes rows by filter.
     * @param array $filter Filter does not look like filter in getList. It depends on current implementation.
     * @internal
     * @return void
     */
    public static function deleteBatch(array $filter)
    {
    }
}