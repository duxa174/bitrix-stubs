<?php

/**
 * Class CSecuritySessionRedis
 * @deprecated
 * @see \Bitrix\Main\Session\Handlers\RedisSessionHandler
 */
class CSecuritySessionRedis
{
    /** @var Redis $connection*/
    protected static $connection = \null;
    protected static $sessionId = \null;
    protected static $isReadOnly = \false;
    protected static $isSessionReady = \false;
    protected static $hasFailedRead = \false;
    /**
     * @return bool
     */
    public static function Init()
    {
    }
    /**
     * @param string $savePath - unused on this handler
     * @param string $sessionName - unused on this handler
     * @return bool
     */
    public static function open($savePath, $sessionName)
    {
    }
    /**
     * @return bool
     */
    public static function close()
    {
    }
    /**
     * @param string $id - session id, must be valid hash
     * @return string
     */
    public static function read($id)
    {
    }
    /**
     * @param string $id - session id, must be valid hash
     * @param string $sessionData
     * @return bool
     */
    public static function write($id, $sessionData)
    {
    }
    /**
     * @param string $id - session id, must be valid hash
     * @return bool
     */
    public static function destroy($id)
    {
    }
    /**
     * @param int $maxLifeTime - unused on this handler
     * @return bool
     */
    public static function gc($maxLifeTime)
    {
    }
    /**
     * @return bool
     */
    public static function isStorageEnabled()
    {
    }
    /**
     * @return bool
     */
    protected static function isConnected()
    {
    }
    /**
     * @param string $pId
     * @return bool
     */
    protected static function isValidId($pId)
    {
    }
    /**
     * @return string
     */
    protected static function getPrefix()
    {
    }
    /**
     * Connect to redis server
     * @return bool
     */
    protected static function newConnection()
    {
    }
    protected static function closeConnection()
    {
    }
}