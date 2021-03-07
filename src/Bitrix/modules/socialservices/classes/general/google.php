<?php

class CSocServGoogleOAuth extends \CSocServAuth
{
    const ID = "GoogleOAuth";
    const LOGIN_PREFIX = "G_";
    /** @var CGoogleOAuthInterface null  */
    protected $entityOAuth = \null;
    /**
     * @param string $code=false
     * @return CGoogleOAuthInterface
     */
    public function getEntityOAuth($code = \false)
    {
    }
    public function GetSettings()
    {
    }
    public function CheckSettings()
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
    public function prepareUser($arGoogleUser, $short = \false)
    {
    }
    public function Authorize()
    {
    }
    public function setUser($userId)
    {
    }
    public function getFriendsList($limit, &$next)
    {
    }
}
class CGoogleOAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "GoogleOAuth";
    const AUTH_URL = "https://accounts.google.com/o/oauth2/auth";
    const TOKEN_URL = "https://accounts.google.com/o/oauth2/token";
    const CONTACTS_URL = "https://www.googleapis.com/oauth2/v1/userinfo";
    const FRIENDS_URL = "https://www.google.com/m8/feeds/contacts/default/full";
    const TOKENINFO_URL = "https://www.googleapis.com/oauth2/v2/tokeninfo";
    const REDIRECT_URI = "/bitrix/tools/oauth/google.php";
    protected $standardScope = array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile');
    protected $scope = array();
    protected $arResult = array();
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    protected function checkSavedScope()
    {
    }
    protected function saveScope()
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
    public function GetAuthUrl($redirect_uri, $state = '')
    {
    }
    public function GetAccessToken($redirect_uri = \false)
    {
    }
    public function GetCurrentUser()
    {
    }
    public function GetAppInfo()
    {
    }
    public function GetCurrentUserFriends($limit, &$next)
    {
    }
    public function getNewAccessToken($refreshToken = \false, $userId = 0, $save = \false)
    {
    }
    public function getRedirectUri()
    {
    }
}