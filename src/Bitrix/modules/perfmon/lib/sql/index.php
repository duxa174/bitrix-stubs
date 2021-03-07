<?php

namespace Bitrix\Perfmon\Sql;

class Index extends \Bitrix\Perfmon\Sql\BaseObject
{
    public $unique = false;
    public $fulltext = false;
    public $columns = array();
    /**
     * @param string $name Index name.
     * @param boolean $unique Uniqueness flag.
     * @param boolean $fulltext Fulltext flag.
     */
    function __construct($name = '', $unique, $fulltext = false)
    {
    }
    /**
     * Adds column to the index definition.
     *
     * @param string $name Column name.
     *
     * @return Index
     */
    function addColumn($name)
    {
    }
    /**
     * Creates index object from tokens.
     * <p>
     * If parameter $indexName is not passed then current position should point to the name of the index.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     * @param boolean $unique Uniqueness flag.
     * @param boolean $fulltext Fulltext flag.
     * @param string $indexName Optional name of the index.
     *
     * @return Index
     * @throws NotSupportedException
     */
    public static function create(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer, $unique = false, $fulltext = false, $indexName = '')
    {
    }
    /**
     * Searches token collection for 'ON' keyword.
     * <p>
     * Advances current position on to next token skipping whitespace.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return void
     * @throws NotSupportedException
     */
    public static function searchTableName(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * Return DDL for index creation.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL for index destruction.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
    /**
     * Return DDL for index modification.
     *
     * @param BaseObject $target Target object.
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getModifyDdl(\Bitrix\Perfmon\Sql\BaseObject $target, $dbType = '')
    {
    }
}