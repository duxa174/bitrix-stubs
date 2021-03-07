<?php

namespace Bitrix\Main\Diag;

class FileExceptionHandlerLog extends \Bitrix\Main\Diag\ExceptionHandlerLog
{
    const MAX_LOG_SIZE = 1000000;
    const DEFAULT_LOG_FILE = "bitrix/modules/error.log";
    private $logFile;
    private $logFileHistory;
    private $maxLogSize;
    private $level;
    public function initialize(array $options)
    {
    }
    /**
     * @param \Error|\Exception $exception
     * @param int $logType
     */
    public function write($exception, $logType)
    {
    }
    protected function writeToLog($text)
    {
    }
}