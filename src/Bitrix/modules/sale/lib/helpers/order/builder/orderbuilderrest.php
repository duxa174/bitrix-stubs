<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

/**
 * Class OrderBuilderRestSale
 * @package Bitrix\Sale\Helpers\Order\Builder
 * @internal
 */
class OrderBuilderRest extends \Bitrix\Sale\Helpers\Order\Builder\OrderBuilder
{
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\SettingsContainer $settings)
    {
    }
    protected function prepareFields(array $fields)
    {
    }
    protected function createEmptyPayment()
    {
    }
    protected function createEmptyShipment()
    {
    }
    protected function prepareFieldsStatusId($isNew, $item, $defaultFields)
    {
    }
    protected function removeShipmentItems(\Bitrix\Sale\Shipment $shipment, $products, $idsFromForm)
    {
    }
    protected function prepareDataForSetFields(\Bitrix\Sale\Shipment $shipment, $items)
    {
    }
    protected function modifyQuantityShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, array $params)
    {
    }
    private function getQuantityBasketItemFromShipmentCollection(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    protected function setQuantityShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, $value, $oldValue)
    {
    }
    public function synchronizeQuantityShipmentItems(\Bitrix\Sale\ShipmentItem $shipmentItem, $needQuantity)
    {
    }
    public function setProperties()
    {
    }
    public function setUser()
    {
    }
    public function setDiscounts()
    {
    }
    protected function removePropertyValues()
    {
    }
    protected function getSettableOrderFields()
    {
    }
    protected function checkDeliveryRestricted($shipment, $deliveryService, $shipmentFields)
    {
    }
    public function buildEntityShipments(array $fields)
    {
    }
    public function buildEntityPayments(array $fields)
    {
    }
    public function buildEntityBasket(array $fields)
    {
    }
    public function buildEntityOrder(array $fields)
    {
    }
    public function buildEntityProperties(array $fields)
    {
    }
}