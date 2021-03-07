<?php

namespace Bitrix\Catalog\v2\IoC;

/**
 * Class Dependency
 *
 * @package Bitrix\Catalog\v2\IoC
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
final class Dependency
{
    public const CONTAINER = \Bitrix\Catalog\v2\IoC\ContainerContract::class;
    public const IBLOCK_INFO = \Bitrix\Catalog\v2\Iblock\IblockInfo::class;
    public const PRODUCT_CONVERTER = \Bitrix\Catalog\v2\Converter\ProductConverter::class;
    public const PRODUCT_FACTORY = \Bitrix\Catalog\v2\Product\ProductFactory::class;
    public const PRODUCT_REPOSITORY = \Bitrix\Catalog\v2\Product\ProductRepositoryContract::class;
    public const SECTION_FACTORY = \Bitrix\Catalog\v2\Section\SectionFactory::class;
    public const SECTION_REPOSITORY = \Bitrix\Catalog\v2\Section\SectionRepositoryContract::class;
    public const SKU_FACTORY = \Bitrix\Catalog\v2\Sku\SkuFactory::class;
    public const SKU_REPOSITORY = \Bitrix\Catalog\v2\Sku\SkuRepositoryContract::class;
    public const PROPERTY_FACTORY = \Bitrix\Catalog\v2\Property\PropertyFactory::class;
    public const PROPERTY_REPOSITORY = \Bitrix\Catalog\v2\Property\PropertyRepositoryContract::class;
    public const PROPERTY_VALUE_FACTORY = \Bitrix\Catalog\v2\PropertyValue\PropertyValueFactory::class;
    public const PRICE_FACTORY = \Bitrix\Catalog\v2\Price\PriceFactory::class;
    public const PRICE_REPOSITORY = \Bitrix\Catalog\v2\Price\PriceRepositoryContract::class;
    public const MEASURE_RATIO_FACTORY = \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioFactory::class;
    public const MEASURE_RATIO_REPOSITORY = \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioRepositoryContract::class;
    private function __construct()
    {
    }
}