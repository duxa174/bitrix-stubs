<?php

namespace Bitrix\Rest\OAuth;

class Engine
{
    protected $scope = array("rest", "application");
    protected $client = null;
    public function __construct()
    {
    }
    /**
     * @return \Bitrix\Rest\OAuth\Client
     */
    public function getClient()
    {
    }
    public function isRegistered()
    {
    }
    public function getClientId()
    {
    }
    public function getClientSecret()
    {
    }
    public function setAccess(array $accessParams)
    {
    }
    public function clearAccess()
    {
    }
    public function getLicense()
    {
    }
}