<?php

namespace Bitrix\Main\Diag;

class ExceptionHandlerFormatter
{
    const MAX_CHARS = 30;
    const SHOW_PARAMETERS = 1;
    const DELIMITER = '----------';
    /**
     * @param \Error|\Exception $exception
     * @param bool $htmlMode
     * @param int $level
     * @return string
     */
    public static function format($exception, $htmlMode = false, $level = 0)
    {
    }
    /**
     * @param \Error|\Exception $exception
     * @return array
     */
    protected static function getTrace($exception)
    {
    }
    /**
     * @param \Error|\Exception $exception
     * @return string
     */
    protected static function getMessage($exception)
    {
    }
    public static function severityToString($severity)
    {
    }
    protected static function getArguments($args, $level)
    {
    }
    protected static function convertArgumentToString($arg, $level)
    {
    }
    protected static function getFileLink($file, $line)
    {
    }
}