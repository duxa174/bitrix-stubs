<?php

namespace Bitrix\Scale;

/**
 * Class Action
 * @package Bitrix\Scale
 */
class Action
{
    protected $id = "";
    protected $userParams = array();
    protected $freeParams = array();
    protected $actionParams = array();
    protected $serverHostname = "";
    protected $shellAdapter = null;
    protected $result = array();
    protected $logLevel = \Bitrix\Scale\Logger::LOG_LEVEL_INFO;
    /**
     * @param string $actionId
     * @param array $actionParams
     * @param string $serverHostname
     * @param array $userParams
     * @param array $freeParams
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Exception
     */
    public function __construct($actionId, $actionParams, $serverHostname = "", $userParams = array(), $freeParams = array())
    {
    }
    protected function getServerParams()
    {
    }
    /**
     * Makes command for shell action execution
     * @param array $inputParams
     * @return string - command to execute
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    protected function makeStartCommand($inputParams = array())
    {
    }
    /**
     * Starts the action execution
     * @param array $inputParams - params from previously started actions
     * @return int code returned by shell
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Exception
     */
    public function start(array $inputParams = array())
    {
    }
    /**
     * @return array Last command execution results
     */
    public function getResult()
    {
    }
    protected function makeLogRecords($command = "", $result = null, $output = "", $error = "")
    {
    }
    protected function log($level, $auditType, $actionId, $description)
    {
    }
}