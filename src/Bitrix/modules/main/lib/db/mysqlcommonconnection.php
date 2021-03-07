<?php

namespace Bitrix\Main\DB;

abstract class MysqlCommonConnection extends \Bitrix\Main\DB\Connection
{
    const INDEX_UNIQUE = 'UNIQUE';
    const INDEX_FULLTEXT = 'FULLTEXT';
    const INDEX_SPATIAL = 'SPATIAL';
    protected $engine = "";
    /**
     * @inheritDoc
     */
    public function __construct(array $configuration)
    {
    }
    /**
     * @inheritDoc
     */
    public function isTableExists($tableName)
    {
    }
    /**
     * @inheritDoc
     */
    public function isIndexExists($tableName, array $columns)
    {
    }
    /**
     * @inheritDoc
     */
    public function getIndexName($tableName, array $columns, $strict = false)
    {
    }
    /**
     * @inheritDoc
     */
    public function getTableFields($tableName)
    {
    }
    /**
     * @inheritDoc
     */
    public function createTable($tableName, $fields, $primary = array(), $autoincrement = array())
    {
    }
    /**
     * Creates index on column(s)
     * @api
     *
     * @param string          $tableName     Name of the table.
     * @param string          $indexName     Name of the new index.
     * @param string|string[] $columnNames   Name of the column or array of column names to be included into the index.
     * @param string[]        $columnLengths Array of column names and maximum length for them.
     * @param null            $indexType
     *
     * @return Result
     * @throws SqlQueryException
     */
    public function createIndex($tableName, $indexName, $columnNames, $columnLengths = null, $indexType = null)
    {
    }
    /**
     * @inheritDoc
     */
    public function renameTable($currentName, $newName)
    {
    }
    /**
     * @inheritDoc
     */
    public function dropTable($tableName)
    {
    }
    /*********************************************************
     * Transaction
     *********************************************************/
    /**
     * @inheritDoc
     */
    public function startTransaction()
    {
    }
    /**
     * @inheritDoc
     */
    public function commitTransaction()
    {
    }
    /**
     * @inheritDoc
     */
    public function rollbackTransaction()
    {
    }
    /*********************************************************
     * Global named lock
     *********************************************************/
    /**
     * @inheritDoc
     */
    public function lock($name, $timeout = 0)
    {
    }
    /**
     * @inheritDoc
     */
    public function unlock($name)
    {
    }
    protected function getLockName($name)
    {
    }
    /*********************************************************
     * Type, version, cache, etc.
     *********************************************************/
    /**
     * Sets default storage engine for all consequent CREATE TABLE statements and all other relevant DDL.
     * Storage engine read from .settings.php file. It is 'engine' key of the 'default' from the 'connections'.
     *
     * @return void
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function setStorageEngine()
    {
    }
    /**
     * Selects the default database for database queries.
     *
     * @param string $database Database name.
     * @return bool
     */
    public abstract function selectDatabase($database);
    /**
     * Returns max packet length to send to or receive from the database server.
     *
     * @return int
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function getMaxAllowedPacket()
    {
    }
}