<?php

namespace Bitrix\Sale;

class BasketComponentHelper
{
    static $cacheRatio = array();
    static $cacheRatioData = array();
    /**
     * @param int $fuserId
     * @param string|null $siteId
     *
     * @return int|float
     */
    public static function getFUserBasketQuantity($fuserId, $siteId = null)
    {
    }
    /**
     * @param int $fuserId
     * @param string|null $siteId
     *
     * @return int|float
     */
    public static function getFUserBasketPrice($fuserId, $siteId = null)
    {
    }
    /**
     * @param int         $fUserId
     * @param int|float   $quantity
     * @param string|null $siteId
     * @return void
     */
    protected static function setFUserBasketQuantity($fUserId, $quantity, $siteId = null)
    {
    }
    /**
     * @param      $fUserId
     * @param null $siteId
     */
    public static function clearFUserBasketQuantity($fUserId, $siteId = null)
    {
    }
    /**
     * @param int         $fUserId
     * @param int|float   $price
     * @param string|null $siteId
     * @return void
     */
    protected static function setFUserBasketPrice($fUserId, $price, $siteId = null)
    {
    }
    /**
     * @param      $fUserId
     * @param null $siteId
     */
    public static function clearFUserBasketPrice($fUserId, $siteId = null)
    {
    }
    /**
     * @param int $fuserId
     * @param string|null $siteId
     * @param array|null $basketList
     *
     * @return void
     */
    public static function updateFUserBasketPrice($fuserId, $siteId = null, $basketList = null)
    {
    }
    /**
     * @param int $fuserId
     * @param string|null $siteId
     * @param array|null $basketList
     *
     * @return void
     */
    public static function updateFUserBasketQuantity($fuserId, $siteId = null, $basketList = null)
    {
    }
    /**
     * @param int $fuserId
     * @param string|null $siteId
     *
     * @return void
     */
    public static function updateFUserBasket($fuserId, $siteId = null)
    {
    }
    /**
     * @param int $fuserId
     * @param string|null $siteId
     *
     * @return array
     */
    protected static function getFUserBasketList($fuserId, $siteId = null)
    {
    }
    /**
     * @param int $fuserId
     * @param array $basketList
     *
     * @return array
     */
    protected static function calculatePrice($fuserId, array $basketList)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleBasketItemEntitySaved(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\Event $event
     *
     * @return \Bitrix\Main\EventResult
     */
    public static function onSaleBasketItemDeleted(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Basket          $basket
     * @param BasketItem|null $item
     *
     * @return Result
     * @throws Main\LoaderException
     */
    public static function checkQuantityRatio(\Bitrix\Sale\Basket $basket, \Bitrix\Sale\BasketItem $item = null)
    {
    }
    /**
     * @param Basket          $basket
     * @param BasketItem|null $item
     *
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws \Exception
     */
    public static function correctQuantityRatio(\Bitrix\Sale\Basket $basket, \Bitrix\Sale\BasketItem $item = null)
    {
    }
    /**
     * @param Basket $basket
     * @param BasketItem|null $item
     *
     * @return Result
     * @throws Main\LoaderException
     */
    public static function getRatio(\Bitrix\Sale\Basket $basket, \Bitrix\Sale\BasketItem $item = null)
    {
    }
    /**
     * @param Basket $basket
     *
     * @return int|float
     */
    protected static function calculateBasketCost(\Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getRatioCache()
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getRatioDataCache()
    {
    }
}