<?php

namespace Bitrix\Rest\OAuth;

class Auth
{
    const AUTH_TYPE = 'oauth';
    const CACHE_TTL = 3600;
    const CACHE_PREFIX = "oauth_";
    const PARAM_LOCAL_USER = 'LOCAL_USER';
    const PARAM_TZ_OFFSET = 'TZ_OFFSET';
    /**
     * @var AuthStorageInterface
     */
    protected static $storage = null;
    protected static $authQueryParams = array('auth', 'access_token');
    protected static $authQueryAdditional = array('auth_connector');
    /**
     * @deprecated Use \Bitrix\Rest\Application::getAuthProvider()->authorizeClient()
     */
    public static function authorizeClient($clientId, $userId, $state = '')
    {
    }
    /**
     * @deprecated Use \Bitrix\Rest\Application::getAuthProvider()->get()
     */
    public static function get($clientId, $scope, $additionalParams, $userId)
    {
    }
    public static function storeRegisteredAuth(array $tokenInfo)
    {
    }
    public static function onRestCheckAuth(array $query, $scope, &$res)
    {
    }
    public static function getAuthKey(array $query)
    {
    }
    public static function updateTokenParameters($tokenInfo)
    {
    }
    protected static function check($accessToken)
    {
    }
    protected static function getTokenParams($additionalParams, $userId)
    {
    }
    /**
     * @return AuthStorageInterface
     */
    public static function getStorage()
    {
    }
    /**
     * @param AuthStorageInterface $storage
     */
    public static function setStorage(\Bitrix\Rest\AuthStorageInterface $storage)
    {
    }
}