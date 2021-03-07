<?php

class CSocServOAuthTransport
{
    const SERVICE_ID = "generic";
    protected $appID;
    protected $appSecret;
    protected $code = \false;
    protected $access_token = \false;
    protected $accessTokenExpires = 0;
    protected $refresh_token = '';
    protected $scope = array();
    protected $userId;
    public function __construct($appID, $appSecret, $code = \false)
    {
    }
    public function getAppID()
    {
    }
    public function getAppSecret()
    {
    }
    public function getAccessTokenExpires()
    {
    }
    public function setAccessTokenExpires($accessTokenExpires)
    {
    }
    public function getToken()
    {
    }
    public function setToken($access_token)
    {
    }
    public function setRefreshToken($refresh_token)
    {
    }
    public function getRefreshToken()
    {
    }
    public function addScope($scope)
    {
    }
    public function setScope($scope)
    {
    }
    public function getScope()
    {
    }
    public function getScopeEncode()
    {
    }
    public function setCode($code)
    {
    }
    public function setUser($userId)
    {
    }
    protected function getStorageTokens()
    {
    }
    public function deleteStorageTokens()
    {
    }
    public function checkAccessToken()
    {
    }
    public function getResult()
    {
    }
}