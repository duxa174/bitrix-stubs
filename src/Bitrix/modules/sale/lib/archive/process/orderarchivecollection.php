<?php

namespace Bitrix\Sale\Archive\Process;

/**
 * @package Bitrix\Sale\Archive\Process
 */
class OrderArchiveCollection extends \Bitrix\Sale\Internals\CollectionBase
{
    public function loadFromDB(array $parameters)
    {
    }
    private function addItem(\Bitrix\Sale\Archive\Process\OrderArchiveItem $item)
    {
    }
    private function fillItemsData()
    {
    }
    private function getItemById($id)
    {
    }
    private function getItemIds()
    {
    }
    /**
     * Collect order properties and sort by orders's ids
     *
     * @param $orderIds
     *
     * @return array
     */
    private function collectOrderProperties($orderIds)
    {
    }
    /**
     * Collect payments and sort by orders's ids
     *
     * @param $orderIds
     *
     * @return array
     * @throws Main\ArgumentException
     */
    private function collectPayments(array $orderIds)
    {
    }
    /**
     * Collect shipments with shipment items and sort by orders's ids
     *
     * @param $orderIds
     *
     * @return array
     * @throws Main\ArgumentException
     */
    private function collectShipments(array $orderIds)
    {
    }
    /**
     * Collect basket items with barcodes and sort by orders's ids
     *
     * @param $orderIds
     *
     * @return array
     * @throws Main\ArgumentException
     */
    private function collectBaskets(array $orderIds)
    {
    }
    /**
     * Collect discount data and sort by orders's ids
     *
     * @param $orderIds
     *
     * @return array
     */
    private function collectDiscountData(array $orderIds)
    {
    }
    /**
     * Collect coupons and sort by orders's ids
     *
     * @param $orderIds
     *
     * @return array
     */
    private function collectCoupons($orderIds)
    {
    }
    /**
     * Collect discount data and sort by orders's ids
     *
     * @param $orderIds
     *
     * @return array
     */
    private function collectRules($orderIds)
    {
    }
    /**
     * @param int $index
     *
     * @throws Main\ArgumentOutOfRangeException
     */
    public function deleteItem($index)
    {
    }
}