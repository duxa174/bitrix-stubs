<?php

namespace Bitrix\Main\Data;

/**
 * Connection pool is a connections holder
 */
class ConnectionPool
{
    /**
     * @var Connection[]
     */
    protected $connections = array();
    protected $connectionParameters = array();
    protected $slavePossible = true;
    protected $ignoreDml = 0;
    protected $masterOnly = 0;
    protected $slaveConnection = null;
    const DEFAULT_CONNECTION_NAME = "default";
    /**
     * Creates connection pool object
     */
    public function __construct()
    {
    }
    /**
     * @param string $name
     * @param array $parameters
     * @return Connection
     * @throws \Bitrix\Main\Config\ConfigurationException
     */
    protected function createConnection($name, $parameters)
    {
    }
    /**
     * Returns database connection by its name. Creates new connection if necessary.
     *
     * @param string $name Connection name.
     * @return Connection|null
     */
    public function getConnection($name = "")
    {
    }
    /**
     * Searches connection parameters (type, host, db, login and password) by connection name
     *
     * @param string $name Connection name
     * @return array|null
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected function getConnectionParameters($name)
    {
    }
    /**
     * Sets named connection paramters.
     *
     * @param string $name Name of the connection.
     * @param array $parameters Parameters values.
     * @return void
     */
    public function setConnectionParameters($name, $parameters)
    {
    }
    /**
     * Returns connected database type.
     * - MYSQL
     * - ORACLE
     * - MSSQL
     *
     * @return string
     */
    public function getDefaultConnectionType()
    {
    }
    protected function getDbConnConnectionParameters()
    {
    }
    /**
     * Returns a slave connection or null if the query should go to the master.
     *
     * @param string $sql A SQL string. Only SELECT will go to a slave.
     * @return Main\DB\Connection|null
     */
    public function getSlaveConnection($sql)
    {
    }
    /**
     * In the master-only mode all queries will go to the master.
     *
     * @param bool $mode True starts the mode and false ends.
     * @return void
     */
    public function useMasterOnly($mode)
    {
    }
    /**
     * In the ignore DML mode a data modification command will not stop next queries going to a slave.
     *
     * @param bool $mode Ignore subsequent DML or not.
     * @return void
     */
    public function ignoreDml($mode)
    {
    }
    /**
     * Creates a new slave connection.
     *
     * @return bool|null|Connection
     * @throws \Bitrix\Main\Config\ConfigurationException
     */
    protected function createSlaveConnection()
    {
    }
    /**
     * Creates a new connection based on the supplied one.
     *
     * @param string $name Copy source.
     * @param string $newName Copy target.
     * @param array $parameters Parameters to be passed to createConnection method.
     * @throws \Bitrix\Main\Config\ConfigurationException
     * @return Main\DB\Connection
     */
    public function cloneConnection($name, $newName, array $parameters = array())
    {
    }
    /**
     * Returns the state of queries balancing (is a slave still can be used).
     *
     * @return bool
     */
    public function isSlavePossible()
    {
    }
    /**
     * Returns the state of queries balancing (is the master only can be used).
     *
     * @return bool
     */
    public function isMasterOnly()
    {
    }
}