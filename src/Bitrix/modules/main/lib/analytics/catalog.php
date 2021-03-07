<?php

namespace Bitrix\Main\Analytics;

/**
 * @package bitrix
 * @subpackage main
 */
class Catalog
{
    protected static $cookieLogName = 'RCM_PRODUCT_LOG';
    // basket (sale:OnSaleBasketItemSaved)
    public static function catchCatalogBasket(\Bitrix\Main\Event $event)
    {
    }
    // order detailed info (sale:OnSaleOrderSaved)
    public static function catchCatalogOrder(\Bitrix\Main\Event $event)
    {
    }
    // order payment (sale:OnSaleOrderPaid)
    public static function catchCatalogOrderPayment(\Bitrix\Main\Event $event)
    {
    }
    public static function getOrderInfo($orderId)
    {
    }
    protected function getBxUserId()
    {
    }
    public static function normalizePhoneNumber($phone)
    {
    }
    public static function isOn()
    {
    }
    public static function getProductIdsByOfferIds($offerIds)
    {
    }
    /**
     * @param array $log
     *
     * @return string
     */
    public static function encodeProductLog(array $log)
    {
    }
    /**
     * @param $log
     *
     * @return array
     */
    public static function decodeProductLog($log)
    {
    }
    /**
     * @return string
     */
    public static function getCookieLogName()
    {
    }
}