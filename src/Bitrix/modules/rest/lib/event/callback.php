<?php

namespace Bitrix\Rest\Event;

/**
 * Class Callback
 *
 * Callback for Bitrix events transferred to REST events
 *
 * @package Bitrix\Rest
 **/
class Callback
{
    /**
     * Handler for all PHP events transferred to REST.
     *
     * @param string $name Event name.
     * @param array $arguments Event arguments.
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function __callStatic($name, $arguments)
    {
    }
}