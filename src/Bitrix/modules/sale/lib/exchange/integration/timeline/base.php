<?php

namespace Bitrix\Sale\Exchange\Integration\Timeline;

class Base
{
    protected static function onReceive($orderId, array $settings)
    {
    }
    protected static function isSync(\Bitrix\Sale\Order $order)
    {
    }
}