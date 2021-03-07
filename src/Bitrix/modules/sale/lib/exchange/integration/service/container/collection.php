<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Container;

class Collection implements \IteratorAggregate
{
    protected $collection = [];
    static $internalIndex = 0;
    public function addItem(\Bitrix\Sale\Exchange\Integration\Service\Container\Item $item)
    {
    }
    public function count()
    {
    }
    public function toArray()
    {
    }
    public function getIndexes()
    {
    }
    /**
     * @param $index
     * @return Item|null
     */
    public function getItemByIndex($index)
    {
    }
    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
    }
}