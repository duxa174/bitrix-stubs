<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class Logger
 * Recoring operations for trading platforms.
 * @package Bitrix\Sale\TradingPlatform
 */
class Logger
{
    const LOG_LEVEL_DISABLE = 0;
    const LOG_LEVEL_ERROR = 10;
    const LOG_LEVEL_INFO = 20;
    const LOG_LEVEL_DEBUG = 30;
    protected $logLevel = self::LOG_LEVEL_ERROR;
    protected $severities = array();
    /**
     * Constructor
     * @param int $logLevel Log level..
     */
    public function __construct($logLevel = self::LOG_LEVEL_ERROR)
    {
    }
    /**
     * @param int $level Record level.
     * @param string $type Record type.
     * @param string $itemId Identifier of record object.
     * @param string $description Record description.
     * @return bool
     * @throws \Bitrix\Main\SystemException
     */
    public function addRecord($level, $type, $itemId, $description)
    {
    }
    /**
     * Sets log level
     * @param int $logLevel Log level.
     */
    public function setLevel($logLevel)
    {
    }
}