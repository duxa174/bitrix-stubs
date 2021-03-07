<?php

namespace Bitrix\Sale;

/**
 * Class PropertyValueCollectionBase
 * @package Bitrix\Sale
 */
abstract class PropertyValueCollectionBase extends \Bitrix\Sale\Internals\EntityCollection
{
    /** @var OrderBase */
    protected $order;
    protected $propertyGroups = null;
    /**
     * @param OrderBase $order
     * @return PropertyValueCollectionBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function load(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @return OrderBase
     */
    protected function getEntityParent()
    {
    }
    /**
     * @param array $prop
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public function createItem(array $prop)
    {
    }
    /**
     * @param Internals\CollectableEntity $property
     * @return Internals\CollectableEntity|Result
     * @throws Main\ArgumentTypeException
     */
    public function addItem(\Bitrix\Sale\Internals\CollectableEntity $property)
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @return Result|mixed
     * @throws ArgumentOutOfRangeException
     */
    public function deleteItem($index)
    {
    }
    /**
     * @param Internals\CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\NotSupportedException
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
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
     * @return OrderBase
     */
    public function getOrder()
    {
    }
    /**
     * @param OrderBase $order
     */
    public function setOrder(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @return static
     */
    private static function createPropertyValueCollectionObject()
    {
    }
    /**
     * @param $name
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getAttribute($name)
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getUserEmail()
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getPayerName()
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getDeliveryLocation()
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getTaxLocation()
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getProfileName()
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getDeliveryLocationZip()
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getPhone()
    {
    }
    /**
     * @return PropertyValueBase
     * @throws ArgumentOutOfRangeException
     */
    public function getAddress()
    {
    }
    /**
     * @param $post
     * @param $files
     * @return Result
     * @throws ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function setValuesFromPost($post, $files)
    {
    }
    /**
     * @param $fields
     * @param $files
     * @param bool $skipUtils
     * @return Result
     * @throws Main\SystemException
     */
    public function checkErrors($fields, $files, $skipUtils = false)
    {
    }
    /**
     * @param array $rules
     * @param array $fields
     *
     * @return Result
     */
    public function checkRequired(array $rules, array $fields)
    {
    }
    /**
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getGroups()
    {
    }
    /**
     * @param $groupId
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getPropertiesByGroupId($groupId)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getArray()
    {
    }
    /**
     * @param $orderPropertyId
     * @return PropertyValueBase|null
     */
    public function getItemByOrderPropertyId($orderPropertyId)
    {
    }
    /**
     * @param string $propertyCode
     * @return PropertyValueBase[]
     */
    public function getItemsByOrderPropertyCode(string $propertyCode)
    {
    }
    /**
     * @param string $propertyCode
     * @return PropertyValueBase|null
     */
    public function getItemByOrderPropertyCode(string $propertyCode)
    {
    }
    /**
     * @param callable $filter
     * @return PropertyValueBase[]
     */
    public function getItemsByFilter(callable $filter)
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
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @param $values
     * @throws Main\NotImplementedException
     */
    protected function callEventOnSalePropertyValueDeleted($values)
    {
    }
    /**
     * @param $values
     * @throws Main\NotImplementedException
     */
    protected function callEventOnBeforeSalePropertyValueDeleted($values)
    {
    }
    /**
     * @return array
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     */
    private function getOriginalItemsValues()
    {
    }
    /**
     * @param $primary
     * @throws Main\NotImplementedException
     * @return Entity\DeleteResult
     */
    protected static function deleteInternal($primary)
    {
    }
    /**
     * @param array $parameters
     * @throws Main\NotImplementedException
     * @return Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @internal
     *
     * @param $idOrder
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function deleteNoDemand($idOrder)
    {
    }
    /**
     * @param $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    private static function delete(array $value)
    {
    }
    /**
     * @internal
     *
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function refreshRelated()
    {
    }
    /**
     * @deprecated
     * @use \Bitrix\Sale\PropertyValueCollectionBase::getPropertiesByGroupId
     *
     * @param $groupId
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getGroupProperties($groupId)
    {
    }
}