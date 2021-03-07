<?php

namespace Bitrix\Main\IO;

abstract class DirectoryEntry extends \Bitrix\Main\IO\FileSystemEntry
{
    public function __construct($path, $siteId = null)
    {
    }
    public function create()
    {
    }
    /**
     * @return FileSystemEntry[]
     */
    public abstract function getChildren();
    /**
     * @param string $path
     * @return DirectoryEntry
     */
    public abstract function createSubdirectory($name);
    public function isDirectory()
    {
    }
    public function isFile()
    {
    }
    public function isLink()
    {
    }
}