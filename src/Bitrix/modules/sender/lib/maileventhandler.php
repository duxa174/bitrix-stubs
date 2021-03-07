<?php

namespace Bitrix\Sender;

class MailEventHandler
{
    private static $list = array();
    /**
     * @param \Bitrix\Main\Event $event
     * @return mixed
     */
    public static function handleEvent(\Bitrix\Main\Event $event)
    {
    }
    public static function prevent($eventName, array $filter)
    {
    }
    public static function isPreventable($eventName, array $fields)
    {
    }
}