<?php

/**
 * @deprecated Use \Bitrix\Main\IO
 */
class CBXVirtualIoFileSystem implements \IBXVirtualIO, \IBXGetErrors
{
    private static $systemEncoding;
    private static $serverEncoding;
    const directionEncode = 1;
    const directionDecode = 2;
    const invalidChars = "\\/:*?\"'<>|~#&;";
    //the pattern should be quoted, "|" is allowed below as a delimiter
    const invalidBytes = "‮";
    //Right-to-Left Override Unicode Character
    private $arErrors = array();
    public static function ConvertCharset($string, $direction = 1, $skipEvents = \false)
    {
    }
    public function CombinePath()
    {
    }
    public function RelativeToAbsolutePath($relativePath)
    {
    }
    public function SiteRelativeToAbsolutePath($relativePath, $site = \null)
    {
    }
    public function GetPhysicalName($path)
    {
    }
    function GetLogicalName($path)
    {
    }
    public function ExtractNameFromPath($path)
    {
    }
    public function ExtractPathFromPath($path)
    {
    }
    private function FormatPath($path)
    {
    }
    protected static function ValidateCommon($path)
    {
    }
    function ValidatePathString($path)
    {
    }
    function ValidateFilenameString($filename)
    {
    }
    function RandomizeInvalidFilename($filename)
    {
    }
    public static function getRandomChar()
    {
    }
    public function DirectoryExists($path)
    {
    }
    public function FileExists($path)
    {
    }
    public function GetDirectory($path)
    {
    }
    public function GetFile($path)
    {
    }
    public function OpenFile($path, $mode)
    {
    }
    public function Delete($path)
    {
    }
    private function CopyDirFiles($pathFrom, $pathTo, $bRewrite = \true, $bDeleteAfterCopy = \false)
    {
    }
    public function Copy($source, $target, $bRewrite = \true)
    {
    }
    public function Move($source, $target, $bRewrite = \true)
    {
    }
    public function Rename($source, $target)
    {
    }
    public function CreateDirectory($path)
    {
    }
    function ClearCache()
    {
    }
    public function GetErrors()
    {
    }
    protected function AddError($error, $errorCode = "")
    {
    }
    protected function ClearErrors()
    {
    }
}
/**
 * @deprecated Use \Bitrix\Main\IO
 */
class CBXVirtualFileFileSystem extends \CBXVirtualFile
{
    protected $pathEncoded = \null;
    private $arErrors = array();
    protected function GetPathWithNameEncoded()
    {
    }
    public function Open($mode)
    {
    }
    public function GetContents()
    {
    }
    public function PutContents($data)
    {
    }
    public function GetFileSize()
    {
    }
    public function GetCreationTime()
    {
    }
    public function GetModificationTime()
    {
    }
    public function GetLastAccessTime()
    {
    }
    public function IsWritable()
    {
    }
    public function IsReadable()
    {
    }
    public function MarkWritable()
    {
    }
    public function IsExists()
    {
    }
    public function GetPermissions()
    {
    }
    public function ReadFile()
    {
    }
    public function unlink()
    {
    }
    public function GetErrors()
    {
    }
    protected function AddError($error, $errorCode = "")
    {
    }
    protected function ClearErrors()
    {
    }
}
/**
 * @deprecated Use \Bitrix\Main\IO
 */
class CBXVirtualDirectoryFileSystem extends \CBXVirtualDirectory
{
    protected $pathEncoded = \null;
    private $arErrors = array();
    protected function GetPathWithNameEncoded()
    {
    }
    /**
     * @return CBXVirtualDirectoryFileSystem[]|CBXVirtualFileFileSystem[]
     */
    public function GetChildren()
    {
    }
    public function Create()
    {
    }
    public function IsExists()
    {
    }
    public function MarkWritable()
    {
    }
    public function GetPermissions()
    {
    }
    public function GetCreationTime()
    {
    }
    public function GetModificationTime()
    {
    }
    public function GetLastAccessTime()
    {
    }
    public function IsEmpty()
    {
    }
    public function rmdir()
    {
    }
    public function GetErrors()
    {
    }
    protected function AddError($error, $errorCode = "")
    {
    }
    protected function ClearErrors()
    {
    }
}