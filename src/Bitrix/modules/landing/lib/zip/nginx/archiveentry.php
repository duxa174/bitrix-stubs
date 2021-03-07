<?php

namespace Bitrix\Landing\Zip\Nginx;

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
     * File id.
     * @var string
     */
    protected $fileId;
    /**
     * File size in entry.
     * @var string
     */
    protected $size;
    /**
     * Entry constructor.
     */
    protected function __construct()
    {
    }
    /**
     * Creates Entry from file path.
     * @param string $filePath File id from b_file.
     * @return static
     */
    public static function createFromFilePath($filePath)
    {
    }
    /**
     * Creates Entry from file id (from b_file).
     * @param int $fileId File id from b_file.
     * @return static
     */
    public static function createFromFileId($fileId)
    {
    }
    /**
     * Creates Entry from file array.
     * @param array $fileArray File id from b_file.
     * @return static
     */
    protected static function createFromFile(array $fileArray)
    {
    }
    /**
     * Encodes uri: explodes uri by / and encodes in UTF-8 and rawurlencodes.
     * @param string $uri Uri.
     * @return string
     */
    protected function encodeUrn($uri)
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