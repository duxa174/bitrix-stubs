<?php

namespace Bitrix\Catalog\v2\Sku;

/**
 * Interface SkuRepositoryContract
 *
 * @package Bitrix\Catalog\v2\Sku
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface SkuRepositoryContract extends \Bitrix\Catalog\v2\RepositoryContract
{
    public function getCollectionByProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product) : \Bitrix\Catalog\v2\Sku\SkuCollection;
}