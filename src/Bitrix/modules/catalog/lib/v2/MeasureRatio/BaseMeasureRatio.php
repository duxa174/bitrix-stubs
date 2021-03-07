<?php

namespace Bitrix\Catalog\v2\MeasureRatio;

/**
 * Class BaseMeasureRatio
 *
 * @package Bitrix\Catalog\v2\MeasureRatio
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseMeasureRatio extends \Bitrix\Catalog\v2\BaseEntity
{
    public function __construct(\Bitrix\Catalog\v2\MeasureRatio\MeasureRatioRepositoryContract $measureRatioRepository)
    {
    }
    public function setParentCollection(?\Bitrix\Catalog\v2\BaseCollection $collection) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function setRatio(float $ratio) : self
    {
    }
    public function getRatio() : string
    {
    }
    public function isDefault() : bool
    {
    }
    public function setDefault(bool $state = true) : self
    {
    }
    public function setProductId(int $productId) : self
    {
    }
    public function getProductId() : int
    {
    }
    protected function getFieldsMap() : array
    {
    }
}