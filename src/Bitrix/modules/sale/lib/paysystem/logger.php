<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class Logger
 * @package Bitrix\Sale\PaySystem
 */
class Logger
{
    const E_ALL = 0;
    const E_ERROR = 1;
    /**
     * @param $error
     * @throws ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function addError($error)
    {
    }
    /**
     * @param $debugInfo
     * @throws ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function addDebugInfo($debugInfo)
    {
    }
    /**
     * @return int
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private static function getLevel()
    {
    }
    /**
     * @param array $fields
     * @throws \Exception
     *
     * @deprecated Use \Bitrix\Sale\PaySystem\Logger::addError instead
     */
    public static function add(array $fields)
    {
    }
}