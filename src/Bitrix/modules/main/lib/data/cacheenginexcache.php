<?php

namespace Bitrix\Main\Data;

class CacheEngineXCache implements \Bitrix\Main\Data\ICacheEngine, \Bitrix\Main\Data\ICacheEngineStat, \Bitrix\Main\Data\LocalStorage\Storage\CacheEngineInterface
{
    private $sid = "BX";
    //cache stats
    private $written = false;
    private $read = false;
    protected $useLock = false;
    protected $ttlMultiplier = 2;
    protected static $locks = array();
    /**
     * Engine constructor.
     * @param array $options Cache options.
     */
    function __construct($options = [])
    {
    }
    /**
     * Returns number of bytes read from xcache or false if there was no read operation.
     *
     * @return integer|false
     */
    public function getReadBytes()
    {
    }
    /**
     * Returns number of bytes written to xcache or false if there was no write operation.
     *
     * @return integer|false
     */
    public function getWrittenBytes()
    {
    }
    /**
     * Returns physical file path after read or write operation.
     * Stub function always returns '' (empty string).
     *
     * @return string
     */
    public function getCachePath()
    {
    }
    /**
     * Returns true if cache can be read or written.
     *
     * @return bool
     */
    public function isAvailable()
    {
    }
    /**
     * Tries to put non blocking exclusive lock on the cache entry.
     * Returns true on success.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $key Calculated cache key.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return boolean
     */
    protected function lock($baseDir, $initDir, $key, $TTL)
    {
    }
    /**
     * Releases the lock obtained by lock method.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $key Calculated cache key.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return void
     */
    protected function unlock($baseDir, $initDir = false, $key = false, $TTL = 0)
    {
    }
    /**
     * Cleans (removes) cache directory or file.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     *
     * @return void
     */
    public function clean($baseDir, $initDir = false, $filename = false)
    {
    }
    /**
     * Reads cache from the xcache. Returns true if key value exists, not expired, and successfully read.
     *
     * @param mixed &$allVars Cached result.
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return boolean
     */
    public function read(&$allVars, $baseDir, $initDir, $filename, $TTL)
    {
    }
    /**
     * Puts cache into the xcache.
     *
     * @param mixed $allVars Cached result.
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return void
     */
    public function write($allVars, $baseDir, $initDir, $filename, $TTL)
    {
    }
    /**
     * Returns true if cache has been expired.
     * Stub function always returns true.
     *
     * @param string $path Absolute physical path.
     *
     * @return boolean
     */
    public function isCacheExpired($path)
    {
    }
}