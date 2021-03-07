<?php

class CSocServApple extends \CSocServAuth
{
    public const ID = 'apple';
    public const LOGIN_PREFIX = 'apple_';
    private const CONTROLLER_URL = 'https://www.bitrix24.ru/controller';
    protected $entityOAuth;
    public function GetSettings()
    {
    }
    /**
     * @param string|bool $code = false
     * @return CAppleInterface
     */
    public function getEntityOAuth($code = \false) : \CAppleInterface
    {
    }
    public function GetFormHtml($arParams)
    {
    }
    public function GetOnClickJs($arParams) : string
    {
    }
    public function getUrl($arParams) : string
    {
    }
    public function addScope($scope) : \CAppleInterface
    {
    }
    public function prepareUser($arUser) : array
    {
    }
    public static function CheckUniqueKey($bUnset = \true) : bool
    {
    }
    public function Authorize() : void
    {
    }
    public function setUser($userId)
    {
    }
}
class CAppleInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "apple";
    const AUTH_URL = 'https://appleid.apple.com/auth/authorize';
    const TOKEN_URL = 'https://appleid.apple.com/auth/token';
    private const PUBLIC_KEYS_URL = 'https://appleid.apple.com/auth/keys';
    private const CLIENT_SECRET_EXPIRATION_TIME = 3600;
    private const DECODE_ALGORITHM = 'RS256';
    private const BITRIX_APP_BUNDLE_ID = 'com.bitrixsoft.cpmobile';
    protected $userId = \false;
    protected $responseData = array();
    protected $idToken;
    protected $scope = ['name', 'email'];
    private $keyId;
    private $teamId;
    private $secretKey;
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function GetRedirectURI() : string
    {
    }
    public function GetAuthUrl($redirect_uri, $state = '') : string
    {
    }
    public function getResult()
    {
    }
    public function GetAccessToken($redirect_uri = '') : bool
    {
    }
    public function getNewAccessToken($refreshToken = \false, $userId = 0, $save = \false) : bool
    {
    }
    public function getCurrentUser()
    {
    }
    public function GetAppInfo() : array
    {
    }
    public function getScopeEncode() : string
    {
    }
    private function getClientSecret() : string
    {
    }
    private function generateSignedJWT(string $keyId, string $teamId, string $clientId, string $secretKey)
    {
    }
    private static function convertDERSignature(string $der, int $partLength) : string
    {
    }
    /**
     * @param string $data
     *
     * @return string
     */
    private static function retrievePositiveInteger(string $data) : string
    {
    }
    private function fetchPublicKey()
    {
    }
    private function decodeIdentityToken(string $identityToken)
    {
    }
}