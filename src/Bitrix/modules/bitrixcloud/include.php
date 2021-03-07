<?php

class CBitrixCloudException extends \Exception
{
    protected $error_code = "";
    protected $debug_info = "";
    public function __construct($message = "", $error_code = "", $debug_info = "")
    {
    }
    public final function getErrorCode()
    {
    }
    public final function getDebugInfo()
    {
    }
}