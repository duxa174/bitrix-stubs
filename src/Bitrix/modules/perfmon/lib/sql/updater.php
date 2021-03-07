<?php

namespace Bitrix\Perfmon\Sql;

class Updater
{
    protected $dbType = '';
    protected $delimiter = '';
    /** @var \Bitrix\Perfmon\Sql\Table  */
    protected $tableCheck = null;
    protected $conditions = array();
    /** @var \Bitrix\Perfmon\Php\Statement[]*/
    protected $statements = array();
    /**
     * Sets database type. Currently supported:
     * - MYSQL
     * - ORACLE
     * - MSSQL
     *
     * @param string $dbType Database type.
     *
     * @return Updater
     */
    public function setDbType($dbType = '')
    {
    }
    /**
     * Sets DDL delimiter for parsing.
     *
     * @param string $delimiter DDL statements delimiter.
     *
     * @return Updater
     */
    public function setDelimiter($delimiter = '')
    {
    }
    /**
     * Returns array of generated statements.
     *
     * @return \Bitrix\Perfmon\Php\Statement[]
     */
    public function getStatements()
    {
    }
    /**
     * Produces updater code.
     *
     * @param string $sourceSql Source DDL statements.
     * @param string $targetSql Target DDL statements.
     *
     * @return string
     * @throws NotSupportedException
     */
    public function generate($sourceSql, $targetSql)
    {
    }
    /**
     * @param array $diff Difference pairs.
     *
     * @return string
     */
    protected function handle(array $diff)
    {
    }
    /**
     * @param BaseObject $object Database schema object.
     *
     * @return void
     */
    protected function handleCreate(\Bitrix\Perfmon\Sql\BaseObject $object)
    {
    }
    /**
     * @param BaseObject $object Database schema object.
     *
     * @return void
     */
    protected function handleDrop(\Bitrix\Perfmon\Sql\BaseObject $object)
    {
    }
    /**
     * @param BaseObject $source Source object.
     * @param BaseObject $target Target object.
     *
     * @return void
     */
    protected function handleChange(\Bitrix\Perfmon\Sql\BaseObject $source, \Bitrix\Perfmon\Sql\BaseObject $target)
    {
    }
    /**
     * Returns escaped php code repeated for body? prefixed with $prefix and suffixed with $suffix.
     *
     * @param string $prefix Prefix string for each from body.
     * @param array|string $body Strings to be escaped.
     * @param string $suffix Suffix string for each from body.
     *
     * @return string
     */
    protected function multiLinePhp($prefix, $body, $suffix)
    {
    }
    /**
     * Returns Php\Statement object with escaped php code repeated for body? prefixed with $prefix and suffixed with $suffix.
     *
     * @param string $prefix Prefix string for each from body.
     * @param array|string $body Strings to be escaped.
     * @param string $suffix Suffix string for each from body.
     *
     * @return \Bitrix\Perfmon\Php\Statement
     */
    protected function createStatement($prefix, $body, $suffix)
    {
    }
}