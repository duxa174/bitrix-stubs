<?php

namespace Bitrix\UI\Buttons;

final class ButtonAttributes implements \ArrayAccess, \IteratorAggregate, \Countable, \Bitrix\Main\Type\Contract\Arrayable
{
    const JSON_OPTIONS_DATA_ATTR = 'data-json-options';
    /** @var array */
    private $attributes = [];
    /** @var array */
    private $dataAttributes = [];
    public function __construct(array $attributes = [])
    {
    }
    public function setAttributes(array $attributes)
    {
    }
    /**
     * @param string $name
     * @param mixed|null $defaultValue
     *
     * @return mixed|null
     */
    public function getAttribute($name, $defaultValue = null)
    {
    }
    /**
     * @param string $name
     * @param mixed|null $value
     *
     * @return $this
     */
    public function addDataAttribute($name, $value = null)
    {
    }
    /**
     * @param string $name
     * @param mixed|null $defaultValue
     *
     * @return mixed|null
     */
    public function getDataAttribute($name, $defaultValue = null)
    {
    }
    /**
     * @return array
     */
    public function getDataAttributes()
    {
    }
    public function addJsonOption($key, $value)
    {
    }
    public function removeJsonOption($key)
    {
    }
    public function setJsonOptions(array $options)
    {
    }
    public function getJsonOptions()
    {
    }
    /**
     * @param string $className
     *
     * @return $this
     */
    public function addClass($className)
    {
    }
    /**
     * @param string $className
     *
     * @return bool
     */
    public function hasClass($className)
    {
    }
    public function setClassList(array $classList)
    {
    }
    /**
     * @param string $className
     *
     * @return $this
     */
    public function removeClass($className)
    {
    }
    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return \Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
    }
    /**
     * Whether a offset exists
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
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
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     *
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function &offsetGet($offset)
    {
    }
    /**
     * Offset to set
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
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
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
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
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
    }
    /**
     * @return string
     */
    public function toString()
    {
    }
    /**
     * @return string
     */
    public function __toString()
    {
    }
    protected static function convertClassesToString($classes)
    {
    }
    protected static function convertStylesToString($styles)
    {
    }
    /**
     * @return array
     */
    public function toArray()
    {
    }
    protected static function addDataPrefix($name)
    {
    }
    protected static function hasDataPrefix($name)
    {
    }
    protected static function deleteDataPrefix($name)
    {
    }
    protected static function convertDataAttributesToAttributes(array $dataAttributes)
    {
    }
    protected static function splitDataAttributesAndAnother(array $attributes)
    {
    }
}