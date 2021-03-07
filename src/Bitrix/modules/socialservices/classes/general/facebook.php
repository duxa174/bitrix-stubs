<?php

class CSocServFacebook extends \CSocServAuth
{
    const ID = "Facebook";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    const LOGIN_PREFIX = "FB_";
    protected $entityOAuth = \null;
    /**
     * @param string $code =false
     * @return CFacebookInterface
     */
    public function getEntityOAuth($code = \false)
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
    public function getUrl($arParams)
    {
    }
    public function addScope($scope)
    {
    }
    public function prepareUser($arFBUser, $short = \false)
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
    public function sendMessage($uid, $message)
    {
    }
    public function getMessages($uid)
    {
    }
    public function getProfileUrl($uid)
    {
    }
    public static function SendUserFeed($userId, $message, $messageId)
    {
    }
}
class CFacebookInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "Facebook";
    const AUTH_URL = "https://www.facebook.com/dialog/oauth";
    const GRAPH_URL = "https://graph.facebook.com";
    protected $userId = \false;
    protected $responseData = array();
    protected $scope = array("email", "user_friends");
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function GetRedirectURI()
    {
    }
    public function GetAuthUrl($redirect_uri, $state = '')
    {
    }
    public function getResult()
    {
    }
    public function GetAccessToken($redirect_uri)
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
    public function SendFeed($socServUserId, $message, $messageId)
    {
    }
    public function sendMessage($uid, $message)
    {
    }
    public function getMessages($uid)
    {
    }
    private function SetOauthKeys($socServUserId)
    {
    }
}