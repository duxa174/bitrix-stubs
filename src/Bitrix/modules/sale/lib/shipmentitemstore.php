<?php

namespace Bitrix\Sale;

/**
 * Class ShipmentItemStore
 * @package Bitrix\Sale
 */
class ShipmentItemStore extends \Bitrix\Sale\Internals\CollectableEntity implements \IEntityMarker
{
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
     * @param array $itemData
     * @return mixed
     * @throws Main\ArgumentException
     */
    private static function createShipmentItemStoreObject(array $itemData = array())
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
     * @param ShipmentItemStoreCollection $collection
     * @param BasketItem $basketItem
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function create(\Bitrix\Sale\ShipmentItemStoreCollection $collection, \Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectException
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * Deletes shipment item
     *
     * @throws Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    public function delete()
    {
    }
    /**
     * @return int
     */
    public function getBasketId() : int
    {
    }
    /**
     * @return float
     */
    public function getQuantity() : float
    {
    }
    /**
     * @return int
     */
    public function getStoreId() : int
    {
    }
    /**
     * @return string
     */
    public function getBarcode() : string
    {
    }
    /**
     * @return string
     */
    public function getMarkingCode() : string
    {
    }
    /**
     * @param $id
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function loadForShipmentItem($id)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function verify()
    {
    }
    /**
     * @return void
     */
    protected function checkCallingContext()
    {
    }
    /**
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
     * @return void
     */
    protected function callEventOnBeforeItemStoreEntitySaved()
    {
    }
    /**
     * @return void
     */
    protected function callEventOnItemStoreEntitySaved()
    {
    }
    /**
     * @param $errors
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function addErrorMessagesToHistory($errors)
    {
    }
    /**
     * @param string $name
     * @param null $oldValue
     * @param null $value
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function addChangesToHistory($name, $oldValue = null, $value = null)
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
    /**
     * @return bool
     */
    public function canMarked()
    {
    }
    /**
     * @return string|null
     */
    public function getMarkField()
    {
    }
    /**
     * @param array $data
     * @return Main\Entity\AddResult
     */
    protected function addInternal(array $data)
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return Main\Entity\UpdateResult
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