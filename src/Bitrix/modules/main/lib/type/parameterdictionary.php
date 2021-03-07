<?php

namespace Bitrix\Main\Type;

class ParameterDictionary extends \Bitrix\Main\Type\Dictionary
{
    /**
     * @var array
     */
    protected $arRawValues = null;
    protected function setValuesNoDemand(array $values)
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
    public function toArrayRaw()
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