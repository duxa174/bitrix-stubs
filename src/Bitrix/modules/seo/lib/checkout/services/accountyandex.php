<?php

namespace Bitrix\Seo\Checkout\Services;

/**
 * Class AccountYandex
 * @package Bitrix\Seo\Checkout\Services
 */
class AccountYandex extends \Bitrix\Seo\Checkout\BaseApiObject
{
    const TYPE_CODE = 'yandex';
    /** @var Web\Uri $callbackEventUrl */
    private $callbackEventUrl = null;
    /**
     * Get service.
     *
     * @return Service
     */
    public static function getService()
    {
    }
    /**
     * @param Web\Uri $callbackEventUrl
     */
    public function setCallbackEventUrl(\Bitrix\Main\Web\Uri $callbackEventUrl)
    {
    }
    /**
     * @return Web\Uri
     * @throws \Bitrix\Main\SystemException
     */
    private function getCallbackEventUrl()
    {
    }
    /**
     * @param Web\Uri $url
     * @return bool
     */
    private function isHttps(\Bitrix\Main\Web\Uri $url)
    {
    }
    /**
     * @return array|Response|null
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getProfile()
    {
    }
    /**
     * Remove auth.
     *
     * @return void
     * @throws \Bitrix\Main\SystemException
     */
    public static function removeAuth()
    {
    }
    /**
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function registerPaymentSucceededWebhook()
    {
    }
    /**
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function registerPaymentCanceledWebhook()
    {
    }
    /**
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function registerRefundSucceededWebhook()
    {
    }
    /**
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function removeWebhook($id)
    {
    }
    /**
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function getWebhookList()
    {
    }
    /**
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function getShopInfo()
    {
    }
}