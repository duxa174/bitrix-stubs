<?php

namespace Bitrix\Sale\Helpers;

class Order
{
    /**
     * Check ability to view order is not an authorized user
     *
     * @param Sale\Order $order
     *
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function isAllowGuestView(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Return link to order for an unauthorized users.
     *
     * @param Sale\Order $order
     *
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getPublicLink(\Bitrix\Sale\Order $order)
    {
    }
}