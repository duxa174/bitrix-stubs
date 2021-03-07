<?php

namespace Bitrix\Catalog\v2;

/**
 * Class BaseCollection
 *
 * @package Bitrix\Catalog\v2
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseCollection implements \IteratorAggregate, \Countable
{
    /** @var \Bitrix\Catalog\v2\BaseEntity */
    private $parent;
    /** @var \Bitrix\Catalog\v2\BaseEntity[] */
    protected $items = [];
    /** @var \Bitrix\Catalog\v2\BaseEntity[] */
    protected $removedItems = [];
    /** @var \Closure */
    private $iteratorCallback;
    /** @var bool */
    private $loaded = false;
    /** @var bool */
    private $parentChanged = false;
    public function getParent() : ?\Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function setParent(?\Bitrix\Catalog\v2\BaseEntity $parent) : self
    {
    }
    public function add(\Bitrix\Catalog\v2\BaseEntity ...$items) : self
    {
    }
    protected function addInternal(\Bitrix\Catalog\v2\BaseEntity $item) : void
    {
    }
    public function remove(\Bitrix\Catalog\v2\BaseEntity ...$items) : self
    {
    }
    private function setItem(\Bitrix\Catalog\v2\BaseEntity $item) : self
    {
    }
    private function unsetItem(\Bitrix\Catalog\v2\BaseEntity $item) : self
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity ...$items
     * @return $this
     * @internal
     */
    public function clearRemoved(\Bitrix\Catalog\v2\BaseEntity ...$items) : self
    {
    }
    /**
     * @return $this
     * @internal
     */
    public function clearChanged() : self
    {
    }
    public function isEmpty() : bool
    {
    }
    public function isChanged() : bool
    {
    }
    public function findById(int $id) : ?\Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function toArray() : array
    {
    }
    /*public function max($field)
    	{
    		return array_reduce($this->collection, static function ($result, $item) use ($field) {
    			$value = $item[$field] ?? null;
    
    			return $result === null || $value > $result ? $value : $result;
    		});
    	}
    
    	public function min($field)
    	{
    		return array_reduce($this->collection, static function ($result, $item) use ($field) {
    			$value = $item[$field] ?? null;
    
    			return $result === null || $value < $result ? $value : $result;
    		});
    	}
    
    	public function avg($field)
    	{
    		return array_sum(array_column($this->collection, $field)) / count($this->collection);
    	}*/
    /**
     * @return \ArrayIterator|\Traversable|\Bitrix\Catalog\v2\BaseEntity[]
     */
    public function getRemovedItems() : \ArrayIterator
    {
    }
    /**
     * @return \ArrayIterator|\Traversable|\Bitrix\Catalog\v2\BaseEntity[]
     */
    public function getIterator()
    {
    }
    protected function loadItems() : void
    {
    }
    /**
     * @return bool
     */
    protected function isLoaded() : bool
    {
    }
    protected function loadByIteratorCallback() : void
    {
    }
    protected function getAlreadyLoadedFilter() : array
    {
    }
    /**
     * @param \Closure $iteratorCallback
     * @return BaseCollection
     * @internal
     */
    public function setIteratorCallback(\Closure $iteratorCallback) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    /**
     * @return \Bitrix\Main\Result
     * @internal
     */
    public function saveInternal() : \Bitrix\Main\Result
    {
    }
    /**
     * @return \Bitrix\Main\Result
     * @internal
     */
    public function deleteInternal() : \Bitrix\Main\Result
    {
    }
    public function count() : int
    {
    }
}