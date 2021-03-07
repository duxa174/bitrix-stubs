<?php

namespace Bitrix\Sale\Exchange\Entity;

/**
 * Class PaymentImport
 * @package Bitrix\Sale\Exchange\Entity
 * @internal
 */
class PaymentImport extends \Bitrix\Sale\Exchange\Entity\EntityImport
{
    /**
     * @param Internals\Entity $entity
     * @throws Main\ArgumentException
     */
    public function setEntity(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     */
    protected function checkFields(array $fields)
    {
    }
    /**
     * @return Main\Entity\AddResult|Main\Entity\UpdateResult|Sale\Result|mixed
     */
    public function save()
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function add(array $params)
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function update(array $params)
    {
    }
    /**
     * @param array|null $params
     * @return Sale\Result
     */
    public function delete(array $params = null)
    {
    }
    /**
     * @return string
     */
    protected function getExternalFieldName()
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     * @throws Main\ArgumentException
     */
    public function load(array $fields)
    {
    }
    /**
     * @param array $fields
     */
    public function refreshData(array $fields)
    {
    }
    /**
     * @param Internals\Entity $payment
     * @return int
     * @throws Main\ArgumentException
     */
    public static function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $payment)
    {
    }
    /**
     * @param string $type
     * @return int
     */
    public static function resolveEntityTypeIdByCodeType($type)
    {
    }
    public function initFields()
    {
    }
    /**
     * @param Sale\IBusinessValueProvider $entity
     * @return Sale\Order
     */
    protected static function getBusinessValueOrderProvider(\Bitrix\Sale\IBusinessValueProvider $entity)
    {
    }
}
class PaymentCashImport extends \Bitrix\Sale\Exchange\Entity\PaymentImport
{
    public function __construct($parentEntityContext = null)
    {
    }
    public function getOwnerTypeId()
    {
    }
}
class PaymentCashLessImport extends \Bitrix\Sale\Exchange\Entity\PaymentImport
{
    public function __construct($parentEntityContext = null)
    {
    }
    public function getOwnerTypeId()
    {
    }
}
class PaymentCardImport extends \Bitrix\Sale\Exchange\Entity\PaymentImport
{
    public function __construct($parentEntityContext = null)
    {
    }
    public function getOwnerTypeId()
    {
    }
}