<?php

class CSocServLiveIDOAuth extends \CSocServAuth
{
    const ID = "LiveIDOAuth";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    /** @var CLiveIDOAuthInterface null  */
    protected $entityOAuth = \null;
    public function getEntityOAuth()
    {
    }
    public function GetSettings()
    {
    }
    public function GetFormHtml($arParams)
    {
    }
    public function GetOnClickJs($arParams)
    {
    }
    public function getUrl($location = 'opener', $addScope = \null, $arParams = array())
    {
    }
    public function getStorageToken()
    {
    }
    public function Authorize()
    {
    }
    public function getFriendsList($limit = 0, $offset = 0)
    {
    }
    public function getProfileUrl($id)
    {
    }
}
class CLiveIDOAuthInterface
{
    const SERVICE_ID = "LiveIDOAuth";
    const AUTH_URL = "https://login.live.com/oauth20_authorize.srf";
    const TOKEN_URL = "https://login.live.com/oauth20_token.srf";
    const CONTACTS_URL = "https://apis.live.net/v5.0/me/";
    const FRIENDS_URL = "https://apis.live.net/v5.0/me/contacts/";
    protected $appID;
    protected $appSecret;
    protected $code = \false;
    protected $access_token = \false;
    protected $accessTokenExpires = 0;
    protected $refresh_token = '';
    protected $scope = array('wl.signin', 'wl.basic', 'wl.offline_access', 'wl.emails');
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function getAccessTokenExpires()
    {
    }
    public function getAppID()
    {
    }
    public function getAppSecret()
    {
    }
    public function getToken()
    {
    }
    /**
     * @param string $refresh_token
     */
    public function setRefreshToken($refresh_token)
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
    public function GetAuthUrl($redirect_uri, $state = '')
    {
    }
    public function GetAccessToken($redirect_uri)
    {
    }
    public function GetCurrentUser()
    {
    }
    public function GetCurrentUserFriends($limit = 0, $offset = 0)
    {
    }
    private function getStorageTokens()
    {
    }
    private function checkAccessToken()
    {
    }
    public function getNewAccessToken($refreshToken, $userId = 0, $save = \false)
    {
    }
    protected function deleteStorageTokens()
    {
    }
}