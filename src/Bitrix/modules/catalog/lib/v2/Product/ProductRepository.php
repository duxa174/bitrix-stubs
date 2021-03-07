<?php

namespace Bitrix\Catalog\v2\Product;

/**
 * Class ProductRepository
 *
 * @package Bitrix\Catalog\v2\Product
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class ProductRepository extends \Bitrix\Catalog\v2\BaseIblockElementRepository implements \Bitrix\Catalog\v2\Product\ProductRepositoryContract
{
    /** @var \Bitrix\Catalog\v2\Product\ProductFactory */
    protected $factory;
    /**
     * ProductRepository constructor.
     *
     * @param \Bitrix\Catalog\v2\Product\ProductFactory $factory
     * @param \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo
     */
    public function __construct(\Bitrix\Catalog\v2\Product\ProductFactory $factory, \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo)
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
}