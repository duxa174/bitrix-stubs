<?php

namespace Bitrix\Sale\Helpers\Admin;

/**
 * Class SkuPropsV1
 * @package Bitrix\Sale\Helpers\Admin
 * Helper class to find offer id by sku properties
 */
class SkuProps
{
    /**
     * @param array $skuProps
     * @param array $offersIds
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function filterByProps(array $skuProps, array $offersIds = array())
    {
    }
    /**
     * @param array $skuProps
     * @param array $skuOrder
     * @param $changedSkuId
     * @return array
     */
    protected static function extractRequiredProps(array $skuProps, array $skuOrder, $changedSkuId)
    {
    }
    /**
     * @param array $skuProps
     * @param array $skuOrder
     * @param $changedSkuId
     * @return array
     */
    protected static function extractOptionalProps(array $skuProps, array $skuOrder, $changedSkuId)
    {
    }
    /**
     * @param array $skuProps
     * @param int $productId
     * @param array $skuOrder
     * @param $changedSkuId
     * @return int|mixed
     * @internal
     */
    public static function getProductId(array $skuProps, $productId, array $skuOrder, $changedSkuId)
    {
    }
    /**
     * @param int|array $productIds
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function getOffersIds($productIds)
    {
    }
    /**
     * @param $propId
     * @param $currentValue
     * @param array $offersIds
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function getSkuPropValues($propId, $currentValue, array &$offersIds)
    {
    }
    /**
     * @param array $params
     * @return array
     * @internal
     */
    public static function getPossibleSkuPropsValues(array $params)
    {
    }
}