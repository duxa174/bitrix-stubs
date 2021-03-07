<?php

namespace Bitrix\Main\Engine\Response\DataType;

final class Page implements \Bitrix\Main\Type\Contract\Arrayable, \IteratorAggregate, \ArrayAccess, \JsonSerializable
{
    /** @var string */
    private $id;
    /** @var array */
    private $items = [];
    /** @var int|\Closure */
    private $totalCount;
    private $calculatedTotalCount;
    /**
     * @param string $id Id of collection.
     * @param array|\Traversable $items
     * @param int|\Closure $totalCount The parameter can be Closure to prevent unnecessary actions for calculation.
     */
    public function __construct($id, $items, $totalCount)
    {
    }
    /**
     * @return int
     */
    public function getTotalCount()
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * @return array
     */
    public function getItems()
    {
    }
    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return \Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
    }
    /**
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
    }
    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     *
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
    }
    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
    }
    public function toArray()
    {
    }
}