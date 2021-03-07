<?php

namespace Bitrix\Main\DB;

class MysqlConnection extends \Bitrix\Main\DB\MysqlCommonConnection
{
    /**********************************************************
     * SqlHelper
     **********************************************************/
    /**
     * @return \Bitrix\Main\Db\SqlHelper
     */
    protected function createSqlHelper()
    {
    }
    /***********************************************************
     * Connection and disconnection
     ***********************************************************/
    /**
     * Establishes a connection to the database.
     * Includes php_interface/after_connect_d7.php on success.
     * Throws exception on failure.
     *
     * @return void
     * @throws \Bitrix\Main\DB\ConnectionException
     */
    protected function connectInternal()
    {
    }
    /**
     * Disconnects from the database.
     * Does nothing if there was no connection established.
     *
     * @return void
     */
    public function disconnectInternal()
    {
    }
    /*********************************************************
     * Query
     *********************************************************/
    /**
     * Executes a query against connected database.
     * Rises SqlQueryException on any database error.
     * <p>
     * When object $trackerQuery passed then calls its startQuery and finishQuery
     * methods before and after query execution.
     *
     * @param string                            $sql Sql query.
     * @param array                             $binds Array of binds.
     * @param \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery Debug collector object.
     *
     * @return resource
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    protected function queryInternal($sql, array $binds = null, \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery = null)
    {
    }
    /**
     * Returns database depended result of the query.
     *
     * @param resource $result Result of internal query function.
     * @param \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery Debug collector object.
     *
     * @return Result
     */
    protected function createResult($result, \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery = null)
    {
    }
    /**
     * @return integer
     */
    public function getInsertedId()
    {
    }
    /**
     * Returns affected rows count from last executed query.
     *
     * @return integer
     */
    public function getAffectedRowsCount()
    {
    }
    /*********************************************************
     * Type, version, cache, etc.
     *********************************************************/
    /**
     * Returns database type.
     * <ul>
     * <li> mysql
     * </ul>
     *
     * @return string
     * @see \Bitrix\Main\DB\Connection::getType
     */
    public function getType()
    {
    }
    /**
     * Returns connected database version.
     * Version presented in array of two elements.
     * - First (with index 0) is database version.
     * - Second (with index 1) is true when light/express version of database is used.
     *
     * @return array
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function getVersion()
    {
    }
    /**
     * Returns error message of last failed database operation.
     *
     * @return string
     */
    protected function getErrorMessage()
    {
    }
    /**
     * Selects the default database for database queries.
     *
     * @param string $database Database name.
     * @return bool
     */
    public function selectDatabase($database)
    {
    }
}