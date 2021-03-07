<?php

namespace Bitrix\Perfmon\Sql;

class Sequence extends \Bitrix\Perfmon\Sql\BaseObject
{
    /**
     * Creates sequence object from tokens.
     * <p>
     * Current position should point to the name of the sequence.
     *
     * @param Tokenizer $tokenizer Tokens collection.
     *
     * @return Sequence
     */
    public static function create(\Bitrix\Perfmon\Sql\Tokenizer $tokenizer)
    {
    }
    /**
     * Return DDL for sequence creation.
     *
     * @param string $dbType Database type (ORACLE only).
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL for sequence destruction.
     *
     * @param string $dbType Database type (ORACLE only).
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
    /**
     * Return DDL for sequence modification (drop with subsequent create).
     *
     * @param BaseObject $target Target object.
     * @param string $dbType Database type (ORACLE only).
     *
     * @return array|string
     */
    public function getModifyDdl(\Bitrix\Perfmon\Sql\BaseObject $target, $dbType = '')
    {
    }
}