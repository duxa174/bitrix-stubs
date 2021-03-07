<?php

namespace Bitrix\Seo;

/**
 * Class AdvSession
 *
 * Events handler for managing users came from yandex.direct ad
 *
 * @package Bitrix\Seo
 **/
class AdvSession
{
    const URL_PARAM_CAMPAIGN = 'bxydcampaign';
    const URL_PARAM_CAMPAIGN_VALUE = '{campaign_id}';
    const URL_PARAM_BANNER = 'bxydbanner';
    const URL_PARAM_BANNER_VALUE = '{banner_id}';
    protected static $orderHandlerCalled = array();
    public static function checkSession()
    {
    }
    public static function isSession()
    {
    }
    public static function getSession()
    {
    }
    public static function onOrderSave($orderId, $orderFields, $orderData, $isNew)
    {
    }
    public static function onBasketOrder($orderId)
    {
    }
    public static function onSalePayOrder($orderId, $val)
    {
    }
    public static function onSaleDeductOrder($orderId, $val)
    {
    }
    public static function onSaleDeliveryOrder($orderId, $val)
    {
    }
    public static function onSaleStatusOrder($orderId, $status)
    {
    }
    protected static function checkSessionOrder($orderId)
    {
    }
    protected static function countSessionOrder($orderId)
    {
    }
    protected static function getBannerLinkedProducts($bannerId)
    {
    }
    // TODO: remove all this math when /sale_refactoring_mince releases
    protected static function getProductProfit($productInfo)
    {
    }
}