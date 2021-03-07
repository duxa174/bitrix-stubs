<?php

namespace Bitrix\Sale\Internals;

/**
 * Class EntityCollection
 * @package Bitrix\Sale\Internals
 */
abstract class EntityCollection extends \Bitrix\Sale\Internals\CollectionBase
{
    private $index = -1;
    protected $isClone = false;
    protected $anyItemDeleted = false;
    /**
     * EntityCollection constructor.
     */
    protected function __construct()
    {
    }
    /**
     * @internal
     *
     * @param CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Sale\Result
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @throws Main\NotImplementedException
     */
    public static function getRegistryType()
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @return mixed
     * @throws Main\ArgumentOutOfRangeException
     */
    public function deleteItem($index)
    {
    }
    /**
     * @param CollectableEntity $item
     * @return CollectableEntity
     * @throws Main\ArgumentTypeException
     */
    protected function addItem(\Bitrix\Sale\Internals\CollectableEntity $item)
    {
    }
    /**
     * @return int
     */
    protected function createIndex()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     */
    public function clearCollection()
    {
    }
    /**
     * @return array
     */
    protected function getDeletableItems()
    {
    }
    /**
     * @return void
     */
    protected function callEventOnBeforeCollectionClear()
    {
    }
    /**
     * @param $id
     *
     * @return CollectableEntity|bool
     * @throws Main\ArgumentNullException
     */
    public function getItemById($id)
    {
    }
    /**
     * @param $id
     *
     * @return bool|int|null
     * @throws Main\ArgumentNullException
     */
    public function getIndexById($id)
    {
    }
    /**
     * @param $index
     *
     * @return CollectableEntity|null
     * @throws Main\ArgumentNullException
     */
    public function getItemByIndex($index)
    {
    }
    /**
     * @return Entity
     */
    protected abstract function getEntityParent();
    /**
     * @param bool $isMeaningfulField
     * @return bool
     */
    public function isStartField($isMeaningfulField = false)
    {
    }
    /**
     * @return bool
     */
    public function clearStartField()
    {
    }
    /**
     * @return bool
     */
    public function hasMeaningfulField()
    {
    }
    /**
     * @param bool $hasMeaningfulField
     * @return Sale\Result
     */
    public function doFinalAction($hasMeaningfulField = false)
    {
    }
    /**
     * @return bool
     */
    public function isMathActionOnly()
    {
    }
    /**
     * @param bool|false $value
     * @return bool
     */
    public function setMathActionOnly($value = false)
    {
    }
    /**
     * @return bool
     */
    public function isChanged()
    {
    }
    /**
     * @return Sale\Result
     */
    public function verify()
    {
    }
    /**
     * @return bool
     */
    public function isClone()
    {
    }
    /**
     * @return bool
     */
    public function isAnyItemDeleted()
    {
    }
    /**
     * @param $value
     *
     * @return bool
     */
    protected function setAnyItemDeleted($value)
    {
    }
    /**
     * @internal
     */
    public function clearChanged()
    {
    }
    /**
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return EntityCollection
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
}