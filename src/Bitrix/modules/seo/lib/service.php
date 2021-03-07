<?php

namespace Bitrix\Seo;

class Service
{
    const SERVICE_URL = SEO_SERVICE_URL;
    const REGISTER = "/oauth/register/";
    const AUTHORIZE = "/register/";
    const REDIRECT_URI = "/bitrix/tools/seo_client.php";
    const SERVICE_AUTH_CACHE_TLL = 86400;
    const SERVICE_AUTH_CACHE_ID = 'seo|service_auth';
    const CLIENT_LIST_CACHE_TLL = 86400;
    const CLIENT_LIST_CACHE_ID = 'seo|client_list';
    const CLIENT_TYPE_SINGLE = 'S';
    const CLIENT_TYPE_MULTIPLE = 'M';
    const CLIENT_TYPE_COMPATIBLE = 'C';
    protected static $engine = null;
    protected static $auth = null;
    protected static $clientList = null;
    /**
     * CAn connect to seoproxy?
     * @return bool
     */
    public static function isRegistered()
    {
    }
    /**
     * Get client info
     * @use \Bitrix\Seo\Service::getClientList(...)
     * @param string $engineCode Provider code.
     * @return array
     * @deprecated
     */
    public static function getAuth($engineCode)
    {
    }
    /**
     * Get clients list
     * @param string|bool $engineCode Provider code.
     * @return array
     * @throws SystemException
     */
    public static function getClientList($engineCode = false)
    {
    }
    /**
     * @return void
     * @use \Bitrix\Seo\Service::clearClientsCache()
     * @deprecated
     */
    public static function clearLocalAuth()
    {
    }
    /**
     * Clear clients list cache
     * @param string|null $engine Engine code.
     * @param int|null $clientId Proxy client id.
     * @return void
     * @throws SystemException
     */
    public static function clearClientsCache($engine = null, $clientId = null)
    {
    }
    /**
     * @param string $engineCode Provider code.
     * @param bool $localOnly Do not delete client in seoproxy service.
     * @return void
     * @use \Bitrix\Seo\Service::clearAuthForClient(...)
     * @throws SystemException
     * @deprecated
     */
    public static function clearAuth($engineCode, $localOnly = false)
    {
    }
    /**
     * Remove auth for a client
     * @param array $client Client data.
     * @param bool $localOnly Only clear cache.
     * @return void
     * @throws SystemException
     */
    public static function clearAuthForClient($client, $localOnly = false)
    {
    }
    /**
     * Set access settings
     * @param array $accessParams Access params.
     * @return void
     * @throws SystemException
     */
    protected static function setAccessSettings(array $accessParams)
    {
    }
    /**
     * @return \Bitrix\Seo\Engine\Bitrix
     */
    public static function getEngine()
    {
    }
    /**
     * @return void
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function register()
    {
    }
    /**
     * @return void
     * @throws SystemException
     */
    public static function unregister()
    {
    }
    /**
     * @return string
     */
    public static function getAuthorizeLink()
    {
    }
    /**
     * @param string $engine Provider code.
     * @param bool $clientType Client type.
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getAuthorizeData($engine, $clientType = false)
    {
    }
    /**
     * @return string
     */
    protected static function getRedirectUri()
    {
    }
    /**
     * @return string
     */
    protected static function getLicense()
    {
    }
    /**
     * If site change domain - need update engine
     * @param array $domains
     * @throws \Exception
     */
    public static function changeRegisteredDomain(array $domains = []) : void
    {
    }
}