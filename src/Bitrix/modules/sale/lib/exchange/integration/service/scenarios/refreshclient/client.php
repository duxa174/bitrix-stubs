<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Scenarios\RefreshClient;

abstract class Client
{
    /**
     * @return Batchable\Client
     */
    protected abstract function getClient();
    public function refresh(array $params)
    {
    }
    public function resolve(array $params)
    {
    }
    public function diff(array $params)
    {
    }
    public function adds(array $params)
    {
    }
    protected static function prepareFields(array $params)
    {
    }
}