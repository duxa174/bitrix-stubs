<?php

namespace Bitrix\Main\IO;

class Directory extends \Bitrix\Main\IO\DirectoryEntry
{
    public function __construct($path, $siteId = null)
    {
    }
    public function isExists()
    {
    }
    public function delete()
    {
    }
    private static function deleteInternal($path)
    {
    }
    /**
     * @return array|FileSystemEntry[]
     * @throws FileNotFoundException
     */
    public function getChildren()
    {
    }
    /**
     * @param $name
     * @return Directory|DirectoryEntry
     */
    public function createSubdirectory($name)
    {
    }
    public function getCreationTime()
    {
    }
    public function getLastAccessTime()
    {
    }
    public function getModificationTime()
    {
    }
    public function markWritable()
    {
    }
    public function getPermissions()
    {
    }
    /**
     * @param $path
     *
     * @return Directory
     */
    public static function createDirectory($path)
    {
    }
    public static function deleteDirectory($path)
    {
    }
    public static function isDirectoryExists($path)
    {
    }
}