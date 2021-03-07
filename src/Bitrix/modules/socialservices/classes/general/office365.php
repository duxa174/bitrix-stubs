<?php

class CSocServOffice365OAuth extends \CSocServAuth
{
    const ID = "Office365";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    /** @var COffice365OAuthInterface null  */
    protected $entityOAuth = \null;
    public function getEntityOAuth()
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
    public function prepareUser($office365User)
    {
    }
    public function Authorize()
    {
    }
    public function getProfileUrl($id)
    {
    }
}
class COffice365OAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "Office365";
    const AUTH_URL = "https://login.microsoftonline.com/common/oauth2/v2.0/authorize";
    const TOKEN_URL = "https://login.microsoftonline.com/common/oauth2/v2.0/token";
    const VERSION = "/v1.0";
    const CONTACTS_URL = "/me/";
    const REDIRECT_URI = "/bitrix/tools/oauth/office365.php";
    protected $resource = "https://graph.microsoft.com";
    protected $scope = "User.Read";
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function GetAuthUrl($redirect_uri, $state = '')
    {
    }
    public function GetAccessToken($redirect_uri = \false)
    {
    }
    public function getNewAccessToken($refreshToken, $userId = 0, $save = \false)
    {
    }
    public function getResource()
    {
    }
    public function GetCurrentUser()
    {
    }
    public function getTenant()
    {
    }
    public function getRedirectUri()
    {
    }
}
/* @deprecated */
class COffice365OAuthInterfaceOld extends \COffice365OAuthInterface
{
    const RESOURCE_TPL = "https://#TENANT#-my.sharepoint.com";
    const VERSION = "/_api/v2.0";
    protected $tenant = \null;
    public function __construct($tenant = \false, $appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function getTenant()
    {
    }
    public function setTenant($tenant)
    {
    }
}