<?php

namespace Bitrix\Mail\ImapCommands;

class Repository
{
    private $mailboxId;
    private $messagesIds;
    public function __construct($mailboxId, $messagesIds)
    {
    }
    public function getMailbox($mailboxUserId = null)
    {
    }
    public function deleteOldMessages($folderCurrentName)
    {
    }
    public function markMessagesUnseen($messages, $mailbox)
    {
    }
    public function markMessagesSeen($messages, $mailbox)
    {
    }
    protected function setMessagesSeen($isSeen, $messages, $mailbox)
    {
    }
    public function updateMessageFieldsAfterMove($messages, $folderNewName, $mailbox)
    {
    }
    public function addMailsToBlacklist($blacklistMails, $userId)
    {
    }
    public function deleteMailsCompletely($messagesToDelete, $mailboxUserId)
    {
    }
    public function getMessages()
    {
    }
}