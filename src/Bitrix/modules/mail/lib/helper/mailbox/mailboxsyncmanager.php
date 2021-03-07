<?php

namespace Bitrix\Mail\Helper\Mailbox;

class MailboxSyncManager
{
    private $userId;
    private $mailCheckInterval;
    private $syncOptionCategory = 'global';
    private $syncOptionName = 'user_mailboxes_sync_info';
    public function __construct($userId)
    {
    }
    public function getFailedToSyncMailboxes()
    {
    }
    public function getSuccessSyncedMailboxes()
    {
    }
    public function getNeedToBeSyncedMailboxes()
    {
    }
    public function getMailCheckInterval()
    {
    }
    public function deleteSyncData($mailboxId)
    {
    }
    public function setDefaultSyncData($mailboxId)
    {
    }
    public function setSyncStartedData($mailboxId, $time = null)
    {
    }
    public function setSyncStatus($mailboxId, $isSuccess, $time = null)
    {
    }
    private function setOption($mailboxesSyncInfo)
    {
    }
    /**
     * @return mixed
     */
    private function getMailboxesSyncInfo()
    {
    }
    public function getNextTimeToSync($lastMailCheckData)
    {
    }
    /**
     * @return null|int
     */
    public function getFirstFailedToSyncMailboxId()
    {
    }
    public function getLastMailboxSyncIsSuccessStatus($mailboxId)
    {
    }
    public function getLastMailboxSyncTime($mailboxId)
    {
    }
}