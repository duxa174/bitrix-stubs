<?php

namespace Bitrix\Sale\Internals;

class EventsPool extends \Bitrix\Sale\Internals\PoolBase
{
    protected static $events = array();
    public static function getEvents($code)
    {
    }
    public static function getEventsByType($code, $type)
    {
    }
    /**
     * @param $code
     * @param $type
     * @param $event
     */
    public static function addEvent($code, $type, $event)
    {
    }
    /**
     * @param $code
     * @param $type
     *
     * @return bool
     */
    public static function isEventTypeExists($code, $type)
    {
    }
    /**
     * @param null $code
     * @param null $type
     */
    public static function resetEvents($code = null, $type = null)
    {
    }
}