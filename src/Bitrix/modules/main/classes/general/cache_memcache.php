<?php

class CPHPCacheMemcache implements \ICacheBackend
{
    private static $obMemcache;
    private static $basedir_version = array();
    var $sid = "";
    //cache stats
    var $written = \false;
    var $read = \false;
    // unfortunately is not available for memcache...
    function __construct()
    {
    }
    function CPHPCacheMemcache()
    {
    }
    function close()
    {
    }
    function IsAvailable()
    {
    }
    function clean($basedir, $initdir = \false, $filename = \false)
    {
    }
    function read(&$arAllVars, $basedir, $initdir, $filename, $TTL)
    {
    }
    function write($arAllVars, $basedir, $initdir, $filename, $TTL)
    {
    }
    function IsCacheExpired($path)
    {
    }
}