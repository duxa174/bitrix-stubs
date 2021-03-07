<?php

namespace Bitrix\Main\Data;

class ManagedCache
{
    /**
     * @var Cache[]
     */
    protected $cache = array();
    protected $cache_init = array();
    protected $cachePath = array();
    protected $vars = array();
    protected $ttl = array();
    public function __construct()
    {
    }
    protected static function getDbType()
    {
    }
    // Tries to read cached variable value from the file
    // Returns true on success
    // otherwise returns false
    public function read($ttl, $uniqueId, $tableId = false)
    {
    }
    public function getImmediate($ttl, $uniqueId, $tableId = false)
    {
    }
    /**
     * This method is used to read the variable value
     * from the cache after successfull Read
     *
     * @param string $uniqueId
     * @return mixed
     */
    public function get($uniqueId)
    {
    }
    // Sets new value to the variable
    public function set($uniqueId, $val)
    {
    }
    public function setImmediate($uniqueId, $val)
    {
    }
    // Marks cache entry as invalid
    public function clean($uniqueId, $tableId = false)
    {
    }
    // Marks cache entries associated with the table as invalid
    public function cleanDir($tableId)
    {
    }
    // Clears all managed_cache
    public function cleanAll()
    {
    }
    // Use it to flush cache to the files.
    // Causion: only at the end of all operations!
    public static function finalize()
    {
    }
    public function getCompCachePath($relativePath)
    {
    }
}