<?php

namespace Bitrix\Perfmon\Sql;

class Column extends \Bitrix\Perfmon\Sql\BaseObject
{
    public $type = '';
    public $length = '';
    public $nullable = true;
    public $default = null;
    protected static $types = array('INT' => true, 'INTEGER' => true, 'TINYINT' => true, 'NUMERIC' => true, 'NUMBER' => true, 'FLOAT' => true, 'DOUBLE' => true, 'DECIMAL' => true, 'BIGINT' => true, 'SMALLINT' => true, 'MEDIUMINT' => true, 'VARCHAR' => true, 'VARCHAR2' => true, 'CHAR' => true, 'TIMESTAMP' => true, 'DATETIME' => true, 'DATE' => true, 'TIME' => true, 'TEXT' => true, 'LONGTEXT' => true, 'MEDIUMTEXT' => true, 'CLOB' => true, 'BLOB' => true, 'MEDIUMBLOB' => true, 'LONGBLOB' => true, 'VARBINARY' => true, 'IMAGE' => true, 'ENUM' => true);
    /**
     * Checks the $type against type list:
     * - INT
     * - INTEGER
     * - TINYINT
     * - NUMERIC
     * - NUMBER
     * - FLOAT
     * - DOUBLE
     * - DECIMAL
     * - BIGINT
     * - SMALLINT
     * - MEDIUMINT
     * - VARCHAR
     * - VARCHAR2
     * - CHAR
     * - TIMESTAMP
     * - DATETIME
     * - DATE
     * - TIME
     * - TEXT
     * - LONGTEXT
     * - MEDIUMTEXT
     * - CLOB
     * - BLOB
     * - MEDIUMBLOB
     * - LONGBLOB
     * - VARBINARY
     * - IMAGE
     * - ENUM
     *
     * @param string $type Type of a column.
     *
     * @return boolean
     */
    public static function checkType($type)
    {
    }
    /**
     * Creates column object from tokens.
     * <p>
     * Current position should point to the name of the column.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return Column
     * @throws NotSupportedException
     */
    public static function create(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * Return DDL for table column creation.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL for column destruction.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
    /**
     * Return DDL for object modification.
     * <p>
     * Implemented only for MySQL database. For Oracle or MS SQL returns commentary.
     *
     * @param Column $target Target object.
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getModifyDdl(\Bitrix\Perfmon\Sql\Column $target, $dbType = '')
    {
    }
}