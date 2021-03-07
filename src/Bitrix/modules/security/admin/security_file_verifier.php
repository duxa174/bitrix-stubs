<?php

class CFileChecker
{
    var $arCollectedExtensions;
    var $startPath;
    var $serverFileErrorLogName = "serverfilerr";
    var $serverErrorLog;
    var $serverErrorLogHandle;
    /** @var  CFileCheckerLog */
    var $fileLog;
    /** @var  CFileCheckerErrorLog */
    var $fileErrorLog;
    protected static $integrityKey = '';
    public static function getIntegrityKey()
    {
    }
    public static function GetList()
    {
    }
    function SetCollectedExtensions($arCollectedExtensions)
    {
    }
    function SetStartPoint($startPath, $region)
    {
    }
    function GetFileInfo($filename)
    {
    }
    function __WalkThrougtTree($path, $arSkipPaths, $level, &$arTs, $fileFunction)
    {
    }
    function __CollectFile($file)
    {
    }
    function __VerifyFile($file)
    {
    }
    function __VerifyLogFileRest()
    {
    }
    function CollectCrc($region, $arCollectedExtensions, $pwdString, &$arTs, &$arErrors)
    {
    }
    function VerifyCrc($ts, $pwdString, &$arTs, &$arErrors)
    {
    }
}
class CFileCheckerLog
{
    var $serverFileLogName = "serverfilelog";
    var $serverFileLogExt = "dat";
    var $serverFileLogPath = "/bitrix/modules";
    var $serverLog;
    var $serverLogTmp;
    var $serverLogHandle;
    var $serverLogTmpHandle;
    var $ts;
    var $logText;
    var $descrRegion;
    var $descrCollectedExtensions;
    var $descrTs;
    function __WriteDescription($region, $arCollectedExtensions)
    {
    }
    function __ReadDescription()
    {
    }
    function Create($region, $arCollectedExtensions)
    {
    }
    function CreateStep($ts)
    {
    }
    function Write($arFileInfo)
    {
    }
    function CloseCreateStep()
    {
    }
    function __Crypt($pwdString)
    {
    }
    function CloseCreate($pwdString)
    {
    }
    function __GetDescriptionList($ts)
    {
    }
    function Open($ts, $pwdString)
    {
    }
    function OpenStep($ts)
    {
    }
    function __ReadDescriptionFromString()
    {
    }
    function Search($filename)
    {
    }
    function ReadLine()
    {
    }
    function CloseOpen()
    {
    }
    function CloseOpenStep()
    {
    }
    function __SetLogFileNames()
    {
    }
    function GetTs()
    {
    }
    function GetDescriptionTs()
    {
    }
    function GetDescriptionRegion()
    {
    }
    function GetDescriptionCollectedExtensions()
    {
    }
    function GetLogCommonPathPart()
    {
    }
    public static function GetDownloadName($ts)
    {
    }
    public static function StartDownload($ts)
    {
    }
    public static function StopDownload($ts)
    {
    }
}
class CFileCheckerErrorLog
{
    var $serverFileLogName = "serverfileerrorlog";
    var $serverFileLogExt = "dat";
    var $serverFileLogPath = "/bitrix/modules";
    var $serverLog;
    var $serverLogHandle;
    var $logText;
    function Create()
    {
    }
    function CreateStep()
    {
    }
    function Write($message)
    {
    }
    function CloseCreate()
    {
    }
    function Open()
    {
    }
    function ReadLine()
    {
    }
    function CloseOpen()
    {
    }
    function __SetLogFileNames()
    {
    }
    function GetLogCommonPathPart()
    {
    }
}
class CFileCheckerSubscriber
{
    public static function IsSubscribed($fileName)
    {
    }
    public static function Subscribe($fileName, $pwdString, $keyString, &$arErrors)
    {
    }
    public static function __SetIntegrityParams($arData, $password)
    {
    }
    public static function Verify($fileName, $pwdString, &$keyString, &$arErrors)
    {
    }
    public static function __GetIntegrityParams($data, $password)
    {
    }
}
class CFileCheckerUtil
{
    public static function SetFileContents($filename, $content)
    {
    }
    public static function GetFileCRC($filename)
    {
    }
    public static function GetFileLength($filename)
    {
    }
    public static function Encrypt($data, $pwdString)
    {
    }
    public static function Decrypt($data, $pwdString, $startPosition = 0)
    {
    }
    protected static function __CryptData($data, $pwdString, $type, $startPosition = 0)
    {
    }
}
/**
 * @global CUser $USER
 * @global CMain $APPLICATION
 **/
$canSign = $USER->CanDoOperation('security_file_verifier_sign');