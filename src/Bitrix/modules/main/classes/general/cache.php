<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
interface ICacheBackend
{
    function IsAvailable();
    function clean($basedir, $initdir = \false, $filename = \false);
    function read(&$arAllVars, $basedir, $initdir, $filename, $TTL);
    function write($arAllVars, $basedir, $initdir, $filename, $TTL);
    function IsCacheExpired($path);
}
class CPHPCache
{
    /**
     * @var Bitrix\Main\Data\Cache
     */
    private $cache;
    public function __construct()
    {
    }
    public function Clean($uniq_str, $initdir = \false, $basedir = "cache")
    {
    }
    public function CleanDir($initdir = \false, $basedir = "cache")
    {
    }
    public function InitCache($TTL, $uniq_str, $initdir = \false, $basedir = "cache")
    {
    }
    public function Output()
    {
    }
    public function GetVars()
    {
    }
    public function StartDataCache($TTL = \false, $uniq_str = \false, $initdir = \false, $vars = array(), $basedir = "cache")
    {
    }
    function AbortDataCache()
    {
    }
    /**
     * Saves the result of calculation to the cache.
     *
     * @param mixed $vars
     * @return void
     */
    function EndDataCache($vars = \false)
    {
    }
    function IsCacheExpired($path)
    {
    }
}
class CPageCache
{
    var $_cache;
    var $filename;
    var $content;
    var $TTL;
    var $bStarted = \false;
    var $uniq_str = \false;
    var $basedir;
    var $initdir = \false;
    function __construct()
    {
    }
    function GetPath($uniq_str)
    {
    }
    function Clean($uniq_str, $initdir = \false, $basedir = "cache")
    {
    }
    function CleanDir($initdir = \false, $basedir = "cache")
    {
    }
    function InitCache($TTL, $uniq_str, $initdir = \false, $basedir = "cache")
    {
    }
    function Output()
    {
    }
    function StartDataCache($TTL, $uniq_str = \false, $initdir = \false, $basedir = "cache")
    {
    }
    function AbortDataCache()
    {
    }
    function EndDataCache()
    {
    }
    function IsCacheExpired($path)
    {
    }
}
// The main purpose of the class is:
// one read - many uses - optional one write
// of the set of variables
class CCacheManager
{
    /** @var Bitrix\Main\Data\ManagedCache */
    private $managedCache;
    /** @var Bitrix\Main\Data\TaggedCache */
    private $taggedCache;
    public function __construct()
    {
    }
    // Tries to read cached variable value from the file
    // Returns true on success
    // otherwise returns false
    public function Read($ttl, $uniqid, $table_id = \false)
    {
    }
    public function GetImmediate($ttl, $uniqid, $table_id = \false)
    {
    }
    // This method is used to read the variable value
    // from the cache after successful Read
    public function Get($uniqid)
    {
    }
    // Sets new value to the variable
    public function Set($uniqid, $val)
    {
    }
    public function SetImmediate($uniqid, $val)
    {
    }
    // Marks cache entry as invalid
    public function Clean($uniqid, $table_id = \false)
    {
    }
    // Marks cache entries associated with the table as invalid
    public function CleanDir($table_id)
    {
    }
    // Clears all managed_cache
    public function CleanAll()
    {
    }
    // Use it to flush cache to the files.
    // Caution: only at the end of all operations!
    public function _Finalize()
    {
    }
    function GetCompCachePath($relativePath)
    {
    }
    /*Components managed(tagged) cache*/
    function StartTagCache($relativePath)
    {
    }
    function EndTagCache()
    {
    }
    function AbortTagCache()
    {
    }
    function RegisterTag($tag)
    {
    }
    function ClearByTag($tag)
    {
    }
}
/*****************************************************************************************************/
/************************  CStackCacheManager  *******************************************************/
/*****************************************************************************************************/
class CStackCacheEntry
{
    var $entity = "";
    var $id = "";
    var $values = array();
    var $len = 10;
    var $ttl = 3600;
    var $cleanGet = \true;
    var $cleanSet = \true;
    function __construct($entity, $length = 0, $ttl = 0)
    {
    }
    function SetLength($length)
    {
    }
    function SetTTL($ttl)
    {
    }
    function Load()
    {
    }
    function DeleteEntry($id)
    {
    }
    function Clean()
    {
    }
    function Get($id)
    {
    }
    function Set($id, $value)
    {
    }
    function Save()
    {
    }
}
class CStackCacheManager
{
    /** @var CStackCacheEntry[] */
    var $cache = array();
    var $cacheLen = array();
    var $cacheTTL = array();
    var $eventHandlerAdded = \false;
    function SetLength($entity, $length)
    {
    }
    function SetTTL($entity, $ttl)
    {
    }
    function Init($entity, $length = 0, $ttl = 0)
    {
    }
    function Load($entity)
    {
    }
    //NO ONE SHOULD NEVER EVER USE INTEGER $id HERE
    function Clear($entity, $id = \False)
    {
    }
    // Clears all managed_cache
    function CleanAll()
    {
    }
    //NO ONE SHOULD NEVER EVER USE INTEGER $id HERE
    function Exist($entity, $id)
    {
    }
    //NO ONE SHOULD NEVER EVER USE INTEGER $id HERE
    function Get($entity, $id)
    {
    }
    //NO ONE SHOULD NEVER EVER USE INTEGER $id HERE
    function Set($entity, $id, $value)
    {
    }
    function Save($entity)
    {
    }
    public static function SaveAll()
    {
    }
    function MakeIDFromArray($values)
    {
    }
}
function BXClearCache($full = \false, $initdir = "")
{
}