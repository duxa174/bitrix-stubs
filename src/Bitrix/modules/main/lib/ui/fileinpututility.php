<?php

namespace Bitrix\Main\UI;

class FileInputUtility
{
    protected static $instance = null;
    const SESSION_VAR_PREFIX = "MFI_UPLOADED_FILES_";
    const SESSION_LIST = "MFI_SESSIONS";
    const SESSION_TTL = 86400;
    /**
     * @return FileInputUtility
     */
    public static function instance()
    {
    }
    public function __construct()
    {
    }
    public function registerControl($CID, $controlId = "")
    {
    }
    public function registerFile($CID, $fileId)
    {
    }
    public function unRegisterFile($CID, $fileId)
    {
    }
    public function checkFiles($controlId, $arFiles)
    {
    }
    public function checkDeletedFiles($controlId)
    {
    }
    public function checkFile($CID, $fileId)
    {
    }
    public function getControlByCid($CID)
    {
    }
    public function isCidRegistered($CID)
    {
    }
    public function getUserFieldCid(array $userField)
    {
    }
    protected function initSession($CID, $controlId)
    {
    }
    protected function getSessionControlFiles($controlId)
    {
    }
}