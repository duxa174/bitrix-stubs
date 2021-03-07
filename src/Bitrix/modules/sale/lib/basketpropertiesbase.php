<?php

namespace Bitrix\Sale;

/**
 * Class BasketPropertiesCollectionBase
 * @package Bitrix\Sale
 */
abstract class BasketPropertiesCollectionBase extends \Bitrix\Sale\Internals\EntityCollection
{
    /** @var BasketItemBase */
    protected $basketItem;
    /**
     * @return BasketItemBase
     */
    protected function getEntityParent()
    {
    }
    /**
     * @param BasketItemBase $basketItem
     */
    public function setBasketItem(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * @return BasketItemBase
     */
    public function getBasketItem()
    {
    }
    /**
     * @return BasketPropertiesCollection
     * @throws Main\ArgumentException
     * @throws NotImplementedException
     */
    private static function createBasketPropertiesCollectionObject()
    {
    }
    /**
     * @param BasketItemBase $basketItem
     * @return BasketPropertiesCollectionBase|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws NotImplementedException
     * @throws ObjectNotFoundException
     */
    public static function load(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * @param BasketItemCollection $basket
     * @return array
     * @throws Main\ArgumentNullException
     */
    protected static function getBasketIdList(\Bitrix\Sale\BasketItemCollection $basket)
    {
    }
    /**
     * @param BasketItemCollection $collection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws NotImplementedException
     */
    public static function loadByCollection(\Bitrix\Sale\BasketItemCollection $collection)
    {
    }
    /**
     * @return BasketPropertyItem
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws NotImplementedException
     */
    public function createItem()
    {
    }
    /**
     * @param BasketPropertyItemBase $property
     * @return string
     */
    private function getPropertyCode(\Bitrix\Sale\BasketPropertyItemBase $property)
    {
    }
    /**
     * @param array $properties
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws NotImplementedException
     * @throws ObjectNotFoundException
     */
    public function redefine(array $properties)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws NotImplementedException
     */
    public function save()
    {
    }
    /**
     * @param array $values
     * @return bool
     */
    public function isPropertyAlreadyExists(array $values)
    {
    }
    /**
     * @param array $value
     * @return BasketPropertyItemBase|bool
     */
    public function getPropertyItemByValue(array $value)
    {
    }
    /**
     * @return array
     */
    public function getPropertyValues()
    {
    }
    /**
     * @param array $value
     * @return array
     */
    private static function bringingPropertyValue(array $value)
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage $cloneEntity
     * @return BasketPropertiesCollectionBase|Internals\EntityCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @throws NotImplementedException
     * @throws ObjectNotFoundException
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return Result
     * @throws NotImplementedException
     */
    public function verify()
    {
    }
    /**
     * Load basket item properties.
     *
     * @param array $parameters
     * @throws NotImplementedException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Delete basket item properties.
     *
     * @param $primary
     * @throws NotImplementedException
     */
    protected static function delete($primary)
    {
    }
    /**
     * @deprecated Use \Bitrix\Sale\BasketPropertiesCollectionBase::redefine instead
     *
     * @param array $values
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws NotImplementedException
     * @throws ObjectNotFoundException
     */
    public function setProperty(array $values)
    {
    }
}