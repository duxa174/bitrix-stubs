<?php

namespace Bitrix\Main\DB;

class MysqlSqlHelper extends \Bitrix\Main\DB\MysqlCommonSqlHelper
{
    /**
     * Escapes special characters in a string for use in an SQL statement.
     *
     * @param string $value Value to be escaped.
     * @param integer $maxLength Limits string length if set.
     *
     * @return string
     */
    public function forSql($value, $maxLength = 0)
    {
    }
    /**
     * Returns instance of a descendant from Entity\ScalarField
     * that matches database type.
     *
     * @param string $name Database column name.
     * @param mixed $type Database specific type.
     * @param array $parameters Additional information.
     *
     * @return \Bitrix\Main\ORM\Fields\ScalarField
     */
    public function getFieldByColumnType($name, $type, array $parameters = null)
    {
    }
}