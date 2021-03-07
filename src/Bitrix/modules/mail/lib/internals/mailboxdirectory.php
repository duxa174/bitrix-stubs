<?php

namespace Bitrix\Mail\Internals;

class MailboxDirectoryTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const ACTIVE = 1;
    const INACTIVE = 0;
    const TYPE_INCOME = 'IS_INCOME';
    const TYPE_OUTCOME = 'IS_OUTCOME';
    const TYPE_TRASH = 'IS_TRASH';
    const TYPE_SPAM = 'IS_SPAM';
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getObjectClass()
    {
    }
    public static function getMap()
    {
    }
}