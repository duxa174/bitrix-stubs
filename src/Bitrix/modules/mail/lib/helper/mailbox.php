<?php

namespace Bitrix\Mail\Helper;

abstract class Mailbox
{
    const SYNC_TIMEOUT = 300;
    const SYNC_TIME_QUOTA = 280;
    protected $mailbox;
    protected $dirsHelper;
    protected $filters;
    protected $session;
    protected $startTime, $syncTimeout, $checkpoint;
    protected $syncParams = [];
    protected $errors, $warnings;
    protected $lastSyncResult = ['newMessages' => 0, 'newMessagesNotify' => 0, 'deletedMessages' => 0, 'updatedMessages' => 0, 'newMessageId' => null];
    /**
     * Creates active mailbox helper instance by ID
     *
     * @param int $id Mailbox ID.
     * @param bool $throw Throw exception on error.
     * @return \Bitrix\Mail\Helper\Mailbox|false
     * @throws \Exception
     */
    public static function createInstance($id, $throw = true)
    {
    }
    /**
     * Creates mailbox helper instance
     *
     * @param mixed $filter Filter.
     * @param bool $throw Throw exception on error.
     * @return \Bitrix\Mail\Helper\Mailbox|false
     * @throws \Exception
     */
    public static function rawInstance($filter, $throw = true)
    {
    }
    protected static function instance(array $mailbox)
    {
    }
    protected static function prepareMailbox($filter)
    {
    }
    public function setSyncParams(array $params = array())
    {
    }
    protected function __construct($mailbox)
    {
    }
    protected function normalizeMailboxOptions()
    {
    }
    public function getMailbox()
    {
    }
    protected function isTimeQuotaExceeded()
    {
    }
    public function setCheckpoint()
    {
    }
    public function sync()
    {
    }
    public function getSyncStatus()
    {
    }
    protected function pushSyncStatus($params, $force = false)
    {
    }
    public function dismissOldMessages()
    {
    }
    public function dismissDeletedUidMessages()
    {
    }
    public function cleanup()
    {
    }
    protected function listMessages($params = array(), $fetch = true)
    {
    }
    protected function registerMessage(&$fields, $replaces = null)
    {
    }
    protected function updateMessagesRegistry(array $filter, array $fields, $mailData = array())
    {
    }
    protected function unregisterMessages($filter, $eventData = [])
    {
    }
    protected function linkMessage($uid, $id)
    {
    }
    protected function cacheMessage(&$body, $params = array())
    {
    }
    public function mail(array $params)
    {
    }
    protected function createMessage(\Bitrix\Main\Mail\Mail $message, array $fields = array())
    {
    }
    public function syncOutgoing()
    {
    }
    protected function syncOutgoingMessage($excerpt)
    {
    }
    public function resyncMessage(array &$excerpt)
    {
    }
    public function downloadAttachments(array &$excerpt)
    {
    }
    public function isSupportLazyAttachments()
    {
    }
    public function getFilters($force = false)
    {
    }
    /**
     * @deprecated
     */
    public function resortTree($message = null)
    {
    }
    /**
     * @deprecated
     */
    public function incrementTree($message)
    {
    }
    protected abstract function syncInternal();
    public abstract function listDirs($pattern, $useDb = false);
    public abstract function uploadMessage(\Bitrix\Main\Mail\Mail $message, array &$excerpt);
    public abstract function downloadMessage(array &$excerpt);
    public function getErrors()
    {
    }
    public function getWarnings()
    {
    }
    public function getLastSyncResult()
    {
    }
    protected function setLastSyncResult(array $data)
    {
    }
    public function getDirsHelper()
    {
    }
    public function activateSync()
    {
    }
    public function notifyNewMessages()
    {
    }
    public static final function getTimeout()
    {
    }
}