<?php

namespace Bitrix\Sale\Internals;

class Fields implements \ArrayAccess, \Iterator, \Countable
{
    /** @var  array */
    protected $values = array();
    /** @var array */
    protected $changedValues = array();
    /** @var  array */
    private $originalValues = array();
    /** @var  array */
    private $customFields = array();
    /** @var bool  */
    protected $isClone = false;
    public function __construct(array $values = null)
    {
    }
    /**
     * @param $name
     * @return bool
     */
    public function isChanged($name)
    {
    }
    /**
     * Returns any variable by its name. Null if variable is not set.
     *
     * @param string $name
     * @return string | null
     */
    public function get($name)
    {
    }
    /**
     * @param string $field
     */
    public function markCustom(string $field)
    {
    }
    /**
     * @param string $field
     * @return bool
     */
    public function isMarkedCustom(string $field) : bool
    {
    }
    /**
     * @param string $field
     */
    public function unmarkCustom(string $field)
    {
    }
    /**
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function set($name, $value)
    {
    }
    /**
     * @internal
     *
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function init($name, $value)
    {
    }
    public function clear()
    {
    }
    public function clearChanged()
    {
    }
    /**
     * @return array
     */
    public function getValues()
    {
    }
    /**
     * @ine
     * @return array
     */
    public function getOriginalValues()
    {
    }
    /**
     * @param array $values
     */
    public function setValues(array $values)
    {
    }
    /**
     * @param array $values
     */
    public function resetValues(array $values)
    {
    }
    /**
     * @param $name
     * @param $value
     * @return bool
     */
    protected function markChanged($name, $value)
    {
    }
    /**
     * @return array
     */
    public function getChangedKeys()
    {
    }
    /**
     * @return array
     */
    public function getChangedValues()
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
     *
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
    }
    /**
     * Offset to retrieve
     *
     * @param mixed $offset
     *
     * @return null|string
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
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return Fields
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return bool
     */
    public function isClone()
    {
    }
}