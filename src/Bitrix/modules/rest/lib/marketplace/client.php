<?php

namespace Bitrix\Rest\Marketplace;

class Client
{
    const CATEGORIES_CACHE_TTL = REST_MP_CATEGORIES_CACHE_TTL;
    protected static $buyLinkList = array('bitrix24' => '/settings/order/make.php?limit=#NUM#&module=#CODE#', 'ru' => 'https://marketplace.1c-bitrix.ru/tobasket.php?ID=#CODE#&limit=#NUM#&b24=y', 'en' => 'https://store.bitrix24.com/tobasket.php?ID=#CODE#&limit=#NUM#&b24=y', 'de' => 'https://store.bitrix24.de/tobasket.php?ID=#CODE#&limit=#NUM#&b24=y', 'ua' => 'https://marketplace.1c-bitrix.ua/tobasket.php?ID=#CODE#&limit=#NUM#&b24=y');
    private static $appTop = null;
    public static function getTop($action, $fields = array())
    {
    }
    public static function getBuy($codeList)
    {
    }
    public static function getUpdates($codeList)
    {
    }
    public static function setAvailableUpdate($updateList = array())
    {
    }
    public static function getAvailableUpdate($code = false)
    {
    }
    public static function getAvailableUpdateNum()
    {
    }
    /**
     * Return marketplace category query result
     * @param bool $forceReload
     *
     * @return array
     */
    public static function getCategoriesFull($forceReload = false)
    {
    }
    /**
     * Return marketplace category items
     * @param bool $forceReload
     *
     * @return array
     */
    public static function getCategories($forceReload = false)
    {
    }
    public static function getCategory($code, $page = false, $pageSize = false)
    {
    }
    public static function getByTag($tag, $page = false, $pageSize = false)
    {
    }
    public static function getLastByTag($tag, $page = false, $pageSize = false)
    {
    }
    public static function getApp($code, $version = false, $checkHash = false, $installHash = false)
    {
    }
    public static function getAppPublic($code, $version = false, $checkHash = false, $installHash = false)
    {
    }
    public static function filterApp($fields, $page = false)
    {
    }
    public static function searchApp($q, $page = false)
    {
    }
    public static function getInstall($code, $version = false, $checkHash = false, $installHash = false)
    {
    }
    public static function getBuyLink($num, $appCode)
    {
    }
    public static function getNumUpdates()
    {
    }
    public static function getTagByPlacement($placement)
    {
    }
    public static function getTagByAppType($type)
    {
    }
    /**
     * @return bool
     */
    public static function isSubscriptionAvailable()
    {
    }
    /**
     * @return \Bitrix\Main\Type\Date
     */
    public static function getSubscriptionFinalDate()
    {
    }
}