<?php

namespace Bitrix\Mail\Helper;

/**
 * Class MessageFolder
 */
class MessageFolder
{
    const TRASH = 'trash';
    const SPAM = 'spam';
    const INCOME = 'income';
    const OUTCOME = 'outcome';
    const DRAFTS = 'drafts';
    /**
     * @param array $message
     * @param array $mailboxOptions
     * @return string
     */
    public static function getFolderNameByHash($messageFolderHash, $mailboxOptions)
    {
    }
    public static function getFolderHashByType($folderType, $mailboxOptions)
    {
    }
    public static function getFolderNameByType($folderType, $mailboxOptions)
    {
    }
    public static function getDisabledFolders($mailboxOptions)
    {
    }
    public static function isDisabledFolder($folder, $mailboxOptions)
    {
    }
    public static function getFormattedPath(array $path, $mailboxOptions)
    {
    }
    public static function getFormattedName(array $path, $mailboxOptions, $full = true)
    {
    }
}