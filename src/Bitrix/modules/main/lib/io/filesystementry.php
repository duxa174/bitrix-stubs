<?php

namespace Bitrix\Main\IO;

abstract class FileSystemEntry
{
    protected $path;
    protected $originalPath;
    protected $pathPhysical;
    protected $siteId;
    public function __construct($path, $siteId = null)
    {
    }
    public function isSystem()
    {
    }
    public function getName()
    {
    }
    public function getDirectoryName()
    {
    }
    public function getPath()
    {
    }
    public function getDirectory()
    {
    }
    public abstract function getCreationTime();
    public abstract function getLastAccessTime();
    public abstract function getModificationTime();
    public abstract function isExists();
    public abstract function isDirectory();
    public abstract function isFile();
    public abstract function isLink();
    public abstract function markWritable();
    public abstract function getPermissions();
    public abstract function delete();
    public function getPhysicalPath()
    {
    }
    public function rename($newPath)
    {
    }
    protected static function getDocumentRoot($siteId)
    {
    }
}