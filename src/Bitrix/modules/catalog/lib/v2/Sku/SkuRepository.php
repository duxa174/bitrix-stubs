<?php

namespace Bitrix\Catalog\v2\Sku;

/**
 * Class SkuRepository
 *
 * @package Bitrix\Catalog\v2\Sku
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class SkuRepository extends \Bitrix\Catalog\v2\BaseIblockElementRepository implements \Bitrix\Catalog\v2\Sku\SkuRepositoryContract
{
    /** @var \Bitrix\Catalog\v2\Sku\SkuFactory */
    protected $factory;
    /** @var \Bitrix\Catalog\v2\Product\ProductRepositoryContract */
    protected $productRepository;
    /**
     * SkuRepository constructor.
     *
     * @param \Bitrix\Catalog\v2\Sku\SkuFactory $factory
     * @param \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo
     * @param \Bitrix\Catalog\v2\Product\ProductRepositoryContract $productRepository
     */
    public function __construct(\Bitrix\Catalog\v2\Sku\SkuFactory $factory, \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo, \Bitrix\Catalog\v2\Product\ProductRepositoryContract $productRepository)
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\Product\BaseProduct $product
     * @return \Bitrix\Catalog\v2\Sku\SkuCollection|\Bitrix\Catalog\v2\Sku\BaseSku[]
     */
    public function getCollectionByProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product) : \Bitrix\Catalog\v2\Sku\SkuCollection
    {
    }
    public function getEntitiesBy($params) : array
    {
    }
    protected function getAdditionalFilter() : array
    {
    }
    protected function getAdditionalProductFilter() : array
    {
    }
    protected function makeEntity(array $fields) : \Bitrix\Catalog\v2\BaseIblockElementEntity
    {
    }
    private function loadParentProducts(\Bitrix\Catalog\v2\Sku\BaseSku ...$skuItems) : void
    {
    }
    private function getSkuByProductMap(array $skuItems) : array
    {
    }
    private function getSkuIteratorForProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product, array $params = []) : \Generator
    {
    }
}