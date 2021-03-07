<?php

namespace Bitrix\Mail;

class Helper
{
    const SYNC_TIMEOUT = 300;
    public static function syncMailboxAgent($id)
    {
    }
    public static function syncOutgoingAgent($id)
    {
    }
    public static function cleanupMailboxAgent($id)
    {
    }
    /**
     * @deprecated
     */
    public static function resortTreeAgent($id)
    {
    }
    public static function deleteMailboxAgent($id)
    {
    }
    public static function resyncDomainUsersAgent()
    {
    }
    public static function syncMailbox($id, &$error)
    {
    }
    public static function listImapDirs($mailbox, &$error, &$errors = null)
    {
    }
    public static function getImapUnseen($mailbox, $dir = 'inbox', &$error, &$errors = null)
    {
    }
    public static function addImapMessage($id, $data, &$error)
    {
    }
    public static function updateImapMessage($userId, $hash, $data, &$error)
    {
    }
    private static function createClient($mailbox, $langCharset = null)
    {
    }
}
class DummyMail extends \Bitrix\Main\Mail\Mail
{
    public function initSettings()
    {
    }
    public static function getMailEol()
    {
    }
    public function __toString()
    {
    }
    /**
     * @deprecated
     */
    public static function overwriteMessageHeaders(\Bitrix\Main\Mail\Mail $message, array $headers)
    {
    }
}