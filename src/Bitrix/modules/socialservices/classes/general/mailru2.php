<?php

class CSocServMailRu2 extends \CSocServAuth
{
    const ID = "MailRu2";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    protected $entityOAuth;
    public function GetSettings()
    {
    }
    /**
     * @param string|bool $code = false
     * @return CMailRu2Interface
     */
    public function getEntityOAuth($code = \false)
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
    public function prepareUser($arUser, $short = \false)
    {
    }
    public function Authorize()
    {
    }
    public function setUser($userId)
    {
    }
}
class CMailRu2Interface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "MailRu2";
    const AUTH_URL = "https://oauth.mail.ru/login";
    const TOKEN_URL = "https://oauth.mail.ru/token";
    const USER_INFO_URL = "https://oauth.mail.ru/userinfo";
    protected $userId = \false;
    protected $responseData = array();
    protected $scope = array("userinfo");
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
    public function getNewAccessToken($refreshToken = \false, $userId = 0, $save = \false)
    {
    }
    public function GetCurrentUser()
    {
    }
    public function GetAppInfo()
    {
    }
    public function getScopeEncode()
    {
    }
}