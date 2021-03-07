<?php

namespace Bitrix\Sale;

/**
 * Class BasketItem
 * @package Bitrix\Sale
 */
class BasketItem extends \Bitrix\Sale\BasketItemBase
{
    const TYPE_SET = 1;
    /** @var BundleCollection */
    private $bundleCollection = null;
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @return Result
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @return Result
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws ObjectNotFoundException
     */
    protected function add()
    {
    }
    /**
     * @return Result
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws ObjectNotFoundException
     */
    protected function update()
    {
    }
    /**
     * @return array
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws Main\NotImplementedException
     */
    private function getLoggedFields()
    {
    }
    /**
     * @return Result
     * @throws ArgumentNullException
     * @throws ObjectNotFoundException
     */
    protected function checkBeforeDelete()
    {
    }
    /**
     * @return Result
     * @throws ArgumentOutOfRangeException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    public function delete()
    {
    }
    /**
     * @param array $fields
     * @return array
     * @throws Main\NotImplementedException
     */
    private function clearBundleItemFields(array $fields)
    {
    }
    /**
     * @return BasketItem|null
     */
    public function getParentBasketItem()
    {
    }
    /**
     * @return int|null|string
     * @throws ArgumentNullException
     */
    public function getParentBasketItemId()
    {
    }
    /**
     * @return bool
     * @throws ArgumentNullException
     */
    public function isBundleParent()
    {
    }
    /**
     * @return bool
     */
    public function isBundleChild()
    {
    }
    /**
     * @return array|bool
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    public function getBundleBaseQuantity()
    {
    }
    /**
     * @return BundleCollection|null
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    public function getBundleCollection()
    {
    }
    /**
     * @return BundleCollection
     * @throws ArgumentOutOfRangeException
     * @throws \Exception
     */
    public function createBundleCollection()
    {
    }
    /**
     * @return BundleCollection
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws \Exception
     */
    protected function loadBundleCollectionFromDb()
    {
    }
    /**
     * @return BundleCollection|null
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    protected function loadBundleCollectionFromProvider()
    {
    }
    /**
     * @param array $items
     * @return BundleCollection
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws \Exception
     */
    private function setItemsAfterGetBundle(array $items)
    {
    }
    /**
     * @param $basketCode
     * @return BasketItemBase|null
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    public function findItemByBasketCode($basketCode)
    {
    }
    /**
     * @param $id
     * @return BasketItemBase|null
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    public function findItemById($id)
    {
    }
    /**
     * @param string $name
     * @param null $oldValue
     * @param null $value
     * @throws ArgumentNullException
     * @throws ObjectNotFoundException
     */
    protected function addChangesToHistory($name, $oldValue = null, $value = null)
    {
    }
    /**
     * @param $quantity
     * @return float|string
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     */
    public static function formatQuantity($quantity)
    {
    }
    /**
     * @return array
     */
    protected static function getFieldsMap()
    {
    }
    /**
     * @internal
     *
     * @param \SplObjectStorage $cloneEntity
     * @return BasketItem|Internals\CollectableEntity|object
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     * @return Result
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     * @throws ObjectNotFoundException
     * @throws \Exception
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @param BasketItemCollection $basket
     * @param $data
     * @return BasketItem|mixed
     * @throws ArgumentException
     * @throws ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws \Exception
     */
    public static function load(\Bitrix\Sale\BasketItemCollection $basket, $data)
    {
    }
    /**
     * @param array $fields
     * @return Main\Entity\AddResult
     * @throws \Exception
     */
    protected function addInternal(array $fields)
    {
    }
    /**
     * @param $primary
     * @param array $fields
     * @return Main\Entity\UpdateResult
     * @throws \Exception
     */
    protected function updateInternal($primary, array $fields)
    {
    }
    /**
     * @param $primary
     * @return Main\Entity\DeleteResult
     * @throws \Exception
     */
    protected function deleteInternal($primary)
    {
    }
    /**
     * @return float|int
     * @throws ArgumentNullException
     */
    public function getReservedQuantity()
    {
    }
}