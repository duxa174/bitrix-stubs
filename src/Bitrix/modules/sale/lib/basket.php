<?php

namespace Bitrix\Sale;

/**
 * Class Basket
 * @package Bitrix\Sale
 */
class Basket extends \Bitrix\Sale\BasketBase
{
    const BASKET_DELETE_LIMIT = 2000;
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result|mixed
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $idOrder
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     */
    public static function deleteNoDemand($idOrder)
    {
    }
    /**
     * @param int $days
     *
     * @return bool
     */
    public static function deleteOld($days)
    {
    }
    /**
     * @param $days
     * @param int $speed
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function deleteOldAgent($days, $speed = 0)
    {
    }
    /**
     * @return array|bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     */
    // must be moved to notify
    public function getListOfFormatText()
    {
    }
    /**
     * Save basket
     *
     * @return Result
     */
    public function save()
    {
    }
    /**
     * @param array $itemValues
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     */
    protected function deleteInternal(array $itemValues)
    {
    }
    /**
     * @param $itemValues
     * @throws Main\ArgumentException
     * @return void
     */
    protected function callEventOnSaleBasketItemDeleted($itemValues)
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @return BasketItemBase
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public function deleteItem($index)
    {
    }
}