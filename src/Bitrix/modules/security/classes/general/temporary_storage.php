<?php

class CSecurityTemporaryStorage
{
    const SESSION_DATA_KEY = 'SECURITY_TEMPORARY_STORAGE';
    const DEFAULT_DATA_KEY = 'default';
    protected $sessionData = array();
    public function __construct($sessionKey = '', $forceFlush = \false)
    {
    }
    /*
     * Destroy data in all temporary storage
     */
    public static function clearAll()
    {
    }
    /**
     * @param string $key
     */
    public function clearKey($key)
    {
    }
    /**
     * @param string $sessionKey
     * @return bool
     */
    protected function initializeSessionData($sessionKey = '')
    {
    }
    public function flushData()
    {
    }
    /**
     * @param int|string $key
     * @param mixed $value
     */
    public function setData($key, $value)
    {
    }
    /**
     * @param int|string $key
     * @return string
     */
    public function getString($key)
    {
    }
    /**
     * @param int|string $key
     * @return int
     */
    public function getInt($key)
    {
    }
    /**
     * @param int|string $key
     * @return bool
     */
    public function getBool($key)
    {
    }
    /**
     * @param int|string $key
     * @return bool
     */
    public function isEmpty($key)
    {
    }
    /**
     * @param int|string $key
     * @return bool
     */
    public function isExists($key)
    {
    }
    /**
     * @param int|string $key
     */
    public function increment($key)
    {
    }
    /**
     * @param int|string $key
     */
    public function decrement($key)
    {
    }
    /**
     * @param int|string $key
     * @return bool|array
     */
    public function getArray($key)
    {
    }
    /**
     * @param int|string $key
     * @return mixed
     */
    public function getArrayPop($key)
    {
    }
    /**
     * @param int|string $key
     * @param mixed $value
     */
    public function pushToArray($key, $value)
    {
    }
}