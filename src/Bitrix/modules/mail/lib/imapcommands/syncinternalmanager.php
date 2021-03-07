<?php

namespace Bitrix\Mail\ImapCommands;

/**
 * Class SyncInternalManager
 * @package Bitrix\Mail\ImapCommands
 */
class SyncInternalManager
{
    const FLAG_UNSEEN = 'unseen';
    const FLAG_SEEN = 'seen';
    protected $userId;
    protected $mailbox;
    protected $mailboxId;
    protected $mailboxUserId;
    protected $messagesIds;
    protected $messages;
    private $isInit;
    /** @var Repository */
    protected $repository;
    /** @var Mailbox */
    protected $mailboxHelper;
    public function __construct($mailboxId, $messagesIds, $userId = null)
    {
    }
    public function setUserId($userId)
    {
    }
    protected function getRepository()
    {
    }
    protected function getMailClientHelper($throwExceptions = true)
    {
    }
    protected function initData($folderType = null)
    {
    }
    protected function getDirPathByType($dirType)
    {
    }
    protected function getDirByPath($path)
    {
    }
    protected function fillMessagesEmails()
    {
    }
}