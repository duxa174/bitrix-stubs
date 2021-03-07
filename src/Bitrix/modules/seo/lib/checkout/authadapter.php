<?php

namespace Bitrix\Seo\Checkout;

/**
 * Class AuthAdapter
 * @package Bitrix\Seo\Checkout
 */
class AuthAdapter
{
    /** @var  IService $service */
    protected $service;
    protected $type;
    protected $data;
    /** @var array $parameters Parameters. */
    protected $parameters = ['URL_PARAMETERS' => []];
    /**
     * AuthAdapter constructor.
     * @param $type
     */
    public function __construct($type)
    {
    }
    /**
     * @param $type
     * @param IService|null $service
     * @return AuthAdapter
     * @throws SystemException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function create($type, \Bitrix\Seo\Checkout\IService $service = null)
    {
    }
    /**
     * @param IService $service
     * @return $this
     */
    public function setService(\Bitrix\Seo\Checkout\IService $service)
    {
    }
    /**
     * @param array $parameters
     * @return $this
     */
    public function setParameters(array $parameters = [])
    {
    }
    /**
     * @return string
     * @throws SystemException
     */
    public function getAuthUrl()
    {
    }
    /**
     * @param bool $isUseCache
     * @return bool
     */
    protected function getAuthData($isUseCache = true)
    {
    }
    public function removeAuth()
    {
    }
    /**
     * @return string
     */
    protected function getEngineCode()
    {
    }
    /**
     * @return mixed
     */
    public function getType()
    {
    }
    /**
     * @return mixed|null
     */
    public function getToken()
    {
    }
    /**
     * @return bool
     */
    public function hasAuth()
    {
    }
}