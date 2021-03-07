<?php

namespace Bitrix\Sale;

class OrderProcessingTable extends \Bitrix\Main\Entity\DataManager
{
    protected $orderProcessedCache = array();
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * Wether order was processed
     *
     * @param int $orderId
     *
     * @return bool
     */
    public static function hasAddedProducts($orderId = 0)
    {
    }
    /**
     * Wether order was processed
     *
     * @param int $orderId
     *
     * @return bool|null
     */
    public static function hasRemovedProducts($orderId = 0)
    {
    }
    /**
     * Mark order as processed
     *
     * @param int $orderId
     */
    public static function markProductsAdded($orderId = 0)
    {
    }
    /**
     * Mark order as processed
     *
     * @param int $orderId
     */
    public static function markProductsRemoved($orderId = 0)
    {
    }
    /**
     * Clear table
     *
     * @param int $orderId
     */
    public static function clear()
    {
    }
}