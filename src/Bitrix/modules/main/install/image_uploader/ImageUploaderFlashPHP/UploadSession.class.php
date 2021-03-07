<?php

class UploadSession
{
    private $_post = \NULL;
    private $_files = \NULL;
    private $_server = \NULL;
    private $_uploadCache = \NULL;
    private $_fileUploadedCallback = \NULL;
    private $_allFilesUploadedCallback = \NULL;
    function __construct($uploadCache, $post = \NULL, $files = \NULL, $server = \NULL)
    {
    }
    public function processRequest()
    {
    }
    private function addFileNames(&$fields, &$files)
    {
    }
    public function setFileUploadedCallback($callback)
    {
    }
    public function setAllFilesUploadedCallback($callback)
    {
    }
    public function getFileUploadedCallback()
    {
    }
    public function getAllFilesUploadedCallback()
    {
    }
    public function getRequestFields()
    {
    }
    public function getRequestFiles()
    {
    }
    public function getUploadSessionId()
    {
    }
    /**
     * Get upload cache object for upload session.
     * @return UploadCache
     */
    public function getUploadCache()
    {
    }
    private function validateRequest()
    {
    }
}