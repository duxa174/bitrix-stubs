<?php

namespace Bitrix\Perfmon\Sql;

class Table extends \Bitrix\Perfmon\Sql\BaseObject
{
    /** @var Collection */
    public $columns = null;
    /** @var Collection */
    public $indexes = null;
    /** @var Collection */
    public $constraints = null;
    /** @var Collection */
    public $triggers = null;
    /**
     * @param string $name Index name.
     */
    function __construct($name = '')
    {
    }
    /**
     * Creates trigger object from tokens.
     * <p>
     * And registers trigger in the table trigger registry.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return Table
     * @see Constraint::create
     */
    public function createTrigger(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * Creates constraint object from tokens.
     * <p>
     * And registers constraint in the table constraint registry.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     * @param string $constraintName Optional name of the constraint.
     *
     * @return Table
     * @see Constraint::create
     */
    public function createConstraint(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer, $constraintName = '')
    {
    }
    /**
     * Creates index object from tokens.
     * <p>
     * And registers index in the table index registry.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     * @param boolean $unique Uniqueness flag.
     * @param boolean $fulltext Fulltext flag.
     * @param string $indexName Optional name of the index.
     *
     * @return Table
     * @see Index::create
     */
    public function createIndex(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer, $unique = false, $fulltext = false, $indexName = '')
    {
    }
    /**
     * Creates column object from tokens.
     * <p>
     * And registers column in the table column registry.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return Table
     * @see Column::create
     */
    public function createColumn(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * Creates table object from tokens.
     * <p>
     * Current position should point to the name of the sequence or 'if not exists' clause.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return Table
     * @throws NotSupportedException
     */
    public static function create(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * Return DDL for table creation.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL for table destruction.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
}