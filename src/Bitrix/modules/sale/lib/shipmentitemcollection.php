<?php

namespace Bitrix\Sale;

class ShipmentItemCollection extends \Bitrix\Sale\Internals\EntityCollection
{
    /** @var Shipment */
    protected $shipment;
    protected $shipmentItemIndexMap = array();
    /**
     * @return Shipment
     */
    protected function getEntityParent()
    {
    }
    /**
     * @param Basket $basket
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function resetCollection(\Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return ShipmentItem|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function createItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     *
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectNotFoundException
     */
    private function addBundleToCollection(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param Internals\CollectableEntity $shipmentItem
     * @return Internals\CollectableEntity|void
     * @throws Main\NotSupportedException
     */
    protected function addItem(\Bitrix\Sale\Internals\CollectableEntity $shipmentItem)
    {
    }
    protected function createIndex()
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @return mixed|void
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     */
    public function deleteItem($index)
    {
    }
    /**
     * @param Internals\CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\NotSupportedException
     * @throws Main\SystemException
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param $itemCode
     * @return ShipmentItem|null
     */
    public function getItemByBasketCode($itemCode)
    {
    }
    /**
     * @param $itemId
     * @return ShipmentItem|null
     */
    public function getItemByBasketId($itemId)
    {
    }
    /**
     * @return Internals\CollectionFilterIterator
     */
    public function getShippableItems()
    {
    }
    /**
     * @return Internals\CollectionFilterIterator
     */
    public function getSellableItems()
    {
    }
    /**
     * @return float|int
     * @throws Main\ArgumentNullException
     */
    public function getPrice()
    {
    }
    /**
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getWeight() : float
    {
    }
    /**
     * @return Shipment
     */
    public function getShipment()
    {
    }
    /**
     * @return Main\Entity\Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     */
    public function save()
    {
    }
    /**
     * @return ShipmentItemCollection
     */
    private static function createShipmentItemCollectionObject()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @return string
     */
    private static function getItemCollectionClassName()
    {
    }
    /**
     * @param Shipment $shipment
     *
     * @return ShipmentItemCollection
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public static function load(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $primary
     * @return Main\Entity\DeleteResult
     */
    protected function deleteInternal($primary)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return Result
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
     * @param BasketItem $basketItem
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function onBasketModify($action, \Bitrix\Sale\BasketItem $basketItem, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return bool
     * @throws Main\ObjectNotFoundException
     */
    protected function isExistsBasketItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function deleteByBasketItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @return bool
     */
    public function isEmpty()
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return float|int
     * @throws Main\ArgumentNullException
     */
    public function getBasketItemQuantity(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     *
     * @return bool
     * @throws Main\ObjectNotFoundException
     */
    public function isExistBasketItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage $cloneEntity
     * @return Internals\EntityCollection|object
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
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
}