<?php

namespace Bitrix\Sale;

class ShipmentItem extends \Bitrix\Sale\Internals\CollectableEntity implements \IEntityMarker
{
    /** @var BasketItem */
    protected $basketItem;
    /** @var  ShipmentItemStoreCollection */
    protected $shipmentItemStoreCollection;
    /** @var array */
    protected static $errors = [];
    /**
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @return array
     */
    protected static function getMeaningfulFields()
    {
    }
    /**
     * Internal method, use ShipmentItemCollection::createItem()
     *
     * @internal
     * @see ShipmentItemCollection::createItem()
     *
     * @param ShipmentItemCollection $collection
     * @param BasketItem $basketItem
     * @return ShipmentItem
     */
    public static function create(\Bitrix\Sale\ShipmentItemCollection $collection, \Bitrix\Sale\BasketItem $basketItem = null)
    {
    }
    /**
     * @return string
     */
    protected static function generateXmlId()
    {
    }
    /**
     * Deletes shipment item
     *
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function delete()
    {
    }
    /**
     * @return float
     */
    public function getQuantity()
    {
    }
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     *
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function checkMarkingCodeOnDeducted()
    {
    }
    /**
     * @param float $quantity
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function setQuantity($quantity)
    {
    }
    /**
     * @return float
     */
    public function getReservedQuantity()
    {
    }
    /**
     * @return int
     */
    public function getBasketId()
    {
    }
    /**
     * @return int
     * @throws Main\SystemException
     */
    public function getBasketCode()
    {
    }
    /**
     * @return int
     * @throws Main\SystemException
     */
    public function getProductId()
    {
    }
    /**
     * @internal
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectException
     * @throws Main\ObjectNotFoundException
     */
    public function save()
    {
    }
    /**
     * @throws Main\ObjectNotFoundException
     */
    private function checkCallingContext()
    {
    }
    private function getParentShipmentId()
    {
    }
    /**
     * @param $id
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function loadForShipment($id)
    {
    }
    /**
     * @param $itemData
     * @return ShipmentItem
     */
    private static function createShipmentItemObject(array $itemData = [])
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
    public static function getRegistryEntity()
    {
    }
    /**
     * @return Internals\CollectableEntity|bool
     * @throws Main\ObjectNotFoundException
     */
    protected function loadBasketItem()
    {
    }
    /**
     * @return BasketItem
     */
    public function getBasketItem()
    {
    }
    /**
     * @return ShipmentItemStoreCollection
     */
    public function getShipmentItemStoreCollection()
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
     * @return Result
     * @throws Main\NotSupportedException
     */
    protected function calculateDelivery()
    {
    }
    /**
     * @param string $name
     * @param null|string $oldValue
     * @param null|string $value
     * @throws Main\ObjectNotFoundException
     */
    protected function addChangesToHistory($name, $oldValue = null, $value = null)
    {
    }
    /**
     * @return bool
     */
    public function isChanged()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function tryReserve()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function tryUnreserve()
    {
    }
    /**
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public function verify()
    {
    }
    /**
     * @param array $parameters
     *
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters)
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage $cloneEntity
     * @return Internals\CollectableEntity|ShipmentItem|object
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
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
     * @return bool
     */
    public function canAutoFixError($value)
    {
    }
    /**
     * @return array
     */
    public function getAutoFixErrorsList()
    {
    }
    /**
     * @param $code
     *
     * @return Result
     */
    public function tryFixError($code)
    {
    }
    public function canMarked()
    {
    }
    public function getMarkField()
    {
    }
    /**
     * @internal
     */
    public function clearChanged()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     */
    public function needReserve()
    {
    }
    /**
     * @return int
     * @throws Main\ObjectNotFoundException
     */
    public function getNeedReserveQuantity()
    {
    }
    /**
     * @param array $data
     * @return Main\ORM\Data\AddResult
     * @throws \Exception
     */
    protected function addInternal(array $data)
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return Main\ORM\Data\UpdateResult
     * @throws \Exception
     */
    protected function updateInternal($primary, array $data)
    {
    }
    /**
     * @return array
     */
    protected static function getFieldsMap()
    {
    }
    /**
     * @return null|string
     * @internal
     *
     */
    public static function getEntityEventName()
    {
    }
}