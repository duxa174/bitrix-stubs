<?php

namespace Bitrix\Main\DB;

/**
 * Exception is thrown when database returns a error.
 *
 * @see \Bitrix\Main\DB\SqlException::__construct
 * @package Bitrix\Main\DB
 */
class SqlException extends \Bitrix\Main\DB\Exception
{
    /**
     * @param string $message Application message.
     * @param string $databaseMessage Database reason.
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = "", $databaseMessage = "", \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when database returns a error on query execution.
 *
 * @see \Bitrix\Main\DB\SqlQueryException::__construct
 * @package Bitrix\Main\DB
 */
class SqlQueryException extends \Bitrix\Main\DB\SqlException
{
    /** @var string */
    protected $query = "";
    /**
     * @param string $message Application message.
     * @param string $databaseMessage Database reason.
     * @param string $query Sql query text.
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = "", $databaseMessage = "", $query = "", \Exception $previous = null)
    {
    }
    /**
     * Returns text of the sql query.
     *
     * @return string
     */
    public function getQuery()
    {
    }
}