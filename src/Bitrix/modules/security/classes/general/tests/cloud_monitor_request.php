<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityCloudMonitorRequest
 * @since 12.5.0
 */
class CSecurityCloudMonitorRequest
{
    const BITRIX_CHECKER_URL_PATH = "/bitrix/site_checker.php";
    const REMOTE_STATUS_OK = "ok";
    const REMOTE_STATUS_ERROR = "error";
    const REMOTE_STATUS_FATAL_ERROR = "fatal_error";
    const TIMEOUT = 10;
    private static $validActions = array("check", "get_results");
    protected static $trustedHosts = array("www.1c-bitrix.ru", "www.bitrixsoft.com", "www.bitrix.de");
    protected $response = array();
    protected $checkingToken = "";
    protected $protocolVersion = 2;
    public function __construct($action, $protocolVersion, $token = "")
    {
    }
    /**
     * @param string $checkingToken
     * @return $this
     */
    public function setCheckingToken($checkingToken)
    {
    }
    /**
     * @return string
     */
    public function getCheckingToken()
    {
    }
    /**
     * Make a request to the Bitrix server and returns the result
     * @param array $action
     * @return array|bool
     */
    public function receiveData($action)
    {
    }
    /**
     * @return bool
     */
    public function isOk()
    {
    }
    /**
     * @return bool
     */
    public function isFatalError()
    {
    }
    /**
     * @return bool
     */
    public function isError()
    {
    }
    /**
     * @return bool
     */
    public function isSuccess()
    {
    }
    /**
     * @param string $key
     * @return string
     */
    public function getValue($key)
    {
    }
    /**
     * @param string $status
     * @return bool
     */
    protected function checkStatus($status)
    {
    }
    /**
     * Generate payload for request to Bitrix
     * @param string $action - "check" or "receive_results"
     * @param bool $collectInformation
     * @return string
     */
    protected function getPayload($action = "check", $collectInformation = \true)
    {
    }
    /**
     * @param string $response
     * @return array
     */
    protected static function decodeResponse($response)
    {
    }
    /**
     * Return Bitrix Cloud Security web service url
     *
     * @param string $host Bitrix security scanner host.
     * @return string
     */
    protected static function buildCheckerUrl($host)
    {
    }
    /**
     * Return Bitrix Cloud Security host
     *
     * @return string
     */
    protected static function getServiceHost()
    {
    }
    /**
     * Send request to Bitrix (check o receive)
     * @param array $payload
     * @return array|bool
     */
    protected static function sendRequest(array $payload)
    {
    }
    /**
     * Return License key, your Captain Obvious
     * @return string
     */
    protected static function getLicenseKey()
    {
    }
    /**
     * Return system information, such as php version
     * @return array
     */
    protected static function getSystemInformation()
    {
    }
    /**
     * Return additional information, such as P&P or LDAP server information
     *
     * @since 14.5.4
     * @return array
     */
    protected static function getAdditionalInformation()
    {
    }
    /**
     * Return host name for site checking
     * @return string
     */
    protected function getHostName()
    {
    }
    /**
     * Return current server port, except 80 and 443
     * @return int|bool
     */
    protected static function getServerPort()
    {
    }
    /**
     * Return current domain name (in puny code for cyrillic domain)
     * @return string
     */
    protected static function getDomainName()
    {
    }
}