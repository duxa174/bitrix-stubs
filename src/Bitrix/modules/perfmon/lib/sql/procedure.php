<?php

namespace Bitrix\Perfmon\Sql;

class Procedure extends \Bitrix\Perfmon\Sql\BaseObject
{
    public $type = '';
    /**
     * @param string $name Name of stored procedure.
     * @param string $type Type of stored procedure.
     */
    function __construct($name = '', $type = '')
    {
    }
    /**
     * Creates stored procedure object from tokens.
     * <p>
     * Current position should point to the type of the stored procedure (PROCEDURE, FUNCTION or TYPE).
     * <p>
     * Name may consist of two parts divided by '.'.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return Procedure
     */
    public static function create(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * Return DDL for procedure creation.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL for procedure destruction.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
    /**
     * Return DDL for procedure modification.
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