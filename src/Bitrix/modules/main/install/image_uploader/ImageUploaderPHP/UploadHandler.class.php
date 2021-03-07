<?php

/**
 * Handle upload requests from uploader.
 */
class UploadHandler
{
    private static $_processed = \false;
    private $_fileUploadedCallback = \NULL;
    private $_allFilesUploadedCallback = \NULL;
    private $_destination;
    private $_cacheAliveTimeout = 1800;
    // 30 minutes
    private $_cacheRoot;
    function __construct()
    {
    }
    /**
     * Add file uploaded callback function. Function will be called for every uploaded file.
     * @param callback $callback
     */
    public function setFileUploadedCallback($callback)
    {
    }
    public function getFileUploadedCallback()
    {
    }
    public function setAllFilesUploadedCallback($callback)
    {
    }
    public function getAllFilesUploadedCallback()
    {
    }
    /**
     * Get upload cache expire timeout.
     */
    public function getCacheAliveTimeout()
    {
    }
    /**
     * Set upload cache expire timeout.
     * After timeout expires all files for this upload session will be removed.
     * @param int $value Timeout in seconds
     */
    public function setCacheAliveTimeout($value)
    {
    }
    /**
     * Get temp directory for uploaded files
     */
    public function getUploadCacheDirectory()
    {
    }
    /**
     * Set temp directory for uploaded files
     * @param string $value
     */
    public function setUploadCacheDirectory($value)
    {
    }
    public function processRequest()
    {
    }
    /**
     * Image Uploader Flash upload files as ordinary field with binary data.
     * So it is placed in the $_POST and not in $_FILES
     */
    private function getRequestFiles($post)
    {
    }
    /**
     * Remove expired upload sessions
     */
    private function removeExpiredSessions($uploadCache)
    {
    }
    public function saveFiles($destination)
    {
    }
    /**
     * Save uploaded file callback
     * @param UploadedFile $uploadedFile
     */
    public function saveUploadedFileCallback($uploadedFile)
    {
    }
}