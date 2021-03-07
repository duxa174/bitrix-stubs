<?php

namespace Bitrix\Seo\Retargeting;

class AuthAdapter
{
    /** @var  IService $service */
    protected $service;
    protected $type;
    /* @var \CSocServOAuthTransport|\CFacebookInterface */
    protected $transport;
    protected $requestCodeParamName;
    protected $data;
    /** @var array $parameters Parameters. */
    protected $parameters = ['URL_PARAMETERS' => []];
    public function __construct($type)
    {
    }
    public static function create($type, \Bitrix\Seo\Retargeting\IService $service = null)
    {
    }
    public function setService(\Bitrix\Seo\Retargeting\IService $service)
    {
    }
    public function setParameters(array $parameters = [])
    {
    }
    public function getAuthUrl()
    {
    }
    protected function getAuthData($isUseCache = true)
    {
    }
    protected function getAuthDataMultiple()
    {
    }
    protected function getAuthDataSingle($isUseCache = true)
    {
    }
    public function removeAuth()
    {
    }
    protected function getEngineCode()
    {
    }
    public function getType()
    {
    }
    public function getToken()
    {
    }
    public function hasAuth()
    {
    }
    public function canUseMultipleClients()
    {
    }
    public function getClientList()
    {
    }
    public function getClientById($clientId)
    {
    }
    public function getAuthorizedClientsList()
    {
    }
    public function getClientId()
    {
    }
}