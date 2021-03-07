<?php

namespace Bitrix\Sale;

/**
 * Class Shipment
 * @package Bitrix\Sale
 */
class Shipment extends \Bitrix\Sale\Internals\CollectableEntity implements \Bitrix\Sale\IBusinessValueProvider, \IEntityMarker
{
    /** @var array ShipmentItemCollection */
    protected $shipmentItemCollection;
    /** @var  Delivery\Services\Base */
    protected $service = null;
    protected $extraServices = null;
    protected $storeId = null;
    /** @var int */
    protected $internalId = 0;
    protected static $idShipment = 0;
    /**
     * @return string|void
     */
    public static function getRegistryEntity()
    {
    }
    protected function __construct(array $fields = [])
    {
    }
    /**
     * @return int
     */
    public function getShipmentCode()
    {
    }
    /**
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @return array
     */
    public static function getCustomizableFields() : array
    {
    }
    /**
     * @param array $values
     * @return array
     */
    protected function onBeforeSetFields(array $values)
    {
    }
    /**
     * @return array
     */
    protected static function getMeaningfulFields()
    {
    }
    /**
     * @param Delivery\Services\Base $service
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function setDeliveryService(\Bitrix\Sale\Delivery\Services\Base $service)
    {
    }
    /**
     * @param ShipmentCollection $collection
     * @param Delivery\Services\Base|null $service
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectException
     */
    public static function create(\Bitrix\Sale\ShipmentCollection $collection, \Bitrix\Sale\Delivery\Services\Base $service = null)
    {
    }
    /**
     * @return string
     */
    protected static function generateXmlId()
    {
    }
    /**
     * @param array $fields
     * @return mixed
     * @throws Main\ArgumentException
     */
    private static function createShipmentObject(array $fields = array())
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @internal
     *
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public function needReservation()
    {
    }
    /**
     * @param ShipmentItem $sourceItem
     * @param $quantity
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    private function transferItem2SystemShipment(\Bitrix\Sale\ShipmentItem $sourceItem, $quantity)
    {
    }
    /**
     * @param Shipment $shipment
     *
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public static function updateReservedFlag(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param $action
     * @param ShipmentItem $shipmentItem
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\NotSupportedException
     * @throws Main\SystemException
     */
    public function onShipmentItemCollectionModify($action, \Bitrix\Sale\ShipmentItem $shipmentItem, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param $orderId
     * @return Result
     * @throws Main\ArgumentException
     * @internal
     *
     * Deletes shipment without demands.
     *
     */
    public static function deleteNoDemand($orderId)
    {
    }
    /**
     * Deletes shipment
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function delete()
    {
    }
    /**
     * @return void
     */
    protected function deleteDeliveryRequest()
    {
    }
    /**
     * Sets new value to specified field of shipment item
     *
     * @param string $name
     * @param mixed $value
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function setField($name, $value)
    {
    }
    /**
     * @param $name
     * @param $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function checkValueBeforeSet($name, $value)
    {
    }
    /**
     * @internal
     *
     * @param $name
     * @param $value
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     */
    public function setFieldNoDemand($name, $value)
    {
    }
    /**
     * @param $id
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function loadForOrder($id)
    {
    }
    /**
     * @internal
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @return void
     */
    private function checkCallingContext()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    private function add()
    {
    }
    /**
     * @return Result
     * @throws \Exception
     */
    private function update()
    {
    }
    /**
     * @return void
     */
    protected function setDeliveryRequestMarker()
    {
    }
    /**
     * @return void
     *
     * @throws Main\ArgumentException
     */
    private function callDelayedEvents()
    {
    }
    /**
     * @return void
     */
    private function callEventOnBeforeEntitySaved()
    {
    }
    /**
     * @return void
     */
    private function callEventOnEntitySaved()
    {
    }
    /**
     * @param $isNew
     * @return void
     */
    protected function onAfterSave($isNew)
    {
    }
    /**
     * @return bool|int
     */
    public function getParentOrderId()
    {
    }
    /**
     * @return Order|null
     */
    public function getOrder()
    {
    }
    /**
     * @return array|ShipmentItemCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public function getShipmentItemCollection()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function markSystem()
    {
    }
    /**
     * @internal
     *
     * @param ShipmentCollection $collection
     * @param Delivery\Services\Base|null $deliveryService
     * @return Shipment
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\SystemException
     */
    public static function createSystem(\Bitrix\Sale\ShipmentCollection $collection, \Bitrix\Sale\Delivery\Services\Base $deliveryService = null)
    {
    }
    /**
     * @return float
     */
    public function getPrice()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isCustomPrice()
    {
    }
    /**
     * @return string
     */
    public function getCurrency()
    {
    }
    /**
     * @return int
     */
    public function getDeliveryId()
    {
    }
    /**
     * @return string
     */
    public function getDeliveryName()
    {
    }
    /**
     * @param $orderId
     */
    public function setOrderId($orderId)
    {
    }
    /**
     * @return Delivery\Services\Base
     * @throws Main\ArgumentNullException
     * @throws Main\SystemException
     */
    public function getDelivery()
    {
    }
    /**
     * @return Delivery\Services\Base
     * @throws Main\ArgumentNullException
     * @throws Main\SystemException
     */
    protected function loadDeliveryService()
    {
    }
    /**
     * @return bool
     */
    public function isSystem()
    {
    }
    /** @return bool */
    public function isCanceled()
    {
    }
    /**
     * @return bool
     */
    public function isShipped()
    {
    }
    /**
     * @return Main\Type\DateTime
     */
    public function getShippedDate()
    {
    }
    /**
     * @return int
     */
    public function getShippedUserId()
    {
    }
    /**
     * @return string
     */
    public function getUnshipReason()
    {
    }
    /**
     * @return bool
     */
    public function isMarked()
    {
    }
    /**
     * @return bool
     */
    public function isReserved()
    {
    }
    /**
     * @return bool
     */
    public function isAllowDelivery()
    {
    }
    /**
     * @return bool
     */
    public function isEmpty()
    {
    }
    /**
     * @return Main\Type\DateTime
     */
    public function getAllowDeliveryDate()
    {
    }
    /**
     * @return int
     */
    public function getAllowDeliveryUserId()
    {
    }
    /**
     * @return int
     */
    public function getCompanyId()
    {
    }
    /**
     * @throws Main\ArgumentException
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
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function tryShip()
    {
    }
    /**
     * @return Result
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function tryUnship()
    {
    }
    /**
     *
     */
    public function needShip()
    {
    }
    /**
     * @return Result
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function deliver()
    {
    }
    /**
     * @return Result
     * @throws Main\NotSupportedException
     */
    public function allowDelivery()
    {
    }
    /**
     * @return Result
     * @throws Main\NotSupportedException
     */
    public function disallowDelivery()
    {
    }
    /**
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
     * @param BasketItem $basketItem
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
    public function onBasketModify($action, \Bitrix\Sale\BasketItem $basketItem, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectException
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @internal
     *
     * @param BasketItem $basketItem
     * @param null $value
     * @param null $oldValue
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    protected function syncQuantityAfterModify(\Bitrix\Sale\BasketItem $basketItem, $value = null, $oldValue = null)
    {
    }
    /**
     * @return array
     */
    public function getServiceParams()
    {
    }
    /**
     * @param array $serviceParams
     * @throws Main\NotSupportedException
     */
    public function setServiceParams(array $serviceParams)
    {
    }
    /**
     * @return null
     */
    public function getExtraServices()
    {
    }
    /**
     * @param array $extraServices
     */
    public function setExtraServices(array $extraServices)
    {
    }
    /**
     * @return Result
     */
    protected function saveExtraServices()
    {
    }
    /**
     * @return int
     */
    public function getStoreId()
    {
    }
    /**
     * @param $storeId
     */
    public function setStoreId($storeId)
    {
    }
    /**
     * @return Result
     */
    protected function saveStoreId()
    {
    }
    /**
     * @return float
     */
    public function getWeight() : float
    {
    }
    /**
     * @param float $weight
     * @return string|null
     */
    public function setWeight(float $weight)
    {
    }
    /**
     * @return Delivery\CalculationResult
     * @throws Main\NotSupportedException
     */
    public function calculateDelivery()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
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
    public function getBasketItemQuantity(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param string $name
     * @param null $oldValue
     * @param null $value
     * @throws Main\ObjectNotFoundException
     */
    protected function addChangesToHistory($name, $oldValue = null, $value = null)
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
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public function verify()
    {
    }
    /**
     * @param $id
     *
     * @return Result
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function setAccountNumber($id)
    {
    }
    /**
     * @param $mapping
     * @return Shipment|null|string
     */
    public function getBusinessValueProviderInstance($mapping)
    {
    }
    /**
     * @return int|null
     */
    public function getPersonTypeId()
    {
    }
    /**
     * @param array $parameters
     * @return Main\ORM\Query\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters)
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage $cloneEntity
     * @return Internals\CollectableEntity|Shipment|object
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @param $status
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    protected function setStatus($status)
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
     * @param $code
     * @return mixed|null
     */
    protected static function getFixMethod($code)
    {
    }
    /**
     * @param Shipment $entity
     *
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public static function fixReserveErrors(\Bitrix\Sale\Shipment $entity)
    {
    }
    /**
     * @param Shipment $entity
     *
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public static function fixShipErrors(\Bitrix\Sale\Shipment $entity)
    {
    }
    /**
     * @return array
     */
    protected static function getAutoFixRules()
    {
    }
    /**
     * @return bool
     */
    public function canMarked()
    {
    }
    /**
     * @return string
     */
    public function getMarkField()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public function isChanged()
    {
    }
    /**
     * @internal
     */
    public function clearChanged()
    {
    }
    /**
     * @return float|int
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getVatRate()
    {
    }
    /**
     * @return float
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     */
    public function getVatSum()
    {
    }
    /**
     * @param array $data
     * @return Entity\AddResult
     * @throws \Exception
     */
    protected function addInternal(array $data)
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return Entity\UpdateResult
     * @throws \Exception
     */
    protected function updateInternal($primary, array $data)
    {
    }
    /**
     * @param $primary
     * @return Entity\DeleteResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    protected static function deleteInternal($primary)
    {
    }
    /**
     * @return array
     */
    protected static function getFieldsMap()
    {
    }
    /**
     * @return null
     */
    public static function getUfId()
    {
    }
    /**
     * @param $value
     * @param bool $custom
     *
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function setBasePriceDelivery($value, $custom = false)
    {
    }
    /**
     * @deprecated Use getOrder instead
     *
     * @return Order|null
     */
    public function getParentOrder()
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