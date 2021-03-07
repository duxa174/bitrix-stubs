<?php

class CSocServYandexAuth extends \CSocServAuth
{
    const ID = "YandexOAuth";
    const CONTROLLER_URL = "https://www.bitrix24.ru/controller";
    const LOGIN_PREFIX = "YA_";
    /** @var CYandexOAuthInterface null  */
    protected $entityOAuth = \null;
    /**
     * @param string $code=false
     * @return CYandexOAuthInterface
     */
    public function getEntityOAuth($code = \false)
    {
    }
    public function GetSettings()
    {
    }
    public function getUrl($location = 'opener', $addScope = \null, $arParams = array())
    {
    }
    public function GetFormHtml($arParams)
    {
    }
    public function GetOnClickJs($arParams)
    {
    }
    public function getStorageToken()
    {
    }
    public function prepareUser($yandexUser, $short = \false)
    {
    }
    public function Authorize()
    {
    }
}
class CYandexOAuthInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "YandexOAuth";
    const AUTH_URL = "https://oauth.yandex.ru/authorize";
    const TOKEN_URL = "https://oauth.yandex.ru/token";
    const USERINFO_URL = "https://login.yandex.ru/info";
    const MAX_DEVICE_ID_LENGTH = 50;
    protected $arResult = array();
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function GetRedirectURI()
    {
    }
    public function getResult()
    {
    }
    public function getError()
    {
    }
    /**
     * @param string $redirect_uri
     * @param string $state
     * @return string
     */
    public function GetAuthUrl($redirect_uri = '', $state = '')
    {
    }
    /**
     * @param string $state
     * @return string
     */
    public function getDeviceId($state)
    {
    }
    public function GetAccessToken()
    {
    }
    public function GetCurrentUser()
    {
    }
    public function GetAppInfo()
    {
    }
}