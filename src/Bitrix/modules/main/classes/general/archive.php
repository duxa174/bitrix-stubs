<?php

interface IBXArchive
{
    const StatusError = 0;
    const StatusSuccess = 1;
    const StatusContinue = 2;
    public function Pack($arFileList, $curFile = "");
    public function Unpack($strArchivePath);
    public function GetErrors();
    public function GetOptions();
    public function SetOptions($arOptions);
    public function GetStartFile();
}
class CBXArchive
{
    protected function __construct()
    {
    }
    /**
     * Creates an object of the archive 
     * @static
     * @param string $strArcName full path to the archive file to be created
     * @param string $strType one of the supported archive types (TAR.GZ, ZIP etc)
     * @return archive object of a specific class, false if type is not supported or path is incorrect
     */
    public static function GetArchive($strArcName, $strType = "")
    {
    }
    /**
     * Finds the type of the archive by its filename
     * @static
     * @param string $filename full path to the file
     * @return mixed $type code of the type if it's supported (TAR.GZ, ZIP), false if archive type is not found for the file
     */
    public static function DetectTypeByFilename($filename)
    {
    }
    /**
     * Contains information about archives supported by the system
     * @static
     * @return array containing archive type code, classname, extensions, classpath for each type
     */
    public static function GetAvailableFormats()
    {
    }
    /**
     * Returns the array of file extensions which are considered as archives
     * @static
     * @return array containing extensions in lower case
     */
    public static function GetArchiveExtensions()
    {
    }
    /**
     * Checks if the file is archive of the suppoted type
     * @static
     * @param string $strFilename full path to the archive to be checked
     * @return boolean
     */
    public static function IsArchive($strFilename)
    {
    }
    /**
     * Checks if current user has access to the file or folder according to Bitrix permissions
     * @static
     * @param string $strFilename full path to the file
     * @param boolean $isFile true if we check file permissions, false if folder permissions should be checked
     * @return boolean
     */
    public static function HasAccess($strFilename, $isFile)
    {
    }
}