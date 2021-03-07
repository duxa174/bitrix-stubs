<?php

class ConvertedFile
{
    private $_uploadedFile;
    private $_convertedFileIndex;
    private $_uploadedFileIndex;
    private $_file;
    private $_size;
    private $_type;
    // bitrix
    /**
     * ConvertedFile constructor
     * @param UploadedFile $uploadedFile
     * @param int $index
     * @param array $file
     */
    function __construct($uploadedFile, $index, $file)
    {
    }
    /**
     * Get height of converted file
     */
    public function getHeight()
    {
    }
    /**
     * Get converter mode applied to the uploaded file
     */
    public function getMode()
    {
    }
    /**
     * Get converted file name
     */
    public function getName()
    {
    }
    /**
     * Get converted file size
     * @return int
     */
    public function getSize()
    {
    }
    /**
     * Get converted file size
     * @return int
     */
    public function getType()
    {
    }
    /**
     * Get converted file width
     */
    public function getWidth()
    {
    }
    /**
     * Get content of converted file into string
     * @return string
     */
    public function getFileContent()
    {
    }
    /**
     * Move converted file to a new location
     * @param $destination The destination of the moved file
     */
    public function moveTo($destination)
    {
    }
}