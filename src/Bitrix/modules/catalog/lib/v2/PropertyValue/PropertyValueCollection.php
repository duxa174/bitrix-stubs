<?php

namespace Bitrix\Catalog\v2\PropertyValue;

/**
 * Class PropertyValueCollection
 *
 * @package Bitrix\Catalog\v2\PropertyValue
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class PropertyValueCollection extends \Bitrix\Catalog\v2\BaseCollection
{
    /** @var \Bitrix\Catalog\v2\PropertyValue\PropertyValueFactory */
    protected $propertyValueFactory;
    public function __construct(\Bitrix\Catalog\v2\PropertyValue\PropertyValueFactory $propertyValueFactory)
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|\Bitrix\Catalog\v2\PropertyValue\HasPropertyValueCollection|null $parent
     * @return \Bitrix\Catalog\v2\BaseCollection
     */
    public function setParent(?\Bitrix\Catalog\v2\BaseEntity $parent) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    /**
     * @param mixed $values
     * @return $this
     */
    public function setValues($values) : self
    {
    }
    /**
     * @param array $values
     * @return $this
     *
     * @internal
     */
    public function initValues($values) : self
    {
    }
    public function getValues()
    {
    }
    public function findByValue($value) : ?\Bitrix\Catalog\v2\BaseEntity
    {
    }
    private function isPropertyMultiple() : bool
    {
    }
    private function prepareValues($values) : array
    {
    }
    private function removeOldValues(array $values) : void
    {
    }
    private function setValue($fields) : void
    {
    }
}