<?php

class CSocServMyMailRu extends \CSocServAuth
{
    const ID = "MyMailRu";
    public function GetSettings()
    {
    }
    public function GetFormHtml($arParams)
    {
    }
    public function GetOnClickJs()
    {
    }
    public function getUrl()
    {
    }
    public function Authorize()
    {
    }
}
class CMailRuOAuthInterface
{
    const AUTH_URL = "https://connect.mail.ru/oauth/authorize";
    const TOKEN_URL = "https://connect.mail.ru/oauth/token";
    const CONTACTS_URL = "http://www.appsmail.ru/platform/api";
    protected $appID;
    protected $appSecret;
    protected $code = \false;
    protected $access_token = \false;
    protected $userID = \false;
    public function __construct($appID, $appSecret, $code = \false)
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
}