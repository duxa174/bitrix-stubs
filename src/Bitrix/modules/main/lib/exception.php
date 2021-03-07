<?php

namespace Bitrix\Main;

/**
 * Base class for fatal exceptions
 */
class SystemException extends \Exception
{
    /**
     * Creates new exception object.
     *
     * @param string $message
     * @param int $code
     * @param string $file
     * @param int $line
     * @param \Exception $previous
     */
    public function __construct($message = "", $code = 0, $file = "", $line = 0, \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when function argument is not valid.
 */
class ArgumentException extends \Bitrix\Main\SystemException
{
    protected $parameter;
    public function __construct($message = "", $parameter = "", \Exception $previous = null)
    {
    }
    public function getParameter()
    {
    }
}
/**
 * Exception is thrown when "empty" value is passed to a function that does not accept it as a valid argument.
 */
class ArgumentNullException extends \Bitrix\Main\ArgumentException
{
    public function __construct($parameter, \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when the value of an argument is outside the allowable range of values.
 */
class ArgumentOutOfRangeException extends \Bitrix\Main\ArgumentException
{
    protected $lowerLimit;
    protected $upperLimit;
    /**
     * Creates new exception object.
     *
     * @param string $parameter Argument that generates exception
     * @param null $lowerLimit Either lower limit of the allowable range of values or an array of allowable values
     * @param null $upperLimit Upper limit of the allowable values
     * @param \Exception $previous
     */
    public function __construct($parameter, $lowerLimit = null, $upperLimit = null, \Exception $previous = null)
    {
    }
    public function getLowerLimitType()
    {
    }
    public function getUpperType()
    {
    }
}
/**
 * Exception is thrown when the type of an argument is not accepted by function.
 */
class ArgumentTypeException extends \Bitrix\Main\ArgumentException
{
    protected $requiredType;
    /**
     * Creates new exception object
     *
     * @param string $parameter Argument that generates exception
     * @param string $requiredType Required type
     * @param \Exception $previous
     */
    public function __construct($parameter, $requiredType = "", \Exception $previous = null)
    {
    }
    public function getRequiredType()
    {
    }
}
/**
 * Exception is thrown when operation is not implemented but should be.
 */
class NotImplementedException extends \Bitrix\Main\SystemException
{
    public function __construct($message = "", \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when operation is not supported.
 */
class NotSupportedException extends \Bitrix\Main\SystemException
{
    public function __construct($message = "", \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when a method call is invalid for current state of object.
 */
class InvalidOperationException extends \Bitrix\Main\SystemException
{
    public function __construct($message = "", \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when object property is not valid.
 */
class ObjectPropertyException extends \Bitrix\Main\ArgumentException
{
    public function __construct($parameter = "", \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when the object can't be constructed.
 */
class ObjectException extends \Bitrix\Main\SystemException
{
    public function __construct($message = "", \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when an object is not present.
 */
class ObjectNotFoundException extends \Bitrix\Main\SystemException
{
    public function __construct($message = "", \Exception $previous = null)
    {
    }
}
/**
 * Exception is thrown when access is denied
 */
class AccessDeniedException extends \Bitrix\Main\SystemException
{
    public function __construct($message = "", \Exception $previous = null)
    {
    }
}
class DecodingException extends \Bitrix\Main\SystemException
{
}