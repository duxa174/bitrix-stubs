<?php

namespace Bitrix\Socialservices;

class UserTable extends \Bitrix\Main\Entity\DataManager
{
    const ALLOW = 'Y';
    const DISALLOW = 'N';
    const INITIALIZED = 'Y';
    const NOT_INITIALIZED = 'N';
    private static $deletedList = array();
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function filterFields($fields, $oldValue = null)
    {
    }
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
}