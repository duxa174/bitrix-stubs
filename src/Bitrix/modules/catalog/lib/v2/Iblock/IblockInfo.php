<?php

namespace Bitrix\Catalog\v2\Iblock;

/**
 * Class IblockInfo
 *
 * @package Bitrix\Catalog\v2\Iblock
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class IblockInfo
{
    private $iblock;
    public function __construct(int $iblockId)
    {
    }
    public function toArray() : array
    {
    }
    public function getCatalogType()
    {
    }
    // ToDo all these wrappers
    public function getProductIblockId() : int
    {
    }
    public function hasSubscription() : bool
    {
    }
    public function canHaveSku() : bool
    {
    }
    public function getSkuIblockId() : ?int
    {
    }
    public function getSkuPropertyId() : ?int
    {
    }
}