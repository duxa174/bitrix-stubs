<?php

namespace Bitrix\Perfmon\Sql;

class Trigger extends \Bitrix\Perfmon\Sql\BaseObject
{
    /**
     * Creates trigger object from tokens.
     * <p>
     * Current position should point to the name of the trigger.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return Trigger
     */
    public static function create(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
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
     * Return DDL for trigger creation.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL for trigger destruction.
     *
     * @param string $dbType Database type (MYSQL, ORACLE or MSSQL).
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
    /**
     * Return DDL for trigger modification (drop with subsequent create).
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