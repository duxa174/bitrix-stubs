<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka;

abstract class BaseApiObject
{
    private const API_URL = SEO_BITRIX_API_URL;
    protected $result;
    protected $accessToken;
    protected $clientId;
    protected $clientSecret;
    private function checkResult() : void
    {
    }
    /**
     * @return mixed
     */
    public function getAccessToken()
    {
    }
    /**
     * @param mixed $accessToken
     *
     * @return BaseApiObject
     */
    public function setAccessToken($accessToken)
    {
    }
    /**
     * @return mixed
     */
    public function getClientId()
    {
    }
    /**
     * @param mixed $clientId
     *
     * @return BaseApiObject
     */
    public function setClientId($clientId)
    {
    }
    /**
     * @return mixed
     */
    public function getClientSecret()
    {
    }
    /**
     * @param mixed $clientSecret
     *
     * @return BaseApiObject
     */
    public function setClientSecret($clientSecret)
    {
    }
    protected function sendRequest($data = [])
    {
    }
    protected function registerOnCloudAdv()
    {
    }
    protected function query($scope, $param = NULL)
    {
    }
    abstract function getScope() : string;
}