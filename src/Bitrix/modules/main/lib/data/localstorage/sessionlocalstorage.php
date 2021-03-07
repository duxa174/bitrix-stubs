<?php

namespace Bitrix\Main\Data\LocalStorage;

final class SessionLocalStorage implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /** @var array */
    private $data = [];
    /** @var string */
    private $uniqueName;
    public function __construct(string $uniqueName)
    {
    }
    /**
     * @return string
     */
    public function getUniqueName() : string
    {
    }
    /**
     * @return array
     */
    public function getData() : array
    {
    }
    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
    }
    public function &get($key)
    {
    }
    public function set($key, $value) : self
    {
    }
    public function clear() : void
    {
    }
    public function offsetExists($offset)
    {
    }
    public function &offsetGet($offset)
    {
    }
    public function offsetSet($offset, $value)
    {
    }
    public function offsetUnset($offset)
    {
    }
    public function count()
    {
    }
    public function getIterator()
    {
    }
}