<?php

namespace Bitrix\Sale\Helpers\Admin;

/**
 * Class OrderEdit
 * Helper class for order administration.
 * @package Bitrix\Sale\Helpers\Admin
 */
class OrderEdit
{
    protected static $productsDetails = null;
    public static $isTrustProductFormData = false;
    public static $needUpdateNewProductPrice = false;
    public static $isBuyerIdChanged = false;
    public static $isRefreshData = false;
    const BASKET_CODE_NEW = 'new';
    /**
     * @param string $name
     * @param array $data
     * @param string $selected
     * @param bool $showNotUse
     * @param array $attributes
     * @return string "<select>....</select>"
     * @throws ArgumentTypeException
     */
    public static function makeSelectHtml($name, array $data, $selected = "", $showNotUse = true, $attributes = array())
    {
    }
    /**
     * @param $name
     * @param array $data
     * @param string $selected
     * @param bool|true $showNotUse
     * @param array $attributes
     * @return string
     * @throws ArgumentTypeException
     */
    public static function makeSelectHtmlWithRestricted($name, array $data, $selected = "", $showNotUse = true, $attributes = array())
    {
    }
    /**
     * @param $data
     * @param string $selected
     * @param bool|true $showNotUse
     * @return string
     */
    public static function makeSelectHtmlBodyWithRestricted($data, $selected = '', $showNotUse = true)
    {
    }
    /**
     * @param Order $order
     * @param $formId
     * @return string
     */
    public static function getScripts(\Bitrix\Sale\Order $order, $formId)
    {
    }
    /**
     * @param int $userId.
     * @param string $siteId.
     * @return string User name.
     */
    public static function getUserName($userId, $siteId = "")
    {
    }
    /**
     * @param string $text The order problem description.
     * @param int $orderId
     * @return string HTML Problem block.
     */
    public static function getProblemBlockHtml($text, $orderId)
    {
    }
    /**
     * @param array $items .
     * @param string $formId
     * @param string $tabId
     * @return string HTML Navigation block.
     */
    public static function getFastNavigationHtml(array $items, $formId = '', $tabId = '')
    {
    }
    /**
     * @param Order $order
     * @param array $formData
     * @return bool|int|string
     * @throws UserMessageException
     */
    protected static function createUserFromForm(\Bitrix\Sale\Order &$order, array $formData)
    {
    }
    public static function getUserId($order, $formData, $createUserIfNeed, \Bitrix\Sale\Result &$result)
    {
    }
    /**
     * @param array $formData
     * @param $creatorUserId
     * @param bool $createUserIfNeed
     * @param array $files
     * @param Result &$opResult
     * @return Order
     * @throws ArgumentNullException
     * @throws SystemException
     */
    public static function createOrderFromForm(array $formData, $creatorUserId, $createUserIfNeed = true, array $files = array(), \Bitrix\Sale\Result &$opResult)
    {
    }
    public static function fillOrderProperties(\Bitrix\Sale\OrderBase $order, $formData, $files = [])
    {
    }
    public static function isBasketItemNew($basketCode)
    {
    }
    public static function saveCoupons($userId, $formData)
    {
    }
    public static function saveProfileData($profileId, \Bitrix\Sale\Order $order, array $formData)
    {
    }
    /**
     * @param array $formData
     * @param Order $order
     * @param int $userId
     * @param bool $createUserIfNeed
     * @param array $files
     * @param \Bitrix\Sale\Result $result
     * @return \Bitrix\Sale\Order
     * @throws SystemException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function editOrderByFormData(array $formData, \Bitrix\Sale\Order $order, $userId, $createUserIfNeed = true, array $files = array(), \Bitrix\Sale\Result &$result)
    {
    }
    /**
     * @param Order $order
     * @param array $formData
     * @param int $userId
     *
     * @return \Bitrix\Sale\Result
     */
    public static function fillSimpleFields(\Bitrix\Sale\Order $order, array $formData, $userId = 0)
    {
    }
    public static function fillBasketItems(\Bitrix\Sale\Basket &$basket, array $productsFormData, \Bitrix\Sale\Order $order, array $needDataUpdate = array())
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Helpers\Admin\OrderEdit::fillBasketItems()
     *
     * @param BasketItem $item
     * @param array $productData
     * @param Order $order
     * @param Basket $basket
     * @param bool $needDataUpdate
     * @return \Bitrix\Sale\Result
     * @throws ArgumentNullException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function fillBasketItem(\Bitrix\Sale\BasketItem &$item, array $productData, \Bitrix\Sale\Order $order, \Bitrix\Sale\Basket $basket, $needDataUpdate = false)
    {
    }
    public static function setProviderTrustData(\Bitrix\Sale\BasketItem $item, \Bitrix\Sale\Order $order, array $data)
    {
    }
    public static function setBasketItemFields(\Bitrix\Sale\BasketItem &$item, array $fields = array())
    {
    }
    public static function getSiteName(&$siteId)
    {
    }
    public static function restoreFieldsNames(array $data, $path = "")
    {
    }
    /**
     * @param $newUserId
     * @param int $orderId
     * @param int|null $oldUserId
     */
    public static function initCouponsData($newUserId, $orderId = 0, $oldUserId = 0)
    {
    }
    public static function getCouponsData()
    {
    }
    /**
     * @param Order $order
     * @param bool $needRecalculate
     * @return array
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotSupportedException
     */
    public static function getDiscountsApplyResult(\Bitrix\Sale\Order $order, $needRecalculate = false)
    {
    }
    public static function getOrderedDiscounts(\Bitrix\Sale\Order $order, $needRecalculate = true)
    {
    }
    public static function getCouponList(\Bitrix\Sale\Order $order = null, $needRecalculate = true)
    {
    }
    public static function getTotalPrices(\Bitrix\Sale\Order $order, \Bitrix\Sale\Helpers\Admin\Blocks\OrderBasket $orderBasket, $needRecalculate = true)
    {
    }
    /**
     * @param $productId
     * @param $userId
     * @param $siteId
     * @param array $params
     * @throws ArgumentNullException
     */
    public static function setProductDetails($productId, $userId, $siteId, array $params)
    {
    }
    public static function getProductDetails($productId, $userId, $siteId)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getCompanyList()
    {
    }
    public static function getLockingMessage($orderId)
    {
    }
}