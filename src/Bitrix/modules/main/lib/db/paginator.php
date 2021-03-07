<?php

namespace Bitrix\Main\DB;

/**
 * Class Paginator
 *
 * @deprecated To be removed soon. Don't use it.
 * @package Bitrix\Main\DB
 */
class Paginator
{
    /**
     * Makes offset and limit calculations and executes limited query against $connection.
     *
     * @param string $sql Sql query.
     * @param Connection $connection Database connection for query execution.
     * @param integer $numberOfRecords Total number of records returned by Sql query.
     * @param integer $pageNumber Page to be displayed.
     * @param integer $numberOfRecordsPerPage Page size.
     * @param boolean $backward Use backward paging.
     *
     * @return Result
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public static function query($sql, \Bitrix\Main\DB\Connection $connection, $numberOfRecords, $pageNumber, $numberOfRecordsPerPage, $backward = false)
    {
    }
    /**
     * Returns two element array with offset and limit based on paging parameters.
     *
     * @param integer $numberOfRecords Total number of records returned by Sql query.
     * @param integer $pageNumber Page to be displayed.
     * @param integer $numberOfRecordsPerPage Page size.
     * @param boolean $backward Use backward paging.
     *
     * @return array
     */
    public static function calculateQueryLimits($numberOfRecords, $pageNumber, $numberOfRecordsPerPage, $backward)
    {
    }
}