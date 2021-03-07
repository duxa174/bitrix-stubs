<?php

namespace Bitrix\Main\IO;

/**
 *
 */
class Path
{
    const DIRECTORY_SEPARATOR = '/';
    const DIRECTORY_SEPARATOR_ALT = '\\';
    const PATH_SEPARATOR = PATH_SEPARATOR;
    const INVALID_FILENAME_CHARS = "\\/:*?\"'<>|~#&;";
    //the pattern should be quoted, "|" is allowed below as a delimiter
    const INVALID_FILENAME_BYTES = "‮";
    //Right-to-Left Override Unicode Character
    protected static $physicalEncoding = "";
    protected static $logicalEncoding = "";
    protected static $directoryIndex = null;
    public static function normalize($path)
    {
    }
    public static function getExtension($path)
    {
    }
    public static function getName($path)
    {
    }
    public static function getDirectory($path)
    {
    }
    public static function convertLogicalToPhysical($path)
    {
    }
    public static function convertPhysicalToLogical($path)
    {
    }
    public static function convertLogicalToUri($path)
    {
    }
    public static function convertPhysicalToUri($path)
    {
    }
    public static function convertUriToPhysical($path)
    {
    }
    protected static function getLogicalEncoding()
    {
    }
    protected static function getPhysicalEncoding()
    {
    }
    public static function combine()
    {
    }
    public static function convertRelativeToAbsolute($relativePath)
    {
    }
    public static function convertSiteRelativeToAbsolute($relativePath, $site = null)
    {
    }
    protected static function validateCommon($path)
    {
    }
    public static function validate($path)
    {
    }
    public static function validateFilename($filename)
    {
    }
    /**
     * @param string $filename
     * @param callable $callback
     * @return string
     */
    public static function replaceInvalidFilename($filename, $callback)
    {
    }
    /**
     * @param string $filename
     * @return string
     */
    public static function randomizeInvalidFilename($filename)
    {
    }
    public static function isAbsolute($path)
    {
    }
    protected static function getDirectoryIndexArray()
    {
    }
}