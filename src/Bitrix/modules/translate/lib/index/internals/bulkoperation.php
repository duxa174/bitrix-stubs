<?php

namespace Bitrix\Translate\Index\Internals;

trait BulkOperation
{
    /** @var array */
    private static $tableFields;
    /**
     * Multiple inserts rows.
     *
     * @param array $rows Data to add.
     * @param string|string[] $primary Primary key field name.
     *
     * @return void
     *
     * @throws Main\ArgumentTypeException
     * @throws Main\DB\SqlQueryException
     */
    public static function bulkAdd(array $rows, $primary = null)
    {
    }
    /**
     * Updates rows by filter.
     *
     * @param array $fields Values for update.
     * @param array $filter Filter what to update.
     *
     * @return void
     * @throws Main\DB\SqlQueryException
     */
    public static function bulkUpdate(array $fields, array $filter = [])
    {
    }
    /**
     * Deletes rows by filter.
     *
     * @param array $filter Filter looks like filter in getList.
     *
     * @return void
     * @throws Main\DB\SqlQueryException
     */
    public static function bulkDelete(array $filter = [])
    {
    }
    /**
     * Get filter parameters as SQL code.
     *
     * @param array $filterFields Gets filter parameters.
     * @param array $filterAlias Aliases for the filter fields.
     *
     * @return string
     */
    private static function prepareWhere(array $filterFields, array $filterAlias = array())
    {
    }
}