<?php

namespace Bitrix\Sale;

/**
 * Class BundleCollection
 * @package Bitrix\Sale
 */
class BundleCollection extends \Bitrix\Sale\BasketItemCollection
{
    /** @var null|BasketItem */
    protected $parentBasketItem = null;
    /**
     * @param BasketItem $basketItem
     */
    public function setParentBasketItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @return BasketItem|null
     */
    public function getParentBasketItem()
    {
    }
    /**
     * @return BasketItem|null
     */
    protected function getEntityParent()
    {
    }
    /**
     * @param CollectableEntity $item
     * @return CollectableEntity
     * @throws Main\ArgumentTypeException
     */
    public function addItem(\Bitrix\Sale\Internals\CollectableEntity $item)
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters)
    {
    }
    /**
     * @param $index
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function deleteItem($index)
    {
    }
    /**
     * @return BundleCollection
     * @throws Main\ArgumentException
     */
    public static function createBundleCollectionObject()
    {
    }
    /**
     * @param array $filter
     * @return BundleCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     */
    public function loadFromDb(array $filter)
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage|null $cloneEntity
     * @return BundleCollection|EntityCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function createClone(\SplObjectStorage $cloneEntity = null)
    {
    }
    /**
     * @return BasketBase
     */
    public function getBasket()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
    {
    }
}