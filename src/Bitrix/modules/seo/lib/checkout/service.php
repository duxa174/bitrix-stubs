<?php

namespace Bitrix\Seo\Checkout;

/**
 * Class Service
 * @package Bitrix\Seo\Checkout
 */
class Service implements \Bitrix\Seo\Checkout\IService
{
    const GROUP = 'checkout';
    const TYPE_YANDEX = 'yandex';
    /**
     * Get instance.
     *
     * @return static
     */
    public static function getInstance()
    {
    }
    /**
     * @param string $type
     * @return string
     */
    public static function getEngineCode($type)
    {
    }
    /**
     * @return array
     */
    public static function getTypes()
    {
    }
    /**
     * Get auth adapter.
     *
     * @param string $type Type.
     * @return AuthAdapter
     * @throws \Bitrix\Main\SystemException
     */
    public static function getAuthAdapter($type)
    {
    }
}