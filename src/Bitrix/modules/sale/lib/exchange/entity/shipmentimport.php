<?php

namespace Bitrix\Sale\Exchange\Entity;

/**
 * Class ShipmentImport
 * @package Bitrix\Sale\Exchange\Entity
 * @internal
 */
class ShipmentImport extends \Bitrix\Sale\Exchange\Entity\EntityImport
{
    protected static $currentSettingsStores = null;
    public function __construct($parentEntityContext = null)
    {
    }
    /**
     * @return int
     */
    public function getOwnerTypeId()
    {
    }
    /**
     * @param Internals\Entity $entity
     * @throws Main\ArgumentException
     */
    public function setEntity(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     */
    protected function checkFields(array $fields)
    {
    }
    /**
     * @return Main\Entity\AddResult|Main\Entity\UpdateResult|Sale\Result|mixed
     */
    public function save()
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function add(array $params)
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function update(array $params)
    {
    }
    /**
     * @param array|null $params
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function delete(array $params = null)
    {
    }
    /**
     * @return string
     */
    protected function getExternalFieldName()
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public function load(array $fields)
    {
    }
    /**
     * @param Order $order
     * @param Sale\BasketItem $basketItem
     * @return int
     * @throws Main\ObjectNotFoundException
     */
    private function getBasketItemQuantity(\Bitrix\Sale\Order $order, \Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param Sale\BasketBase $basket
     * @param array $item
     * @return Sale\BasketItem
     */
    protected function getBasketItemByItem(\Bitrix\Sale\BasketBase $basket, array $item)
    {
    }
    /**
     * @param Shipment $shipment
     * @param Sale\BasketBase $basket
     * @param array $params
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    private function fillShipmentItems(\Bitrix\Sale\Shipment $shipment, \Bitrix\Sale\BasketBase $basket, array $params)
    {
    }
    /**
     * @param Shipment $shipment
     * @param Sale\BasketItem $basketItem
     * @return Sale\ShipmentItem|null
     * @throws Main\ObjectNotFoundException
     */
    private static function getShipmentItem(\Bitrix\Sale\Shipment $shipment, \Bitrix\Sale\BasketItem $basketItem)
    {
    }
    protected function fillMarkingsShipmentItem(\Bitrix\Sale\ShipmentItem $item, $markings)
    {
    }
    protected function resetMarkingsShipmentItem(\Bitrix\Sale\ShipmentItem $item)
    {
    }
    private function syncRelationBarcodeMarkingsCode(\Bitrix\Sale\ShipmentItem $shipmentItem, $value)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     * @param $value
     * @param $oldValue
     * @return Sale\Result
     */
    private function fillShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, $value, $oldValue)
    {
    }
    /**
     * Decrease total product quantity existing across all shipments by the specified value.
     * Difference between the required decrease of quantity of shipped product and quantity existing in the system shipment.
     * System shipment will specify the quantity required to remove the product from the cart or update the selected shipment
     * Pass the decrease value to system shipment.
     * Thus we decrease product quantity in the shipments and add it to the system shipment.
     * We can decrease quantity for the shipments containing the product except the current shipment if it was selected and other shipments containing the product and matching selection citeria (Exchange\IShipmentCriterion implementation).
     * If we decrease quantity relative to a specific shipment, we assume the quantity relocated to the system shipment will later be added to the selected shipment.
     * @param Sale\BasketItem $basketItem
     * @param $needQuantity
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @internal
     */
    public function synchronizeQuantityShipmentItems(\Bitrix\Sale\BasketItem $basketItem, $needQuantity)
    {
    }
    /**
     * @param $fields
     * @return array
     */
    public static function getFieldsDeliveryService($fields)
    {
    }
    /**
     * @param $fields
     * @return array
     */
    public function prepareFieldsDeliveryService($fields)
    {
    }
    /**
     * @param array $fields
     */
    public function refreshData(array $fields)
    {
    }
    /**
     * @param Internals\Entity $shipment
     * @return int
     * @throws Main\ArgumentException
     */
    public static function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $shipment)
    {
    }
    public function initFields()
    {
    }
    /**
     * @param Sale\BasketItem $basket
     * @return array
     */
    protected function getAttributesItem(\Bitrix\Sale\BasketItem $basket)
    {
    }
    /**
     * @return array
     */
    protected function getFieldsItems()
    {
    }
    /**
     * @return array
     * @internal
     */
    protected function getFieldsStories()
    {
    }
    /**
     * @param Sale\IBusinessValueProvider $entity
     * @return Sale\Order
     */
    protected static function getBusinessValueOrderProvider(\Bitrix\Sale\IBusinessValueProvider $entity)
    {
    }
}