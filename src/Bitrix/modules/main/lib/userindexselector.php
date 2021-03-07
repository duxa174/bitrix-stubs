<?php

namespace Bitrix\Main;

/**
 * Class UserIndexSelectorTable
 *
 * Fields:
 * <ul>
 * <li> USER_ID int mandatory
 * <li> SEARCH_SELECTOR_CONTENT string optional
 * </ul>
 *
 * @package Bitrix\Main
 **/
class UserIndexSelectorTable extends \Bitrix\Main\Entity\DataManager
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
    protected static function getMergeFields()
    {
    }
    public static function merge(array $data)
    {
    }
}