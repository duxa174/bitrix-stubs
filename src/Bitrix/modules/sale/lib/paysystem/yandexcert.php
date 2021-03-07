<?php

namespace Bitrix\Sale\PaySystem;

class YandexCert
{
    public static $pkey = null;
    public static $csr = null;
    public static $sign = null;
    public static $cn = '';
    public static $errors = array();
    /**
     * @param $shopId
     * @param $companyName
     */
    public static function generate($shopId, $companyName)
    {
    }
    /**
     * @param $shopId
     * @param bool $all
     * @throws \Exception
     */
    public static function clear($shopId, $all = false)
    {
    }
    /**
     * @param $shopId
     * @return string
     */
    public static function getCn($shopId)
    {
    }
    /**
     * @param $shopId
     * @return string
     */
    private static function loadFromOptions($shopId)
    {
    }
    /**
     * @param $shopId
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function isLoaded($shopId)
    {
    }
    /**
     * @param $file
     * @param $shopId
     */
    public static function setCert($file, $shopId)
    {
    }
    /**
     * @param $shopId
     * @return mixed
     */
    public static function getSign($shopId)
    {
    }
    /**
     * @param $shopId
     * @return mixed
     */
    public static function getCert($shopId)
    {
    }
    /**
     * @param $shopId
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getCsr($shopId)
    {
    }
    /**
     * @param $field
     * @param $shopId
     * @return mixed|string
     */
    public static function getValue($field, $shopId)
    {
    }
}