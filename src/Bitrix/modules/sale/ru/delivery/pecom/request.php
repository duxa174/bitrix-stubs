<?php

namespace Bitrix\Sale\Delivery\Pecom;

class Request
{
    /**
     * Base default URL
     * @const string
     */
    const API_BASE_URL = 'https://kabinet.pecom.ru/api/v1/';
    /**
     * User login
     * @var string
     */
    protected $apiLogin = '';
    /**
     * API access key
     * @var string
     */
    protected $apiKey = '';
    /**
     * Base URL
     * @var string
     */
    protected $apiUrl = '';
    public function __construct($apiLogin, $apiKey, $apiUrl = '')
    {
    }
    /**
     * Calls API
     * @param string $controller Group name
     * @param string $action Method name
     * @param mixed $data Input data
     * @param bool $assoc Result format. true - array, false - object
     * @return mixed Result
     * @throws \Exception Case error during requesting
     */
    public function send($controller, $action, $data, $assoc = true)
    {
    }
    /**
     * Returns full URL for API request
     * @param string $controller Group name
     * @param string $action Method name
     * @return string Full URL
     */
    protected function constructApiUrl($controller, $action)
    {
    }
}