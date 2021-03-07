<?php

class CBitrixServiceOAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "bitrixgeneric";
    const AUTH_URL = "/oauth/authorize/";
    const TOKEN_URL = "/oauth/token/";
    const URL = '';
    protected $scope = array();
    protected $authResult = array();
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function getResult()
    {
    }
    public function getError()
    {
    }
}
class CBitrixServiceTransport
{
    const SERVICE_URL = "/rest/";
    const METHOD_METHODS = 'methods';
    const METHOD_BATCH = 'batch';
    protected $clientId = '';
    protected $clientSecret = '';
    protected $httpTimeout = \SOCSERV_DEFAULT_HTTP_TIMEOUT;
    protected $serviceHost = '';
    public function __construct($clientId, $clientSecret)
    {
    }
    protected function setSeviceHost($host)
    {
    }
    protected function prepareAnswer($result)
    {
    }
    public function call($methodName, $additionalParams = \null, $licenseCheck = \false)
    {
    }
    public function batch($actions)
    {
    }
    public function getMethods()
    {
    }
    public function setTimeout($timeout)
    {
    }
    protected static function getLicense()
    {
    }
}