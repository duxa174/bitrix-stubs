<?php

namespace Bitrix\Main\IO;

/**
 * This exception is thrown when an I/O error occurs.
 */
class IoException extends \Bitrix\Main\SystemException
{
    protected $path;
    /**
     * Creates new exception object.
     *
     * @param string $message Exception message
     * @param string $path Path that generated exception.
     * @param \Exception $previous
     */
    public function __construct($message = "", $path = "", \Exception $previous = null)
    {
    }
    /**
     * Path that generated exception.
     *
     * @return string
     */
    public function getPath()
    {
    }
}
class InvalidPathException extends \Bitrix\Main\IO\IoException
{
    public function __construct($path, \Exception $previous = null)
    {
    }
}
class FileNotFoundException extends \Bitrix\Main\IO\IoException
{
    public function __construct($path, \Exception $previous = null)
    {
    }
}
class FileDeleteException extends \Bitrix\Main\IO\IoException
{
    public function __construct($path, \Exception $previous = null)
    {
    }
}
class FileOpenException extends \Bitrix\Main\IO\IoException
{
    public function __construct($path, \Exception $previous = null)
    {
    }
}
class FileNotOpenedException extends \Bitrix\Main\IO\IoException
{
    public function __construct($path, \Exception $previous = null)
    {
    }
}