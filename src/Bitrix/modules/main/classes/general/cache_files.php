<?php

/*********************************************************************
						Caching
*********************************************************************/
class CPHPCacheFiles
{
    var $filename;
    var $folder;
    var $content;
    var $vars;
    var $TTL;
    var $uniq_str;
    var $initdir;
    var $bStarted = \false;
    var $bInit = "NO";
    //cache stats
    var $written = \false;
    var $read = \false;
    var $path = "";
    function IsAvailable()
    {
    }
    private static function _unlink($fileName)
    {
    }
    private static function _addAgent()
    {
    }
    private static function _randomizeFile($fileName)
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
    function DeleteOneDir($etime = 0)
    {
    }
    function DelayedDelete($count = 1, $level = 1)
    {
    }
}