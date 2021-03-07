<?php

namespace Bitrix\Rest;

class RestException extends \Exception
{
    const ERROR_INTERNAL_WRONG_TRANSPORT = 'INTERNAL_WRONG_TRANSPORT';
    const ERROR_INTERNAL_WRONG_HANDLER_CLASS = 'INTERNAL_WRONG_HANDLER_CLASS';
    const ERROR_INTERNAL_WRONG_FILE_HANDLER = 'INTERNAL_WRONG_FILE_HANDLER';
    const ERROR_INTERNAL_PORTAL_DELETED = 'PORTAL_DELETED';
    const ERROR_OAUTH = 'ERROR_OAUTH';
    const ERROR_METHOD_NOT_FOUND = 'ERROR_METHOD_NOT_FOUND';
    const ERROR_CORE = 'ERROR_CORE';
    const ERROR_ARGUMENT = 'ERROR_ARGUMENT';
    const ERROR_NOT_FOUND = 'ERROR_NOT_FOUND';
    protected $status;
    protected $error_code;
    protected $error_additional = array();
    public function __construct($message, $code = "", $status = 0, \Exception $previous = null)
    {
    }
    public function getErrorCode()
    {
    }
    public function setErrorCode($error_code)
    {
    }
    public function getStatus()
    {
    }
    public function setStatus($status)
    {
    }
    public function setMessage($msg)
    {
    }
    public function getAdditional()
    {
    }
    public function setAdditional($error_additional)
    {
    }
    public function setApplicationException(\CApplicationException $ex)
    {
    }
    public static function initFromException(\Exception $e)
    {
    }
}