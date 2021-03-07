<?php

namespace Bitrix\Main\Mail\Internal;

class EventTypeTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const TYPE_EMAIL = 'email';
    const TYPE_SMS = 'sms';
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
}