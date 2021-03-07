<?php

class CAllUser extends \CDBResult
{
    var $LAST_ERROR = "";
    var $bLoginByHash = \false;
    protected $admin = \null;
    /** @var Main\Session\SessionInterface  */
    protected static $kernelSession;
    protected static $CURRENT_USER = \false;
    protected $justAuthorized = \false;
    protected static $userGroupCache = array();
    const STATUS_ONLINE = 'online';
    const STATUS_OFFLINE = 'offline';
    //in seconds
    const PHONE_CODE_OTP_INTERVAL = 30;
    const PHONE_CODE_RESEND_INTERVAL = 60;
    /**
     * CUser constructor.
     */
    public function __construct()
    {
    }
    public function GetParam($name)
    {
    }
    public function SetParam($name, $value)
    {
    }
    public function GetSecurityPolicy()
    {
    }
    public function GetID()
    {
    }
    public function GetLogin()
    {
    }
    public function GetEmail()
    {
    }
    public function GetFullName()
    {
    }
    public function GetFirstName()
    {
    }
    public function GetLastName()
    {
    }
    public function GetSecondName()
    {
    }
    public function GetFormattedName($bUseBreaks = \true, $bHTMLSpec = \true)
    {
    }
    public static function err_mess()
    {
    }
    public function Add($arFields)
    {
    }
    public static function GetDropDownList($strSqlSearch = "and ACTIVE='Y'", $strSqlOrder = "ORDER BY ID, NAME, LAST_NAME")
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array(), $arParams = array())
    {
    }
    public static function IsOnLine($id, $interval = \null)
    {
    }
    public function GetUserGroupArray()
    {
    }
    public function SetUserGroupArray($arr)
    {
    }
    public function GetUserGroupString()
    {
    }
    public function GetGroups()
    {
    }
    public function RequiredHTTPAuthBasic($Realm = "Bitrix")
    {
    }
    public function LoginByCookies()
    {
    }
    public function LoginByHash($login, $hash)
    {
    }
    public function LoginByHttpAuth()
    {
    }
    public function LoginByDigest($arDigest)
    {
    }
    public static function UpdateDigest($ID, $pass)
    {
    }
    public function LoginHitByHash()
    {
    }
    public static function AddHitAuthHash($url, $user_id = \false, $site_id = \false)
    {
    }
    public static function GetHitAuthHash($url_mask, $userID = \false)
    {
    }
    public static function CleanUpHitAuthAgent()
    {
    }
    protected function UpdateSessionData($id, $applicationId = \null)
    {
    }
    /**
     * Performs the user authorization:
     *    fills session parameters;
     *    remembers auth;
     *    spreads auth through sites.
     * @param int $id An user ID.
     * @param bool $bSave Save authorization in cookies.
     * @param bool $bUpdate Update last login information in DB.
     * @param string|null $applicationId An application password ID.
     * @return bool
     */
    public function Authorize($id, $bSave = \false, $bUpdate = \true, $applicationId = \null)
    {
    }
    public function GetSessionHash()
    {
    }
    /** @deprecated */
    public function GetPasswordHash($PASSWORD_HASH)
    {
    }
    /** @deprecated */
    public function SavePasswordHash()
    {
    }
    /**
     * Authenticates the user and then authorizes him
     * @param string $login
     * @param string $password
     * @param string $remember
     * @param string $password_original
     * @return array|bool
     */
    public function Login($login, $password, $remember = "N", $password_original = "Y")
    {
    }
    /**
     * Internal authentication by login and password.
     * @param array $arParams
     * @param array|bool $result_message
     * @param string|null $applicationId
     * @param string|null $applicationPassId
     * @return int User ID on success or 0 on failure. Additionally, $result_message will hold an error.
     */
    public static function LoginInternal(&$arParams, &$result_message = \true, &$applicationId = \null, &$applicationPassId = \null)
    {
    }
    protected static function blockUser($userId, $blockTime, $loginAttempts)
    {
    }
    protected static function CheckUsersCount($user_id)
    {
    }
    public function LoginByOtp($otp, $remember_otp = "N", $captcha_word = "", $captcha_sid = "")
    {
    }
    public function AuthorizeWithOtp($user_id)
    {
    }
    public function ChangePassword($LOGIN, $CHECKWORD, $PASSWORD, $CONFIRM_PASSWORD, $SITE_ID = \false, $captcha_word = "", $captcha_sid = 0, $authActions = \true, $phoneNumber = "", $currentPassword = "")
    {
    }
    public static function GeneratePasswordByPolicy(array $groups)
    {
    }
    public static function CheckPasswordAgainstPolicy($password, $arPolicy, $userId = \null)
    {
    }
    /**
     * Sends a profile information to email
     */
    public static function SendUserInfo($ID, $SITE_ID, $MSG, $bImmediate = \false, $eventName = "USER_INFO", $checkword = \null)
    {
    }
    public static function SendPassword($LOGIN, $EMAIL, $SITE_ID = \false, $captcha_word = "", $captcha_sid = 0, $phoneNumber = "", $shortCode = \false)
    {
    }
    public function Register($USER_LOGIN, $USER_NAME, $USER_LAST_NAME, $USER_PASSWORD, $USER_CONFIRM_PASSWORD, $USER_EMAIL, $SITE_ID = \false, $captcha_word = "", $captcha_sid = 0, $bSkipConfirm = \false, $USER_PHONE_NUMBER = "")
    {
    }
    public function SimpleRegister($USER_EMAIL, $SITE_ID = \false)
    {
    }
    public function IsAuthorized()
    {
    }
    public function HasNoAccess()
    {
    }
    public function IsJustAuthorized()
    {
    }
    public function IsJustBecameOnline()
    {
    }
    public function IsAdmin()
    {
    }
    public function SetControllerAdmin($isAdmin = \true)
    {
    }
    /**
     * @param array|true $deleteParms Parameters to delete; if true, delete all
     * @return string
     */
    public static function getLogoutParams($deleteParms = [])
    {
    }
    public function Logout()
    {
    }
    public static function GetUserGroup($ID)
    {
    }
    public static function GetUserGroupEx($ID)
    {
    }
    public static function GetUserGroupList($ID)
    {
    }
    public function CheckFields(&$arFields, $ID = \false)
    {
    }
    /**
     * @param array $arFields
     * @param int|bool $ID
     * @return string
     */
    public static function CheckInternalFields($arFields, $ID = \false)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetByLogin($LOGIN)
    {
    }
    public function Update($ID, $arFields, $authActions = \true)
    {
    }
    public static function SetUserGroup($USER_ID, $arGroups, $newUser = \false)
    {
    }
    /**
     * Appends groups to the list of existing user's groups.
     *
     * @param int $user_id
     * @param array|int $groups A single number, or an array of numbers, or an array of arrays("GROUP_ID"=>$val, "DATE_ACTIVE_FROM"=>$val, "DATE_ACTIVE_TO"=>$val)
     */
    public static function AppendUserGroup($user_id, $groups)
    {
    }
    public static function GetCount()
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetExternalAuthList()
    {
    }
    public static function GetGroupPolicy($iUserId)
    {
    }
    public static function CheckStoredHash($iUserId, $sHash, $bTempHashOnly = \false)
    {
    }
    public function GetAllOperations($arGroups = \false)
    {
    }
    public function CanDoOperation($op_name, $user_id = 0)
    {
    }
    public static function GetFileOperations($arPath, $arGroups = \false)
    {
    }
    public function CanDoFileOperation($op_name, $arPath)
    {
    }
    public static function UserTypeRightsCheck($entity_id)
    {
    }
    public function CanAccess($arCodes)
    {
    }
    public function GetAccessCodes()
    {
    }
    public static function CleanUpAgent()
    {
    }
    public static function DeactivateAgent()
    {
    }
    public static function UnblockAgent($userId)
    {
    }
    public static function GetActiveUsersCount()
    {
    }
    public static function SetLastActivityDate($userId = \null, $cache = \false)
    {
    }
    public static function SetLastActivityDateByArray($arUsers, $ip = \null)
    {
    }
    public static function GetSecondsForLimitOnline()
    {
    }
    public static function GetExternalUserTypes()
    {
    }
    public static function GetOnlineStatus($userId, $lastseen, $now = \false)
    {
    }
    /**
     * @param int|bool|\Bitrix\Main\Type\DateTime $timestamp
     * @param int|bool|\Bitrix\Main\Type\DateTime $now
     *
     * @return string
     */
    public static function FormatLastActivityDate($timestamp, $now = \false)
    {
    }
    public static function SearchUserByName($arName, $email = "", $bLoginMode = \false)
    {
    }
    public static function FormatName($NAME_TEMPLATE, $arUser, $bUseLogin = \false, $bHTMLSpec = \true)
    {
    }
    public static function clearUserGroupCache($ID = \false)
    {
    }
    public function CheckAuthActions()
    {
    }
    public static function AuthActionsCleanUpAgent()
    {
    }
    /**
     * @param int $userId
     * @return array|bool [code, phone_number]
     */
    public static function GeneratePhoneCode($userId)
    {
    }
    /**
     * @param string $phoneNumber
     * @param string $code
     * @return bool|int User ID on success, false on error
     */
    public static function VerifyPhoneCode($phoneNumber, $code)
    {
    }
    /**
     * @param string $phoneNumber
     * @param string $smsTemplate
     * @param string|null $siteId
     * @return Main\Result
     */
    public static function SendPhoneCode($phoneNumber, $smsTemplate, $siteId = \null)
    {
    }
    protected static function SendEmailCode($userId, $siteId)
    {
    }
}
//compatibility
class CUser extends \CAllUser
{
}
/**
 * @deprecated Use CGroup
 */
class CAllGroup extends \CGroup
{
}
/**
 * @deprecated Use CTask
 */
class CAllTask extends \CTask
{
}
/**
 * @deprecated Use COperation
 */
class CAllOperation extends \COperation
{
}