<?php

class CSocServDropboxAuth extends \CSocServAuth
{
    const ID = "Dropbox";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    const LOGIN_PREFIX = "DB_";
    /** @var CDropboxOAuthInterface null  */
    protected $entityOAuth = \null;
    /**
     * @param string $code=false
     * @return CDropboxOAuthInterface
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
    public function prepareUser($arDropboxUser, $short = \false)
    {
    }
    public function Authorize()
    {
    }
}
class CDropboxOAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "Dropbox";
    const AUTH_URL = "https://www.dropbox.com/oauth2/authorize";
    const TOKEN_URL = "https://www.dropbox.com/oauth2/token";
    const ACCOUNT_URL = "https://api.dropboxapi.com/2/users/get_current_account";
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
    public function GetCurrentUser()
    {
    }
}