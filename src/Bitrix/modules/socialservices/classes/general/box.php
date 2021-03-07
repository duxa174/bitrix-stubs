<?php

class CSocServBoxAuth extends \CSocServAuth
{
    const ID = "Box";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    const LOGIN_PREFIX = "B_";
    /** @var CBoxOAuthInterface null  */
    protected $entityOAuth = \null;
    /**
     * @param string $code=false
     * @return CBoxOAuthInterface
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
    public function getUrl($location = 'opener', $addScope = \null, $arParams = array())
    {
    }
    public function getStorageToken()
    {
    }
    public function prepareUser($boxUser, $short = \false)
    {
    }
    public function Authorize()
    {
    }
}
class CBoxOAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "Box";
    const AUTH_URL = "https://app.box.com/api/oauth2/authorize";
    const TOKEN_URL = "https://app.box.com/api/oauth2/token";
    const ACCOUNT_URL = "https://api.box.com/2.0/users/me";
    protected $oauthResult;
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
    public function getNewAccessToken($refreshToken = \false, $userId = 0, $save = \false, $scope = array())
    {
    }
    public function GetCurrentUser()
    {
    }
}