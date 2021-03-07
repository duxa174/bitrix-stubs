<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\Transport;

/**
 * Class Client
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\Transport
 * @internal
 */
final class Client
{
    private const LOG_SOURCE = 'transport';
    /** @var OauthTokenProvider */
    private $oauthTokenProvider;
    /** @var Logger */
    private $logger;
    /** @var int */
    private $socketTimeOut = 30;
    /** @var int */
    private $streamTimeOut = 30;
    /** @var bool */
    private $isTestEnvironment = false;
    /** @var int */
    private $apiVersion = 1;
    /**
     * Client constructor.
     * @param OauthTokenProvider $oauthTokenProvider
     * @param Logger $logger
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\Api\Transport\OauthTokenProvider $oauthTokenProvider, \Sale\Handlers\Delivery\YandexTaxi\Common\Logger $logger)
    {
    }
    /**
     * @param string $uri
     * @param array $body
     * @param array $options
     * @return Response
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentException
     */
    public function post(string $uri, $body = [], $options = [])
    {
    }
    /**
     * @param string $uri
     * @param array $options
     * @return Response
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentException
     */
    public function get(string $uri, $options = [])
    {
    }
    /**
     * @param string $method
     * @param string $uri
     * @param null $body
     * @param array $options
     * @return Response
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentException
     */
    private function request(string $method, string $uri, $body = null, $options = [])
    {
    }
    /**
     * @return HttpClient
     */
    private function makeHttpClient() : \Bitrix\Main\Web\HttpClient
    {
    }
    /**
     * @param array $options
     * @return string
     */
    private function getBase($options = []) : string
    {
    }
    /**
     * @param bool $isTestEnvironment
     * @return Client
     */
    public function setIsTestEnvironment(bool $isTestEnvironment) : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\Client
    {
    }
    /**
     * @param int $apiVersion
     * @return Client
     */
    public function setApiVersion(int $apiVersion) : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\Client
    {
    }
    /**
     * @param int $socketTimeOut
     * @return Client
     */
    public function setSocketTimeOut(int $socketTimeOut) : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\Client
    {
    }
    /**
     * @param int $streamTimeOut
     * @return Client
     */
    public function setStreamTimeOut(int $streamTimeOut) : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\Client
    {
    }
    /**
     * @return OauthTokenProvider
     */
    public function getOauthTokenProvider() : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\OauthTokenProvider
    {
    }
}