<?php

namespace Bitrix\Sale\Rest\Synchronization;

class Client
{
    protected $clientId;
    protected $clientSecret;
    protected $serviceUrl;
    protected $refreshToken;
    const HTTP_SOCKET_TIMEOUT = 10;
    const HTTP_STREAM_TIMEOUT = 10;
    const SERVICE_PATH = "/rest/";
    const B24_APP_GRANT_TYPE = 'refresh_token';
    public function __construct($clientId, $clientSecret, $serviceUrl)
    {
    }
    protected function getHttpClient()
    {
    }
    protected function getRequestUrl($methodName)
    {
    }
    public function call($methodName, $additionalParams = [])
    {
    }
    protected function prepareResponse($result)
    {
    }
    protected function prepareRequest($params)
    {
    }
    public function refreshToken($refreshToken)
    {
    }
    public function checkAccessToken($accessToken)
    {
    }
}