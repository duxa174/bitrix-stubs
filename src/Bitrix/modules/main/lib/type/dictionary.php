<?php

namespace Bitrix\Main\Type;

class Dictionary implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var array
     */
    protected $values = array();
    /**
     * Creates object.
     *
     * @param array $values
     */
    public function __construct(array $values = null)
    {
    }
    /**
     * Returns any variable by its name. Null if variable is not set.
     *
     * @param string $name
     * @return string | array | null
     */
    public function get($name)
    {
    }
    public function set($name, $value = null)
    {
    }
    /**
     * @return array
     */
    public function getValues()
    {
    }
    /**
     * @param $values
     */
    public function setValues($values)
    {
    }
    public function clear()
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
     * Returns the values as an array.
     *
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Returns true if the dictionary is empty.
     * @return bool
     */
    public function isEmpty()
    {
    }
}