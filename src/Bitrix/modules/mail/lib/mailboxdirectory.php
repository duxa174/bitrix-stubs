<?php

namespace Bitrix\Mail;

class MailboxDirectory
{
    public static function fetchAllDirsTypes($mailboxId)
    {
    }
    public static function fetchOneLevelByParentId($mailboxId, $id, $level)
    {
    }
    public static function fetchAllLevelByParentId($mailboxId, $path, $level)
    {
    }
    public static function fetchOneByMailboxIdAndHash($mailboxId, $hash)
    {
    }
    public static function fetchOneOutcome($mailboxId)
    {
    }
    public static function fetchTrashAndSpamHash($mailboxId)
    {
    }
    public static function fetchOneById($id)
    {
    }
    public static function fetchOneByHash($mailboxId, $hash)
    {
    }
    public static function updateSync($id, $val)
    {
    }
    public static function resetDirsTypes($mailboxId, $type)
    {
    }
    public static function update($id, $data)
    {
    }
    public static function add(array $data)
    {
    }
    public static function addMulti($rows, $ignoreEvents = false)
    {
    }
    public static function deleteList(array $filter)
    {
    }
    public static function updateSyncDirs(array $values, $val, $mailboxId)
    {
    }
    public static function fetchAll($mailboxId)
    {
    }
    public static function fetchAllSyncDirs($mailboxId)
    {
    }
    public static function fetchAllDisabledDirs($mailboxId)
    {
    }
    public static function countMessagesSyncDirs($mailboxId)
    {
    }
    public static function getMinSyncTime($mailboxId)
    {
    }
    public static function countSyncDirs($mailboxId)
    {
    }
    public static function updateMessageCount($id, $val)
    {
    }
    public static function updateFlags($id, $flags)
    {
    }
    public static function updateSyncTime($id, $val)
    {
    }
    public static function setSyncLock(int $id, int $time)
    {
    }
}