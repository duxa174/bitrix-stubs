<?php

namespace Bitrix\Rest;

class OAuthService
{
    const SERVICE_URL = BITRIXREST_URL;
    const CLIENT_TYPE = 'B';
    const REGISTER = "/oauth/register/";
    protected static $engine = null;
    /**
     * @return \Bitrix\Rest\OAuth\Engine
     */
    public static function getEngine()
    {
    }
    public static function register()
    {
    }
    public static function unregister()
    {
    }
    public static function getMemberId()
    {
    }
    public static function getRedirectUri()
    {
    }
}