<?php

namespace Bitrix\Mail\Internals;

/**
 * Class MailContactTable
 * @package Bitrix\Mail
 */
class MailContactTable extends \Bitrix\Main\Entity\DataManager
{
    const ADDED_TYPE_FROM = 'FROM';
    const ADDED_TYPE_CC = 'CC';
    const ADDED_TYPE_BCC = 'BCC';
    const ADDED_TYPE_TO = 'TO';
    const ADDED_TYPE_REPLY_TO = 'REPLY_TO';
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @param $contactsData
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public static function addContactsBatch($contactsData)
    {
    }
}