<?php

namespace Bitrix\Catalog\v2\Price;

/**
 * Class PriceFactory
 *
 * @package Bitrix\Catalog\v2\Price
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class PriceFactory
{
    public const SIMPLE_PRICE = \Bitrix\Catalog\v2\Price\SimplePrice::class;
    public const QUANTITY_DEPENDENT_PRICE = \Bitrix\Catalog\v2\Price\QuantityDependentPrice::class;
    public const PRICE_COLLECTION = \Bitrix\Catalog\v2\Price\PriceCollection::class;
    protected $container;
    /**
     * PriceFactory constructor.
     *
     * @param \Bitrix\Catalog\v2\IoC\ContainerContract $container
     */
    public function __construct(\Bitrix\Catalog\v2\IoC\ContainerContract $container)
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Price\BasePrice
     */
    public function createEntity() : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|null $parent
     * @return \Bitrix\Catalog\v2\Price\PriceCollection
     */
    public function createCollection(\Bitrix\Catalog\v2\BaseEntity $parent = null) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
}