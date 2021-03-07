<?php

namespace Bitrix\Catalog\v2\Price;

/**
 * Interface PriceRepositoryContract
 *
 * @package Bitrix\Catalog\v2\Price
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface PriceRepositoryContract extends \Bitrix\Catalog\v2\RepositoryContract
{
    public function getCollectionByParent(\Bitrix\Catalog\v2\Sku\BaseSku $sku) : \Bitrix\Catalog\v2\Price\PriceCollection;
}