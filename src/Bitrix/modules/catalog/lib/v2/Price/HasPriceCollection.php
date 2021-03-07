<?php

namespace Bitrix\Catalog\v2\Price;

/**
 * Interface HasPriceCollection
 *
 * @package Bitrix\Catalog\v2\Price
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface HasPriceCollection
{
    public function getPriceCollection() : \Bitrix\Catalog\v2\Price\PriceCollection;
    public function setPriceCollection(\Bitrix\Catalog\v2\Price\PriceCollection $priceCollection);
}