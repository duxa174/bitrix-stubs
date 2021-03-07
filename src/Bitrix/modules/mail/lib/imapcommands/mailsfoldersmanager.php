<?php

namespace Bitrix\Mail\ImapCommands;

/**
 * Class MailsFoldersManager
 * @package Bitrix\Mail\ImapCommands
 */
class MailsFoldersManager extends \Bitrix\Mail\ImapCommands\SyncInternalManager
{
    public function deleteMails()
    {
    }
    public function moveMails($folderToMoveName)
    {
    }
    public function restoreMailsFromSpam()
    {
    }
    /**
     * @return Main\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function sendMailsToSpam()
    {
    }
    private function processDelete($folderTrashName)
    {
    }
    private function processMoving($messagesToMove, $folderToName)
    {
    }
    private function processSpam($folderSpamName)
    {
    }
    private function deleteMessages($messagesToDelete, $mailbox)
    {
    }
    private function isMailToBeDeleted($messageUid)
    {
    }
    private function moveMailsToFolder($folderToName)
    {
    }
    private function moveMailsByImap($messagesToMove, $folder)
    {
    }
    private function processSyncMovedMessages($folderCurrentNameEncoded)
    {
    }
    public static function syncMovedMessages($mailboxId, $mailboxUserId, $folderName)
    {
    }
    protected function imapSyncMovedMessages($messagesToMove, $folderName)
    {
    }
    public function setMailboxUserId($mailboxUserId)
    {
    }
}