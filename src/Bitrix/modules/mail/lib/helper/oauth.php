<?php

namespace Bitrix\Mail\Helper;

abstract class OAuth
{
    protected $oauthEntity;
    protected $service, $storedUid;
    /**
     * Returns the list of supported services
     *
     * @return array
     */
    public static function getKnownServices()
    {
    }
    /**
     * Returns helper instance
     *
     * @param string $service Service name.
     * @return \Bitrix\Mail\Helper\OAuth|false
     */
    public static function getInstance($service = null)
    {
    }
    /**
     * Returns helper instance by packed metadata
     *
     * @param string $meta Packed metadata.
     * @return \Bitrix\Mail\Helper\OAuth|false
     */
    public static function getInstanceByMeta($meta)
    {
    }
    /**
     * Returns packed metadata for instance
     *
     * @return string
     * @throws Main\ObjectException
     */
    public function buildMeta()
    {
    }
    /**
     * Returns unpacked metadata
     *
     * @param string $meta Packed metadata.
     * @return array
     */
    public static function parseMeta($meta)
    {
    }
    /**
     * Returns token from socialservices
     *
     * @param string $service Service name.
     * @param string $key User ID.
     * @return string|null
     */
    private static function getSocservToken($service, $key)
    {
    }
    /**
     * Returns token by packed metadata
     *
     * @param string $meta Packed metadata.
     * @return string|null
     */
    public static function getTokenByMeta($meta)
    {
    }
    /**
     * Returns user data by packed metadata
     *
     * @param string $meta Packed metadata.
     * @param boolean $secure Strip raw data (includes tokens).
     * @return array|null
     */
    public static function getUserDataByMeta($meta, $secure = true)
    {
    }
    /**
     * Returns service interface entity
     *
     * @return mixed
     */
    public function getOAuthEntity()
    {
    }
    /**
     * Returns instance UID
     *
     * @return string
     */
    public function getStoredUid()
    {
    }
    /**
     * Returns server OAuth handler URI
     *
     * @param boolean $final Skip Bitrix24 proxy.
     * @return string
     */
    public function getRedirect($final = true)
    {
    }
    public function getHostUrl()
    {
    }
    /**
     * Returns service OAuth endpoint URI
     *
     * @return string
     */
    public function getUrl()
    {
    }
    /**
     * Fetches token by instance UID from DB
     *
     * @return array|false
     */
    protected function fetchStoredToken()
    {
    }
    /**
     * Returns token by instance UID
     *
     * @param string $uid Instance UID.
     * @return string|null
     */
    public function getStoredToken($uid = null)
    {
    }
    /**
     * Obtains tokens from service
     *
     * @param string $code Service authorization code.
     * @return boolean
     */
    public function getAccessToken($code = null)
    {
    }
    /**
     * Returns user data
     *
     * @param boolean $secure Strip raw data (includes tokens).
     * @return array|null
     */
    public function getUserData($secure = true)
    {
    }
    /**
     * Returns unified user data
     *
     * @param array $userData User data.
     * @return array
     */
    protected abstract function mapUserData(array $userData);
    /**
     * Returns service name
     *
     * @throws \Bitrix\Main\ObjectException
     * @return string
     */
    public static function getServiceName()
    {
    }
    /**
     * Handles service response
     *
     * @param array $state Response data.
     * @return void
     */
    public function handleResponse($state)
    {
    }
}