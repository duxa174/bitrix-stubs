<?php

namespace Bitrix\Sale;

/**
 * Class Order
 * @package Bitrix\Sale
 */
class Order extends \Bitrix\Sale\OrderBase implements \IShipmentOrder, \IPaymentOrder, \Bitrix\Sale\IBusinessValueProvider
{
    /** @var ShipmentCollection */
    protected $shipmentCollection;
    /** @var PaymentCollection */
    protected $paymentCollection;
    /** @var TradeBindingCollection */
    protected $tradeBindingCollection;
    /** @var array $printedChecks */
    protected $printedChecks = array();
    const SALE_ORDER_LOCK_STATUS_RED = 'red';
    const SALE_ORDER_LOCK_STATUS_GREEN = 'green';
    const SALE_ORDER_LOCK_STATUS_YELLOW = 'yellow';
    /**
     * @return string
     */
    public static function getRegistryType()
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
     */
    public static function getUfId()
    {
    }
    /**
     * Return printed check list
     *
     * @return array
     * @throws Main\ArgumentException
     */
    public function getPrintedChecks()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     */
    protected function loadPrintedChecks()
    {
    }
    /**
     * Add printed check to order
     *
     * @param $check
     */
    public function addPrintedCheck($check)
    {
    }
    /**
     * Modify shipment collection.
     *
     * @param $action
     * @param Shipment $shipment
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
    public function onShipmentCollectionModify($action, \Bitrix\Sale\Shipment $shipment, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param array $select
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function resetData($select = array('PRICE'))
    {
    }
    /**
     * @param BasketBase $basket
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function setBasket(\Bitrix\Sale\BasketBase $basket)
    {
    }
    /**
     * @param BasketBase $basket
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function appendBasket(\Bitrix\Sale\BasketBase $basket)
    {
    }
    /**
     * Return shipment collection
     *
     * @return ShipmentCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public function getShipmentCollection()
    {
    }
    /**
     * Return trade binding collection
     *
     * @return TradeBindingCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
     */
    public function getTradeBindingCollection()
    {
    }
    /**
     * Return payment collection
     *
     * @return PaymentCollection
     */
    public function getPaymentCollection()
    {
    }
    /**
     * Load shipment collection
     *
     * @return ShipmentCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public function loadShipmentCollection()
    {
    }
    /**
     * Load payment collection
     *
     * @return PaymentCollection
     * @throws Main\ArgumentException
     */
    public function loadPaymentCollection()
    {
    }
    /**
     * @return TradeBindingCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
     */
    protected function loadTradeBindingCollection()
    {
    }
    /**
     * @param $orderId
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectNotFoundException
     */
    protected static function deleteEntitiesNoDemand($orderId)
    {
    }
    /**
     * @param OrderBase $order
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    protected static function deleteEntities(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @return bool
     */
    public function isShipped()
    {
    }
    /**
     * @param $action
     * @param Payment $payment
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function onPaymentCollectionModify($action, \Bitrix\Sale\Payment $payment, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param string $name
     * @param float|int|mixed|string $oldValue
     * @param float|int|mixed|string $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @param $name
     * @param $oldValue
     * @param $value
     * @return Result
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    protected function onOrderModify($name, $oldValue, $value)
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
     * Modify basket.
     *
     * @param string $action
     * @param BasketItemBase $basketItem
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function onBasketModify($action, \Bitrix\Sale\BasketItemBase $basketItem, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @return Result
     */
    public function onBeforeBasketRefresh()
    {
    }
    /**
     * @return Result
     */
    public function onAfterBasketRefresh()
    {
    }
    /**
     * Sync.
     *
     * @param Payment|null $payment
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    private function syncOrderAndPayments(\Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @param Payment $payment
     * @return Result
     */
    private function syncOrderPaymentPaid(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @return Result
     */
    private function syncOrderPaid()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    protected function getStatusOnPaid()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function getStatusOnPartialPaid()
    {
    }
    /**
     * @param null $oldPaid
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    private function onAfterSyncPaid($oldPaid = null)
    {
    }
    /**
     * @param $select
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    protected function refreshInternal()
    {
    }
    /**
     * @internal
     *
     * @param array $data
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     */
    public function applyDiscount(array $data)
    {
    }
    /**
     * Lock order.
     *
     * @param int $id			Order id.
     * @return Entity\UpdateResult|Result
     * @throws \Exception
     */
    public static function lock($id)
    {
    }
    /**
     * Unlock order.
     *
     * @param int $id			Order id.
     * @return Entity\UpdateResult|Result
     * @throws Main\ArgumentNullException
     * @throws \Exception
     */
    public static function unlock($id)
    {
    }
    /**
     * Return TRUE if order is locked.
     *
     * @param int $id
     * @return bool
     */
    public static function isLocked($id)
    {
    }
    /**
     * Return order locked status.
     *
     * @param int $id		Order id.
     * @return Result
     * @throws Main\ArgumentException
     */
    public static function getLockedStatus($id)
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
     * @param $mapping
     * @return Order|null|string
     */
    public function getBusinessValueProviderInstance($mapping)
    {
    }
    /**
     * @param array $parameters
     *
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param \SplObjectStorage $cloneEntity
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    protected function cloneEntities(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return bool
     */
    public function isChanged()
    {
    }
    /**
     * @internal
     * @return void
     */
    public function clearChanged()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public function getDeliveryIdList()
    {
    }
    /**
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public function getPaySystemIdList()
    {
    }
    /**
     * @return array
     */
    protected function calculateVat()
    {
    }
    /**
     * @return Result
     */
    protected function saveEntities()
    {
    }
    /**
     * @return float
     */
    protected function calculatePrice()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\SystemException
     * @throws \Exception
     */
    protected function onBeforeSave()
    {
    }
    /**
     * @return Result
     */
    protected function onAfterSave()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     */
    protected function add()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     */
    protected function update()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @return void
     */
    protected function callEventOnSaleOrderEntitySaved()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @return void
     */
    protected function callEventOnSaleOrderSaved()
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
    protected static function updateInternal($primary, array $data)
    {
    }
    /**
     * @param $primary
     * @return Entity\DeleteResult
     * @throws \Exception
     */
    protected static function deleteInternal($primary)
    {
    }
    /**
     * @param $orderId
     * @throws Main\ArgumentException
     */
    protected static function deleteExternalEntities($orderId)
    {
    }
    /**
     * Save field modify to history.
     *
     * @param string $name				Field name.
     * @param null|string $oldValue		Old value.
     * @param null|string $value		New value.
     */
    protected function addChangesToHistory($name, $oldValue = null, $value = null)
    {
    }
    /**
     * @deprecated
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public function getDeliverySystemId()
    {
    }
    /**
     * @deprecated
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public function getPaymentSystemId()
    {
    }
}