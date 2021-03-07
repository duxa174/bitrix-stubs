<?php

namespace Bitrix\Main\Diag;

abstract class ExceptionHandlerLog
{
    const UNCAUGHT_EXCEPTION = 0;
    const CAUGHT_EXCEPTION = 1;
    const IGNORED_ERROR = 2;
    const LOW_PRIORITY_ERROR = 3;
    const ASSERTION = 4;
    const FATAL = 5;
    public static function logTypeToString($logType)
    {
    }
    public abstract function write($exception, $logType);
    public abstract function initialize(array $options);
}