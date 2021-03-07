<?php

namespace Bitrix\Rest;

class Application
{
    protected static $initialized = false;
    /**
     * @var AuthProviderInterface
     */
    protected static $authProvider = null;
    /**
     * @return AuthProviderInterface
     */
    public static function getAuthProvider()
    {
    }
    /**
     * @param AuthProviderInterface $authProvider
     */
    public static function setAuthProvider(\Bitrix\Rest\AuthProviderInterface $authProvider)
    {
    }
    /**
     * @return OAuth\Provider
     */
    protected static function getDefaultAuthProvider()
    {
    }
    protected static function initialize()
    {
    }
}