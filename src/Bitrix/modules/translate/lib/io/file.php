<?php

namespace Bitrix\Translate\IO;

class File extends \Bitrix\Main\IO\File implements \Bitrix\Translate\IErrorable
{
    // trait implements interface Translate\IErrorable
    use \Bitrix\Translate\Error;
    /**
     * Creates temporal file.
     *
     * @param string $prefix Name prefix.
     * @param string $suffix Name suffix.
     * @param int $timeToLive Hours to keep files alive.
     *
     * @return static
     */
    public static function generateTemporalFile(string $prefix, string $suffix = '.tmp', int $timeToLive = 3) : self
    {
    }
    /**
     * Opens file for reading.
     *
     * @return bool
     */
    public function openLoad() : bool
    {
    }
    /**
     * Opens file for writing.
     *
     * @return bool
     */
    public function openWrite() : bool
    {
    }
    /**
     * Read file.
     *
     * @param int $length Amount bytes to read.
     *
     * @return string
     */
    public function read(int $length) : string
    {
    }
    /**
     * Write file.
     *
     * @param string $content Data to write.
     *
     * @return int
     * @throws Main\IO\FileNotOpenedException
     * @throws Main\IO\IoException
     */
    public function write(string $content) : int
    {
    }
    /**
     * Closes the file.
     *
     * @return void
     * @throws Main\IO\FileNotOpenedException
     */
    public function close() : void
    {
    }
}