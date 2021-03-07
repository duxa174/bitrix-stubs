<?php

class CRestServer
{
    const STATUS_OK = "200 OK";
    const STATUS_CREATED = "201 Created";
    const STATUS_WRONG_REQUEST = "400 Bad Request";
    const STATUS_UNAUTHORIZED = "401 Unauthorized";
    const STATUS_PAYMENT_REQUIRED = "402 Payment Required";
    // reserved for future use
    const STATUS_FORBIDDEN = "403 Forbidden";
    const STATUS_NOT_FOUND = "404 Not Found";
    const STATUS_INTERNAL = "500  Internal Server Error";
    /* @var \CRestServer */
    protected static $instance = \null;
    protected $class = '';
    protected $method = '';
    protected $transport = '';
    protected $scope = '';
    protected $query = array();
    protected $timeStart = 0;
    protected $timeProcessStart = 0;
    protected $timeProcessFinish = 0;
    protected $usage = \null;
    protected $auth = array();
    protected $authData = array();
    protected $authScope = \null;
    protected $clientId = '';
    protected $passwordId = '';
    /* @var RestException */
    protected $error = '';
    protected $resultStatus = \null;
    protected $securityMethodState = \null;
    protected $securityClientState = \null;
    protected $arServiceDesc = array();
    protected $tokenCheck = \false;
    protected $authType = \null;
    public function __construct($params)
    {
    }
    /**
     * @return \CRestServer|null
     */
    public static function instance()
    {
    }
    public static function transportSupported($transport)
    {
    }
    public function process()
    {
    }
    protected function isTokenCheck()
    {
    }
    protected function processTokenCheckCall()
    {
    }
    protected function processCall()
    {
    }
    public function getTransport()
    {
    }
    public function getAuth()
    {
    }
    public function getAuthData()
    {
    }
    public function getAuthScope()
    {
    }
    public function getQuery()
    {
    }
    public function getAuthType()
    {
    }
    /**
     * @deprecated
     *
     * use \CRestServer::getClientId()
     **/
    public function getAppId()
    {
    }
    public function getClientId()
    {
    }
    public function getPasswordId()
    {
    }
    public function getMethod()
    {
    }
    public function setStatus($status)
    {
    }
    public function setSecurityState($state = \null)
    {
    }
    public function getScope()
    {
    }
    public function getScopeList()
    {
    }
    public function getServiceDescription()
    {
    }
    public function getTokenCheckSignature($method, $queryString)
    {
    }
    public function getApplicationSignature()
    {
    }
    public function requestConfirmation($userList, $message)
    {
    }
    private function init()
    {
    }
    private function checkSite()
    {
    }
    private function getMethodDescription()
    {
    }
    private function getMethodCallback()
    {
    }
    private function checkScope()
    {
    }
    protected function checkAuth()
    {
    }
    protected function canUseConnectors()
    {
    }
    protected function getMethodOptions()
    {
    }
    private function makeSignature($key, $state)
    {
    }
    /*************************************************************/
    private function outputError()
    {
    }
    public function sendHeaders()
    {
    }
    public function output($data)
    {
    }
    protected function appendDebugInfo(array $data)
    {
    }
    private function outputJson($data)
    {
    }
    private function outputXml($data)
    {
    }
}
class CRestServerBatchItem extends \CRestServer
{
    protected $authKeys = array();
    public function setApplicationId($appId)
    {
    }
    public function setAuthKeys($keys)
    {
    }
    public function setAuthData($authData)
    {
    }
    public function setAuthType($authType)
    {
    }
    protected function checkAuth()
    {
    }
}
class IRestService
{
    const LIST_LIMIT = 50;
    protected static function getNavData($start, $bORM = \false)
    {
    }
    protected static function setNavData($result, $dbRes)
    {
    }
    public function getDescription()
    {
    }
    protected static function sanitizeFilter($filter, array $availableFields = \null, $valueCallback = \null, array $availableOperations = \null)
    {
    }
    protected static function sanitizeOrder($order, array $availableFields = \null)
    {
    }
}