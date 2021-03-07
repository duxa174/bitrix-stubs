<?php

namespace Bitrix\Scale;

/**
 * Class ActionsData
 * @package Bitrix\Scale
 */
class ActionsData
{
    protected static $logLevel = \Bitrix\Scale\Logger::LOG_LEVEL_INFO;
    /**
     * @param $actionId
     * @return array Action's parameters
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getAction($actionId)
    {
    }
    /**
     * @param string $actionId - action idetifyer
     * @param string $serverHostname - server hostname
     * @param array $userParams - params filled by user
     * @param array $freeParams - params filled somewere in code
     * @param array $actionParams - acrion parameters
     * @return Action|ActionsChain|bool
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Exception
     */
    public static function getActionObject($actionId, $serverHostname = "", array $userParams = array(), array $freeParams = array(), array $actionParams = array())
    {
    }
    /**
     * Returns action state
     * @param string $bid -     action bitrix idetifyer
     * @return array
     */
    public static function getActionState($bid)
    {
    }
    /**
     * Returns actions list
     * @param bool $checkConditions - if we need to check conditions
     * @return array of all actions defenitions
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public static function getList($checkConditions = false)
    {
    }
    /**
     * @param array $condition
     * @return bool
     */
    protected static function isConditionSatisfied($condition)
    {
    }
    /**
     * @param int $logLevel
     */
    public static function setLogLevel($logLevel)
    {
    }
    /**
     * Checks if some action is running
     * after page refresh, or then smb. else come to page
     * during the action running.
     * @return array - Action params
     */
    public static function checkRunningAction()
    {
    }
}