<?php

namespace Bitrix\Sale;

/**
 * Class PropertyValueBase
 * @package Bitrix\Sale
 */
abstract class PropertyValueBase extends \Bitrix\Sale\Internals\CollectableEntity
{
    /** @var PropertyBase|null $property */
    protected $property = null;
    /**
     * PropertyValueBase constructor.
     * @param array|null $property
     * @param array|null $value
     * @param array|null $relation
     * @throws Main\SystemException
     */
    protected function __construct(array $property = null, array $value = [], array $relation = null)
    {
    }
    /**
     * @return string
     */
    public static function generateXmlId()
    {
    }
    /**
     * @param OrderBase $order
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function loadForOrder(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param OrderBase $order
     * @return array
     */
    protected static function constructRelatedEntitiesFilter(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param OrderBase $order
     * @return array
     */
    protected static function extractPaySystemIdList(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param OrderBase $order
     * @return array
     */
    protected static function extractDeliveryIdList(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param PropertyValueCollectionBase $collection
     * @param array $property
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function create(\Bitrix\Sale\PropertyValueCollectionBase $collection, array $property = array())
    {
    }
    /**
     * @param array|null $property
     * @param array|null $value
     * @param array|null $relation
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected static function createPropertyValueObject(array $property = null, array $value = [], array $relation = null)
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
     * @internal
     *
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     */
    public function save()
    {
    }
    /**
     * @throws Main\ObjectNotFoundException
     */
    private function checkCallingContext()
    {
    }
    /**
     * @return Order|null
     */
    public function getOrder()
    {
    }
    /**
     * @return Result
     * @throws Main\NotImplementedException
     */
    protected function update()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function add()
    {
    }
    /**
     * @return void
     */
    private function callEventOnPropertyValueEntitySaved()
    {
    }
    /**
     * @param array $post
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function setValueFromPost(array $post)
    {
    }
    /**
     * @param $key
     * @param $value
     * @return Result
     * @throws Main\SystemException
     */
    public function checkValue($key, $value)
    {
    }
    /**
     * @param $key
     * @param $value
     *
     * @return Result
     * @throws Main\SystemException
     */
    public function checkRequiredValue($key, $value)
    {
    }
    /**
     * @return array
     */
    public function getProperty()
    {
    }
    /**
     * @return PropertyBase|null
     */
    public function getPropertyObject()
    {
    }
    /**
     * @return null|string
     */
    public function getValueId()
    {
    }
    /**
     * @return mixed
     */
    public function getPropertyId()
    {
    }
    /**
     * @return mixed
     */
    public function getPersonTypeId()
    {
    }
    /**
     * @return mixed
     */
    public function getGroupId()
    {
    }
    /**
     * @return mixed
     */
    public function getName()
    {
    }
    /**
     * @return mixed
     */
    public function getRelations()
    {
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
    }
    /**
     * @return mixed
     */
    public function getType()
    {
    }
    /**
     * @return bool
     */
    public function isRequired()
    {
    }
    /**
     * @return bool
     */
    public function isUtil()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryEntity()
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
    protected abstract function updateInternal($primary, array $data);
    /**
     * @param array $parameters
     * @throws Main\NotImplementedException
     * @return Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $value
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function setValue($value)
    {
    }
    /**
     * @return string
     * @throws Main\SystemException
     */
    public function getViewHtml()
    {
    }
    /**
     * @return string
     * @throws Main\SystemException
     */
    public function getEditHtml()
    {
    }
    /**
     * @return null|string|array
     */
    public function getValue()
    {
    }
    /**
     * @return Result
     * @throws Main\SystemException
     */
    public function verify()
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Sale\Property::getOptions
     *
     * @param $propertyId
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function loadOptions($propertyId)
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Sale\Property::getMeaningfulValues
     *
     * @param $personTypeId
     * @param $request
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getMeaningfulValues($personTypeId, $request)
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