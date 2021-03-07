<?php

namespace Bitrix\Main;

class UserPhoneAuthTable extends \Bitrix\Main\ORM\Data\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @param string $value
     * @return bool|string
     */
    public static function validatePhoneNumber($value)
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    protected static function modifyFields(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function normalizePhoneNumber($number, $defaultCountry = '')
    {
    }
}