<?php

namespace Bitrix\Perfmon\Sql;

class Constraint extends \Bitrix\Perfmon\Sql\BaseObject
{
    /**
     * Creates constraint object from tokens.
     * <p>
     * If parameter $constraintName is not passed then current position should point to the name of the constraint.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     * @param string $constraintName Optional name of the constraint.
     *
     * @return Constraint
     */
    public static function create(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer, $constraintName = '')
    {
    }
    /**
     * Return DDL for constraint creation.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL for constraint destruction.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
    /**
     * Return DDL for constraint modification.
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