<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * Contain realization of Archive\Order object creation from archive.
 * Value of archive version is "1".
 * 
 * @package Bitrix\Sale\Archive\Recovery
 *
 * @deprecated No longer used by internal code and not recommended.
 */
class Version1 extends \Bitrix\Sale\Archive\Recovery\Base
{
    /**
     * Manage loading order from archive.
     * 
     * @param $archivedOrder
     *
     * @return Sale\Order
     */
    protected function loadOrder($archivedOrder)
    {
    }
    /**
     * Load order with properties from archive.
     * 
     * @param array $archivedOrder
     *
     * @return mixed
     */
    protected function riseOrder($archivedOrder)
    {
    }
    /**
     * Load basket from archive.
     *
     * @param array $archivedOrder
     *
     * @return array $basketItemsMap
     */
    protected function riseBasket($archivedOrder)
    {
    }
    /**
     * Load basket items with properties from archive.
     *
     * @param Sale\BasketItem $item
     * @param array $data
     *
     *@return array $basketItemsMap
     */
    protected function riseBasketItem(&$item, $data = array())
    {
    }
    /**
     * Load payments from archive.
     * 
     * @param array $archivedOrder
     *
     * @throws Main\ObjectNotFoundException
     */
    protected function risePayment($archivedOrder)
    {
    }
    /**
     * Load shipments with items from archive.
     * 
     * @param array $archivedOrder
     * @param array $basketItemsMap
     *
     * @throws Main\NotSupportedException
     */
    protected function riseShipment($archivedOrder, $basketItemsMap)
    {
    }
    /**
     * Return discount's array from archive.
     * The array includes information about discounts of base order.
     * 
     * @param array $archivedOrder
     *
     * @return mixed
     */
    protected function riseDiscount($archivedOrder)
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