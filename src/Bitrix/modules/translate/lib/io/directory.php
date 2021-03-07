<?php

namespace Bitrix\Translate\IO;

class Directory extends \Bitrix\Main\IO\Directory implements \Bitrix\Translate\IErrorable
{
    // trait implements interface Translate\IErrorable
    use \Bitrix\Translate\Error;
    /**
     * Constructor.
     * @param string $path Folder path.
     * @param string|null $siteId Site id.
     */
    public function __construct(string $path, ?string $siteId = null)
    {
    }
    /**
     * Creates temporal directory.
     *
     * @param string $prefix Name prefix.
     * @param int $timeToLive Hours to keep files alive.
     *
     * @return self
     */
    public static function generateTemporalDirectory(string $prefix, int $timeToLive = 3) : self
    {
    }
    /**
     * Copy full structure of the folders with its contents.
     *
     * @param Main\IO\Directory $target Destination folder.
     * @param bool $reWrite Rewrire files.
     * @param bool $recursive Recurcivly follow folder structure.
     * @param bool $convertEncoding Allow encoding conver.
     * @param string $sourceEncoding Encoding of source files.
     * @param string $targetEncoding Target encoding.
     *
     * @return boolean
     */
    public function copy(\Bitrix\Main\IO\Directory $target, bool $reWrite = true, bool $recursive = false, bool $convertEncoding = false, string $sourceEncoding = '', string $targetEncoding = '') : bool
    {
    }
    /**
     * Copy only language folders with content.
     *
     * @param Main\IO\Directory $target Destination folder.
     * @param string $languageId Language to filter.
     * @param bool $convertEncoding Allow encoding conver.
     * @param string $sourceEncoding Encoding of source files.
     * @param string $targetEncoding Target encoding.
     *
     * @return boolean
     */
    public function copyLangOnly(\Bitrix\Main\IO\Directory $target, string $languageId, bool $convertEncoding = false, string $sourceEncoding = '', string $targetEncoding = '') : bool
    {
    }
    /**
     * Wipes folder out of children.
     *
     * @param \Closure|null $filter Filter function.
     * @return bool
     */
    public function wipe(?\Closure $filter = null) : bool
    {
    }
}