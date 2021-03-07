<?php

namespace Bitrix\Catalog\v2\MeasureRatio;

/**
 * Class MeasureRatioCollection
 *
 * @package Bitrix\Catalog\v2\MeasureRatio
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class MeasureRatioCollection extends \Bitrix\Catalog\v2\BaseCollection
{
    /** @var \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioFactory */
    protected $factory;
    public function __construct(\Bitrix\Catalog\v2\MeasureRatio\MeasureRatioFactory $factory)
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|\Bitrix\Catalog\v2\MeasureRatio\HasMeasureRatioCollection|null $parent
     * @return \Bitrix\Catalog\v2\BaseCollection
     */
    public function setParent(?\Bitrix\Catalog\v2\BaseEntity $parent) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    public function findDefault() : ?\Bitrix\Catalog\v2\MeasureRatio\BaseMeasureRatio
    {
    }
    // ToDo set product id by default? in prices too?
    public function create() : \Bitrix\Catalog\v2\MeasureRatio\BaseMeasureRatio
    {
    }
    public function setDefault(float $ratio) : \Bitrix\Catalog\v2\MeasureRatio\BaseMeasureRatio
    {
    }
}