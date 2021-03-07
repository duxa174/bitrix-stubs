<?php

namespace Bitrix\Main\IO;

class File extends \Bitrix\Main\IO\FileEntry implements \Bitrix\Main\IO\IFileStream
{
    const REWRITE = 0;
    const APPEND = 1;
    /** @var resource */
    protected $filePointer;
    public function __construct($path, $siteId = null)
    {
    }
    /**
     * Opens the file and returns the file pointer.
     *
     * @param string $mode
     * @return resource
     * @throws FileOpenException
     */
    public function open($mode)
    {
    }
    /**
     * Closes the file.
     *
     * @throws FileNotOpenedException
     */
    public function close()
    {
    }
    public function isExists()
    {
    }
    public function getContents()
    {
    }
    public function putContents($data, $flags = self::REWRITE)
    {
    }
    /**
     * Returns the file size.
     *
     * @return float|int
     * @throws FileNotFoundException
     * @throws FileOpenException
     */
    public function getSize()
    {
    }
    /**
     * Seeks on the file pointer from the beginning (SEEK_SET only).
     *
     * @param int|float $position
     * @return int
     * @throws FileNotOpenedException
     */
    public function seek($position)
    {
    }
    public function isWritable()
    {
    }
    public function isReadable()
    {
    }
    public function readFile()
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
    public function delete()
    {
    }
    public function getContentType()
    {
    }
    public static function isFileExists($path)
    {
    }
    public static function getFileContents($path)
    {
    }
    public static function putFileContents($path, $data, $flags = self::REWRITE)
    {
    }
    public static function deleteFile($path)
    {
    }
}