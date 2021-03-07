<?php

class CFileCacheCleaner
{
    private $_CacheType;
    private $_arPath;
    private $_CurrentBase;
    private $_CurrentPath;
    private $_obFileTree;
    function __construct($CacheType)
    {
    }
    function InitPath($PathToCheck)
    {
    }
    function Start()
    {
    }
    function GetNextFile()
    {
    }
    function GetFileExpiration($FileName)
    {
    }
}
class _CFileTree
{
    var $_in_path = '/';
    var $_path = '';
    var $_dir = \false;
    function __construct($in_path = "/")
    {
    }
    function Start($path = "/")
    {
    }
    function FileExists($file)
    {
    }
    function GetNextFile()
    {
    }
    public static function ExtractFileFromPath(&$path)
    {
    }
    function GoUp()
    {
    }
    function ReadDir($dir)
    {
    }
}