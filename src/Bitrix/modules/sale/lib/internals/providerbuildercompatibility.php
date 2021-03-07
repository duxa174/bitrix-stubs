<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ProviderBuilderCompatibility
 * @package Bitrix\Sale\Internals
 */
class ProviderBuilderCompatibility extends \Bitrix\Sale\Internals\ProviderBuilderBase
{
    /**
     * @param $providerClass
     * @param $context
     *
     * @return ProviderBuilderBase
     */
    public static function create($providerClass, $context)
    {
    }
    /**
     * @param Sale\BasketItemBase $basketItem
     */
    public function addProductByBasketItem(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     */
    public function addProductByShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param array $shipmentProductData
     *
     * @return bool
     */
    public function addProductByShipmentProductData(array $shipmentProductData)
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $productTryShipList
     *
     * @return Sale\Result
     */
    public function setItemsResultAfterTryShip(\Bitrix\Sale\Internals\PoolQuantity $pool, array $productTryShipList)
    {
    }
    /**
     * @return string
     */
    public function getTransferClassName()
    {
    }
}