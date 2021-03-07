<?php

class CBackup
{
    static $DOCUMENT_ROOT_SITE;
    static $REAL_DOCUMENT_ROOT_SITE;
    protected $strLastFile;
    protected $LastFileSize;
    public static function CheckDumpClouds()
    {
    }
    public static function CheckDumpFiles()
    {
    }
    public static function GetBucketList($arFilter = array())
    {
    }
    public static function ignorePath($path)
    {
    }
    public static function GetBucketFileList($BUCKET_ID, $path)
    {
    }
    public static function _preg_escape($str)
    {
    }
    public static function skipMask($abs_path)
    {
    }
    public static function GetArcName($prefix = '')
    {
    }
    public static function MakeDump($strDumpFile, &$arState)
    {
    }
    public function QueryUnbuffered($q)
    {
    }
    public function FreeResult()
    {
    }
    public function file_put_contents_ex($strDumpFile, $str)
    {
    }
    public static function GetTableColumns($TableName)
    {
    }
    public static function SkipTableData($table)
    {
    }
    public static function getNextName($file)
    {
    }
}
class CDirScan
{
    var $DirCount = 0;
    var $FileCount = 0;
    var $err = array();
    var $bFound = \false;
    var $nextPath = '';
    var $startPath = '';
    var $arIncludeDir = \false;
    function __construct()
    {
    }
    function ProcessDirBefore($f)
    {
    }
    function ProcessDirAfter($f)
    {
    }
    function ProcessFile($f)
    {
    }
    function Skip($f)
    {
    }
    function Scan($dir)
    {
    }
}
class CDirRealScan extends \CDirScan
{
    var $arSkip = array();
    function ProcessFile($f)
    {
    }
    function ProcessDirBefore($f)
    {
    }
    function Skip($f)
    {
    }
}
class CPasswordStorage
{
    const SIGN = 'CACHE_';
    public static function Init()
    {
    }
    public static function getEncryptKey()
    {
    }
    public static function Set($strName, $strVal)
    {
    }
    public static function Get($strName)
    {
    }
}
class CTar
{
    var $gzip;
    var $file;
    var $err = array();
    var $LastErrCode;
    var $res;
    var $Block = 0;
    var $BlockHeader;
    var $path;
    var $FileCount = 0;
    var $DirCount = 0;
    var $ReadBlockMax = 2000;
    var $ReadBlockCurrent = 0;
    var $ReadFileSize = 0;
    var $header = \null;
    var $ArchiveSizeLimit;
    const BX_EXTRA = 'BX0000';
    const BX_SIGNATURE = 'Bitrix Encrypted File';
    var $BufferSize;
    var $Buffer;
    var $dataSizeCache = array();
    var $EncryptKey;
    var $prefix = '';
    ##############
    # READ
    # {
    function openRead($file)
    {
    }
    function readBlock($bIgnoreOpenNextError = \false)
    {
    }
    function SkipFile()
    {
    }
    function Skip($Block)
    {
    }
    function SkipTo($Block)
    {
    }
    function readHeader($Long = \false)
    {
    }
    function checkCRC($str, $data)
    {
    }
    function extractFile()
    {
    }
    function openNext($bIgnoreOpenNextError)
    {
    }
    public static function getLastNum($file)
    {
    }
    # }
    ##############
    ##############
    # WRITE
    # {
    function openWrite($file)
    {
    }
    // создадим пустой gzip с экстра полем
    function createEmptyGzipExtra($file)
    {
    }
    function writeBlock($str)
    {
    }
    function flushBuffer()
    {
    }
    function writeHeader($ar)
    {
    }
    function addFile($f)
    {
    }
    # }
    ##############
    ##############
    # BASE
    # {
    function open($file, $mode = 'r')
    {
    }
    function close()
    {
    }
    public function getNextName($file = '')
    {
    }
    function checksum($s)
    {
    }
    /**
     * @deprecated Will be removed
     */
    public static function substr($s, $a, $b = \null)
    {
    }
    /**
     * @deprecated Will be removed
     */
    public static function strlen($s)
    {
    }
    /**
     * @deprecated Will be removed
     */
    public static function strpos($s, $a)
    {
    }
    function getDataSize($file)
    {
    }
    function Error($str = '', $code = '')
    {
    }
    function ErrorAndSkip($str = '', $code = '')
    {
    }
    public static function xmkdir($dir)
    {
    }
    function getEncryptKey()
    {
    }
    function getFileInfo($f)
    {
    }
    public static function getCheckword($key)
    {
    }
    public static function getFirstName($file)
    {
    }
    public static function encrypt($data, $md5_key)
    {
    }
    public static function decrypt($data, $md5_key)
    {
    }
    # }
    ##############
}
class CTarCheck extends \CTar
{
    function extractFile()
    {
    }
}
class CloudDownload
{
    function __construct($id)
    {
    }
    function Scan($path)
    {
    }
}
function HumanTime($t)
{
}