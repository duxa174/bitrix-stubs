<?php

namespace Bitrix\Im\Model;

class CallUserTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * Inserts new record into the table, or updates existing record, if record is already found in the table.
     *
     * @param array $data Record to be merged to the table.
     * @return Entity\AddResult
     */
    public static function merge(array $data)
    {
    }
    /**
     * Should return array of names of fields, that should be used to detect record duplication.
     * @return array;
     */
    protected static function getMergeFields()
    {
    }
}