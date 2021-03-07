<?php

namespace Bitrix\Catalog\v2\MeasureRatio;

/**
 * Interface HasMeasureRatioCollection
 *
 * @package Bitrix\Catalog\v2\MeasureRatio
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface HasMeasureRatioCollection
{
    public function getMeasureRatioCollection() : \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection;
    public function setMeasureRatioCollection(\Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection $measureRatioCollection);
}