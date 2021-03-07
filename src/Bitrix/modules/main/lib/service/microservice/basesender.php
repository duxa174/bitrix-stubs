<?php

namespace Bitrix\Main\Service\MicroService;

/**
 * Class BaseSender
 */
abstract class BaseSender
{
    public function __construct()
    {
    }
    /**
     * @param string $action
     * @param array $parameters
     * @return Result
     * @throws ArgumentException
     */
    public function performRequest($action, array $parameters = []) : \Bitrix\Main\Result
    {
    }
    protected function createAnswer($queryResult, $response, $errors, $status)
    {
    }
    /**
     * @return array
     */
    public function getHttpClientParameters() : array
    {
    }
    protected abstract function getServiceUrl() : string;
}