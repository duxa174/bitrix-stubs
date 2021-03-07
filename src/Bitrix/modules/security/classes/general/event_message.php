<?php

/**
* Bitrix Framework
* @package bitrix
* @subpackage security
* @copyright 2001-2013 Bitrix
*/
final class CSecurityEventMessageFormatter
{
    const AUDIT_TYPE = "#AUDIT_TYPE#";
    const SITE_ID = "#SITE_ID#";
    const USER_INFO = "#USER_INFO#";
    const URL = "#URL#";
    const VARIABLE_NAME = "#VARIABLE_NAME#";
    const VARIABLE_VALUE = "#VARIABLE_VALUE#";
    const VARIABLE_VALUE_BASE64 = "#VARIABLE_VALUE_BASE64#";
    const REMOTE_ADDR = "#REMOTE_ADDR#";
    const USER_AGENT = "#USER_AGENT#";
    const USER_ID = "#USER_ID#";
    const BX24_HOST = "#BX24_HOST_NAME#";
    private $messageFormat = "";
    private $userInfoFormat = "";
    private $isUserInfoNeeded = \false;
    private $isB64MessageNeeded = \false;
    private $siteId = "";
    private $userInfo = "";
    private $url = "/";
    private static $messagePlaceholders = array(self::AUDIT_TYPE, self::SITE_ID, self::USER_INFO, self::URL, self::VARIABLE_NAME, self::VARIABLE_VALUE, self::VARIABLE_VALUE_BASE64);
    private static $userInfoPlaceholders = array(self::REMOTE_ADDR, self::USER_AGENT, self::USER_ID);
    /**
     * @param string $messageFormat
     * @param string $userInfoFormat
     */
    public function __construct($messageFormat = "", $userInfoFormat = "")
    {
    }
    /**
     * @return string
     */
    public static function getDefaultMessageFormat()
    {
    }
    /**
     * @return string
     */
    public static function getDefaultUserInfoFormat()
    {
    }
    /**
     * @return array
     */
    public static function getAvailableMessagePlaceholders()
    {
    }
    /**
     * @return array
     */
    public static function getAvailableUserInfoPlaceholders()
    {
    }
    /**
     * @param string $auditType
     * @param string $itemName
     * @param string $itemDescription
     * @return string
     */
    public function format($auditType, $itemName, $itemDescription)
    {
    }
    /**
     * @return string
     */
    private function getUserInfo()
    {
    }
}