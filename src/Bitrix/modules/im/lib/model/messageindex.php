<?php

namespace Bitrix\Im\Model;

/**
 * Class MessageIndexTable
 *
 * Fields:
 * <ul>
 * <li> MESSAGE_ID int mandatory
 * <li> SEARCH_CONTENT string optional
 * </ul>
 *
 * @package Bitrix\Im
 **/
class MessageIndexTable extends \Bitrix\Main\Entity\DataManager
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
    public static function validateTitle()
    {
    }
    protected static function getMergeFields()
    {
    }
    public static function merge(array $data)
    {
    }
}