<?php

namespace Bitrix\Sale\Internals;

/**
 * Class CollectableEntity
 * @package Bitrix\Sale\Internals
 */
abstract class CollectableEntity extends \Bitrix\Sale\Internals\Entity
{
    /** @var EntityCollection */
    protected $collection;
    protected $internalIndex = null;
    protected $isClone = false;
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     *
     * @return Result
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @param EntityCollection $collection
     */
    public function setCollection(\Bitrix\Sale\Internals\EntityCollection $collection)
    {
    }
    /**
     * @return EntityCollection
     */
    public function getCollection()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     */
    public function delete()
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @throws Main\ArgumentTypeException
     */
    public function setInternalIndex($index)
    {
    }
    /**
     * @return null|int
     */
    public function getInternalIndex()
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
    public function doFinalAction($hasMeaningfulField = false)
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
    public function isMathActionOnly()
    {
    }
    /**
     * @return bool
     */
    public function isClone()
    {
    }
    /**
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return CollectableEntity
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
}