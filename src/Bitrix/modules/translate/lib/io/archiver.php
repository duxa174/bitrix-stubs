<?php

namespace Bitrix\Translate\IO;

class Archiver extends \Bitrix\Main\IO\File implements \Bitrix\Translate\IErrorable
{
    // trait implements interface Translate\IErrorable
    use \Bitrix\Translate\Error;
    /**@var \CArchiver */
    private $archive;
    /** @var bool */
    private $canUseCompression = false;
    /** @var string */
    private $seekPath;
    /** @var int */
    private $processedFileCount = 0;
    /**
     * Archiver constructor.
     *
     * @param string $path End point archive file path.
     * @param string|null $siteId Site id.
     */
    public function __construct($path, $siteId = null)
    {
    }
    /**
     * Checks zlib|gzcompress availability.
     *
     * @return boolean
     */
    public static function libAvailable()
    {
    }
    /**
     * Defines packing/unpacking options.
     *
     * @param array $options An array with the options' names and their values.
     * @see \CArchiver::SetOptions()
     *
     * @return void
     */
    public function setOptions($options)
    {
    }
    /**
     * Sets packing seek position path.
     * @param string $seekPath Seek position.
     * @return void
     */
    public function setSeekPosition($seekPath)
    {
    }
    /**
     * Gets packing seek position path.
     * @return string
     */
    public function getSeekPosition()
    {
    }
    /**
     * Gets processed file count by archive.
     * @return int
     */
    public function getProcessedFileCount()
    {
    }
    /**
     * Pack language folder.
     *
     * @param Translate\IO\Directory $directory Folder to pack into archive.
     * @param string $seekPath Continue process from this path.
     *
     * @return int
     */
    public function pack(\Bitrix\Translate\IO\Directory $directory, $seekPath = '')
    {
    }
    /**
     * Extract language archive into target folder.
     *
     * @param Translate\IO\Directory $target Folder to extract files into it.
     *
     * @return boolean
     */
    public function extract(\Bitrix\Translate\IO\Directory $target)
    {
    }
}