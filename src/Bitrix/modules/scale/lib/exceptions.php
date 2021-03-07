<?php

namespace Bitrix\Scale;

/**
 * Exception is thrown when we can't comunicate with the slave server.
 */
class ServerBxInfoException extends \Bitrix\Main\SystemException
{
    protected $hostname;
    public function __construct($message = "", $hostname = "", \Exception $previous = null)
    {
    }
    public function getHostname()
    {
    }
}
/**
 * Class NeedMoreUserInfoException
 * @package Bitrix\Scale
 * If we need more info from user to execute action
 */
class NeedMoreUserInfoException extends \Bitrix\Main\SystemException
{
    protected $actionParams;
    public function __construct($message = "", $actionParams = array(), \Exception $previous = null)
    {
    }
    public function getActionParams()
    {
    }
}