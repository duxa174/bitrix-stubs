<?php

namespace Bitrix\Catalog\v2\Product;

/**
 * Class ProductFactory
 *
 * @package Bitrix\Catalog\v2\Product
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class ProductFactory extends \Bitrix\Catalog\v2\BaseIblockElementFactory
{
    public const PRODUCT = \Bitrix\Catalog\v2\Product\Product::class;
    /**
     * @param string $entityClass
     * @return \Bitrix\Catalog\v2\Product\BaseProduct
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function createEntity(string $entityClass = self::PRODUCT) : \Bitrix\Catalog\v2\BaseIblockElementEntity
    {
    }
}