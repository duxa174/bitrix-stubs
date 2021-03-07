<?php

/**
 * @deprecated Use \Bitrix\Main\IO
 */
abstract class CBXVirtualFileBase implements \IBXGetErrors
{
    protected $path = \null;
    public function __construct($path)
    {
    }
    public function GetName()
    {
    }
    public function GetPath()
    {
    }
    public function GetPathWithName()
    {
    }
    public abstract function IsDirectory();
    public abstract function IsExists();
    public abstract function MarkWritable();
    public abstract function GetPermissions();
    public abstract function GetModificationTime();
    public abstract function GetLastAccessTime();
}
/**
 * @deprecated Use \Bitrix\Main\IO
 */
abstract class CBXVirtualFile extends \CBXVirtualFileBase
{
    public function IsDirectory()
    {
    }
    public function GetType()
    {
    }
    public function GetExtension()
    {
    }
    public abstract function Open($mode);
    public abstract function GetContents();
    public abstract function PutContents($data);
    public abstract function GetFileSize();
    public abstract function IsWritable();
    public abstract function IsReadable();
    public abstract function ReadFile();
}
/**
 * @deprecated Use \Bitrix\Main\IO
 */
abstract class CBXVirtualDirectory extends \CBXVirtualFileBase
{
    public function IsDirectory()
    {
    }
    /**
     * @return CBXVirtualDirectoryFileSystem[] | CBXVirtualFileFileSystem[]
     */
    public abstract function GetChildren();
    public abstract function Create();
}