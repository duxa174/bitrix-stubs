<?php

class CZip implements \IBXArchive
{
    public $zipname = '';
    public $zipfile = 0;
    private $arErrors = array();
    private $fileSystemEncoding = "";
    private $startFile;
    private $arHeaders;
    //should be changed via SetOptions
    private $compress = \true;
    private $remove_path = "";
    private $add_path = "";
    private $replaceExistentFiles = \false;
    private $checkBXPermissions = \false;
    const ReadBlockSize = 2048;
    public function __construct($pzipname)
    {
    }
    /**
     * Packs files and folders into archive
     * @param array $arFileList containing files and folders to be packed into archive
     * @param string $startFile - if specified then all files before it won't be packed during the traversing of $arFileList. Can be used for multi-step archivation
     * @return mixed 0 or false if error, 1 if success, 2 if the next step should be performed. Errors can be seen using GetErrors() method
     */
    public function Pack($arFileList, $startFile = "")
    {
    }
    private function _haveTime()
    {
    }
    private function _processFiles($arFileList, $addPath, $removePath)
    {
    }
    /**
     * Called from the archive object it returns the name of the file for the next step during multi-step archivation. Call if Pack method returned 2
     * @return string path to file
     */
    public function GetStartFile()
    {
    }
    /**
     * Unpacks archive into specified folder
     * @param string $strPath - path to the directory to unpack archive to
     * @return mixed 0 or false if error, 1 if success. Errors can be seen using GetErrors() method
     */
    public function Unpack($strPath)
    {
    }
    /**
     * Lets the user define packing/unpacking options
     * @param array $arOptions an array with the options' names and their values
     * @return nothing
     */
    public function SetOptions($arOptions)
    {
    }
    /**
     * Returns an array of packing/unpacking options and their current values
     * @return array
     */
    public function GetOptions()
    {
    }
    /**
     * Returns an array containing error codes and messages. Call this method after Pack or Unpack
     * @return array
     */
    public function GetErrors()
    {
    }
    /**
     * Creates an archive
     * @param array $arFileList containing files and folders to be added to the archive
     * @param array|int $arParams an array of parameters
     * @return mixed 0 if error, array $arResultList with packed files if success
     */
    public function Create($arFileList, $arParams = 0)
    {
    }
    /**
     * Archives files and folders
     * @param array $arFileList containing files and folders to be packed into archive
     * @param array|int $arParams - if specified contains options to use for archivation
     * @return mixed 0 or false if error, array with the list of packed files and folders if success. Errors can be seen using GetErrors() method
     */
    public function Add($arFileList, $arParams = 0)
    {
    }
    /**
     * Returns the list of files and folders in the archive
     * @return mixed 0 if error, array of results if success
     */
    public function GetContent()
    {
    }
    /**
     * Extracts archive content
     * @param array|int $arParams an array of parameters
     * @return mixed 0 or false if error, array of extracted files and folders if success. Errors can be seen using GetErrors() method
     */
    public function Extract($arParams = 0)
    {
    }
    /**
     * Deletes a file from the archive
     * @param array $arParams an rules defining which files should be deleted
     * @return mixed 0 if error, array $arResultList with deleted files if success
     */
    public function Delete($arParams)
    {
    }
    /**
     * Returns archive properties
     * @return mixed 0 if error, array $arProperties if success
     */
    public function GetProperties()
    {
    }
    private function _checkFormat()
    {
    }
    private function _createArchive($arFilesList, &$arResultList, &$arParams)
    {
    }
    private function _addData($arFilesList, &$arResultList, &$arParams)
    {
    }
    private function _openFile($mode)
    {
    }
    private function _closeFile()
    {
    }
    private function _addList($arFilesList, &$arResultList, $addDir, $removeDir, $removeAllDir, &$arParams)
    {
    }
    private function _addFileList($arFilesList, &$arResultList, $addDir, $removeDir, $removeAllDir, &$arParams)
    {
    }
    private function _addFile($filename, &$arHeader, $addDir, $removeDir, $removeAllDir, &$arParams)
    {
    }
    private function _writeFileHeader(&$arHeader)
    {
    }
    private function _writeCentralFileHeader(&$arHeader)
    {
    }
    private function _writeCentralHeader($entriesNumber, $blockSize, $offset, $comment)
    {
    }
    private function _getFileList(&$arFilesList)
    {
    }
    private function _convertHeader2FileInfo($arHeader, &$arInfo)
    {
    }
    private function _extractByRule(&$arFileList, &$arParams)
    {
    }
    private function _extractFile(&$arEntry, $path, $removePath, $removeAllPath, &$arParams)
    {
    }
    private function _extractFileAsString(&$arEntry, &$string)
    {
    }
    private function _readFileHeader(&$arHeader)
    {
    }
    private function _readCentralFileHeader(&$arHeader)
    {
    }
    private function _readEndCentralDir(&$arCentralDir)
    {
    }
    private function _deleteByRule(&$arResultList, &$arParams)
    {
    }
    private function _checkDir($dir, $isDir = \false)
    {
    }
    private function _checkParams(&$arParams, $arDefaultValues)
    {
    }
    private function _errorLog($errorName, $errorString = '')
    {
    }
    private function _errorReset()
    {
    }
    private function _reducePath($dir)
    {
    }
    private function _containsPath($dir, $path)
    {
    }
    private function _copyBlocks($source, $dest, $blockSize, $mode = 0)
    {
    }
    private function _renameTmpFile($source, $dest)
    {
    }
    private function _convertWinPath($path, $removeDiskLetter = \true)
    {
    }
    private function &_parseFileParams(&$arFileList)
    {
    }
    private function _cleanFile()
    {
    }
    private function _checkDirPath($path)
    {
    }
    private function _getfileSystemEncoding()
    {
    }
}