<?php

namespace Bitrix\Catalog\v2\Sku;

/**
 * Class Sku
 *
 * @package Bitrix\Catalog\v2\Sku
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class Sku extends \Bitrix\Catalog\v2\Sku\BaseSku
{
    public function __construct(\Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo, \Bitrix\Catalog\v2\Sku\SkuRepositoryContract $skuRepository, \Bitrix\Catalog\v2\Property\PropertyRepositoryContract $propertyRepository, \Bitrix\Catalog\v2\Price\PriceRepositoryContract $priceRepository, \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioRepositoryContract $measureRatioRepository)
    {
    }
    public function setParentCollection(?\Bitrix\Catalog\v2\BaseCollection $collection) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    /**
     * @return $this
     * @internal
     */
    public function checkProductLink() : self
    {
    }
    protected function linkProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product) : self
    {
    }
    protected function unlinkProduct() : self
    {
    }
    protected function getProductLinkProperty() : ?\Bitrix\Catalog\v2\Property\Property
    {
    }
    protected function setProductLinkProperty(int $productId) : self
    {
    }
    protected function unsetProductLinkProperty() : self
    {
    }
    public function saveInternalEntity() : \Bitrix\Main\Result
    {
    }
}