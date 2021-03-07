<?php

namespace Bitrix\Catalog\v2\PropertyValue;

/**
 * Class PropertyValueFactory
 *
 * @package Bitrix\Catalog\v2\PropertyValue
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class PropertyValueFactory
{
    public const PROPERTY_VALUE = \Bitrix\Catalog\v2\PropertyValue\PropertyValue::class;
    public const PROPERTY_VALUE_COLLECTION = \Bitrix\Catalog\v2\PropertyValue\PropertyValueCollection::class;
    protected $container;
    /**
     * PropertyFactory constructor.
     *
     * @param \Bitrix\Catalog\v2\IoC\ContainerContract $container
     */
    public function __construct(\Bitrix\Catalog\v2\IoC\ContainerContract $container)
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\BaseEntity
     */
    public function createEntity() : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|null $parent
     * @return \Bitrix\Catalog\v2\BaseCollection
     */
    public function createCollection(\Bitrix\Catalog\v2\BaseEntity $parent = null) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
}