<?php

namespace Bitrix\Security\Mfa;

class Otp
{
    const TYPE_HOTP = 'hotp';
    const TYPE_TOTP = 'totp';
    const TYPE_DEFAULT = self::TYPE_HOTP;
    const SECRET_LENGTH = 20;
    // Must be power of 5 for "nicely" App Secret view
    const SKIP_COOKIE = 'OTPH';
    const REJECTED_KEY = 'OTP_REJECT_REASON';
    const REJECT_BY_CODE = 'code';
    const REJECT_BY_MANDATORY = 'mandatory';
    const TAGGED_CACHE_TEMPLATE = 'USER_OTP_%d';
    protected static $availableTypes = array(self::TYPE_HOTP, self::TYPE_TOTP);
    protected static $typeMap = array(self::TYPE_HOTP => '\\Bitrix\\Main\\Security\\Mfa\\HotpAlgorithm', self::TYPE_TOTP => '\\Bitrix\\Main\\Security\\Mfa\\TotpAlgorithm');
    protected $algorithmClass = null;
    protected $regenerated = false;
    /* @var \Bitrix\Main\Context $context */
    protected $context = null;
    protected $userId = null;
    protected $userLogin = null;
    protected $userGroupPolicy = array();
    protected $active = null;
    protected $userActive = null;
    protected $secret = null;
    protected $issuer = null;
    protected $label = null;
    protected $params = null;
    protected $attempts = null;
    protected $type = null;
    /** @var Type\DateTime */
    protected $initialDate = null;
    protected $skipMandatory = null;
    /** @var Type\DateTime */
    protected $deactivateUntil = null;
    /**
     * @param string|null $algorithm Class of needed OtpAlgorithm.
     */
    public function __construct($algorithm = null)
    {
    }
    /**
     * Return new instance for user provided by user ID
     *
     * @param int $userId User ID.
     * @throws ArgumentOutOfRangeException
     * @throws ArgumentTypeException
     * @return static New instance, if user does not use OTP - returning NullObject (see Otp::isActivated).
     */
    public static function getByUser($userId)
    {
    }
    /**
     * Return new instance with needed OtpAlgorithm type
     *
     * @param string $type Type of OtpAlgorithm (see getAvailableTypes).
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @return static New instance
     */
    public static function getByType($type)
    {
    }
    /**
     * Set new type of OtpAlgorithm
     *
     * @param string $type Type of OtpAlgorithm (see getAvailableTypes).
     * @throws ArgumentOutOfRangeException
     * @return $this
     */
    public function setType($type)
    {
    }
    /**
     * Return used OtpAlgorithm type
     *
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Return instance of used OtpAlgorithm
     *
     * @return OtpAlgorithm
     */
    public function getAlgorithm()
    {
    }
    /**
     * Return Provision URI according to KeyUriFormat
     *
     * @link https://code.google.com/p/google-authenticator/wiki/KeyUriFormat
     * @param array $opts Additional URI parameters, e.g. ['image' => 'http://example.com/my_logo.png'] .
     * @return string
     */
    public function getProvisioningUri(array $opts = array())
    {
    }
    /**
     * Reinitialize OTP (generate new secret, set default algo, etc), must be called before connect new device
     *
     * @param null $newSecret Using custom secret.
     * @return $this
     */
    public function regenerate($newSecret = null)
    {
    }
    /**
     * Verify provided input
     *
     * @param string $input Input received from user.
     * @param bool $updateParams Update or not user parameters in DB (e.g. counter for HotpAlgorithm).
     * @return bool True if input is valid.
     */
    public function verify($input, $updateParams = true)
    {
    }
    /**
     * Check is verifying attempts reached according to group security policy
     * May be used for show Captcha or what ever you want
     *
     * @return bool
     */
    public function isAttemptsReached()
    {
    }
    /**
     * Return synchronized user params for provided inputs
     *
     * @param string $inputA First code.
     * @param string $inputB Second code.
     * @throws \Bitrix\Main\Security\OtpException
     * @return string
     */
    public function getSyncParameters($inputA, $inputB)
    {
    }
    /**
     * Synchronize user params for provided inputs
     * Must be called after regenerate and before save!
     * If something went wrong - throw OtpException with valid description in message
     *
     * @param string $inputA First code.
     * @param string|null $inputB Second code.
     * @throws OtpException
     * @return $this
     */
    public function syncParameters($inputA, $inputB = null)
    {
    }
    /**
     * Save all OTP data to DB
     *
     * @throws OtpException
     * @return bool
     */
    public function save()
    {
    }
    /**
     * Delete OTP record from DB
     *
     * @return $this
     */
    public function delete()
    {
    }
    /**
     * Activate user OTP
     * OTP must be initialized (have secret, params, etc) before activate
     *
     * @return $this
     * @throws OtpException
     */
    public function activate()
    {
    }
    /**
     * Deactivate user OTP for a needed number of days or forever
     *
     * @param int $days Days. 0 means "forever".
     * @return $this
     * @throws OtpException
     */
    public function deactivate($days = 0)
    {
    }
    /**
     * Defer  mandatory user OTP using for a needed number of days or forever
     *
     * @param int $days Days. 0 means "forever".
     * @return $this
     * @throws OtpException
     */
    public function defer($days = 0)
    {
    }
    /**
     * Set new user information
     * Mostly used for initialization from DB
     * Now support:
     *  - ACTIVE: bool, activating state (see setActive)
     *  - USER_ID: integer, User ID (see setUserId)
     *  - ATTEMPTS: integer, Attempts counter (see setAttempts)
     *  - SECRET: binary, User secret (see setSecret)
     *  - PARAMS: string, User params (see setParams and getSyncParameters)
     *  - INITIAL_DATE: Type\Date, OTP initial date (see setInitialDate)
     *
     * @param array $userInfo See above.
     * @return $this
     */
    public function setUserInfo(array $userInfo)
    {
    }
    /**
     * Set new OTP initialization date
     *
     * @param Type\DateTime $date Initialization date.
     * @return $this
     */
    protected function setInitialDate(\Bitrix\Main\Type\DateTime $date)
    {
    }
    /**
     * Returns OTP initialization date
     *
     * @return Type\DateTime
     */
    public function getInitialDate()
    {
    }
    /**
     * Set datetime when user OTP must activated back
     *
     * @param Type\DateTime|null $date Datetime. "null" means never.
     * @return $this
     */
    protected function setDeactivateUntil($date)
    {
    }
    /**
     * @return Type\DateTime
     */
    public function getDeactivateUntil()
    {
    }
    /**
     * Set if user allowed to bypass OTP mandatory using while authorization
     *
     * @param bool $isSkipped Allowed or not.
     * @return $this
     */
    protected function setSkipMandatory($isSkipped = true)
    {
    }
    /**
     * Returns true if user can skip mandatory using
     *
     * @return bool
     */
    public function isMandatorySkipped()
    {
    }
    /**
     * Returns Unix timestamp of OTP initialization date
     *
     * @return int
     */
    protected function getInitialTimestamp()
    {
    }
    /**
     * Set new User ID
     *
     * @param int $userId User ID.
     * @return $this
     */
    protected function setUserId($userId)
    {
    }
    /**
     * Return used User ID
     *
     * @return int
     */
    public function getUserId()
    {
    }
    /**
     * Set new activating state
     *
     * @param bool $isActive Otp is activated or not.
     * @return $this
     */
    public function setActive($isActive)
    {
    }
    /**
     * Return is OTP activated or not
     *
     * @return bool
     */
    public function isActivated()
    {
    }
    public function setUserActive($isActive)
    {
    }
    public function isUserActive()
    {
    }
    /**
     * @return bool
     */
    public function isInitialized()
    {
    }
    /**
     * Set new verifying attempts count
     *
     * @param int $attemptsCount Attempts count.
     * @return $this
     */
    protected function setAttempts($attemptsCount)
    {
    }
    /**
     * Return verifying attempts count
     *
     * @return int
     */
    public function getAttempts()
    {
    }
    /**
     * Set new user params (e.g. counter for HotpAlgorithm)
     *
     * @see getSyncParameters
     * @param string $params User params.
     * @return $this
     */
    protected function setParams($params)
    {
    }
    /**
     * Return user params (e.g. counter for HotpAlgorithm)
     *
     * @return string
     */
    public function getParams()
    {
    }
    /**
     * Return binary secret
     *
     * @return string
     */
    public function getSecret()
    {
    }
    /**
     * Return hex-encoded secret
     *
     * @return string
     */
    public function getHexSecret()
    {
    }
    /**
     * Return mobile application secret, using for manual device initialization
     *
     * @return string
     */
    public function getAppSecret()
    {
    }
    /**
     * Set new secret
     *
     * @param string $secret Binary secret.
     * @return $this
     */
    public function setSecret($secret)
    {
    }
    /**
     * Set new secret in hex-encoded representation
     *
     * @param string $hexValue Hex-encoded secret.
     * @return $this
     */
    public function setHexSecret($hexValue)
    {
    }
    /**
     * Set new mobile application secret
     *
     * @param string $value Secret.
     * @return $this
     */
    public function setAppSecret($value)
    {
    }
    /**
     * Return issuer.
     * If custom issuer not available - return default (see getDefaultIssuer).
     *
     * @return string
     */
    public function getIssuer()
    {
    }
    /**
     * Set custom issuer
     *
     * @param string $issuer Issuer.
     * @return $this
     */
    public function setIssuer($issuer)
    {
    }
    /**
     * Return label for issuer (if provided)
     * If custom label not available - generate default (see generateLabel)
     *
     * @param string|null $issuer Issuer.
     * @return string
     */
    public function getLabel($issuer = null)
    {
    }
    /**
     * Set custom label
     *
     * @param string $label Label.
     * @return $this
     */
    public function setLabel($label)
    {
    }
    /**
     * Returns context of the current request.
     *
     * @return \Bitrix\Main\Context
     */
    public function getContext()
    {
    }
    /**
     * Set context of the current request.
     *
     * @param \Bitrix\Main\Context $context Application context.
     * @return $this
     */
    public function setContext(\Bitrix\Main\Context $context)
    {
    }
    /**
     * Set custom user login
     *
     * @param string $login Login.
     * @return $this
     */
    public function setUserLogin($login)
    {
    }
    /**
     * Return user login
     * If custom login not available it will be fetched from DB
     *
     * @return string
     */
    public function getUserLogin()
    {
    }
    /**
     * Return default issuer
     *
     * @return string
     */
    protected function getDefaultIssuer()
    {
    }
    /**
     * Generate label, based on current host, user login and issuer (if provided)
     *
     * @param string|null $issuer Issuer.
     * @return string
     */
    protected function generateLabel($issuer = null)
    {
    }
    /**
     * Return maximum verifying attempts, based on security group policy
     *
     * @return int
     */
    protected function getMaxLoginAttempts()
    {
    }
    /**
     * Return how long (in sec)remember value are valid
     *
     * @return int
     */
    protected function getRememberLifetime()
    {
    }
    /**
     * Return IP mask for checks remember value
     *
     * @return string
     */
    protected function getRememberIpMask()
    {
    }
    /**
     * Check if current user can skip OTP mandatory using.
     * It can skip if:
     *  - Otp already activated
     *  - User never login before
     *  - User not included to mandatory rights
     *  - The current date is included in the window initialization
     *
     * @return bool
     */
    public function canSkipMandatory()
    {
    }
    /**
     * Check if current user not included to mandatory rights
     *
     * @return bool
     */
    public function canSkipMandatoryByRights()
    {
    }
    /**
     * Check if user have valid cookie for skip OTP checking ("Remember OTP on this computer")
     *
     * @return bool
     */
    protected function canSkipByCookie()
    {
    }
    /**
     * Generate skip value for save in cookies
     * Currently based on client IP and mask (see getRememberIpMask)
     *
     * @return string
     */
    protected function getSkipCookieValue()
    {
    }
    /**
     * Store new value for skip OTP checking ("Remember OTP on this computer") in cookies
     *
     * @return $this
     */
    protected function setSkipCookie()
    {
    }
    /**
     * Check if OTP record exists in DB
     *
     * @return bool
     */
    protected function isDbRecordExists()
    {
    }
    /**
     * Return needed group security policy
     *
     * @param string $name Name of policy.
     * @return null
     */
    protected function getPolicy($name)
    {
    }
    /**
     * Clear cache for this OTP in global scope
     *
     * @return $this
     */
    protected function clearGlobalCache()
    {
    }
    /**
     * Most complex method, can check everything:-)
     * ToDo: describe after refactoring
     *
     * @param array $params Event parameters.
     * @return bool
     */
    public static function verifyUser(array $params)
    {
    }
    protected static function sendEvent(\Bitrix\Security\Mfa\Otp $otp)
    {
    }
    /**
     * Returns true if user must provide password from device
     *
     * @return bool
     */
    public static function isOtpRequired()
    {
    }
    /**
     * Returns true if user doesn't use OTP, but it required and grace full period ends
     *
     * @return bool
     */
    public static function isOtpRequiredByMandatory()
    {
    }
    /**
     * Return if user must provide captcha code before checking OTP password
     *
     * @return bool
     */
    public static function isCaptchaRequired()
    {
    }
    /**
     * Return deferred params (see verifyUser)
     *
     * @return array|null
     */
    public static function getDeferredParams()
    {
    }
    /**
     * Set or delete deferred params (see verifyUser)
     *
     * @param array|null $params Params, null means deleting params from storage.
     * @return void
     */
    public static function setDeferredParams($params)
    {
    }
    /**
     * Set initialization window (in days) for mandatory using checking
     *
     * @param int $days Days of initialization window. "0" means immediately (on next user authorization).
     * @return void
     */
    public static function setSkipMandatoryDays($days = 2)
    {
    }
    /**
     * Return initialization window (in days) for mandatory using checking
     *
     * @return int
     */
    public static function getSkipMandatoryDays()
    {
    }
    /**
     * Activate or deactivate mandatory OTP using
     *
     * @param bool $isMandatory Active or not.
     * @return void
     */
    public static function setMandatoryUsing($isMandatory = true)
    {
    }
    /**
     * Return is mandatory OTP using activated
     *
     * @return bool
     */
    public static function isMandatoryUsing()
    {
    }
    /**
     * Set user rights who must use OTP in mandatory way
     *
     * @param array $rights Needed rights. E.g. ['G1'] for administrators.
     * @return void
     */
    public static function setMandatoryRights(array $rights)
    {
    }
    /**
     * Return user rights who must use OTP in mandatory way
     *
     * @return array
     */
    public static function getMandatoryRights()
    {
    }
    /**
     * Set default OtpAlgorithm type
     *
     * @param string $value OtpAlgorithm type (see getAvailableTypes).
     * @throws ArgumentOutOfRangeException
     * @return void
     */
    public static function setDefaultType($value)
    {
    }
    /**
     * Return default OtpAlgorithm type
     *
     * @return string
     */
    public static function getDefaultType()
    {
    }
    /**
     * Return available OtpAlgorithm types
     *
     * @return array
     */
    public static function getAvailableTypes()
    {
    }
    /**
     * Return available OtpAlgorithm types description
     *
     * @return array
     */
    public static function getTypesDescription()
    {
    }
    /**
     * Returns if OTP enabled
     *
     * @return bool
     */
    public static function isOtpEnabled()
    {
    }
    /**
     * Returns if "Recovery codes" are enabled
     *
     * @return bool
     */
    public static function isRecoveryCodesEnabled()
    {
    }
}