<?php

class CIMDisk
{
    const MODULE_ID = 'im';
    const PATH_TYPE_SHOW = 'show';
    const PATH_TYPE_PREVIEW = 'preview';
    const PATH_TYPE_DOWNLOAD = 'download';
    public static function GetStorage()
    {
    }
    public static function UploadFileRegister($chatId, $files, $text = '', $linesSilentMode = \false)
    {
    }
    public static function UploadFile($hash, &$file, &$package, &$upload, &$error)
    {
    }
    public static function UploadFileUnRegister($chatId, $files, $messages)
    {
    }
    public static function DeleteFile($chatId, $fileId)
    {
    }
    /**
     * @param $chatId
     * @param $files
     * @param string $text
     * @param array $options
     * @param bool $robot
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function UploadFileFromDisk($chatId, $files, $text = '', $options = [], $robot = \false)
    {
    }
    public static function UploadFileFromMain($chatId, $files)
    {
    }
    public static function SaveToLocalDisk($fileId)
    {
    }
    public static function IncreaseFileVersionDisk($chatId, $fileId, int $userId = \null)
    {
    }
    public static function SaveFromLocalDisk($chatId, $fileId, int $userId = \null)
    {
    }
    public static function UploadAvatar($hash, &$file, &$package, &$upload, &$error)
    {
    }
    public static function UpdateAvatarId($chatId, $fileId, $userId = \null)
    {
    }
    public static function GetHistoryFiles($chatId, $historyPage = 1)
    {
    }
    public static function GetHistoryFilesByName($chatId, $name)
    {
    }
    public static function GetMaxFileId($chatId)
    {
    }
    public static function GetFiles($chatId, $fileId = \false, $checkPermission = \true)
    {
    }
    public static function GetFileParams($chatId, $fileModel)
    {
    }
    public static function Enabled()
    {
    }
    public static function GetFolderModel($chatId)
    {
    }
    public static function ChangeFolderMembers($chatId, $userId, $append = \true)
    {
    }
    public static function GetLocalDiskMolel()
    {
    }
    public static function GetStorageId()
    {
    }
    public static function SetStorageId($id)
    {
    }
    public static function GetLocalDiskFolderPath()
    {
    }
    public static function GetLocalDiskFilePath($fileId = 0)
    {
    }
    public static function GetPublicPath($type, \Bitrix\Disk\File $fileModel)
    {
    }
    //
    public static function GetFileLink(\Bitrix\Disk\File $fileModel)
    {
    }
    public static function RemoveTmpFileAgent()
    {
    }
    public static function GetUserId()
    {
    }
    public static function EnabledExternalLink()
    {
    }
    public static function SetEnabledExternalLink($flag = \true)
    {
    }
    public static function GetTopDepartmentCode()
    {
    }
    public static function OnAfterDeleteFile($fileId, $userId, $fileParams = array())
    {
    }
}