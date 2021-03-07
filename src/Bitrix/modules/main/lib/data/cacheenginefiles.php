<?php

namespace Bitrix\Main\Data;

class CacheEngineFiles implements \Bitrix\Main\Data\ICacheEngine, \Bitrix\Main\Data\ICacheEngineStat
{
    private $TTL;
    //cache stats
    private $written = false;
    private $read = false;
    private $path = '';
    protected $useLock = false;
    protected static $lockHandles = array();
    /**
     * Engine constructor.
     * @param array $options Cache options.
     */
    public function __construct($options = [])
    {
    }
    /**
     * Returns number of bytes read from disk or false if there was no read operation.
     *
     * @return integer|false
     */
    public function getReadBytes()
    {
    }
    /**
     * Returns number of bytes written to disk or false if there was no write operation.
     *
     * @return integer|false
     */
    public function getWrittenBytes()
    {
    }
    /**
     * Returns physical file path after read or write operation.
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
     * Deletes physical file. Returns true on success.
     *
     * @param string $fileName Absolute physical path.
     *
     * @return boolean
     */
    private static function unlink($fileName)
    {
    }
    /**
     * Adds delayed delete worker agent.
     *
     * @return void
     */
    private static function addAgent()
    {
    }
    /**
     * Generates very temporary file name by adding some random suffix to the file path.
     * Returns empty string on failure.
     *
     * @param string $fileName File path within document root.
     *
     * @return string
     */
    private static function randomizeFile($fileName)
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
    public function clean($baseDir, $initDir = '', $filename = '')
    {
    }
    /**
     * Tries to put non blocking exclusive lock on the file.
     * Returns true if file not exists, or lock was successfully got.
     *
     * @param string $fileName Absolute cache file path.
     *
     * @return boolean
     */
    protected function lock($fileName)
    {
    }
    /**
     * Releases the lock obtained by lock method.
     *
     * @param string $fileName Absolute cache file path.
     *
     * @return void
     */
    protected function unlock($fileName)
    {
    }
    /**
     * Reads cache from the file. Returns true if file exists, not expired, and successfully read.
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
     * Writes cache into the file.
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
     * Returns true if cache file has expired.
     *
     * @param string $path Absolute physical path.
     *
     * @return boolean
     */
    public function isCacheExpired($path)
    {
    }
    /**
     * Deletes one cache directory. Works no longer than etime.
     *
     * @param integer $etime Timestamp when to stop working.
     * @param boolean $ar Record from b_cache_tag.
     *
     * @return void
     */
    protected static function deleteOneDir($etime = 0, $ar = false)
    {
    }
    /**
     * Agent function which deletes marked cache directories.
     *
     * @param integer $count Desired delete count.
     *
     * @return string
     */
    public static function delayedDelete($count = 1)
    {
    }
}