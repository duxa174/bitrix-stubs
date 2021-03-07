<?php

class CCloudTempFile
{
    private static $buckets = array();
    /**
     * @return string
     */
    protected static function GetAbsoluteRoot()
    {
    }
    /**
     * @param string $file_name
     * @return bool
     */
    public static function IsTempFile($file_name)
    {
    }
    protected static $shutdownRegistered = \false;
    protected static function RegisterShutdown()
    {
    }
    /**
     * @param CCloudStorageBucket $obBucket
     * @param string $file_name
     * @return string
     */
    public static function GetFileName($obBucket, $file_name = '')
    {
    }
    /**
     * @param CCloudStorageBucket $obBucket
     * @param integer $hours_to_keep_files
     * @param string $subdir
     * @return string
     */
    public static function GetDirectoryName($obBucket, $hours_to_keep_files = 0, $subdir = "")
    {
    }
    protected static $my_pid = '';
    /**
     * @param bool $lock
     * @return bool
     */
    protected static function cleanupFilesLock($lock = \true)
    {
    }
    /**
     * @param CCloudStorageBucket $obBucket
     * @param string $dir_name
     * @param array $files
     * @return string
     */
    protected static function cleanupFiles($obBucket, $dir_name, $files)
    {
    }
    //PHP shutdown cleanup
    public static function Cleanup()
    {
    }
}