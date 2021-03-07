<?php

namespace Bitrix\Catalog\v2\Sku;

/**
 * Class BaseSku
 *
 * @package Bitrix\Catalog\v2\Sku
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseSku extends \Bitrix\Catalog\v2\BaseIblockElementEntity implements \Bitrix\Catalog\v2\Price\HasPriceCollection, \Bitrix\Catalog\v2\MeasureRatio\HasMeasureRatioCollection
{
    /** @var \Bitrix\Catalog\v2\Price\PriceCollection|\Bitrix\Catalog\v2\Price\BasePrice[] */
    protected $priceCollection;
    /** @var \Bitrix\Catalog\v2\Price\PriceRepositoryContract */
    protected $priceRepository;
    /** @var \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioRepositoryContract */
    protected $measureRatioRepository;
    /** @var \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection|\Bitrix\Catalog\v2\MeasureRatio\BaseMeasureRatio[] */
    protected $measureRatioCollection;
    public function __construct(\Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo, \Bitrix\Catalog\v2\Sku\SkuRepositoryContract $skuRepository, \Bitrix\Catalog\v2\Property\PropertyRepositoryContract $propertyRepository, \Bitrix\Catalog\v2\Price\PriceRepositoryContract $priceRepository, \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioRepositoryContract $measureRatioRepository)
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Price\PriceCollection|\Bitrix\Catalog\v2\Price\BasePrice[]
     */
    public function getPriceCollection() : \Bitrix\Catalog\v2\Price\PriceCollection
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Price\PriceCollection|\Bitrix\Catalog\v2\Price\BasePrice[]
     */
    protected function loadPriceCollection() : \Bitrix\Catalog\v2\Price\PriceCollection
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\Price\PriceCollection $priceCollection
     * @return \Bitrix\Catalog\v2\Sku\BaseSku
     *
     * @internal
     */
    public function setPriceCollection(\Bitrix\Catalog\v2\Price\PriceCollection $priceCollection) : self
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection|\Bitrix\Catalog\v2\MeasureRatio\BaseMeasureRatio[]
     */
    public function getMeasureRatioCollection() : \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection|\Bitrix\Catalog\v2\MeasureRatio\BaseMeasureRatio[]
     */
    protected function loadMeasureRatioCollection() : \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection $measureRatioCollection
     * @return \Bitrix\Catalog\v2\Sku\BaseSku
     *
     * @internal
     */
    public function setMeasureRatioCollection(\Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection $measureRatioCollection) : self
    {
    }
}