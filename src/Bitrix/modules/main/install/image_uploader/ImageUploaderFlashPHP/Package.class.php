<?php

class Package
{
    private $_uploadedFiles = \NULL;
    private $_packageIndex = \NULL;
    private $_uploadSession = \NULL;
    private $_completed = \false;
    private $_cached = \false;
    private $_packageFields = \NULL;
    private $_packageFiles = \NULL;
    /**
     * Package constructor
     * @param UploadSession $uploadSession
     * @param int $index
     * @param array $post
     * @param array $files
     */
    function __construct($uploadSession, $index, $saveIntoCache = \false)
    {
    }
    private function loadSavedFields()
    {
    }
    private function loadSavedFiles()
    {
    }
    /**
     * Get package field value by field name
     * @param string $fieldName
     */
    public function getPackageField($fieldName)
    {
    }
    /**
     * @return boolean Returns true if package received completely, otherwise returns false.
     */
    public function getCompleted()
    {
    }
    public function getCached()
    {
    }
    /**
     * Get all package fields
     * @return array
     */
    public function getPackageFields()
    {
    }
    /**
     * Get total package count for upload session
     */
    public function getPackageCount()
    {
    }
    /**
     * Get count of files selected to upload in this package
     */
    public function getPackageFileCount()
    {
    }
    /**
     * Get unique identificator for upload session
     */
    public function getPackageGuid()
    {
    }
    /**
     * Get packahe index
     */
    public function getPackageIndex()
    {
    }
    /**
     * Get uploaded files
     * @return array Array of UploadedFile objects
     */
    public function getUploadedFiles()
    {
    }
    private function getUploadedFilesInternal()
    {
    }
}