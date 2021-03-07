<?php

/**
 * @deprecated Use \Bitrix\Main\IO
 */
interface IBXVirtualIO
{
    function CombinePath();
    function RelativeToAbsolutePath($relativePath);
    function SiteRelativeToAbsolutePath($relativePath, $site = \null);
    function GetPhysicalName($path);
    function GetLogicalName($path);
    function ExtractNameFromPath($path);
    function ExtractPathFromPath($path);
    function ValidatePathString($path);
    function ValidateFilenameString($filename);
    function DirectoryExists($path);
    function FileExists($path);
    function GetDirectory($path);
    function GetFile($path);
    function OpenFile($path, $mode);
    function CreateDirectory($path);
    function Delete($path);
    function Copy($source, $target, $bRewrite = \true);
    function Move($source, $target, $bRewrite = \true);
    function Rename($source, $target);
    function ClearCache();
}
/**
 * @deprecated Use \Bitrix\Main\IO
 */
interface IBXGetErrors
{
    function GetErrors();
}
/**
 * Proxy class for file IO. Provides a set of methods to retrieve resources from a file system.
 * @deprecated Use \Bitrix\Main\IO
 */
class CBXVirtualIo implements \IBXVirtualIO, \IBXGetErrors
{
    private static $instance;
    private $io;
    public function __construct()
    {
    }
    /**
     * Returns proxy class instance (singleton pattern)
     *
     * @static
     * @return CBXVirtualIo - Proxy class instance
     */
    public static function GetInstance()
    {
    }
    /**
     * Combines a path parts
     *
     * Variable-length argument list
     *
     * @return string - Combined path
     */
    public function CombinePath()
    {
    }
    /**
     * Converts a relative path to absolute one
     *
     * @param string $relativePath - Relative path
     * @return string - Complete path
     */
    public function RelativeToAbsolutePath($relativePath)
    {
    }
    public function SiteRelativeToAbsolutePath($relativePath, $site = \null)
    {
    }
    /**
     * Returns Physical path to file or directory
     *
     * @param string $path - Path
     * @return string - Physical path
     */
    public function GetPhysicalName($path)
    {
    }
    function GetLogicalName($path)
    {
    }
    /**
     * Returns name of the file or directory
     *
     * @param string $path - Path
     * @return string - File/directory name
     */
    public function ExtractNameFromPath($path)
    {
    }
    /**
     * Returns path to the file or directory (without file/directory name)
     *
     * @param string $path - Path
     * @return string - Result
     */
    public function ExtractPathFromPath($path)
    {
    }
    /**
     * @param string $path
     * @return bool
     */
    public function ValidatePathString($path)
    {
    }
    /**
     * @param string $filename
     * @return bool
     */
    public function ValidateFilenameString($filename)
    {
    }
    /**
     * @param string $filename
     * @return string
     */
    public function RandomizeInvalidFilename($filename)
    {
    }
    /**
     * Gets a value that indicates whether a directory exists in the file system
     *
     * @param string $path - Complete path to the directory
     * @return bool - True if the directory exists, false - otherwise
     */
    public function DirectoryExists($path)
    {
    }
    /**
     * Gets a value that indicates whether a file exists in the file system
     *
     * @param string $path - Complete path to the file
     * @return bool - True if the file exists, false - otherwise
     */
    public function FileExists($path)
    {
    }
    /**
     * Gets a directory from the file system
     *
     * @param string $path - Complete path to the directory
     * @return CBXVirtualDirectoryFileSystem
     */
    public function GetDirectory($path)
    {
    }
    /**
     * Gets a virtual file from the file system
     *
     * @param string $path - Complete path to the file
     * @return CBXVirtualFileFileSystem
     */
    public function GetFile($path)
    {
    }
    /**
     * Returns a stream from a file
     *
     * @param string $path - Complete path to the file
     * @param string $mode - The type of access to the file ('rb' - reading, 'wb' - writing, 'ab' - appending)
     * @return resource
     */
    public function OpenFile($path, $mode)
    {
    }
    /**
     * Deletes a file or directory from the file system
     *
     * @param string $path - Complete path to the file or directory
     * @return bool - Result
     */
    public function Delete($path)
    {
    }
    /**
     * Copies a file or directory from source location to target
     *
     * @param string $source - Complete path of the source file or directory
     * @param string $target - Complete path of the target file or directory
     * @param bool $bRewrite - True to rewrite existing files, false - otherwise
     * @return bool - Result
     */
    public function Copy($source, $target, $bRewrite = \true)
    {
    }
    /**
     * Moves a file or directory from source location to target
     *
     * @param string $source - Complete path of the source file or directory
     * @param string $target - Complete path of the target file or directory
     * @param bool $bRewrite - True to rewrite existing files, false - otherwise
     * @return bool - Result
     */
    public function Move($source, $target, $bRewrite = \true)
    {
    }
    public function Rename($source, $target)
    {
    }
    /**
     * Clear file system cache (if any)
     *
     * @return void
     */
    function ClearCache()
    {
    }
    /**
     * Creates a directory if is is not exist
     *
     * @param string $path - Complete path of the directory
     * @return CBXVirtualDirectory|null
     */
    public function CreateDirectory($path)
    {
    }
    /**
     * Returns runtime errors
     *
     * @return array - Array of errors
     */
    public function GetErrors()
    {
    }
}