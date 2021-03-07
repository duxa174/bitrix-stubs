<?php

namespace Bitrix\Landing\Zip\Nginx;

class Archive
{
    /**
     * Archive name.
     * @var string
     */
    protected $name;
    /**
     * Archive Entries.
     * @var ArchiveEntry[]
     */
    protected $entries = [];
    /**
     * Archive constructor.
     * @param string $name Archive name.
     */
    public function __construct($name)
    {
    }
    /**
     * Add one entry. in current archive.
     * @param ArchiveEntry $archiveEntry Entry for archive.
     */
    public function addEntry($archiveEntry)
    {
    }
    /**
     * Returns true if the archive does not have entries.
     * @return bool
     */
    public function isEmpty()
    {
    }
    /**
     * Return entries as string.
     * @return string
     */
    protected function getFileList()
    {
    }
    /**
     * Add necessary headers.
     * @return void
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected function addHeaders()
    {
    }
    /**
     * Sends content to output stream and sets necessary headers.
     * @return void
     */
    public function send()
    {
    }
    /**
     * Disable compression of module compression.
     */
    protected function disableCompression()
    {
    }
}