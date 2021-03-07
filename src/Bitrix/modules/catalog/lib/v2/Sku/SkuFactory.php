<?php

namespace Bitrix\Catalog\v2\Sku;

/**
 * Class SkuFactory
 *
 * @package Bitrix\Catalog\v2\Sku
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class SkuFactory extends \Bitrix\Catalog\v2\BaseIblockElementFactory
{
    public const SIMPLE_SKU = \Bitrix\Catalog\v2\Sku\SimpleSku::class;
    public const SKU = \Bitrix\Catalog\v2\Sku\Sku::class;
    public const SKU_COLLECTION = \Bitrix\Catalog\v2\Sku\SkuCollection::class;
    /**
     * @param string|null $entityClass
     * @return \Bitrix\Catalog\v2\Sku\BaseSku
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function createEntity(string $entityClass = null) : \Bitrix\Catalog\v2\BaseIblockElementEntity
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|null $parent
     * @return \Bitrix\Catalog\v2\Sku\SkuCollection
     */
    public function createCollection(\Bitrix\Catalog\v2\BaseEntity $parent = null) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
}