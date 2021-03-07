<?php

namespace Bitrix\Sale;

class EventsPool
{
    protected static $events = array();
    public static function getEvents(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     * @param $type
     * @param $event
     */
    public static function addEvent(\Bitrix\Sale\Order $order, $type, $event)
    {
    }
    /**
     * @param Order $order
     */
    public static function resetEvents(\Bitrix\Sale\Order $order = null)
    {
    }
}