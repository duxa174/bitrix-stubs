<?php

namespace Bitrix\Rest\Event;

/**
 * Class Session
 *
 * Session restriction for REST events
 *
 * @package Bitrix\Rest
 **/
class Session
{
    const PARAM_SESSION = 'EVENT_SESSION';
    private static $TTL = null;
    private static $ttlDecreased = false;
    private static $set = false;
    public static function get()
    {
    }
    public static function set($session)
    {
    }
}