<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ProviderBuilder
 * @package Bitrix\Sale\Internals
 */
class ProviderBuilder extends \Bitrix\Sale\Internals\ProviderBuilderBase
{
    /**
     * @param Sale\BasketItemBase $basketItem
     */
    public function addProductByBasketItem(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * @param array $basketItemProductData
     */
    public function addProductByBasketItemProductData(array $basketItemProductData)
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
     * @throws Main\ObjectNotFoundException
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