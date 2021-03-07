<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\Client;

class Base
{
    const LOG_DIR = '/bitrix/modules/sale/lib/exchange/integration/log';
    const LOG_PATH = 'rest_client.log';
    protected $accessToken;
    protected $refreshToken;
    protected $endPoint;
    protected $expiresIn;
    public function __construct(array $settings)
    {
    }
    public function getAccessToken()
    {
    }
    public function setAccessToken($accessToken)
    {
    }
    public function getRefreshToken()
    {
    }
    public function setRefreshToken($refreshToken)
    {
    }
    public function getEndPoint()
    {
    }
    public function setEndPoint($endPoint)
    {
    }
    public function getExpiresIn()
    {
    }
    public function setExpiresIn($expiresIn)
    {
    }
    public function call($method, $params = [])
    {
    }
    protected function makeRequest($method, $params = [])
    {
    }
    protected function refreshAccessToken()
    {
    }
    /**
     * @param $params
     * @return void
     */
    protected function log($params)
    {
    }
    protected function isOnLog()
    {
    }
}