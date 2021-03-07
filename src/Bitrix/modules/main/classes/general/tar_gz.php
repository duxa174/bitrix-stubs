<?php

class CArchiver implements \IBXArchive
{
    public $_strArchiveName = "";
    public $_bCompress = \false;
    public $_strSeparator = " ";
    public $_dFile = 0;
    public $_arErrors = array();
    public $start_time = 0;
    public $max_exec_time = 0;
    public $file_pos = 0;
    public $stepped = \false;
    private $add_path = "";
    private $remove_path = "";
    private $startFile = "";
    private $lastFile = array();
    private $step_time = 30;
    private $tempres = \false;
    private $ReplaceExistentFiles = \false;
    private $CheckBXPermissions = \false;
    public function __construct($strArchiveName, $bCompress = \false, $start_time = -1, $max_exec_time = -1, $pos = 0, $stepped = \false)
    {
    }
    /**
     * Packs files and folders into archive
     * @param array $arFileList containing files and folders to be packed into archive
     * @param string $startFile - if specified then all files before it won't be packed during the traversing of $arFileList. Can be used for multi-step archivation
     * @return mixed false or 0 if error, 1 if success, 2 if the next step should be performed. Errors can be seen using GetErrors() method
     */
    public function Pack($arFileList, $startFile = "")
    {
    }
    /**
     * Unpacks archive into specified folder
     * @param string $strPath - path to the directory to unpack archive to
     * @return mixed false if error, array if success. Errors can be seen using GetErrors() method
     */
    public function Unpack($strPath)
    {
    }
    /**
     * Called from the archive object it returns the name of the file for the next step during multi-step archivation. Call if Pack method returned 2
     * @return string path to file
     */
    public function GetStartFile()
    {
    }
    private function _haveTime()
    {
    }
    private function _processFiles($arFileList, $strAddPath, $strRemovePath, $startFile = "")
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
     * Archives files and folders
     * @param array $vFileList containing files and folders to be packed into archive
     * @param string|bool $strAddPath - if specified contains path to add to each packed file/folder
     * @param string|bool $strRemovePath - if specified contains path to remove from each packed file/folder
     * @return mixed 0 or false if error, array with the list of packed files and folders if success. Errors can be seen using GetErrors() method
     */
    public function Add($vFileList, $strAddPath = \false, $strRemovePath = \false)
    {
    }
    /**
     * Adds file into archive
     * @param string $strFilename full path to file
     * @param string $strAddPath - if specified contains path to add to each packed file/folder
     * @param string $strRemovePath - if specified contains path to remove from each packed file/folder
     * @return mixed 0 or false if error, array with the list of packed files and folders if success. Errors can be seen using GetErrors() method
     */
    public function addFile($strFilename, $strAddPath, $strRemovePath)
    {
    }
    /**
     * Adds string as a file into archive
     * @param string $strFilename full path to file
     * @param string $strFileContent - file content
     * @return mixed 0 or false if error, array with the list of packed files and folders if success. Errors can be seen using GetErrors() method
     */
    public function addString($strFilename, $strFileContent)
    {
    }
    /**
     * Extract files from the archive
     * @param string $strPath path where to extract
     * @param array|bool $vFileList if specified - array of files to be extracted, else - all files will be extracted
     * @return mixed 0 or false if error, array with the list of unpacked files and folders if success. Errors can be seen using GetErrors() method
     */
    public function extractFiles($strPath, $vFileList = \false)
    {
    }
    /**
     * Extract content of the archive
     * @return mixed 0 or false if error, array with the list of unpacked files and folders if success. Errors can be seen using GetErrors() method
     */
    public function extractContent()
    {
    }
    /**
     * Returns an array containing error codes and messages. Call this method after Pack or Unpack
     * @return array
     */
    public function GetErrors()
    {
    }
    private function _addFileList($arFileList, $strAddPath, $strRemovePath)
    {
    }
    private function _addFile($strFilename, &$arHeaders, $strAddPath, $strRemovePath)
    {
    }
    /**
     * Returns the position of the file for the next step
     */
    public function getFilePos()
    {
    }
    private function _addString($strFilename, $strFileContent)
    {
    }
    private function _extractList($p_path, &$p_list_detail, $p_mode, $p_file_list, $p_remove_path)
    {
    }
    private function _writeHeader($strFilename, $strFilename_stored)
    {
    }
    private function _writeLongHeader($strFilename)
    {
    }
    private function _writeHeaderBlock($strFilename, $iSize, $p_mtime = 0, $p_perms = 0, $p_type = '', $p_uid = 0, $p_gid = 0)
    {
    }
    private function _readBlock()
    {
    }
    private function _readHeader($v_binary_data, &$v_header)
    {
    }
    private function _readLongHeader(&$v_header)
    {
    }
    private function _jumpBlock($p_len = \false)
    {
    }
    private function &_parseFileParams(&$vFileList)
    {
    }
    private function _openWrite()
    {
    }
    private function _openAppendFast()
    {
    }
    private function _openAppend()
    {
    }
    private function _openReadWrite()
    {
    }
    private function _openRead()
    {
    }
    private function _writeBlock($v_binary_data, $iLen = \false)
    {
    }
    private function _writeFooter()
    {
    }
    private function _cleanFile()
    {
    }
    private function _close()
    {
    }
    private function _normalizePath($strPath)
    {
    }
    private function _checkDirPath($path, $bPermission = \true)
    {
    }
    private function _dirCheck($p_dir)
    {
    }
}