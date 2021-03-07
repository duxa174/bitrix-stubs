<?php

namespace Bitrix\Sale\Internals;

/**
 * Class CollectionBase
 * @package Bitrix\Sale\Internals
 */
abstract class CollectionBase implements \ArrayAccess, \Countable, \IteratorAggregate
{
    protected $collection = array();
    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
    }
    /**
     * Whether a offset exists
     */
    public function offsetExists($offset)
    {
    }
    /**
     * Offset to retrieve
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Offset to set
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Offset to unset
     */
    public function offsetUnset($offset)
    {
    }
    /**
     * Count elements of an object
     */
    public function count()
    {
    }
    /**
     * Return the current element
     */
    public function current()
    {
    }
    /**
     * Move forward to next element
     */
    public function next()
    {
    }
    /**
     * Return the key of the current element
     */
    public function key()
    {
    }
    /**
     * Checks if current position is valid
     */
    public function valid()
    {
    }
    /**
     * Rewind the Iterator to the first element
     */
    public function rewind()
    {
    }
    /**
     * Checks if collection is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
    }
}