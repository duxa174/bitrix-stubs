<?php

namespace Bitrix\Sale;

/**
 * Class PaymentCollection
 * @package Bitrix\Sale
 */
class PaymentCollection extends \Bitrix\Sale\Internals\EntityCollection
{
    /** @var Order */
    protected $order;
    /**
     * @return Order
     */
    protected function getEntityParent()
    {
    }
    /**
     * @param Service|null $service
     * @return Payment
     */
    public function createItem(\Bitrix\Sale\PaySystem\Service $service = null)
    {
    }
    /**
     * @param Internals\CollectableEntity $payment
     * @return Result
     */
    public function addItem(\Bitrix\Sale\Internals\CollectableEntity $payment)
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @return Result
     */
    public function deleteItem($index)
    {
    }
    /**
     * @param Internals\CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     *
     * @return Result
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @return bool
     */
    public function isPaid()
    {
    }
    /**
     * @param $name
     * @param $oldValue
     * @param $value
     * @return Result
     */
    public function onOrderModify($name, $oldValue, $value)
    {
    }
    /**
     * @param Order $order
     */
    public function setOrder(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @return Order
     */
    public function getOrder()
    {
    }
    /**
     * @return PaymentCollection
     */
    protected static function createPaymentCollectionObject()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param Order $order
     * @return PaymentCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function load(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @return float
     */
    public function getPaidSum()
    {
    }
    /**
     * @return float
     */
    public function getSum()
    {
    }
    /**
     * @return bool
     */
    public function hasPaidPayment()
    {
    }
    /**
     * @return bool
     */
    public function hasUnpaidPayment()
    {
    }
    /**
     * @return Entity\Result
     * @throws Main\ObjectNotFoundException
     */
    public function save()
    {
    }
    /**
     * @return Payment|bool
     * @throws Main\ObjectNotFoundException
     */
    public function getInnerPayment()
    {
    }
    /**
     * @return Payment|bool
     * @throws Main\ObjectNotFoundException
     */
    public function createInnerPayment()
    {
    }
    /**
     * @return bool
     */
    public function isExistsInnerPayment()
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
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return PaymentCollection
     */
    public function createClone(\SplObjectStorage $cloneEntity)
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
     * @param $primary
     * @return Entity\DeleteResult
     */
    protected function deleteInternal($primary)
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
     * @deprecated Use \Bitrix\Sale\PaySystem\Manager::getInnerPaySystemId instead
     *
     * @return int
     */
    public static function getInnerPaySystemId()
    {
    }
}