<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Class Logger
 * Manage errors in Log Table.
 *
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class Logger
{
    private $exportId;
    private $ritchLog = false;
    const MAX_SHOWING_ERRORS_ITEMS = 5;
    /**
     * Logger constructor.
     * @param $exportId - int, ID of export profile
     */
    public function __construct($exportId)
    {
    }
    /**
     * Return list of saved on log errors
     *
     * @param null $errCode
     * @param null $itemId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    private function getExistingErrors($errCode = null, $itemId = null)
    {
    }
    /**
     * Log is like error, but not error.
     * It is equal entities, but we always set ErrorCode in "log".
     */
    public function addLog($itemId = null, $params = null)
    {
    }
    /**
     * Add new error in log.
     * If error by this code already exist - match time. Use newer error,
     * If set Item - adding in items list, if not - set only text error.
     *
     * @param $errCode - string of error code, from predetermined list
     * @param null $itemId
     * @return bool
     * @throws ExecuteException
     * @throws \Exception
     */
    public function addError($errCode, $itemId = null, $errParams = null)
    {
    }
    /**
     * Write new error to table
     *
     * @param $errCode
     * @param null $itemId
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    private function addErrorToTable($errCode, $itemId = null, $errParams = null)
    {
    }
    /**
     * @param $errCode - string of error code, from predetermined list
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public function clearOneError($errCode)
    {
    }
    /**
     * Delete all errors from log (for one export ID)
     *
     * @return bool
     * @throws \Exception
     */
    public function clearLog()
    {
    }
    /**
     * Return existing errors in text format for view on page
     *
     * @return array|string
     */
    public function getErrorsList($flagCritical = false)
    {
    }
    /**
     * Return string with js-script for expand not critical errors
     */
    public function getErrorExpandScript()
    {
    }
    public static function createLogFileContent($exportId)
    {
    }
    /**
     * Format error items to string (wrapper). If unknown type of error - just return item ID
     *
     * @param $item
     * @param $errCode
     * @return string
     */
    private function createItemErrorString($item, $errCode)
    {
    }
    /**
     * Format error items to string
     *
     * @param $item
     * @param $type
     * @return string
     */
    private static function createItemErrorStringByType($item, $type)
    {
    }
    /**
     * Preset known errors and descriptions.
     * Unknown type of errors will be added in OTHER.
     * Number codes - errors from api-methods, other errors catch in runtime.
     *
     *
     * @param null $key
     * @return array|mixed|null
     */
    private function getErrorsDescriptions($key = null)
    {
    }
}