<?php

namespace Bitrix\Main\IO;

abstract class FileEntry extends \Bitrix\Main\IO\FileSystemEntry
{
    public function __construct($path, $siteId = null)
    {
    }
    public function getExtension()
    {
    }
    public abstract function getContents();
    public abstract function putContents($data);
    public abstract function getSize();
    public abstract function isWritable();
    public abstract function isReadable();
    public abstract function readFile();
    /**
     * @deprecated Use getSize() instead
     * @return mixed
     */
    public function getFileSize()
    {
    }
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