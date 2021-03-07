<?php

class CPHPCacheAPC implements \ICacheBackend
{
    var $sid = "";
    //cache stats
    var $written = \false;
    var $read = \false;
    function __construct()
    {
    }
    function CPHPCacheAPC()
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