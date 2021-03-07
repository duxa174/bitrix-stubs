<?php

namespace Bitrix\Catalog\v2\Fields;

/**
 * Class FieldStorage
 *
 * @package Bitrix\Catalog\v2\Fields
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class FieldStorage implements \ArrayAccess, \Iterator, \Countable
{
    private $fields = [];
    private $originalFields = [];
    private $changedFields = [];
    private $typeCaster;
    public function __construct(\Bitrix\Catalog\v2\Fields\TypeCasters\TypeCasterContract $typeCaster = null)
    {
    }
    public function initFields(array $fields) : self
    {
    }
    public function initField($name, $value) : self
    {
    }
    public function setFields(array $fields) : self
    {
    }
    public function setField($name, $value) : self
    {
    }
    public function getField($name)
    {
    }
    public function toArray() : array
    {
    }
    public function isChanged($name) : bool
    {
    }
    public function clear() : void
    {
    }
    public function clearChanged() : void
    {
    }
    public function getFields() : array
    {
    }
    public function getOriginalFields() : array
    {
    }
    public function getChangedFields() : array
    {
    }
    public function hasChangedFields() : bool
    {
    }
    private function cast($name, $value)
    {
    }
    private function markChanged($name, $value) : bool
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
    public function valid() : bool
    {
    }
    /**
     * Rewind the Iterator to the first element
     */
    public function rewind()
    {
    }
    /**
     * Whether a offset exists
     *
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset) : bool
    {
    }
    /**
     * Offset to retrieve
     *
     * @param mixed $offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Offset to set
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Offset to unset
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset) : void
    {
    }
    /**
     * Count elements of an object
     */
    public function count() : int
    {
    }
}