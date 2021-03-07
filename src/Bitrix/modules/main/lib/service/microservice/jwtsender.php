<?php

namespace Bitrix\Main\Service\MicroService;

abstract class JWTSender extends \Bitrix\Main\Service\MicroService\BaseSender
{
    protected abstract function obtainJWToken();
    protected function createHttpClient()
    {
    }
    public function performRequest($action, array $parameters = []) : \Bitrix\Main\Result
    {
    }
}