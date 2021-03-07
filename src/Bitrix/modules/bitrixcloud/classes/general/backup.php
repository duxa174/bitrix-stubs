<?php

class CBitrixCloudBackup
{
    private static $instance = \null;
    private $init = \false;
    private $infoXML = \null;
    private $quota = 0.0;
    private $files = array();
    private $total_size = 0.0;
    private $last_backup_time = 0;
    /**
     * Returns proxy class instance (singleton pattern)
     *
     * @return CBitrixCloudBackup
     *
     */
    public static function getInstance()
    {
    }
    /**
     * Loads and parses xml
     *
     * @param bool $force
     * @return bool
     *
     */
    private function _getInformation($force = \false)
    {
    }
    /**
     * Returns list of backup files
     *
     * @return array[int][string]string
     *
     */
    public function listFiles()
    {
    }
    /**
     * Returns amount of space available for backup
     *
     * @return float
     *
     */
    public function getQuota()
    {
    }
    /**
     * Returns amount of space used by backup files
     *
     * @return float
     *
     */
    public function getUsage()
    {
    }
    /**
     * Returns timestamp of the last saved backup
     *
     * @return int
     *
     */
    public function getLastTimeBackup()
    {
    }
    /**
     * Returns bucket object for backup operation.
     *
     * @param string $operation
     * @param string $check_word
     * @param string $file_name
     * @return CBitrixCloudBackupBucket
     * @throws CBitrixCloudException
     */
    private function _getBucket($operation, $check_word, $file_name)
    {
    }
    /**
     * Returns bucket object for downloading backup file.
     *
     * @param string $check_word
     * @param string $file_name
     * @return CBitrixCloudBackupBucket
     * @throws CBitrixCloudException
     */
    public function getBucketToReadFile($check_word, $file_name)
    {
    }
    /**
     * Returns bucket object for uploading backup file.
     *
     * @param string $check_word
     * @param string $file_name
     * @return CBitrixCloudBackupBucket
     * @throws CBitrixCloudException
     */
    public function getBucketToWriteFile($check_word, $file_name)
    {
    }
    /**
     * Deletes state stored in the database.
     *
     * @return CBitrixCloudBackup
     */
    public function clearOptions()
    {
    }
    /**
     * Saves state into the database.
     *
     * @return CBitrixCloudBackup
     */
    public function saveToOptions()
    {
    }
    /**
     * Restores state from the database.
     *
     * @return CBitrixCloudBackup
     */
    public function loadFromOptions()
    {
    }
    /**
     * Shows information about CDN free space in Admin's informer popup
     *
     * @return void
     */
    public static function OnAdminInformerInsertItems()
    {
    }
    /*
     * Registers new backup job with the remote service.
     * Returns empty string on success.
     *
     * @param string $secret_key
     * @param string $url
     * @param int $time
     * @param array $weekdays
     * @return string
     *
     */
    public function addBackupJob($secret_key, $url, $time = 0, $weekdays = array())
    {
    }
    /*
     * Cancels backup job with the remote service.
     * Returns empty string on success.
     *
     * @return string
     *
     */
    public function deleteBackupJob()
    {
    }
    public function getBackupJob()
    {
    }
}