<?php

namespace Bitrix\Sale\Exchange\Integration\OAuth;

class Client
{
    private $httpClient;
    protected $accessTokenUrl;
    protected $clientId;
    protected $clientSecret;
    public function __construct(array $options = [])
    {
    }
    public function getAccessTokenUrl(array $params)
    {
    }
    /**
     * @param $grant
     * @param array $options
     *
     * @return array
     */
    public function getAccessToken($grant, array $options = [])
    {
    }
    protected function getAccessTokenMethod()
    {
    }
    protected function getBaseAccessTokenUrl()
    {
    }
    protected function getClientId()
    {
    }
    protected function getClientSecret()
    {
    }
}