<?php

namespace Bitrix\Sale\Services\Base;

class RestClient
{
    const REST_URI = '/rest/';
    const REGISTER_URI = '/oauth/register/';
    const SCOPE = 'sale';
    const SERVICE_ACCESS_OPTION = 'saleservices_access';
    const ERROR_WRONG_INPUT = 1;
    const ERROR_WRONG_LICENSE = 2;
    const ERROR_SERVICE_UNAVAILABLE = 3;
    const ERROR_NOTHING_FOUND = 4;
    const UNSUCCESSFUL_CALL_OPTION = 'sale_hda_last_unsuccessful_call';
    const UNSUCCESSFUL_CALL_TRYINGS = 3;
    //times
    const UNSUCCESSFUL_CALL_WAIT_INTERVAL = 300;
    //sec
    protected $httpTimeout = 10;
    protected $accessSettings = null;
    protected $serviceHost = 'https://saleservices.bitrix.info';
    protected $version = 5;
    /**
     * Performs call to the REST method and returns decoded results of the call.
     * define SALE_SRVS_RESTCLIENT_DISABLE_SRV_ALIVE_CHECK to disable server alive checking.
     * @param string $methodName Name of the REST method.
     * @param array $additionalParams Parameters, that should be passed to the method.
     * @param bool $licenseCheck Should client send license key as a parameter of the http request.
     * @param bool $clearAccessSettings Should client clear authorization before performing http request.
     * @return Result $result
     */
    protected function call($methodName, $additionalParams = null, $licenseCheck = false, $clearAccessSettings = false)
    {
    }
    /**
     * @return string Host.
     * Define const SALE_SRVS_RESTCLIENT_SRV_HOST to change server host.
     */
    public function getServiceHost()
    {
    }
    /**
     * Decodes answer of the method.
     * @param string $result Json-encoded answer.
     * @return array|bool|mixed|string Decoded answer.
     */
    protected function prepareAnswer($result)
    {
    }
    /**
     * Registers client on the properties service.
     * @return Result
     */
    protected function register()
    {
    }
    public static function signLicenseRequest(array $request, $licenseKey)
    {
    }
    /**
     * Stores access credentials.
     * @param array $params Access credentials.
     * @return void
     */
    protected static function setAccessSettings(array $params)
    {
    }
    /**
     * Reads and returns access credentials.
     * @return array|false Access credentials or false in case of errors.
     */
    protected function getAccessSettings()
    {
    }
    /**
     * Drops current stored access credentials.
     * @return void
     */
    public function clearAccessSettings()
    {
    }
    /**
     * Internal method for usage in registration process.
     * @return string URL of the host.
     */
    protected static function getRedirectUri()
    {
    }
    /**
     * Returns md5 hash of the license key.
     * @return string md5 hash of the license key.
     */
    protected static function getLicenseHash()
    {
    }
    protected static function getLicense()
    {
    }
    protected static function getLastUnSuccessCallInfo()
    {
    }
    /**
     * @param bool|false $reset
     */
    protected static function setLastUnSuccessCallInfo($reset = false)
    {
    }
    /**
     * Check if server is alive.
     * @return bool
     */
    public static function isServerAlive()
    {
    }
    /**
     * @return int Counts
     */
    protected function getLastUnSuccessCount()
    {
    }
}