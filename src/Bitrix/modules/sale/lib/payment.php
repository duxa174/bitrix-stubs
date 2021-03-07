<?php

namespace Bitrix\Sale;

/**
 * Class Payment
 * @package Bitrix\Sale
 */
class Payment extends \Bitrix\Sale\Internals\CollectableEntity implements \Bitrix\Sale\IBusinessValueProvider, \IEntityMarker
{
    const RETURN_NONE = 'N';
    const RETURN_INNER = 'Y';
    const RETURN_PS = 'P';
    /** @var  Sale\PaySystem\Service */
    protected $service;
    /**
     * Payment constructor.
     * @param array $fields
     * @throws Main\ArgumentNullException
     */
    protected function __construct(array $fields = [])
    {
    }
    /**
     * @return string|void
     */
    public static function getRegistryEntity()
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
     * @param array $fields
     * @return Payment
     * @throws Main\ArgumentException
     */
    private static function createPaymentObject(array $fields = [])
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param PaymentCollection $collection
     * @param PaySystem\Service|null $paySystem
     * @return Payment
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    public static function create(\Bitrix\Sale\PaymentCollection $collection, \Bitrix\Sale\PaySystem\Service $paySystem = null)
    {
    }
    /**
     * @param PaySystem\Service $service
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function setPaySystemService(\Bitrix\Sale\PaySystem\Service $service)
    {
    }
    /**
     * @return string
     */
    protected static function generateXmlId()
    {
    }
    /**
     * @param $id
     * @return Payment[]
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function loadForOrder($id)
    {
    }
    /**
     * @internal
     *
     * @param $idOrder
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function deleteNoDemand($idOrder)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     */
    public function delete()
    {
    }
    /**
     * @return Result
     */
    private function callEventOnBeforeEntityDeleted()
    {
    }
    /**
     * @return Result
     */
    private function callEventOnEntityDeleted()
    {
    }
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\SystemException
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @internal
     *
     * @return Result
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
     * @return Order
     */
    public function getOrder()
    {
    }
    /**
     * @return void;
     */
    protected function addCashboxChecks()
    {
    }
    /**
     * @return void;
     */
    protected function calculateStatistic()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    private function add()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function update()
    {
    }
    /**
     * @return void;
     */
    private function callEventOnBeforeEntitySaved()
    {
    }
    /**
     * @return void;
     */
    private function callEventOnEntitySaved()
    {
    }
    /**
     * @throws Main\ArgumentException
     */
    private function callDelayedEvents()
    {
    }
    /**
     * @param $isNew
     */
    protected function onAfterSave($isNew)
    {
    }
    /**
     * @return float
     */
    public function getSum()
    {
    }
    /**
     * @return float
     */
    public function getSumPaid()
    {
    }
    /**
     * @return bool
     */
    public function isPaid()
    {
    }
    /**
     * @return bool
     */
    public function isReturn()
    {
    }
    /**
     * @return int
     */
    public function getOrderId()
    {
    }
    /**
     * @return PaySystem\Service
     */
    public function getPaySystem()
    {
    }
    /**
     * @return PaySystem\Service
     */
    protected function loadPaySystem()
    {
    }
    /**
     * @return int
     */
    public function getPaymentSystemId()
    {
    }
    /**
     * @return string
     */
    public function getPaymentSystemName()
    {
    }
    /**
     * @param $value
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function setPaid($value)
    {
    }
    /**
     * @param $value
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function setReturn($value)
    {
    }
    /**
     * @return bool
     */
    public function isInner()
    {
    }
    /**
     * @param $name
     * @param $value
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
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
     */
    public function setFieldNoDemand($name, $value)
    {
    }
    /**
     * @param string $name
     * @param null $oldValue
     * @param null $value
     */
    protected function addChangesToHistory($name, $oldValue = null, $value = null)
    {
    }
    /**
     * @return Result
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
     * @return Payment|null|string
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
    public static function getList(array $parameters = [])
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage $cloneEntity
     * @return Internals\CollectableEntity|object
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     */
    public function getHash()
    {
    }
    /**
     * @deprecated
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
     * @return bool
     */
    public function isMarked()
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
     * @return string
     */
    public function getMarkField()
    {
    }
    /**
     * @param array $data
     * @return Main\ORM\Data\AddResult
     * @throws \Exception
     *
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
     * @param $primary
     * @return Main\ORM\Data\DeleteResult
     * @throws \Exception
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
     * @return null|string
     * @internal
     *
     */
    public static function getEntityEventName()
    {
    }
}