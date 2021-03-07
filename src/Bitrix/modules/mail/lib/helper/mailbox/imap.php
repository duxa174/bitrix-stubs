<?php

namespace Bitrix\Mail\Helper\Mailbox;

class Imap extends \Bitrix\Mail\Helper\Mailbox
{
    const MESSAGE_PARTS_TEXT = 1;
    const MESSAGE_PARTS_ATTACHMENT = 2;
    const MESSAGE_PARTS_ALL = -1;
    protected $client;
    protected function __construct($mailbox)
    {
    }
    public function getSyncStatusTotal()
    {
    }
    public function getSyncStatus()
    {
    }
    protected function syncInternal()
    {
    }
    protected function createMessage(\Bitrix\Main\Mail\Mail $message, array $fields = array())
    {
    }
    public function syncOutgoing()
    {
    }
    public function uploadMessage(\Bitrix\Main\Mail\Mail $message, array &$excerpt = null)
    {
    }
    public function downloadMessage(array &$excerpt)
    {
    }
    public function downloadMessageParts(array &$excerpt, \Bitrix\Mail\Imap\BodyStructure $bodystructure, $flags = \Bitrix\Mail\Helper\Mailbox\Imap::MESSAGE_PARTS_ALL)
    {
    }
    public function cacheDirs()
    {
    }
    public function listDirs($pattern, $useDb = false)
    {
    }
    public function cacheMeta()
    {
    }
    protected function getFolderToMessagesMap($messages)
    {
    }
    public function markUnseen($messages)
    {
    }
    public function markSeen($messages)
    {
    }
    public function moveMailsToFolder($messages, $folderTo)
    {
    }
    public function deleteMails($messages)
    {
    }
    public function syncMailbox()
    {
    }
    public function syncDir($dirPath)
    {
    }
    protected function syncDirInternal($dir)
    {
    }
    public function resyncDir($dirPath)
    {
    }
    protected function resyncDirInternal($dir)
    {
    }
    protected function parseHeaders(&$messages)
    {
    }
    protected function blacklistMessages($dirPath, &$messages)
    {
    }
    protected function prepareMessages($dirPath, $uidtoken, &$messages)
    {
    }
    protected function resyncMessages($dirPath, $uidtoken, &$messages)
    {
    }
    protected function syncMessage($dirPath, $uidtoken, $message, &$hashesMap = array())
    {
    }
    public function downloadAttachments(array &$excerpt)
    {
    }
    protected function cacheMessage(&$message, $params = array())
    {
    }
    protected function getSyncRange($dirPath, &$uidtoken)
    {
    }
    protected function getUidRange($dirPath, $uidtoken)
    {
    }
}