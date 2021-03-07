<?php

namespace Bitrix\Seo\Checkout;

/**
 * Class BaseApiObject
 * @package Bitrix\Seo\Checkout
 */
class BaseApiObject
{
    const TYPE_CODE = '';
    /** @var Request $request */
    protected $request;
    /** @var Service $service */
    protected $service;
    /**
     * BaseApiObject constructor.
     */
    public function __construct()
    {
    }
    /**
     * @return Request
     */
    public function getRequest()
    {
    }
    /**
     * @param Request $request
     * @return $this
     */
    public function setRequest(\Bitrix\Seo\Checkout\Request $request)
    {
    }
    /**
     * @param $type
     * @param null $parameters
     * @param IService|null $service
     * @return static
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function create($type, $parameters = null, \Bitrix\Seo\Checkout\IService $service = null)
    {
    }
    /**
     * @param IService $service
     * @return $this
     * @throws \Bitrix\Main\SystemException
     */
    public function setService(\Bitrix\Seo\Checkout\IService $service)
    {
    }
}