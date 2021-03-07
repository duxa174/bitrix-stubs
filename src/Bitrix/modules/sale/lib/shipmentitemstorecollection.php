<?php

namespace Bitrix\Sale;

/**
 * Class ShipmentItemStoreCollection
 * @package Bitrix\Sale
 */
class ShipmentItemStoreCollection extends \Bitrix\Sale\Internals\EntityCollection
{
    /** @var  ShipmentItem */
    private $shipmentItem;
    /**
     * @return ShipmentItem
     */
    protected function getEntityParent()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    private static function createShipmentItemStoreCollectionObject()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param ShipmentItem $shipmentItem
     * @return ShipmentItemStoreCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function load(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return ShipmentItemStore
     * @throws Main\ArgumentNullException
     */
    public function createItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param $basketCode
     * @return float|int
     */
    public function getQuantityByBasketCode($basketCode)
    {
    }
    /**
     * @return ShipmentItem
     */
    public function getShipmentItem()
    {
    }
    /**
     * @param $action
     * @param ShipmentItem $shipmentItem
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function onShipmentItemModify($action, \Bitrix\Sale\ShipmentItem $shipmentItem, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param ShipmentItem $shipmentItem
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function syncQuantityAfterModify(\Bitrix\Sale\ShipmentItem $shipmentItem, $oldValue = null, $value = null)
    {
    }
    /**
     * @param Internals\CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws \Exception
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param Internals\CollectableEntity $item
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\SystemException
     */
    public function checkAvailableQuantity(\Bitrix\Sale\Internals\CollectableEntity $item)
    {
    }
    /**
     * @return Main\Entity\Result
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
     * @return array
     */
    protected function getOriginalItemValues() : array
    {
    }
    /**
     * @param array $itemValues
     */
    protected function callEventOnBeforeSaleShipmentItemStoreDeleted(array $itemValues)
    {
    }
    /**
     * @param array $itemValues
     */
    protected function callEventOnSaleShipmentItemStoreDeleted(array $itemValues)
    {
    }
    /**
     * @param array $values
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    public function setBarcodeQuantityFromArray(array $values)
    {
    }
    /**
     * @param array $values
     * @return array
     */
    private function getBarcodeListFromArray(array $values)
    {
    }
    /**
     * @return array
     */
    public function getAllBarcodeList()
    {
    }
    /**
     * @param $barcode
     * @return ShipmentItemStore|null
     */
    public function getItemByBarcode($barcode)
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage $cloneEntity
     * @return Internals\EntityCollection|ShipmentItemStoreCollection|object
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
     * @param array $parameters
     * @return Main\ORM\Query\Result|Internals\EO_ShipmentItemStore_Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $primary
     * @return Main\ORM\Data\DeleteResult
     * @throws \Exception
     */
    protected function deleteInternal($primary)
    {
    }
}