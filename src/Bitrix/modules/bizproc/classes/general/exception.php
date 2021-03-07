<?php

class CBPArgumentException extends \Exception
{
    private $paramName = "";
    public function __construct($message, $paramName = "")
    {
    }
    public function GetParamName()
    {
    }
}
class CBPArgumentNullException extends \CBPArgumentException
{
    public function __construct($paramName, $message = "")
    {
    }
}
class CBPArgumentOutOfRangeException extends \CBPArgumentException
{
    private $actualValue = \null;
    public function __construct($paramName, $actualValue = \null, $message = "")
    {
    }
    public function GetActualValue()
    {
    }
}
class CBPArgumentTypeException extends \CBPArgumentException
{
    private $correctType = \null;
    public function __construct($paramName, $correctType = \null, $message = "")
    {
    }
    public function GetCorrectType()
    {
    }
}
class CBPInvalidOperationException extends \Exception
{
    public function __construct($message = "")
    {
    }
}
class CBPNotSupportedException extends \Exception
{
    public function __construct($message = "")
    {
    }
}