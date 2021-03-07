<?php

namespace Bitrix\Catalog\v2\Converter;

/**
 * Class ProductConverter
 *
 * @package Bitrix\Catalog\v2\Converter
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class ProductConverter
{
    public const SIMPLE_PRODUCT = 'SIMPLE_PRODUCT';
    public const SKU_PRODUCT = 'SKU_PRODUCT';
    private $container;
    public function __construct(\Bitrix\Catalog\v2\IoC\ContainerContract $container)
    {
    }
    public function convert(\Bitrix\Catalog\v2\Product\BaseProduct $product, string $destinationType) : \Bitrix\Main\Result
    {
    }
    protected function convertSimpleProductToSkuProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product) : \Bitrix\Main\Result
    {
    }
    protected function convertSimpleSkuToSku(\Bitrix\Catalog\v2\Sku\BaseSku $simpleItem) : \Bitrix\Catalog\v2\Sku\BaseSku
    {
    }
    // ToDo currently doesn't work properly because of different calculation handlers of old api
    protected function convertSkuToSimpleProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product) : \Bitrix\Main\Result
    {
    }
    protected function convertSkuToSimpleSku(\Bitrix\Catalog\v2\Sku\BaseSku $skuItem) : \Bitrix\Catalog\v2\Sku\BaseSku
    {
    }
}