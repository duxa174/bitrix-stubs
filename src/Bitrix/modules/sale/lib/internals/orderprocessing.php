<?php

namespace Bitrix\Sale\Internals;

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
     * Mark orders as processed
     *
     * @param array $orderIds
     */
    public static function markProductsAddedByList(array $orderIds)
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
     * @param $orderId
     *
     * @return bool
     */
    public static function deleteByOrderId($orderId)
    {
    }
    /**
     * Clear table
     *
     */
    public static function clear()
    {
    }
}