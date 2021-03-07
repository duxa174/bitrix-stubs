<?php

namespace Bitrix\Sale\Archive\Process;

/**
 * @package Bitrix\Sale\Archive\Process
 */
class OrderArchiveItem
{
    private $order = null;
    private $orderDataFields = [];
    private $basketDataFields = [];
    /**
     * OrderArchiveItem constructor.
     *
     * @param Sale\Order $order
     */
    public function __construct(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @param $name
     * @param array $value
     */
    public function addOrderDataField($name, array $value)
    {
    }
    /**
     * @param array $value
     */
    public function addBasketDataFields(array $value)
    {
    }
    /**
     * @return Main\Result
     */
    public function archive()
    {
    }
    /**
     * @param Sale\Order $order
     *
     * @return Main\Result
     */
    private function callEventOnBeforeOrderArchived(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @throws Main\ArgumentException
     */
    private function tryUnreserveShipments()
    {
    }
    /**
     * @return Main\Entity\AddResult
     */
    private function saveOrderArchive()
    {
    }
    private function prepareEncodeFields(array $fields)
    {
    }
    /**
     * @param array $item
     * @param $archivedOrderId
     *
     * @return Main\Entity\AddResult
     */
    private function saveBasketItemArchive(array $item, $archivedOrderId)
    {
    }
    private function getOrderDataField($name)
    {
    }
}