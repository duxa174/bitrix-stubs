<?php

namespace Bitrix\Mail\Internals;

class UserSignatureTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const TYPE_ADDRESS = 'address';
    const TYPE_SENDER = 'sender';
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
    /**
     * @return \Bitrix\Main\ORM\Objectify\EntityObject|string
     */
    public static function getObjectClass()
    {
    }
}