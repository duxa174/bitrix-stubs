<?php

class CSocServZoom extends \CSocServAuth
{
    public const ID = 'zoom';
    private const CONTROLLER_URL = 'https://www.bitrix24.com/controller';
    private const LOGIN_PREFIX = 'zoom_';
    public const EMPTY_TYPE = "EMPTY";
    protected $entityOAuth;
    public function __construct($userId = \null)
    {
    }
    public function GetSettings()
    {
    }
    /**
     * @param string|bool $code = false
     * @return CZoomInterface
     */
    public function getEntityOAuth($code = \false) : \CZoomInterface
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
    public function addScope($scope) : \CZoomInterface
    {
    }
    public function prepareUser($arUser, $short = \false) : array
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
    public function getStorageToken()
    {
    }
    public function createConference($params)
    {
    }
    private function getShortLink(int $conferenceId) : string
    {
    }
    /**
     * Updates Zoom conference and saves the result in DB table.
     *
     * @param array $updateParams Params which uses for update (conference dates).
     * @return Result
     * @throws Exception
     */
    public function updateConference(array $updateParams) : \Bitrix\Main\Result
    {
    }
    /**
     * Prepares start date and duration for update in Zoom, only if it is different from activity start date and duration.
     *
     * @param array $updateParams
     * @return array|null
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    private function prepareDataToUpdate(array $updateParams) : ?array
    {
    }
    public function getConferenceById(int $confId) : ?array
    {
    }
    private function attachPasswordToUrl(string $conferenceUrl, string $password) : string
    {
    }
    /**
     * Notifies Zoom that we comply with the user’s data policy after the user uninstalls Bitrix24 app.
     *
     * @param array $payload
     *
     * @return Result
     */
    public function sendComplianceRequest(array $payload) : \Bitrix\Main\Result
    {
    }
}
class CZoomInterface extends \CSocServOAuthTransport
{
    const SERVICE_ID = "zoom";
    const AUTH_URL = 'https://zoom.us/oauth/authorize';
    const TOKEN_URL = 'https://zoom.us/oauth/token';
    const COMPLIANCE_URL = 'https://api.zoom.us/oauth/data/compliance';
    private const API_ENDPOINT = 'https://api.zoom.us/v2/';
    private const USER_INFO_URL = 'users/me';
    private const CREATE_MEETING_ENDPOINT = 'users/me/meetings';
    private const UPDATE_MEETING_ENDPOINT = 'meetings/';
    protected $userId = \false;
    protected $responseData = array();
    protected $idToken;
    protected $scope = ['meeting:write', 'user:read:admin', 'meeting:read', 'recording:read'];
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
    public function requestConference($params) : \Bitrix\Main\Result
    {
    }
    public function updateConference(int $conferenceId, array $params) : \Bitrix\Main\Result
    {
    }
    public function getConferenceById($confId) : ?array
    {
    }
    public function getConferenceFiles($confId) : ?array
    {
    }
    public function sendComplianceNotify(array $params) : \Bitrix\Main\Result
    {
    }
    private function sendRequest(string $method, string $endPoint, array $params = []) : \Bitrix\Main\Result
    {
    }
    /**
     * Checks if zoom is connected to user profile.
     *
     * @param $userId
     * @return bool
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    public static function isConnected($userId) : bool
    {
    }
    public function GetAppInfo() : bool
    {
    }
    public function getScopeEncode() : string
    {
    }
}