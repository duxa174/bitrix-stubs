<?php

namespace Bitrix\Main\DB;

/**
 * Class OracleConnection
 *
 * Class for Oracle database connections.
 * @package Bitrix\Main\DB
 */
class OracleConnection extends \Bitrix\Main\DB\Connection
{
    private $transaction = OCI_COMMIT_ON_SUCCESS;
    protected $lastInsertedId;
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
    protected function disconnectInternal()
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
     * Executes a query to the database.
     *
     * - query($sql)
     * - query($sql, $limit)
     * - query($sql, $offset, $limit)
     * - query($sql, $binds)
     * - query($sql, $binds, $limit)
     * - query($sql, $binds, $offset, $limit)
     *
     * @param string $sql Sql query.
     * @param array $binds Array of binds.
     * @param int $offset Offset of the first row to return, starting from 0.
     * @param int $limit Limit rows count.
     *
     * @return Result
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function query($sql)
    {
    }
    /**
     * Adds row to table and returns ID of the added row.
     * <p>
     * $identity parameter must be null when table does not have autoincrement column.
     *
     * @param string $tableName Name of the table for insertion of new row..
     * @param array $data Array of columnName => Value pairs.
     * @param string $identity For Oracle only.
     *
     * @return integer
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function add($tableName, array $data, $identity = "ID")
    {
    }
    /**
     * Gets next value from the database sequence.
     * <p>
     * Sequence name may contain only A-Z,a-z,0-9 and _ characters.
     *
     * @param string $name Name of the sequence.
     *
     * @return null|string
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getNextId($name = "")
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
    /**
     * Checks if a table exists.
     *
     * @param string $tableName The table name.
     *
     * @return boolean
     */
    public function isTableExists($tableName)
    {
    }
    /**
     * Checks if an index exists.
     * Actual columns in the index may differ from requested.
     * $columns may present an "prefix" of actual index columns.
     *
     * @param string $tableName A table name.
     * @param array  $columns An array of columns in the index.
     *
     * @return boolean
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function isIndexExists($tableName, array $columns)
    {
    }
    /**
     * Returns the name of an index.
     *
     * @param string $tableName A table name.
     * @param array $columns An array of columns in the index.
     * @param bool $strict The flag indicating that the columns in the index must exactly match the columns in the $arColumns parameter.
     *
     * @return string|null Name of the index or null if the index doesn't exist.
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function getIndexName($tableName, array $columns, $strict = false)
    {
    }
    /**
     * Returns fields objects according to the columns of a table.
     * Table must exists.
     *
     * @param string $tableName The table name.
     *
     * @return ScalarField[] An array of objects with columns information.
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function getTableFields($tableName)
    {
    }
    /**
     * @param string        $tableName     Name of the new table.
     * @param ScalarField[] $fields        Array with columns descriptions.
     * @param string[]      $primary       Array with primary key column names.
     * @param string[]      $autoincrement Which columns will be auto incremented ones.
     *
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function createTable($tableName, $fields, $primary = array(), $autoincrement = array())
    {
    }
    /**
     * Renames the table. Renamed table must exists and new name must not be occupied by any database object.
     *
     * @param string $currentName Old name of the table.
     * @param string $newName New name of the table.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function renameTable($currentName, $newName)
    {
    }
    /**
     * Drops the table.
     *
     * @param string $tableName Name of the table to be dropped.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function dropTable($tableName)
    {
    }
    /*********************************************************
     * Transaction
     *********************************************************/
    /**
     * Starts new database transaction.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function startTransaction()
    {
    }
    /**
     * Commits started database transaction.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function commitTransaction()
    {
    }
    /**
     * Rollbacks started database transaction.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function rollbackTransaction()
    {
    }
    /*********************************************************
     * Type, version, cache, etc.
     *********************************************************/
    /**
     * Returns database type.
     * <ul>
     * <li> oracle
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
     * @param resource $resource Connection or query result resource.
     * @return string
     */
    protected function getErrorMessage($resource = null)
    {
    }
}