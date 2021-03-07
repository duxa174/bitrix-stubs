<?php

namespace Bitrix\Sale\Internals;

class Product2ProductTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     *
     * Remove old products from b_sale_product2product table.
     * Used in agents.
     *
     * @param int $liveTime in days
     *
     * @return string
     */
    public static function deleteOldProducts($liveTime = 10)
    {
    }
    /**
     * Refresh order statistic
     *
     * @param $liveTime.			Counting statistic period in days
     *
     * @return Main\DB\Result
     */
    public static function refreshProductStatistic($liveTime = 10)
    {
    }
    /**
     * Add products from order or updates existing.
     *
     * @param $orderId
     *
     * @return void
     */
    public static function addProductsFromOrder($orderId = 0)
    {
    }
    /**
     * Add products from order by an agent
     *
     * @param int $limit			Count of orders is added per hit.
     * @return string
     */
    public static function addProductsByAgent($limit = 100)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleOrderAddEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleStatusOrderHandlerEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleDeliveryOrderHandlerEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleDeductOrderHandlerEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleCancelOrderHandlerEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSalePayOrderHandlerEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Executes when order status added.
     *
     * @param $orderId
     * @return void
     */
    public static function onSaleOrderAdd($orderId)
    {
    }
    /**
     * Executes when order status has changed.
     *
     * @param $orderId
     * @param $status
     * @return void
     */
    public static function onSaleStatusOrderHandler($orderId, $status)
    {
    }
    /**
     * Executes when order status Delivered.
     *
     * @param $orderId
     * @param $status
     * @return void
     */
    public static function onSaleDeliveryOrderHandler($orderId, $status)
    {
    }
    /**
     * Executes when order status has deducted.
     *
     * @param $orderId
     * @param $status
     * @return void
     */
    public static function onSaleDeductOrderHandler($orderId, $status)
    {
    }
    /**
     * Executes when order status has canceled.
     *
     * @param $orderId
     * @param $status
     * @return void
     */
    public static function onSaleCancelOrderHandler($orderId, $status)
    {
    }
    /**
     * Executes when order status has canceled.
     *
     * @param $orderId
     * @param $status
     * @return void
     */
    public static function onSalePayOrderHandler($orderId, $status)
    {
    }
    /**
     * Add order id in order processing table.
     *
     * @param $orderId
     * @param $statusName.		Handler status name.
     * @return void
     */
    protected static function addOrderProcessing($orderId, $statusName)
    {
    }
}