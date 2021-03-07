<?php

namespace Bitrix\Main\Type;

class FilterableDictionary extends \Bitrix\Main\Type\Dictionary
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var array
     */
    protected $arRawValues = array();
    /**
     * @var IDictionaryFilter[]
     */
    protected $arFilters = array();
    /**
     * Creates object.
     *
     * @param array $values
     */
    public function __construct(array $values, $name = null)
    {
    }
    public function addFilter(\Bitrix\Main\Type\IDictionaryFilter $filter)
    {
    }
    /**
     * Returns original value of any variable by its name. Null if variable is not set.
     *
     * @param string $name
     * @return string | null
     */
    public function getRaw($name)
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
}