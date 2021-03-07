<?php

namespace Bitrix\Main\DB;

/**
 * Class Connection
 *
 * Base abstract class for database connections.
 * @package Bitrix\Main\DB
 */
abstract class Connection extends \Bitrix\Main\Data\Connection
{
    /**@var SqlHelper */
    protected $sqlHelper;
    /** @var Diag\SqlTracker */
    protected $sqlTracker;
    protected $trackSql = false;
    protected $version;
    protected $versionExpress;
    protected $host;
    protected $database;
    protected $login;
    protected $password;
    protected $initCommand = 0;
    protected $options = 0;
    protected $nodeId = 0;
    protected $utf8mb4 = array();
    protected $tableColumnsCache = array();
    protected $lastQueryResult;
    /**
     * @var bool Flag for static::query - if need to execute query or just to collect it
     * @see $disabledQueryExecutingDump
     */
    protected $queryExecutingEnabled = true;
    /** @var null|string[] Queries that were collected while Query Executing was Disabled */
    protected $disabledQueryExecutingDump;
    const PERSISTENT = 1;
    const DEFERRED = 2;
    /**
     * $configuration may contain following keys:
     * <ul>
     * <li>host
     * <li>database
     * <li>login
     * <li>password
     * <li>initCommand
     * <li>options
     * </ul>
     *
     * @param array $configuration Array of Name => Value pairs.
     */
    public function __construct(array $configuration)
    {
    }
    /**
     * @return string
     * @deprecated Use getHost()
     */
    public function getDbHost()
    {
    }
    /**
     * @return string
     * @deprecated Use getLogin()
     */
    public function getDbLogin()
    {
    }
    /**
     * @return string
     * @deprecated Use getDatabase()
     */
    public function getDbName()
    {
    }
    /**
     * Returns database host.
     *
     * @return string
     */
    public function getHost()
    {
    }
    /**
     * Returns database login.
     *
     * @return string
     */
    public function getLogin()
    {
    }
    /**
     * Returns database name.
     *
     * @return string
     */
    public function getDatabase()
    {
    }
    /**
     * Sets the connection resource directly.
     *
     * @param resource &$connection Database depended connection resource.
     *
     * @return void
     */
    public function setConnectionResourceNoDemand(&$connection)
    {
    }
    /**
     * Temporary disables query executing. All queries being collected in disabledQueryExecutingDump
     *
     * @api
     * @see enableQueryExecuting
     * @see getDisabledQueryExecutingDump
     *
     * @return void
     */
    public function disableQueryExecuting()
    {
    }
    /**
     * Enables query executing after it has been temporary disabled
     *
     * @api
     * @see disableQueryExecuting
     *
     * @return void
     */
    public function enableQueryExecuting()
    {
    }
    /**
     * @api
     * @see disableQueryExecuting
     *
     * @return bool
     */
    public function isQueryExecutingEnabled()
    {
    }
    /**
     * Returns queries that were collected while Query Executing was disabled and clears the dump.
     *
     * @api
     * @see disableQueryExecuting
     *
     * @return null|\string[]
     */
    public function getDisabledQueryExecutingDump()
    {
    }
    /**********************************************************
     * SqlHelper
     **********************************************************/
    /**
     * @return \Bitrix\Main\Db\SqlHelper
     */
    protected abstract function createSqlHelper();
    /**
     * Returns database depended SqlHelper object.
     * Creates new one on the first call per Connection object instance.
     *
     * @return \Bitrix\Main\Db\SqlHelper
     */
    public function getSqlHelper()
    {
    }
    /***********************************************************
     * Connection and disconnection
     ***********************************************************/
    /**
     * Connects to the database.
     *
     * @return void
     */
    public function connect()
    {
    }
    /**
     * Disconnects from the database.
     *
     * @return void
     */
    public function disconnect()
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
    protected abstract function queryInternal($sql, array $binds = null, \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery = null);
    /**
     * Returns database depended result of the query.
     *
     * @param resource $result Result of internal query function.
     * @param \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery Debug collector object.
     *
     * @return Result
     */
    protected abstract function createResult($result, \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery = null);
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
     * @param int $offset Offset the of the first row to return, starting from 0.
     * @param int $limit Limit rows count.
     *
     * @return Result
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function query($sql)
    {
    }
    /**
     * Executes a query, fetches a row and returns single field value
     * from the first column of the result.
     *
     * @param string $sql Sql text.
     * @param array $binds Binding array.
     *
     * @return string|null
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function queryScalar($sql, array $binds = null)
    {
    }
    /**
     * Executes a query without returning result, i.e. INSERT, UPDATE, DELETE
     *
     * @param string $sql Sql text.
     * @param array[string]mixed $binds Binding array.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function queryExecute($sql, array $binds = null)
    {
    }
    /**
     * Helper function for parameters handling.
     *
     * @param mixed $args Variable list of parameters.
     *
     * @return array
     * @throws ArgumentNullException
     */
    protected static function parseQueryFunctionArgs($args)
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
     * @param string $tableName
     * @param array  $rows
     * @param string $identity
     *
     * @return int
     * @throws Main\ArgumentTypeException
     * @throws SqlQueryException
     */
    public function addMulti($tableName, $rows, $identity = "ID")
    {
    }
    /**
     * @return integer
     */
    public abstract function getInsertedId();
    /**
     * Parses the string containing multiple queries and executes the queries one by one.
     * Queries delimiter depends on database type.
     * @see \Bitrix\Main\Db\SqlHelper->getQueryDelimiter
     *
     * @param string $sqlBatch String with queries, separated by database-specific delimiters.
     * @param bool $stopOnError Whether return after the first error.
     *
     * @return array Array of errors or empty array on success.
     */
    public function executeSqlBatch($sqlBatch, $stopOnError = false)
    {
    }
    /**
     * Returns affected rows count from last executed query.
     *
     * @return integer
     */
    public abstract function getAffectedRowsCount();
    /*********************************************************
     * DDL
     *********************************************************/
    /**
     * Checks if a table exists.
     *
     * @param string $tableName The table name.
     *
     * @return boolean
     */
    public abstract function isTableExists($tableName);
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
    public abstract function isIndexExists($tableName, array $columns);
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
    public abstract function getIndexName($tableName, array $columns, $strict = false);
    /**
     * Returns fields objects according to the columns of a table.
     * Table must exists.
     *
     * @param string $tableName The table name.
     *
     * @return ScalarField[] An array of objects with columns information.
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public abstract function getTableFields($tableName);
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
    public abstract function createTable($tableName, $fields, $primary = array(), $autoincrement = array());
    /**
     * Creates primary index on column(s)
     * @api
     *
     * @param string          $tableName Name of the table.
     * @param string|string[] $columnNames Name of the column or array of column names to be included into the index.
     *
     * @return Result
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function createPrimaryIndex($tableName, $columnNames)
    {
    }
    /**
     * Creates index on column(s)
     * @api
     *
     * @param string          $tableName Name of the table.
     * @param string          $indexName Name of the new index.
     * @param string|string[] $columnNames Name of the column or array of column names to be included into the index.
     *
     * @return Result
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function createIndex($tableName, $indexName, $columnNames)
    {
    }
    /**
     * Returns an object for the single column according to the column type.
     *
     * @param string $tableName Name of the table.
     * @param string $columnName Name of the column.
     *
     * @return ScalarField | null
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function getTableField($tableName, $columnName)
    {
    }
    /**
     * Truncates all table data
     *
     * @param string $tableName Name of the table.
     * @return Result
     */
    public function truncateTable($tableName)
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
    public abstract function renameTable($currentName, $newName);
    /**
     * Drops a column. This column must exists and must be not the part of primary constraint.
     * and must be not the last one in the table.
     *
     * @param string $tableName Name of the table to which column will be dropped.
     * @param string $columnName Name of the column to be dropped.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function dropColumn($tableName, $columnName)
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
    public abstract function dropTable($tableName);
    /*********************************************************
     * Transaction
     *********************************************************/
    /**
     * Starts new database transaction.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public abstract function startTransaction();
    /**
     * Commits started database transaction.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public abstract function commitTransaction();
    /**
     * Rollbacks started database transaction.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public abstract function rollbackTransaction();
    /*********************************************************
     * Global named lock
     *********************************************************/
    /**
     * Sets a global named lock. Currently only Mysql is supported.
     * @param string $name The lock name.
     * @param int $timeout
     * @return bool
     */
    public function lock($name, $timeout = 0)
    {
    }
    /**
     * Releases a global named lock. Currently only Mysql is supported.
     * @param string $name The lock name.
     * @return bool
     */
    public function unlock($name)
    {
    }
    /*********************************************************
     * Tracker
     *********************************************************/
    /**
     * Starts collecting information about all queries executed.
     *
     * @param boolean $reset Clears all previously collected information when set to true.
     *
     * @return \Bitrix\Main\Diag\SqlTracker
     */
    public function startTracker($reset = false)
    {
    }
    /**
     * Stops collecting information about all queries executed.
     *
     * @return void
     */
    public function stopTracker()
    {
    }
    /**
     * Returns an object with information about queries executed.
     * or null if no tracking was started.
     *
     * @return null|\Bitrix\Main\Diag\SqlTracker
     */
    public function getTracker()
    {
    }
    /**
     * Sets new sql tracker.
     *
     * @param null|Diag\SqlTracker $sqlTracker New tracker.
     *
     * @return void
     */
    public function setTracker(\Bitrix\Main\Diag\SqlTracker $sqlTracker = null)
    {
    }
    /*********************************************************
     * Type, version, cache, etc.
     *********************************************************/
    /**
     * Returns database type.
     * <ul>
     * <li> mysql
     * <li> oracle
     * <li> mssql
     * </ul>
     *
     * @return string
     */
    public abstract function getType();
    /**
     * Returns connected database version.
     * Version presented in array of two elements.
     * - First (with index 0) is database version.
     * - Second (with index 1) is true when light/express version of database is used.
     *
     * @return array
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public abstract function getVersion();
    /**
     * Returns error message of last failed database operation.
     *
     * @return string
     */
    protected abstract function getErrorMessage();
    /**
     * Clears all internal caches which may be used by some dictionary functions.
     *
     * @return void
     */
    public function clearCaches()
    {
    }
    /**
     * Sets connection node identifier.
     *
     * @param string $nodeId Node identifier.
     * @return void
     */
    public function setNodeId($nodeId)
    {
    }
    /**
     * Returns connection node identifier.
     *
     * @return string|null
     */
    public function getNodeId()
    {
    }
    protected function afterConnected()
    {
    }
    /**
     * Returns utfmb4 flag for the specific table/column.
     *
     * @param string|null $table
     * @param string|null $column
     * @return bool
     */
    public function isUtf8mb4($table = null, $column = null)
    {
    }
}