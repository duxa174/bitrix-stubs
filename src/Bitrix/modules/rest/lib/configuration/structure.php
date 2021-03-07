<?php

namespace Bitrix\Rest\Configuration;

class Structure
{
    private static $maxAgentTime = 10;
    private static $fileDescriptionDelete = 'configuration_delete';
    private $context = '';
    private $setting = null;
    private $zipMimeType = ['application/zip', 'application/x-zip-compressed'];
    /**
     * @param $context string
     */
    public function __construct($context)
    {
    }
    /**
     * Create and/or return absolute path to temp folder
     *
     * @return string|boolean
     */
    public function getFolder()
    {
    }
    /**
     * Save content to temp folder
     * @param $type string
     * @param $code string
     * @param $content array|string
     *
     * @return boolean
     */
    public function saveContent($type, $code, $content)
    {
    }
    /**
     * @param $id integer file id from b_file
     * @param $name string file name with path in folder
     *
     * @return boolean
     */
    private function saveConfigurationFile($id, $name)
    {
    }
    /**
     * All files in current context
     * @return array|null
     */
    public function getConfigurationFileList()
    {
    }
    /**
     * @param $id integer file id from b_file
     * @param $additionalData array any short data save with file
     *
     * @return boolean
     */
    public function saveFile($id, $additionalData = [])
    {
    }
    /**
     * All files in current context
     * @return array|null
     */
    public function getFileList()
    {
    }
    /**
     * Unzip the archive to a temporary folder
     * @param $fileInfo array === $_FILES
     *
     * @return boolean
     */
    public function unpack($fileInfo)
    {
    }
    private function initUnpackFilesList()
    {
    }
    /**
     * Set Disk work folder with external files
     * @param $folderId
     * @param $storageParams
     *
     * @return bool
     */
    public function setUnpackFilesFromDisk($folderId, $storageParams)
    {
    }
    /**
     * Get file from Disk work folder with external files
     * @param $id
     *
     * @return bool|mixed
     */
    public function getUnpackFile($id)
    {
    }
    /**
     * Set export archive name
     * @param $name string [a-zA-Z0-9_] new name archive
     *
     * @return bool result of set new name
     */
    public function setArchiveName($name)
    {
    }
    /**
     * Return export name archive
     * @return string
     */
    public function getArchiveName()
    {
    }
    /**
     * Agent delete old temp export files
     * @return string
     */
    public static function clearContentAgent()
    {
    }
}