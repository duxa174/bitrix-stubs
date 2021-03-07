<?php

namespace Bitrix\Sale;

/**
 * Class OrderBase
 * @package Bitrix\Sale
 */
abstract class OrderBase extends \Bitrix\Sale\Internals\Entity
{
    /** @var Internals\Fields */
    protected $calculatedFields = null;
    /** @var BasketBase */
    protected $basketCollection;
    /** @var PropertyValueCollectionBase */
    protected $propertyCollection;
    /** @var Discount $discount */
    protected $discount = null;
    /** @var Tax $tax */
    protected $tax = null;
    /** @var int */
    protected $internalId = 0;
    /** @var bool $isNew */
    protected $isNew = true;
    /** @var bool  */
    protected $isSaveExecuting = false;
    /** @var bool $isClone */
    protected $isClone = false;
    /** @var bool $isOnlyMathAction */
    protected $isOnlyMathAction = null;
    /** @var bool $isMeaningfulField */
    protected $isMeaningfulField = false;
    /** @var bool $isStartField */
    protected $isStartField = null;
    /** @var null|string $calculateType */
    protected $calculateType = null;
    const SALE_ORDER_CALC_TYPE_NEW = 'N';
    const SALE_ORDER_CALC_TYPE_CHANGE = 'C';
    const SALE_ORDER_CALC_TYPE_REFRESH = 'R';
    /**
     * OrderBase constructor.
     * @param array $fields
     * @throws Main\ArgumentNullException
     */
    protected function __construct(array $fields = array())
    {
    }
    /**
     * Return internal index of order
     *
     * @return int
     */
    public function getInternalId()
    {
    }
    /**
     * Return field names that can set in \Bitrix\Sale\OrderBase::setField
     *
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * Return virtual field names
     *
     * @return array
     */
    protected static function getCalculatedFields()
    {
    }
    /**
     * @return bool
     */
    public function isSaveRunning()
    {
    }
    /**
     * @return array
     */
    protected static function getMeaningfulFields()
    {
    }
    /**
     * @param array $fields
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    private static function createOrderObject(array $fields = array())
    {
    }
    /**
     * @return string
     */
    public static function getRegistryEntity()
    {
    }
    /**
     * Create \Bitrix\Sale\OrderBase object
     *
     * @param $siteId
     * @param null $userId
     * @param null $currency
     * @return Order
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    public static function create($siteId, $userId = null, $currency = null)
    {
    }
    /**
     * @return string
     */
    protected static function generateXmlId()
    {
    }
    /**
     * Load order object by id
     *
     * @param $id
     * @return null|static
     * @throws Main\ArgumentNullException
     */
    public static function load($id)
    {
    }
    /**
     * Return object order list satisfying filter
     *
     * @param array $parameters
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function loadByFilter(array $parameters)
    {
    }
    /**
     * @param $parameters
     * @return array
     */
    private static function prepareParams($parameters)
    {
    }
    /**
     * Load object order by account number
     *
     * @param $value
     * @return mixed|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     */
    public static function loadByAccountNumber($value)
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result
     * @throws Main\NotImplementedException
     */
    protected static function loadFromDb(array $parameters)
    {
    }
    /**
     * Append basket to order and refresh it
     *
     * @param BasketBase $basket
     * @return Result
     * @throws Main\NotSupportedException
     */
    public function setBasket(\Bitrix\Sale\BasketBase $basket)
    {
    }
    /**
     * Append basket to order
     *
     * @param BasketBase $basket
     *
     * @return Result
     * @throws Main\NotSupportedException
     */
    public function appendBasket(\Bitrix\Sale\BasketBase $basket)
    {
    }
    /**
     * Return order basket.
     *
     * @return BasketBase
     */
    public function getBasket()
    {
    }
    /**
     * Load basket appended to order
     *
     * @return BasketBase|null
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected function loadBasket()
    {
    }
    /**
     * Set value with call events on field modify
     *
     * @param $name
     * @param $value
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function setField($name, $value)
    {
    }
    /**
     * @param $name
     * @param $value
     * @return Result
     * @throws Main\NotImplementedException
     */
    protected function checkValueBeforeSet($name, $value)
    {
    }
    /**
     * @internal
     * Set value without call events on field modify
     *
     * @param $name
     * @param $value
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function setFieldNoDemand($name, $value)
    {
    }
    /**
     * Return field value
     *
     * @param $name
     * @return null|string
     */
    public function getField($name)
    {
    }
    /**
     * @internal
     *
     * Init field
     *
     * @param $name
     * @param $value
     * @return void
     * @throws Main\ArgumentOutOfRangeException
     */
    public function initField($name, $value)
    {
    }
    /**
     * @return PropertyValueCollectionBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getPropertyCollection()
    {
    }
    /**
     * @return PropertyValueCollectionBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function loadPropertyCollection()
    {
    }
    /**
     * @internal
     *
     * @param string $action Action.
     * @param PropertyValueBase $property Property.
     * @param null|string $name Field name.
     * @param null|string|int|float $oldValue Old value.
     * @param null|string|int|float $value New value.
     * @return Result
     */
    public function onPropertyValueCollectionModify($action, \Bitrix\Sale\PropertyValueBase $property, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * Full order refresh
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     */
    public function refreshData()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function refreshInternal()
    {
    }
    /**
     * Return person type id of order
     *
     * @return int
     */
    public function getPersonTypeId()
    {
    }
    /**
     * Set person type id of order
     *
     * @param $personTypeId
     *
     * @return Result
     */
    public function setPersonTypeId($personTypeId)
    {
    }
    /**
     * Return order price
     *
     * @return float
     */
    public function getPrice()
    {
    }
    /**
     * Return paid sum
     *
     * @return float
     */
    public function getSumPaid()
    {
    }
    /**
     * @return float
     */
    public function getDeliveryPrice()
    {
    }
    /**
     * @return float
     */
    public function getDeliveryLocation()
    {
    }
    /**
     * @return float
     */
    public function getTaxPrice()
    {
    }
    /**
     * @return float
     */
    public function getTaxValue()
    {
    }
    /**
     * Return discount price
     *
     * @return float
     */
    public function getDiscountPrice()
    {
    }
    /**
     * Return currency
     *
     * @return string
     */
    public function getCurrency()
    {
    }
    /**
     * Return user id
     *
     * @return int
     */
    public function getUserId()
    {
    }
    /**
     * Return site id
     *
     * @return null|string
     */
    public function getSiteId()
    {
    }
    /**
     * Return TRUE if VAT is used. Else return FALSE
     *
     * @return bool
     */
    public function isUsedVat()
    {
    }
    /**
     * Return order vat rate
     *
     * @return mixed|null
     */
    public function getVatRate()
    {
    }
    /**
     * Return order vat sum
     *
     * @return float
     */
    public function getVatSum()
    {
    }
    /**
     * Return TRUE if order has problems. Else return FALSE
     * @return null|string
     */
    public function isMarked()
    {
    }
    /**
     * Clear VAT info
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function resetVat()
    {
    }
    /**
     * @internal
     *
     * Recalculate VAT
     */
    public function refreshVat()
    {
    }
    /**
     * Calculate VAT
     *
     * @return array
     */
    protected function calculateVat()
    {
    }
    /**
     * @param array $vatInfo
     * @return Result
     */
    private function applyCalculatedVat(array $vatInfo)
    {
    }
    /**
     * Return TRUE if order is deducted. Else return FALSE
     *
     * @return string
     */
    public function isShipped()
    {
    }
    /**
     * Return TRUE if order is external. Else return FALSE
     *
     * @return bool
     */
    public function isExternal()
    {
    }
    /**
     * @param $field
     * @return bool
     */
    protected function isCalculatedField($field)
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected static function getInitialStatus()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected static function getFinalStatus()
    {
    }
    /**
     * Save order
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    public function save()
    {
    }
    /**
     * @return Result
     */
    protected function onAfterSave()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @return void
     */
    protected function callDelayedEvents()
    {
    }
    /**
     * @param $needUpdateDateInsert
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    protected function completeSaving($needUpdateDateInsert)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\SystemException
     */
    protected function add()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function update()
    {
    }
    /**
     * @return void
     */
    protected function callEventOnSaleOrderEntitySaved()
    {
    }
    /**
     * @return void
     */
    protected function callEventOnSaleOrderSaved()
    {
    }
    /**
     * @return Result
     */
    protected function callEventOnBeforeOrderSaved()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function saveEntities()
    {
    }
    /**
     * Set account number.
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    protected function setAccountNumber()
    {
    }
    /**
     * Set VAT sum
     *
     * @param $price
     */
    public function setVatSum($price)
    {
    }
    /**
     * Set VAT delivery sum
     *
     * @param $price
     */
    public function setVatDelivery($price)
    {
    }
    /**
     * Return date order insert
     *
     * @return mixed
     */
    public function getDateInsert()
    {
    }
    /**
     * Return value: OrderBase::SALE_ORDER_CALC_TYPE_REFRESH, OrderBase::SALE_ORDER_CALC_TYPE_CHANGE, OrderBase::SALE_ORDER_CALC_TYPE_NEW
     *
     * @return null|string
     */
    public function getCalculateType()
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
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @param $name
     * @param $oldValue
     * @param $value
     * @return Result
     */
    protected function onOrderModify($name, $oldValue, $value)
    {
    }
    /**
     * Modify basket.
     *
     * @param string $action				Action.
     * @param BasketItemBase $basketItem		Basket item.
     * @param null|string $name				Field name.
     * @param null|string|int|float $oldValue		Old value.
     * @param null|string|int|float $value			New value.
     * @return Result
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function onBasketModify($action, \Bitrix\Sale\BasketItemBase $basketItem, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @internal
     * @return Result
     */
    public function onBeforeBasketRefresh()
    {
    }
    /**
     * @internal
     * @return Result
     */
    public function onAfterBasketRefresh()
    {
    }
    /**
     * Get the entity of taxes
     *
     * @return Tax
     */
    public function getTax()
    {
    }
    /**
     * @internal
     *
     * Return TRUE if order is new. Else return FALSE
     *
     * @return null|bool
     */
    public function isNew()
    {
    }
    /**
     * Reset the value of taxes
     *
     * @internal
     */
    public function resetTax()
    {
    }
    /**
     * Return TRUE if order is changed. Else return FALSE
     *
     * @return bool
     */
    public function isChanged()
    {
    }
    /**
     * @internal
     *
     * Reset flag of order change
     *
     * @return void
     */
    public function clearChanged()
    {
    }
    /**
     * Return TRUE, if this order is cloned. Else return FALSE
     *
     * @return bool
     */
    public function isClone()
    {
    }
    /**
     * Return TRUE, if order is payed. Else return FALSE
     *
     * @return bool
     */
    public function isPaid()
    {
    }
    /**
     * Return TRUE, if order is allowed delivery. Else return FALSE
     *
     * @return bool
     */
    public function isAllowDelivery()
    {
    }
    /**
     * Return TRUE, if order is deducted. Else return FALSE
     *
     * @return bool
     */
    public function isDeducted()
    {
    }
    /**
     * Return TRUE, if order is canceled. Else return FALSE
     *
     * @return bool
     */
    public function isCanceled()
    {
    }
    /**
     * Return order hash
     *
     * @return mixed
     */
    public function getHash()
    {
    }
    /**
     * Verify object to correctness
     *
     * @return Result
     */
    public function verify()
    {
    }
    /**
     * Get order information
     *
     * @param array $parameters
     * @throws Main\NotImplementedException
     * @return Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Return tax location
     *
     * @return null|string
     */
    public function getTaxLocation()
    {
    }
    /**
     * Return TRUE if calculations are based on current values. Data from the provider is not requested. Else return false
     *
     * @return bool
     */
    public function isMathActionOnly()
    {
    }
    /**
     * @return bool
     */
    public function hasMeaningfulField()
    {
    }
    /**
     * Reset order flags: \Bitrix\Sale\OrderBase::$isStartField, \Bitrix\Sale\OrderBase::$isMeaningfulField
     *
     * @return void
     */
    public function clearStartField()
    {
    }
    /**
     * @param bool $isMeaningfulField
     * @return bool
     */
    public function isStartField($isMeaningfulField = false)
    {
    }
    /**
     * @internal
     *
     * Set TRUE if calculations should be held on current values. Data from the provider is not requested
     *
     * @param bool $value
     */
    public function setMathActionOnly($value = false)
    {
    }
    /**
     * @internal
     *
     * Delete order without demands.
     *
     * @param $id
     * @return Result
     * @throws Main\NotImplementedException
     */
    public static function deleteNoDemand($id)
    {
    }
    /**
     * Delete order
     *
     * @param int $id				Order id.
     * @return Result
     * @throws Main\ArgumentNullException
     */
    public static function delete($id)
    {
    }
    /**
     * @param OrderBase $order
     * @return void
     */
    protected static function deleteEntities(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param $id
     * @return bool
     * @throws Main\NotImplementedException
     */
    protected static function isExists($id)
    {
    }
    /**
     * @deprecated Use OrderStatus::isAllowPay instead
     *
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function isAllowPay()
    {
    }
    /**
     * @param $orderId
     */
    protected static function deleteExternalEntities($orderId)
    {
    }
    /**
     * @param $orderId
     * @return Result
     */
    protected static function deleteEntitiesNoDemand($orderId)
    {
    }
    /**
     * Return discount object
     *
     * @return Discount
     */
    public function getDiscount()
    {
    }
    /**
     * @return Tax
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected function loadTax()
    {
    }
    /**
     * @return DiscountBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected function loadDiscount()
    {
    }
    /**
     * @return Result
     */
    private function refreshOrderPrice()
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
     */
    protected function onBeforeSave()
    {
    }
    /**
     * @param bool $hasMeaningfulField
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public function doFinalAction($hasMeaningfulField = false)
    {
    }
    /**
     * Apply the result of the discounts to the order.
     *
     * @internal
     *
     * @param array $data
     * @return Result
     * @throws Main\ArgumentNullException
     */
    public function applyDiscount(array $data)
    {
    }
    /**
     * @param $value
     * @return Result
     * @throws Main\ArgumentException
     */
    protected function setReasonMarked($value)
    {
    }
    /**
     * Reset the value of the order and delivery
     *
     * @internal
     *
     * @param array $select
     * @throws Main\ArgumentOutOfRangeException
     */
    public function resetData($select = array('PRICE'))
    {
    }
    /**
     * @param $value
     * @param $oldValue
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function isStatusChangedOnPay($value, $oldValue)
    {
    }
    /**
     * Create order clone
     *
     * @return OrderBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    public function createClone()
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
     * @param array $data
     * @throws Main\NotImplementedException
     * @return Main\Entity\AddResult
     */
    protected abstract function addInternal(array $data);
    /**
     * @param $primary
     * @param array $data
     * @throws Main\NotImplementedException
     * @return Main\Entity\UpdateResult
     */
    protected static function updateInternal($primary, array $data)
    {
    }
    /**
     * @param $primary
     * @throws Main\NotImplementedException
     * @return Main\Entity\DeleteResult
     */
    protected static function deleteInternal($primary)
    {
    }
    /**
     * Return user field id
     *
     * @return null
     */
    public static function getUfId()
    {
    }
    /**
     * @deprecated Use \Bitrix\Sale\OrderBase::getAvailableFields instead
     *
     * @returns array
     */
    public static function getSettableFields()
    {
    }
    /**
     * @internal
     *
     * @return string
     */
    public static function getEntityEventName()
    {
    }
}