<?php

class CSocServBitrix24Net extends \CSocServAuth
{
    const ID = "Bitrix24Net";
    const NETWORK_URL = \B24NETWORK_NODE;
    protected $entityOAuth = \null;
    public function GetSettings()
    {
    }
    public function CheckSettings()
    {
    }
    public function getFormHtml($arParams)
    {
    }
    public function GetOnClickJs()
    {
    }
    public function getEntityOAuth($code = \false)
    {
    }
    public function getUrl($mode = "page")
    {
    }
    public function getInviteUrl($userId, $checkword)
    {
    }
    public function addScope($scope)
    {
    }
    public function Authorize($skipCheck = \false)
    {
    }
    public static function registerSite($domain)
    {
    }
}
class CBitrix24NetOAuthInterface
{
    const NET_URL = \B24NETWORK_NODE;
    const INVITE_URL = "/invite/";
    const PASSPORT_URL = "/id/";
    const AUTH_URL = "/oauth/authorize/";
    const TOKEN_URL = "/oauth/token/";
    protected $appID;
    protected $appSecret;
    protected $code = \false;
    protected $access_token = \false;
    protected $accessTokenExpires = 0;
    protected $lastAuth = \null;
    protected $refresh_token = '';
    protected $scope = array('auth');
    protected $arResult = array();
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function getAppID()
    {
    }
    public function getAppSecret()
    {
    }
    public function getAccessTokenExpires()
    {
    }
    public function setAccessTokenExpires($accessTokenExpires)
    {
    }
    public function getToken()
    {
    }
    public function setToken($access_token)
    {
    }
    public function getRefreshToken()
    {
    }
    public function setRefreshToken($refresh_token)
    {
    }
    public function setCode($code)
    {
    }
    public function setScope($scope)
    {
    }
    public function getScope()
    {
    }
    public function addScope($scope)
    {
    }
    public function getScopeEncode()
    {
    }
    public function getResult()
    {
    }
    public function getError()
    {
    }
    public function GetAuthUrl($redirect_uri, $state = '', $mode = 'popup')
    {
    }
    public function getInviteUrl($userId, $checkword)
    {
    }
    public function getLastAuth()
    {
    }
    public function GetAccessToken($redirect_uri = '')
    {
    }
    public function getNewAccessToken($refreshToken = \false, $userId = 0, $save = \false, $scope = array())
    {
    }
    public function GetCurrentUser()
    {
    }
    public function RevokeAuth()
    {
    }
    public function UpdateCurrentUser($arFields)
    {
    }
    private function getStorageTokens()
    {
    }
    public function checkAccessToken()
    {
    }
}
class CBitrix24NetTransport
{
    const SERVICE_URL = "/rest/";
    const METHOD_METHODS = 'methods';
    const METHOD_BATCH = 'batch';
    const METHOD_PROFILE = 'profile';
    const METHOD_PROFILE_ADD = 'profile.add';
    const METHOD_PROFILE_ADD_CHECK = 'profile.add.check';
    const METHOD_PROFILE_UPDATE = 'profile.update';
    const METHOD_PROFILE_DELETE = 'profile.delete';
    const METHOD_PROFILE_CONTACTS = 'profile.contacts';
    const METHOD_PROFILE_RESTORE_PASSWORD = 'profile.password.restore';
    const RESTORE_PASSWORD_METHOD_EMAIL = 'EMAIL';
    const RESTORE_PASSWORD_METHOD_PHONE = 'PHONE';
    const REPONSE_KEY_BROADCAST = "broadcast";
    protected $access_token = '';
    protected $httpTimeout = \SOCSERV_DEFAULT_HTTP_TIMEOUT;
    public static function init()
    {
    }
    public function __construct($access_token)
    {
    }
    protected function prepareResponse($result)
    {
    }
    protected function prepareRequest(array $request)
    {
    }
    protected function convertRequest(array $request)
    {
    }
    public function call($methodName, $additionalParams = \null)
    {
    }
    public function batch($actions)
    {
    }
    public function getMethods()
    {
    }
    public function getProfile()
    {
    }
    public function addProfile($arFields)
    {
    }
    public function checkProfile($arFields)
    {
    }
    public function updateProfile($arFields)
    {
    }
    public function deleteProfile($ID)
    {
    }
    public function getProfileContacts($userId)
    {
    }
    /**
     * Restore user profile password
     * @param int $userId User id whom password should be restored.
     * @param string $restoreMethod Restore method (via email or via phone).
     * @return mixed
     */
    public function restoreProfilePassword($userId, $restoreMethod)
    {
    }
}
class CBitrix24NetPortalTransport extends \CBitrix24NetTransport
{
    protected $clientId = \null;
    protected $clientSecret = \null;
    public static function init()
    {
    }
    public function __construct($clientId, $clientSecret)
    {
    }
    protected function prepareRequest(array $request)
    {
    }
}