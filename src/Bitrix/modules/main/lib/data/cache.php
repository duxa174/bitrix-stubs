<?php

namespace Bitrix\Main\Data;

interface ICacheEngine
{
    public function isAvailable();
    public function clean($baseDir, $initDir = false, $filename = false);
    public function read(&$allVars, $baseDir, $initDir, $filename, $TTL);
    public function write($allVars, $baseDir, $initDir, $filename, $TTL);
    public function isCacheExpired($path);
}
interface ICacheEngineStat
{
    public function getReadBytes();
    public function getWrittenBytes();
    public function getCachePath();
}
class Cache
{
    /**
     * @var ICacheEngine | \ICacheBackend
     */
    protected $cacheEngine;
    protected $content;
    protected $vars;
    protected $TTL;
    protected $uniqueString;
    protected $baseDir;
    protected $initDir;
    protected $filename;
    protected $isStarted = false;
    protected static $showCacheStat = false;
    protected static $clearCache = null;
    protected static $clearCacheSession = null;
    protected $forceRewriting = false;
    public static function createCacheEngine($params = [])
    {
    }
    public static function getCacheEngineType()
    {
    }
    /**
     * @param array $params
     * @return static Cache
     */
    public static function createInstance($params = [])
    {
    }
    public function __construct($cacheEngine)
    {
    }
    public static function setShowCacheStat($showCacheStat)
    {
    }
    public static function getShowCacheStat()
    {
    }
    /**
     * A privileged user wants to skip cache on this hit.
     * @param bool $clearCache
     */
    public static function setClearCache($clearCache)
    {
    }
    /**
     * A privileged user wants to skip cache on this session.
     * @param bool $clearCacheSession
     */
    public static function setClearCacheSession($clearCacheSession)
    {
    }
    public static function getSalt()
    {
    }
    /**
     * Returns true if a privileged user wants to skip reading from cache (on this hit or session).
     * @return bool
     */
    public static function shouldClearCache()
    {
    }
    public static function getPath($uniqueString)
    {
    }
    public function clean($uniqueString, $initDir = false, $baseDir = "cache")
    {
    }
    public function cleanDir($initDir = false, $baseDir = "cache")
    {
    }
    public function initCache($TTL, $uniqueString, $initDir = false, $baseDir = "cache")
    {
    }
    public function output()
    {
    }
    public function getVars()
    {
    }
    public function startDataCache($TTL = false, $uniqueString = false, $initDir = false, $vars = array(), $baseDir = "cache")
    {
    }
    public function abortDataCache()
    {
    }
    public function endDataCache($vars = false)
    {
    }
    public function isCacheExpired($path)
    {
    }
    public function isStarted()
    {
    }
    public static function clearCache($full = false, $initDir = "")
    {
    }
    /**
     * Sets the forced mode to ignore TTL and rewrite the cache.
     * @param bool $mode
     */
    public function forceRewriting($mode)
    {
    }
}