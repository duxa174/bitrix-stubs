<?php

class CSocServOdnoklassniki extends \CSocServAuth
{
    const ID = "Odnoklassniki";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    protected $entityOAuth = \null;
    public function GetSettings()
    {
    }
    public function getEntityOAuth()
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
    public function Authorize()
    {
    }
    public static function SendUserFeed($userId, $message)
    {
    }
}
class COdnoklassnikiInterface
{
    const AUTH_URL = "http://www.odnoklassniki.ru/oauth/authorize";
    const TOKEN_URL = "http://api.odnoklassniki.ru/oauth/token.do";
    const CONTACTS_URL = "http://api.odnoklassniki.ru/fb.do";
    protected $appID;
    protected $appSecret;
    protected $appKey;
    protected $code = \false;
    protected $access_token = \false;
    protected $sign = \false;
    protected $refresh_token = '';
    protected $userId = 0;
    public function __construct($appID = \false, $appSecret = \false, $appKey = \false, $code = \false)
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
    public function SendFeed($socServUserId, $message, $getNewToken = \true)
    {
    }
    private function SetOauthKeys($socServUserId)
    {
    }
    private function RefreshToken($socServUserId)
    {
    }
}