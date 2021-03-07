<?php

//manager to operate with services
class CSocServAuthManager
{
    /** @var array  */
    protected static $arAuthServices = \false;
    protected $userId = \null;
    public function __construct($userId = \null)
    {
    }
    protected static function AppyUserSettings($suffix)
    {
    }
    public function GetAuthServices($suffix)
    {
    }
    public function GetActiveAuthServices($arParams)
    {
    }
    public function GetProfileUrl($service, $uid, $arService = \false)
    {
    }
    public function GetFriendsList($service, $limit, &$next)
    {
    }
    public function GetSettings()
    {
    }
    public function Authorize($service_id, $arParams = array())
    {
    }
    public function GetError($service_id, $error_code)
    {
    }
    public static function GetUniqueKey()
    {
    }
    public static function SetUniqueKey()
    {
    }
    public static function CheckUniqueKey($bUnset = \true)
    {
    }
    function CleanParam()
    {
    }
    public static function GetUserArrayForSendMessages($userId)
    {
    }
    public static function SendUserMessage($socServUserId, $providerName, $message, $messageId)
    {
    }
    /**
     * Publishes messages from Twitter in Buzz corporate portal.
     * @static
     * @param $arUserTwit
     * @param $lastTwitId
     * @param $arSiteId
     * @return int|null
     */
    public static function PostIntoBuzz($arUserTwit, $lastTwitId, $arSiteId = array())
    {
    }
    public static function PostIntoBuzzAsBlog($userTwit, $arSiteId = array(), $userLogin = '')
    {
    }
    function GetTwitMessages($lastTwitId = "1", $counter = 1)
    {
    }
    public static function SendSocialservicesMessages()
    {
    }
    private static function MarkMessageAsSent($id)
    {
    }
    public function GetUserArray($authId)
    {
    }
    public static function GetCachedUserOption($option)
    {
    }
    public static function checkOldUser(&$socservUserFields)
    {
    }
    public static function checkAbandonedUser(&$socservUserFields)
    {
    }
}
//base class for auth services
class CSocServAuth
{
    protected static $settingsSuffix = \false;
    protected $checkRestrictions = \true;
    protected $allowChangeOwner = \true;
    protected $userId = \null;
    function __construct($userId = \null)
    {
    }
    public static function getControllerUrl()
    {
    }
    public function GetSettings()
    {
    }
    protected function CheckFields($action, &$arFields)
    {
    }
    static function Update($id, $arFields)
    {
    }
    public static function Delete($id)
    {
    }
    function OnUserDelete($id)
    {
    }
    function OnAfterTMReportDailyAdd()
    {
    }
    function OnAfterTMDayStart()
    {
    }
    public function CheckSettings()
    {
    }
    public function CheckPhotoURI($photoURI)
    {
    }
    public static function OptionsSuffix()
    {
    }
    public static function GetOption($opt)
    {
    }
    public static function SetOption($opt, $value)
    {
    }
    public static function getGroupsDenyAuth()
    {
    }
    public static function getGroupsDenySplit()
    {
    }
    public static function setGroupsDenyAuth($value)
    {
    }
    public static function setGroupsDenySplit($value)
    {
    }
    public static function isSplitDenied($arGroups = \null)
    {
    }
    public static function isAuthDenied($arGroups)
    {
    }
    public function AuthorizeUser($socservUserFields)
    {
    }
    public static function OnFindExternalUser($login)
    {
    }
    public function setAllowChangeOwner($value)
    {
    }
    protected static function hasEncryptedFields($arFields)
    {
    }
    protected static function encryptFields(&$arFields)
    {
    }
}
//some repetitive functionality
class CSocServUtil
{
    const OAUTH_PACK_PARAM = "oauth_proxy_params";
    private static $oAuthParams = array("redirect_uri", "client_id", "scope", "response_type", "state");
    public static function GetCurUrl($addParam = "", $removeParam = \false, $checkOAuthProxy = \true)
    {
    }
    /**
     * @deprecated Use \CHTTP::URN2URI instead
     */
    public static function ServerName($forceHttps = \false)
    {
    }
    public static function packOAuthProxyString($proxyString)
    {
    }
    public static function getOAuthProxyString()
    {
    }
    public static function checkOAuthProxyParams()
    {
    }
}
class CSocServAllMessage
{
    protected function CheckFields($action, &$arFields)
    {
    }
    static function Update($id, $arFields)
    {
    }
    static function Delete($id)
    {
    }
}