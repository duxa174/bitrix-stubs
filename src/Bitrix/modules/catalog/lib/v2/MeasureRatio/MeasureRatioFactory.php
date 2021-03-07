<?php

namespace Bitrix\Catalog\v2\MeasureRatio;

/**
 * Class MeasureRatioFactory
 *
 * @package Bitrix\Catalog\v2\MeasureRatio
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class MeasureRatioFactory
{
    public const SIMPLE_MEASURE_RATIO = \Bitrix\Catalog\v2\MeasureRatio\SimpleMeasureRatio::class;
    public const MEASURE_RATIO_COLLECTION = \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection::class;
    protected $container;
    /**
     * MeasureRatioFactory constructor.
     *
     * @param \Bitrix\Catalog\v2\IoC\ContainerContract $container
     */
    public function __construct(\Bitrix\Catalog\v2\IoC\ContainerContract $container)
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\MeasureRatio\BaseMeasureRatio
     */
    public function createEntity() : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|null $parent
     * @return \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection
     */
    public function createCollection(\Bitrix\Catalog\v2\BaseEntity $parent = null) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
}