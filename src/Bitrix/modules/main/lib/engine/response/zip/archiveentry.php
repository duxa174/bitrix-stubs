<?php

namespace Bitrix\Main\Engine\Response\Zip;

class ArchiveEntry
{
    /**
     * File name in entry.
     * @var string
     */
    protected $name;
    /**
     * File path in entry.
     * @var string
     */
    protected $path;
    /**
     * File size in entry.
     * @var int
     */
    protected $size;
    /**
     * Crc32 for file
     * @var string
     */
    protected $crc32;
    /**
     * Entry constructor.
     */
    protected function __construct()
    {
    }
    /**
     * Gets name of current file.
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @param string $name
     *
     * @return ArchiveEntry
     */
    public function setName($name)
    {
    }
    /**
     * Gets full path of current file.
     * @return string
     */
    public function getPath()
    {
    }
    /**
     * Gets size of current file.
     * @return int
     */
    public function getSize()
    {
    }
    /**
     * @return string
     */
    public function getCrc32()
    {
    }
    /**
     * Creates Entry from file path.
     * @param string $filePath File id from b_file.
     * @param string|null $name
     * @return static
     */
    public static function createFromFilePath($filePath, $name = null)
    {
    }
    /**
     * Creates Entry from file id (from b_file).
     * @param int $fileId File id from b_file.
     * @param string $moduleId Module id for strong restriction.
     * @return static
     */
    public static function createFromFileId($fileId, $moduleId = null)
    {
    }
    /**
     * Creates Entry from file array.
     * @param array $fileArray File id from b_file.
     * @param string|null $name
     * @return static
     */
    protected static function createFromFile(array $fileArray, $name = null)
    {
    }
    /**
     * Get main instance of \CMain.
     * @return \CMain
     */
    protected static function getApplication()
    {
    }
    /**
     * Famous document root.
     * @return string
     */
    protected static function getDocRoot()
    {
    }
    /**
     * Encodes uri: explodes uri by / and encodes in UTF-8 and rawurlencodes.
     * @param string $uri Uri.
     * @return string
     */
    protected static function encodeUrn($uri)
    {
    }
    /**
     * Returns representation zip entry as string.
     * @return string
     */
    public function __toString()
    {
    }
}