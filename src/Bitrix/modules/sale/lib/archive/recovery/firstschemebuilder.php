<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * Contain realization of Archive\Order object creation from archive.
 * Value of archive version is "1" or "2".
 * 
 * @package Bitrix\Sale\Archive\Recovery
 */
class FirstSchemeBuilder extends \Bitrix\Sale\Archive\Recovery\Builder
{
    public function tryUnpack()
    {
    }
    public function buildOrder()
    {
    }
    /**
     * @param array $propertyCollectionArchived
     *
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function riseOrderProperties(array $propertyCollectionArchived = [])
    {
    }
    /**
     * Load basket from archive.
     *
     * @param array $archivedBasketItems
     *
     * @return array $basketItemsMap
     */
    protected function riseBasket(array $archivedBasketItems = [])
    {
    }
    /**
     * Load basket items with properties from archive.
     *
     * @param Sale\BasketItem $item
     * @param array $data
     *
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function riseBasketItem(&$item, $data = array())
    {
    }
    /**
     * Load payments from archive.
     *
     * @param array $paymentCollectionArchived
     *
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function risePayment(array $paymentCollectionArchived)
    {
    }
    /**
     * Load shipments with items from archive.
     * 
     * @param array $shipmentCollectionArchived
     * @param array $basketItemsMap
     * @param array $itemsStoeMap
     *
     * @throws Main\NotSupportedException
     */
    protected function riseShipment(array $shipmentCollectionArchived, array $basketItemsMap, array $itemsStoreMap = [])
    {
    }
    /**
     * Return discount's array from archive.
     * The array includes information about discounts of base order.
     * 
     * @param array $discountData
     *
     * @return mixed
     */
    protected function riseDiscount($discountData)
    {
    }
    /**
     * Prepare discount price's array from restored entities.
     *
     * @return mixed
     */
    protected function prepareDiscountPrices()
    {
    }
    /**
     * Prepare discount result's array from restored entities.
     *
     * @param $discountData
     *
     * @return mixed
     */
    protected function prepareDiscountResult($discountData)
    {
    }
    /**
     * Prepare discount data
     *
     * @param $dataRow
     *
     * @return array
     */
    protected function prepareDiscountOrderData($dataRow)
    {
    }
    /**
     * Prepare discount description array
     *
     * @param $discounts
     * @param $discountResult
     *
     * @return mixed
     */
    protected function prepareDiscountList(array $discounts, array $discountResult)
    {
    }
    /**
     * @param array $discountResult
     *
     * @return array
     */
    protected function getAppliedDiscountIds(array $discountResult)
    {
    }
}