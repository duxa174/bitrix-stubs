<?php

class CSocServVKontakte extends \CSocServAuth
{
    const ID = "VKontakte";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    protected $entityOAuth = \NULL;
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
    public function getEntityOAuth($code = \false)
    {
    }
    public function prepareUser($arVkUser, $short = \false)
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
    public function getProfileUrl($uid)
    {
    }
}
class CVKontakteOAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "VKontakte";
    // https://vk.com/dev/constant_version_updates
    const AUTH_URL = "https://oauth.vk.com/authorize";
    const TOKEN_URL = "https://oauth.vk.com/access_token";
    const CONTACTS_URL = "https://api.vk.com/method/users.get";
    const FRIENDS_URL = "https://api.vk.com/method/friends.get";
    const MESSAGE_URL = "https://api.vk.com/method/messages.send";
    const APP_URL = "https://api.vk.com/method/apps.get";
    // https://vk.com/dev/versions
    const API_VERSION = "5.107";
    protected $userID = \false;
    protected $userEmail = \false;
    protected $scope = array("friends", "offline", "email");
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function GetRedirectURI()
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
    public function GetAppInfo()
    {
    }
    public function GetCurrentUserEmail()
    {
    }
    public function GetCurrentUserFriends($limit, &$next)
    {
    }
    public function sendMessage($uid, $message)
    {
    }
}