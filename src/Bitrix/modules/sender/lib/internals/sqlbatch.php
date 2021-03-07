<?php

namespace Bitrix\Sender\Internals;

/**
 * Class SqlBatch
 * @package Bitrix\Sender\Internals
 */
class SqlBatch
{
    /**
     * Return true if batch fulled.
     *
     * @param array $list List.
     * @param integer $limit Batch limit.
     * @return array
     */
    public static function divide(array $list, $limit = 300)
    {
    }
    /**
     * Get string for sql-IN.
     *
     * @param array $values Values.
     * @return string
     */
    public static function getInString(array $values)
    {
    }
    /**
     * Update.
     *
     * @param string $tableName Table name.
     * @param array $fields Fields.
     * @return void
     */
    public static function update($tableName, array $fields)
    {
    }
    /**
     * Insert.
     *
     * @param string $tableName Table name.
     * @param array $fields Fields.
     * @param array $onDuplicateUpdateFields Duplicate update fields.
     * @return void
     */
    public static function insert($tableName, array $fields, array $onDuplicateUpdateFields = array())
    {
    }
    private static function getFieldNames(array &$fields)
    {
    }
    private static function getFieldValues(array &$fields)
    {
    }
}