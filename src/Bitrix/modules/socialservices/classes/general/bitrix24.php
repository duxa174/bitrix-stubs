<?php

class CSocServBitrixOAuth extends \CSocServAuth
{
    const ID = "Bitrix24OAuth";
    /** @var CBitrixOAuthInterface null  */
    protected $entityOAuth = \null;
    protected $appID;
    protected $appSecret;
    protected $portalURI = '';
    protected $redirectURI = '';
    protected $signature = \null;
    function __construct($appID, $appSecret, $portalURI, $redirectURI, $userId = \null)
    {
    }
    public function getEntityOAuth($code = \false)
    {
    }
    public function addScope($scope)
    {
    }
    public function getRequestTokenUrl()
    {
    }
    public function getAccessToken($code, $addScope = \null)
    {
    }
    public function getStorageToken()
    {
    }
    public function Authorize()
    {
    }
    public function gadgetAuthorize()
    {
    }
}
class CBitrixOAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = 'Bitrix24OAuth';
    protected $appID;
    protected $appSecret;
    protected $code = \false;
    protected $access_token = \false;
    protected $member_id = \false;
    protected $signatureKey = \false;
    protected $accessTokenExpires = 0;
    protected $refresh_token = '';
    protected $portalURI = '';
    protected $scope = array();
    public function __construct($appID, $appSecret, $portalURI, $code = \false)
    {
    }
    public function getMemberId()
    {
    }
    public function GetAuthUrl($redirect_uri, $state = '')
    {
    }
    public function GetAccessToken($redirect_uri)
    {
    }
    public function getNewAccessToken($refreshToken, $userId = 0, $save = \false, $scope = array())
    {
    }
    public function saveDataDB()
    {
    }
    public function getSignatureKey()
    {
    }
}
class CBitrixPHPAppTransport
{
    protected $access_token = '';
    protected $signatureKey = \false;
    protected $portalURI = '';
    protected $httpTimeout = \SOCSERV_DEFAULT_HTTP_TIMEOUT;
    public function __construct($access_token, $portalURI, $signatureKey = \false)
    {
    }
    public function setSignatureKey($signatureKey)
    {
    }
    protected function prepareAnswer($result)
    {
    }
    protected function prepareRequest($params)
    {
    }
    public function call($methodName, $additionalParams = '')
    {
    }
    public function callSigned($methodName, $additionalParams = '')
    {
    }
    public function batch($actions)
    {
    }
    public function getAllMethods()
    {
    }
    public function getPlannerTasksId()
    {
    }
    public function getCurrentUser($signatureKey = '')
    {
    }
}