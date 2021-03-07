<?php

namespace Bitrix\MessageService\Integration;

class Pull
{
    private static $canUse;
    public static function canUse()
    {
    }
    public static function onMessagesUpdate(array $messages)
    {
    }
    /**
     * @param string $command Pull command name.
     * @param array $params Command parameters.
     * @return bool
     */
    private static function addToStack($command, array $params)
    {
    }
}