<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Api;

/**
 * Class Api
 * Work with VK API through http requsts
 * @package Bitrix\Sale\TradingPlatform\Vk\Api
 */
class Api
{
    private $accessToken = NULL;
    public static $apiUrl = 'https://api.vk.com/method/';
    public static $apiVersion = "5.52";
    private $exportId;
    private $response;
    const TOO_MANY_REQUESTS_ERROR_CODE = 6;
    /**
     * Api constructor.
     * @param $accessToken - string of accesstoken from VK
     * @param $exportId - int
     * @throws ArgumentNullException
     */
    public function __construct($accessToken, $exportId)
    {
    }
    /**
     * Send a request to single VK API method with params.
     *
     * @param string $method - Name of VK-API method (see VK manual).
     * @param array $params
     * @return mixed|null
     */
    public function run($method, $params = array())
    {
    }
    /**
     * Parse response string from VK and find errors.
     * If find errors - add them to vk-log
     *
     * @param $response
     * @param $params - array of request params
     * @return null
     */
    private function checkError($method, $params)
    {
    }
    private function checkRequestsLimit()
    {
    }
}