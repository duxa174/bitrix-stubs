<?php

namespace Bitrix\Catalog\v2\MeasureRatio;

/**
 * Interface MeasureRatioRepositoryContract
 *
 * @package Bitrix\Catalog\v2\MeasureRatio
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface MeasureRatioRepositoryContract extends \Bitrix\Catalog\v2\RepositoryContract
{
    public function getCollectionByParent(\Bitrix\Catalog\v2\Sku\BaseSku $sku) : \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection;
}