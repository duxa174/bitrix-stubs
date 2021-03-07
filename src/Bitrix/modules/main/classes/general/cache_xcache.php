<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class CPHPCacheXCache implements \ICacheBackend
{
    var $sid = "";
    //cache stats
    var $written = \false;
    var $read = \false;
    function __construct()
    {
    }
    function CPHPCacheXCache()
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