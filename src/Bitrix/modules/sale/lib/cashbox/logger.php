<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class Logger
 * @package Bitrix\Sale\Cashbox
 */
class Logger
{
    /* trace levels */
    protected const TRACE_LEVEL_ERROR = 1;
    protected const TRACE_LEVEL_WARNING = 2;
    protected const TRACE_LEVEL_DEBUG = 3;
    /**
     * @param string $message
     * @param null $cashboxId
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function addError(string $message, $cashboxId = null) : void
    {
    }
    /**
     * @param string $message
     * @param null $cashboxId
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function addWarning(string $message, $cashboxId = null) : void
    {
    }
    /**
     * @param string $message
     * @param null $cashboxId
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function addDebugInfo(string $message, $cashboxId = null) : void
    {
    }
    /**
     * @param string $message
     * @return bool
     */
    private static function validateMessage(string $message) : bool
    {
    }
    /**
     * @param int $messageLevel
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private static function checkMessageLevel(int $messageLevel) : bool
    {
    }
    /**
     * @param string $message
     * @param $cashboxId
     * @param $messageLevel
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    private static function addToLog(string $message, $cashboxId, $messageLevel) : void
    {
    }
    /**
     * @return int
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private static function getLevel() : int
    {
    }
}