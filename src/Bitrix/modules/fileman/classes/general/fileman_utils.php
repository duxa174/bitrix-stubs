<?php

class CFilemanUtils
{
    function InitScript($Params)
    {
    }
    function AppendLangMessages($Config)
    {
    }
    function BuildDialogContent($site)
    {
    }
    function Request($action, $site)
    {
    }
    function GetTimeout()
    {
    }
    function NormalizePath($path)
    {
    }
    function TrimPath($path, $docRoot = \false)
    {
    }
    function GetLastPathes()
    {
    }
    function GetModifyTime($path)
    {
    }
}
//
class CFilemanSearch
{
    function Init($Params)
    {
    }
    function Search($file)
    {
    }
    function CheckBreak()
    {
    }
    function trimPath($path, $docRoot = \false)
    {
    }
    function CheckSearchSess($searchSess)
    {
    }
    function GetSearchResult($searchSess = '', $arOrder = array('date', 'desc'))
    {
    }
    function SetSearchResult($searchRes, $searchSess, $bClean = \true)
    {
    }
    function DelFromSearchResult($searchSess, $path)
    {
    }
    function RenameInSearchResult($searchSess, $pathFrom, $pathTo)
    {
    }
    public static function SecureSearchSess($ssess = '')
    {
    }
    function GetSearchSess()
    {
    }
    // Delete all results older than 2 days
    function CleanOldSearchResult()
    {
    }
    function SaveConfig($arConfig)
    {
    }
    function GetConfig()
    {
    }
}
class CFilemanUtilDir
{
    var $checkBreak = '';
    var $bBreak = \false;
    var $bStoped = \false;
    var $bFound = \false;
    var $nextPath = '';
    var $startPath = '';
    var $dir;
    var $callback;
    var $processDir;
    var $bSkipSymLinks = \true;
    var $bDirFirst = \false;
    var $err = array();
    var $cntDir = 0;
    var $cntFile = 0;
    function CFilemanUtilDir($dir, $Params)
    {
    }
    function Start($dir = \false)
    {
    }
    function Recursion($dir)
    {
    }
    function CallMethod($method = '', $param = \false)
    {
    }
}
class CFilemanChmod
{
    function Init($Params)
    {
    }
    function CheckBreak()
    {
    }
    function Chmod($file)
    {
    }
}
class CFilemanCopy
{
    function Init($Params)
    {
    }
    function SaveConfig($arConfig)
    {
    }
    function GetConfig()
    {
    }
    function GetAltFileName($absPath, $name, $bDir = \false)
    {
    }
}
class CFilemanTransliterate
{
    public static function Init($Params)
    {
    }
}