<?php

namespace Bitrix\Sale\Compatible;

/**
 * Class OrderCompatibility
 * @package Bitrix\Sale\Compatible
 */
class OrderCompatibility extends \Bitrix\Sale\Compatible\Internals\EntityCompatibility
{
    /** @var null|Sale\Order */
    protected $order = null;
    /** @var array  */
    protected $requestFields = null;
    /** @var null|BasketCompatibility */
    protected $basket = null;
    protected $externalPrice = null;
    const ORDER_COMPAT_ACTION_ADD = 'ADD';
    const ORDER_COMPAT_ACTION_UPDATE = 'UPDATE';
    const ORDER_COMPAT_ACTION_SAVE = 'SAVE';
    protected $runtimeFields = array();
    protected $propertyRuntimeList = array();
    /**
     * @return string
     */
    protected static function getRegistryType()
    {
    }
    /**
     * @return Main\Entity\Base
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected static function getEntity()
    {
    }
    /**
     * @return string
     */
    protected static function getBasketCompatibilityClassName()
    {
    }
    /**
     * OrderCompatibility constructor.
     * @param array $fields
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function __construct(array $fields = array())
    {
    }
    /**
     * @return Sale\Order|null
     */
    public function getOrder()
    {
    }
    /**
     * @return array
     */
    public function getRequestFields()
    {
    }
    /**
     * @param BasketCompatibility $basketCompatibility
     */
    public function setBasketCompatibility(\Bitrix\Sale\Compatible\BasketCompatibility $basketCompatibility)
    {
    }
    /**
     * @param array $fields
     * @return static
     */
    public static function create(array $fields)
    {
    }
    /**
     * Filling the order data from request
     *
     * @internal
     *
     * @param Sale\Order $order		Entity order.
     * @param array $fields			An array of request data.
     *
     * @return Sale\Result
     */
    public static function fillOrderFromRequest(\Bitrix\Sale\Order $order, array $fields)
    {
    }
    /**
     * Filling the shipment collection  data from request
     *
     * @internal
     *
     * @param Sale\ShipmentCollection $shipmentCollection	Entity shipment collection.
     * @param array $fields									An array of request data.
     * @param Sale\ShipmentCollection $shipmentCollection
     * @param array $fields
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function fillShipmentCollectionFromRequest(\Bitrix\Sale\ShipmentCollection $shipmentCollection, array $fields)
    {
    }
    /**
     * @param Sale\Order $order
     * @param Sale\Internals\CollectableEntity $entity
     * @param array $requestFields
     * @param array $allowFields
     */
    private static function fillOrderFieldsFromEntity(\Bitrix\Sale\Order $order, \Bitrix\Sale\Internals\CollectableEntity $entity, array $requestFields, array $allowFields)
    {
    }
    /**
     * @internal
     * @param Sale\ShipmentCollection $shipmentCollection
     * @param int $deliveryId
     * @param array $requestFields
     * @return null|Sale\Shipment
     */
    public static function createShipmentFromRequest(\Bitrix\Sale\ShipmentCollection $shipmentCollection, $deliveryId, array $requestFields)
    {
    }
    /**
     * Request processing for shipments
     *
     * @internal
     *
     * @param Sale\ShipmentCollection $shipmentCollection		Entity shipment collection.
     * @param array $fields										An array of request data.
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public static function syncShipmentCollectionFromRequest(\Bitrix\Sale\ShipmentCollection $shipmentCollection, array $fields)
    {
    }
    /**
     * @internal
     * @param array $fields
     *
     * @return Sale\Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function fillPaymentCollectionFromRequest(array $fields)
    {
    }
    private static function getDefaultPaySystemId($personTypeId)
    {
    }
    /**
     * @internal
     *
     * @param Sale\Tax $tax
     * @param array $fields
     * @return Sale\Result
     */
    public function fillTaxFromRequest(\Bitrix\Sale\Tax $tax, array $fields)
    {
    }
    /**
     * @param $id
     * @param bool $value
     * @param array $storeData
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\NotSupportedException
     */
    public static function shipment($id, $value, array $storeData = array())
    {
    }
    /**
     * @internal
     *
     * @param Sale\ShipmentItemCollection $shipmentItemCollection
     * @param array $storeData
     * @param Sale\Basket $basket
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public static function fillShipmentItemCollectionFromRequest(\Bitrix\Sale\ShipmentItemCollection $shipmentItemCollection, array $storeData, \Bitrix\Sale\Basket $basket = null)
    {
    }
    /**
     * @param $id
     * @param bool $value
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\NotSupportedException
     */
    public static function allowDelivery($id, $value)
    {
    }
    /**
     * @param array $fields
     *
     * @return Sale\Result
     */
    public static function add(array $fields)
    {
    }
    /**
     * @param $id
     * @param array $fields
     * @param bool $dateUpdate
     *
     * @return Sale\Result
     */
    public static function update($id, array $fields, $dateUpdate = false)
    {
    }
    /**
     * @internal
     * @param string $action
     * @param array $fields
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public static function modifyOrder($action, array $fields)
    {
    }
    /**
     * @param $orderId
     * @param $value
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function reserve($orderId, $value)
    {
    }
    /**
     * @param $orderId
     * @param array $values
     * @param bool $withdraw
     * @param bool $pay
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function pay($orderId, array $values, $withdraw = false, $pay = false)
    {
    }
    /**
     * Paid from internal account
     *
     * @param Sale\Order $order 	Entity of the order.
     * @param bool $pay 			Flag making donations to internal account.
     * @param null $paidFormUserBudget
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\InvalidOperationException
     */
    public static function payFromBudget(\Bitrix\Sale\Order $order, $pay, $paidFormUserBudget = null)
    {
    }
    /**
     * Cancel order
     *
     * @param int $orderId		Order ID.
     * @param string $value		The cancel key(Y/N).
     * @param bool|string $comment	cancel reason
     * @return Sale\Result
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function cancel($orderId, $value, $comment = false)
    {
    }
    /**
     * Delete the order
     * @param int $id		Order ID.
     * @return Sale\Result
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function delete($id)
    {
    }
    /**
     * @param float $needSum
     * @param int $userId
     * @param string $currency
     * @param bool $fullPay
     * @return bool
     */
    public static function canPayWithUserBudget($needSum, $userId, $currency, $fullPay = true)
    {
    }
    /**
     * @param Sale\ShipmentCollection $shipmentCollection
     *
     * @return Sale\Shipment
     * @throws Main\ArgumentNullException
     */
    public static function createShipmentFromShipmentSystem(\Bitrix\Sale\ShipmentCollection $shipmentCollection)
    {
    }
    /**
     * @internal
     *
     * @param Sale\ShipmentCollection $shipmentCollection
     * @param $deliveryId
     * @return Sale\Shipment|bool
     */
    public static function getShipmentByDeliveryId(\Bitrix\Sale\ShipmentCollection $shipmentCollection, $deliveryId)
    {
    }
    /**
     * @param Sale\Order $order
     */
    protected static function transformationLocation(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param $id
     *
     * @return CDBResult|int
     * @throws Main\ArgumentNullException
     */
    public static function getById($id)
    {
    }
    /**
     * @internal 
     * @return array
     */
    public static function getAliasFields()
    {
    }
    /**
     * @return array
     */
    protected static function getAliasPaymentFields()
    {
    }
    /**
     * @return array
     */
    protected static function getAliasShipmentFields()
    {
    }
    /**
     * @return array
     */
    protected static function getAliasBasketFields()
    {
    }
    /**
     * @return array
     */
    protected static function getSelectFields()
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @return array
     */
    protected static function getShipmentClearFields()
    {
    }
    /**
     * @return array
     */
    protected static function getPaymentClearFields()
    {
    }
    /**
     * @return array
     */
    protected static function getPaymentAvailableFields()
    {
    }
    /**
     * @return array
     */
    protected static function getShipmentAvailableFields()
    {
    }
    protected function getWhiteListFields()
    {
    }
    /**
     * @param array $fields
     * @param array $clearFields
     *
     * @return array
     */
    protected static function clearAvailableFields(array $fields, array $clearFields = array())
    {
    }
    /**
     * @return array
     */
    protected static function getFieldsFromOtherEntities()
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getOrderDateFields()
    {
    }
    /**
     * @return array
     */
    protected static function getShipmentFieldsToConvert()
    {
    }
    /**
     * @return array
     */
    protected static function getPaymentFieldsToConvert()
    {
    }
    /**
     * @return array
     */
    protected static function getEntityDateFields(\Bitrix\Sale\Internals\CollectableEntity $entity)
    {
    }
    /**
     * @return array
     */
    protected static function getPaymentDateFields()
    {
    }
    /**
     * @return array
     */
    protected static function getPaymentReplaceFields()
    {
    }
    /**
     * @return array
     */
    protected static function getOrderReplaceFields()
    {
    }
    /**
     * @internal
     *
     * @param Sale\Basket $basket
     * @param array $requestFields
     *
     * @return bool
     */
    public function resetOrderPrice(\Bitrix\Sale\Basket $basket, array $requestFields)
    {
    }
    /**
     * @param Sale\Order $order
     *
     * @return array
     */
    public static function getOrderFields(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @internal
     * @param Sale\Order $order
     * @return array
     */
    public static function convertOrderToArray(\Bitrix\Sale\Order $order)
    {
    }
    public function isExistPrice()
    {
    }
    /**
     * @param $key
     *
     * @return null|string
     */
    public function parseField($key)
    {
    }
    /**
     * @param int $index
     */
    protected function addPropertyRuntime($index)
    {
    }
    protected function getPropertyRuntimeName($index)
    {
    }
    /**
     * @param $key
     *
     * @return null|string
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function addBasketRuntime($key)
    {
    }
    protected static function getDefaultFuserId()
    {
    }
}
class OrderFetchAdapter implements \Bitrix\Sale\Compatible\FetchAdapter
{
    protected static function getMoneyFields()
    {
    }
    /**
     * @param array $row
     *
     * @return array
     */
    public function adapt(array $row)
    {
    }
    /**
     * @param array $data
     *
     * @return array
     */
    public static function convertRowData(array $data)
    {
    }
}