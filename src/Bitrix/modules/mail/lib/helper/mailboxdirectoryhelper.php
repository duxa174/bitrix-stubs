<?php

namespace Bitrix\Mail\Helper;

class MailboxDirectoryHelper
{
    private $mailboxId = null;
    private $storage = null;
    /** @var  ErrorCollection */
    private $errors = [];
    public function __construct($mailboxId)
    {
    }
    public function getDirs()
    {
    }
    public function setDirs(array $dirs)
    {
    }
    public function reloadDirs()
    {
    }
    public function getErrors()
    {
    }
    public function getIncome()
    {
    }
    public function getOutcome()
    {
    }
    public function getSpam()
    {
    }
    public function getTrash()
    {
    }
    public function getIncomePath()
    {
    }
    public function getOutcomePath()
    {
    }
    public function getSpamPath()
    {
    }
    public function getTrashPath()
    {
    }
    public function getDirPathByHash($hash)
    {
    }
    public function getDirByHash($hash)
    {
    }
    public function getDirPathByType($type)
    {
    }
    public function getDirByPath(?string $path)
    {
    }
    public function getSyncDirs()
    {
    }
    public function getSyncDirsOrderByTime($excludeDirPath = null)
    {
    }
    public function getSyncDirsPath()
    {
    }
    public function getAllOneLevel()
    {
    }
    private function orderByDefault($dirs)
    {
    }
    public function getOrderByDefault($dir)
    {
    }
    private function orderByName($dirs)
    {
    }
    private function orderByTime($dirs)
    {
    }
    public function getLastSyncDirByDefault($excludeDirPath = null)
    {
    }
    public function getCurrentSyncDirByTime()
    {
    }
    public function getCurrentSyncDirPositionByDefault(string $path, $excludeDirPath = null)
    {
    }
    public function removeDirsLikePath(array $dirs)
    {
    }
    public function getDefaultDirPath()
    {
    }
    public function buildTreeDirs()
    {
    }
    public function syncChildren($parent)
    {
    }
    public function getOneLevelByParentId($parent)
    {
    }
    public function getAllLevelByParentId($parent)
    {
    }
    public function addSyncDirs($dirs, $dbDirs)
    {
    }
    public function updateSyncDirs($dirs, $dbDirs)
    {
    }
    public function removeSyncDirs($dirs, $dbDirs)
    {
    }
    public function toggleSyncDirs($dirs)
    {
    }
    public function saveDirsTypes($dirs)
    {
    }
    public function syncDbDirs($dirs)
    {
    }
    public function updateMessageCount($id, $count)
    {
    }
    public static function isDirsTypes($name)
    {
    }
    public static function getFlags(array $flags)
    {
    }
    public static function getMaxLevelDirs()
    {
    }
    public static function setMaxLevelDirs(int $val)
    {
    }
    public static function getCurrentSyncDir()
    {
    }
    public static function setCurrentSyncDir(string $path)
    {
    }
}