<?php

namespace Bitrix\Rest\OAuth;

class Provider implements \Bitrix\Rest\AuthProviderInterface
{
    /**
     * @var Provider
     */
    protected static $instance = null;
    public static function instance()
    {
    }
    public function authorizeClient($clientId, $userId, $state = '')
    {
    }
    public function get($clientId, $scope, $additionalParams, $userId)
    {
    }
    protected function getClient()
    {
    }
    protected function getTokenParams($additionalParams, $userId)
    {
    }
}