<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class EmptyDeliveryService
 * @package Bitrix\Sale\Delivery\Services
 */
class EmptyDeliveryService extends \Bitrix\Sale\Delivery\Services\Configurable
{
    const CACHE_ID = 'BITRIX_SALE_EMPTY_DELIVERY_SRV_ID';
    const TTL = 31536000;
    /**
     * @return string Class title.
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return string Class, service description.
     */
    public static function getClassDescription()
    {
    }
    /**
     * @return int
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getEmptyDeliveryServiceId()
    {
    }
    /**
     * @return int
     */
    private static function create()
    {
    }
    public static function isHandlerCompatible()
    {
    }
}