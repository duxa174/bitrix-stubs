<?php

namespace Bitrix\Rest\Event;

class ProviderOAuth implements \Bitrix\Rest\Event\ProviderInterface
{
    /**
     * @var ProviderOAuth
     */
    protected static $instance = null;
    public static function instance()
    {
    }
    public function send(array $queryData)
    {
    }
}