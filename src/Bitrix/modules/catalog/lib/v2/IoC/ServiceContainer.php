<?php

namespace Bitrix\Catalog\v2\IoC;

/**
 * Class ServiceContainer
 *
 * @package Bitrix\Catalog\v2\IoC
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
final class ServiceContainer
{
    /** @var \Bitrix\Catalog\v2\IoC\ContainerContract */
    private static $container;
    private function __construct()
    {
    }
    public static function getContainer() : \Bitrix\Catalog\v2\IoC\ContainerContract
    {
    }
    public static function get($id, array $args = [])
    {
    }
    /**
     * @param int $iblockId
     * @return \Bitrix\Catalog\v2\Iblock\IblockInfo|null
     */
    public static function getIblockInfo(int $iblockId) : ?\Bitrix\Catalog\v2\Iblock\IblockInfo
    {
    }
    /**
     * @param int $iblockId
     * @return \Bitrix\Catalog\v2\Product\ProductFactory|null
     */
    public static function getProductFactory(int $iblockId) : ?\Bitrix\Catalog\v2\Product\ProductFactory
    {
    }
    /**
     * @param int $iblockId
     * @return \Bitrix\Catalog\v2\Product\ProductRepositoryContract|null
     */
    public static function getProductRepository(int $iblockId) : ?\Bitrix\Catalog\v2\Product\ProductRepositoryContract
    {
    }
    /**
     * @param int $iblockId
     * @return \Bitrix\Catalog\v2\Sku\SkuFactory|null
     */
    public static function getSkuFactory(int $iblockId) : ?\Bitrix\Catalog\v2\Sku\SkuFactory
    {
    }
    /**
     * @param int $iblockId
     * @return \Bitrix\Catalog\v2\Sku\SkuRepositoryContract|null
     */
    public static function getSkuRepository(int $iblockId) : ?\Bitrix\Catalog\v2\Sku\SkuRepositoryContract
    {
    }
}