<?php

namespace Bitrix\Sale;

/**
 * Class ShipmentCollection
 * @package Bitrix\Sale
 */
class ShipmentCollection extends \Bitrix\Sale\Internals\EntityCollection
{
    /** @var Order */
    protected $order;
    /**
     * Getting the parent entity
     * @return Order - order entity
     */
    protected function getEntityParent()
    {
    }
    /**
     *
     * Deletes all shipments and creates system shipment containing the whole basket
     *
     * @internal
     *
     * @return Result
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function resetCollection()
    {
    }
    /**
     * @return array|Internals\CollectionFilterIterator
     */
    protected function getDeletableItems()
    {
    }
    /**
     * Create new shipment
     *
     * @param Delivery\Services\Base|null $delivery
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectNotFoundException
     */
    public function createItem(\Bitrix\Sale\Delivery\Services\Base $delivery = null)
    {
    }
    /**
     * Adding shipping to the collection
     *
     * @param Internals\CollectableEntity $shipment
     * @return Internals\CollectableEntity|Shipment
     * @throws Main\ObjectNotFoundException
     */
    protected function addItem(\Bitrix\Sale\Internals\CollectableEntity $shipment)
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @return mixed|void
     * @throws Main\ArgumentOutOfRangeException
     */
    public function deleteItem($index)
    {
    }
    /**
     * Processing changes the essence of the shipment fields
     *
     * @param Internals\CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectException
     * @throws Main\ObjectNotFoundException
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * Getting entity of the order
     *
     * @return Order
     */
    public function getOrder()
    {
    }
    /**
     * Loaded from the database collection shipments Order
     *
     * @param Order $order
     * @return ShipmentCollection
     * @throws Main\ArgumentNullException
     */
    public static function load(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @return ShipmentCollection
     */
    private static function createShipmentCollectionObject()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * Getting the system shipment
     *
     * @return Shipment
     */
    public function getSystemShipment()
    {
    }
    /**
     * Check whether there is a system collection of shipping
     *
     * @return bool
     */
    public function isExistsSystemShipment()
    {
    }
    /**
     * Saving data collection
     *
     * @return Entity\Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public function save()
    {
    }
    /**
     * The attachment order to the collection
     *
     * @param OrderBase $order
     */
    public function setOrder(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @internal
     * @param Shipment $parentShipment
     * @param Shipment $childShipment
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     */
    public function cloneShipment(\Bitrix\Sale\Shipment $parentShipment, \Bitrix\Sale\Shipment $childShipment)
    {
    }
    /**
     * Fields that are cloned into the system from a conventional shipping
     *
     * @return array
     */
    protected static function getClonedFields()
    {
    }
    /**
     * Is the entire collection shipped
     *
     * @return bool
     */
    public function isShipped()
    {
    }
    /**
     * Is the entire collection shipped
     *
     * @return bool
     */
    public function hasShipped()
    {
    }
    /**
     * Is the entire collection of marked
     *
     * @return bool
     */
    public function isMarked()
    {
    }
    /**
     * Is the entire collection reserved
     *
     * @return bool
     */
    public function isReserved()
    {
    }
    /**
     * Is the entire collection allowed for shipment
     *
     * @return bool
     */
    public function isAllowDelivery()
    {
    }
    /**
     * @return bool
     */
    public function hasAllowDelivery()
    {
    }
    /**
     * Is the a system shipped empty
     *
     * @return bool
     */
    public function isEmptySystemShipment()
    {
    }
    /**
     * Resolution fact shipment to shipment collection
     *
     * @return Result
     */
    public function allowDelivery()
    {
    }
    /**
     * Prohibition upon shipment to shipment collection
     * @return Result
     */
    public function disallowDelivery()
    {
    }
    /**
     * Trying to reserve the contents of the shipment collection
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public function tryReserve()
    {
    }
    /**
     * Trying to reserve the contents of the shipment collection
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function tryUnreserve()
    {
    }
    /**
     * @internal
     *
     * @param BasketItem $basketItem
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function onBeforeBasketItemDelete(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param $action
     * @param BasketItemBase $basketItem
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function onBasketModify($action, \Bitrix\Sale\BasketItemBase $basketItem, $name = null, $oldValue = null, $value = null) : \Bitrix\Sale\Result
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return Shipment|null
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    private function getItemForAutoEdit(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    private function isAllowAutoEdit(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @param $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    private function checkDistributedQuantity(\Bitrix\Sale\BasketItem $basketItem, $value)
    {
    }
    /**
     * @param $name
     * @param $oldValue
     * @param $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function onOrderModify($name, $oldValue, $value)
    {
    }
    /**
     * @return Result
     * @throws Main\NotSupportedException
     */
    public function refreshData()
    {
    }
    /**
     * @return Result
     */
    public function calculateDelivery()
    {
    }
    /**
     *
     */
    public function resetData()
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return float|int
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public function getBasketItemDistributedQuantity(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @param bool|false $includeSystemShipment
     *
     * @return bool
     * @throws Main\ObjectNotFoundException
     */
    public function isExistBasketItem(\Bitrix\Sale\BasketItem $basketItem, $includeSystemShipment = false)
    {
    }
    /**
     * @return float
     */
    public function getBasePriceDelivery()
    {
    }
    /**
     * @return float
     */
    public function getPriceDelivery()
    {
    }
    /**
     * @param $itemCode
     * @return Shipment|null
     */
    public function getItemByShipmentCode($itemCode)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function verify()
    {
    }
    /**
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return ShipmentCollection
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @param $value
     *
     * @return string
     */
    public function getErrorEntity($value)
    {
    }
    /**
     * @param $value
     *
     * @return string
     */
    public function canAutoFixError($value)
    {
    }
    /**
     * @param ShipmentCollection $collection
     *
     * @return Result
     */
    public function updateReservedFlag(\Bitrix\Sale\ShipmentCollection $collection)
    {
    }
    /**
     * @return string
     */
    private static function getItemCollectionClassName()
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $primary
     * @return Entity\DeleteResult
     */
    protected function deleteInternal($primary)
    {
    }
    /**
     * @param $shipmentId
     */
    protected function deleteExtraServiceInternal($shipmentId)
    {
    }
    /**
     * @return Internals\CollectionFilterIterator
     */
    public function getNotSystemItems()
    {
    }
}