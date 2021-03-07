<?php

/**
 * Class CSecuritySession
 * @deprecated
 * @see \Bitrix\Main\Session\Session
 */
class CSecuritySession
{
    const GC_AGENT_NAME = "CSecuritySession::CleanUpAgent();";
    protected static $oldSessionId = \null;
    public static function Init()
    {
    }
    /**
     * @param string $pMessage
     */
    public static function triggerFatalError($pMessage = "")
    {
    }
    /**
     * @return string
     */
    public static function CleanUpAgent()
    {
    }
    public static function UpdateSessID()
    {
    }
    /**
     * @return bool
     */
    public static function isOldSessionIdExist()
    {
    }
    /**
     * @param bool $cleanUp
     * @return string
     */
    public static function getOldSessionId($cleanUp = \false)
    {
    }
    /**
     * @param string $id
     * @return bool
     */
    public static function checkSessionId($id)
    {
    }
    public static function activate()
    {
    }
    public static function deactivate()
    {
    }
    protected static function registerHandler($class)
    {
    }
    public static function createSid()
    {
    }
}