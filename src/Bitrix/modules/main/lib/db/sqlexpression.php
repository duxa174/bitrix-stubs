<?php

namespace Bitrix\Main\DB;

/**
 * Class SqlExpression
 *
 * @package Bitrix\Main\DB
 */
class SqlExpression
{
    /** @var string */
    protected $expression;
    /** @var array */
    protected $args = array();
    protected $pattern = '/([^\\\\]|^)(\\?[#sif]?)/';
    protected $i;
    /** @var  Connection */
    protected $connection;
    /**
     * @param string $expression Sql expression.
     * @param string,... $args Substitutes.
     *
     * @throws \Bitrix\Main\ArgumentException
     */
    public function __construct()
    {
    }
    /**
     * Returns $expression with replaced placeholders.
     *
     * @return string
     */
    public function compile()
    {
    }
    /**
     * Used by compile method to replace placeholders with values.
     *
     * @param array $matches Matches found by preg_replace.
     *
     * @return string
     */
    protected function execPlaceholders($matches)
    {
    }
    public function __toString()
    {
    }
    /**
     * @return Connection
     */
    public function getConnection()
    {
    }
    /**
     * @param Connection $connection
     */
    public function setConnection($connection)
    {
    }
}