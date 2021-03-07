<?php

namespace Bitrix\Catalog\v2\Product;

/**
 * Class BaseProduct
 *
 * @package Bitrix\Catalog\v2\Product
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseProduct extends \Bitrix\Catalog\v2\BaseIblockElementEntity implements \Bitrix\Catalog\v2\Section\HasSectionCollection, \Bitrix\Catalog\v2\Sku\HasSkuCollection
{
    /** @var \Bitrix\Catalog\v2\Section\SectionRepositoryContract */
    protected $sectionRepository;
    /** @var \Bitrix\Catalog\v2\Sku\SkuRepositoryContract */
    protected $skuRepository;
    /** @var \Bitrix\Catalog\v2\Sku\SkuFactory */
    protected $skuFactory;
    /** @var \Bitrix\Catalog\v2\Section\SectionCollection|\Bitrix\Catalog\v2\Section\Section[] */
    protected $sectionCollection;
    /** @var \Bitrix\Catalog\v2\Sku\SkuCollection|\Bitrix\Catalog\v2\Sku\Sku[] */
    protected $skuCollection;
    public function __construct(\Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo, \Bitrix\Catalog\v2\Product\ProductRepositoryContract $productRepository, \Bitrix\Catalog\v2\Property\PropertyRepositoryContract $propertyRepository, \Bitrix\Catalog\v2\Section\SectionRepositoryContract $sectionRepository, \Bitrix\Catalog\v2\Sku\SkuRepositoryContract $skuRepository, \Bitrix\Catalog\v2\Sku\SkuFactory $skuFactory)
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Section\SectionCollection|\Bitrix\Catalog\v2\Section\Section[]
     */
    public function getSectionCollection() : \Bitrix\Catalog\v2\Section\SectionCollection
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Section\SectionCollection|\Bitrix\Catalog\v2\Section\Section[]
     */
    protected function loadSectionCollection() : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\Section\SectionCollection $sectionCollection
     * @return \Bitrix\Catalog\v2\Product\BaseProduct
     *
     * @internal
     */
    public function setSectionCollection(\Bitrix\Catalog\v2\Section\SectionCollection $sectionCollection) : self
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Sku\SkuCollection|\Bitrix\Catalog\v2\Sku\BaseSku[]
     */
    public function getSkuCollection() : \Bitrix\Catalog\v2\Sku\SkuCollection
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Sku\SkuCollection|\Bitrix\Catalog\v2\Sku\BaseSku[]
     */
    protected function loadSkuCollection() : \Bitrix\Catalog\v2\Sku\SkuCollection
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\Sku\SkuCollection $skuCollection
     * @return \Bitrix\Catalog\v2\Product\BaseProduct
     *
     * @internal
     */
    public function setSkuCollection(\Bitrix\Catalog\v2\Sku\SkuCollection $skuCollection) : self
    {
    }
    public function delete() : \Bitrix\Main\Result
    {
    }
}