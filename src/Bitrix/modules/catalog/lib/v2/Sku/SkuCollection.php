<?php

namespace Bitrix\Catalog\v2\Sku;

/**
 * Class SkuCollection
 *
 * @package Bitrix\Catalog\v2\Sku
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class SkuCollection extends \Bitrix\Catalog\v2\BaseCollection
{
    /** @var ContainerContract */
    protected $container;
    /** @var \Bitrix\Catalog\v2\Sku\SkuFactory */
    protected $factory;
    public function __construct(\Bitrix\Catalog\v2\IoC\ContainerContract $container, \Bitrix\Catalog\v2\Sku\SkuFactory $factory)
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|\Bitrix\Catalog\v2\Sku\HasSkuCollection|null $parent
     * @return \Bitrix\Catalog\v2\BaseCollection
     * @throws \Bitrix\Main\InvalidOperationException
     */
    public function setParent(?\Bitrix\Catalog\v2\BaseEntity $parent) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    public function create() : \Bitrix\Catalog\v2\Sku\BaseSku
    {
    }
    protected function createEntity() : \Bitrix\Catalog\v2\Sku\BaseSku
    {
    }
    protected function getAlreadyLoadedFilter() : array
    {
    }
}