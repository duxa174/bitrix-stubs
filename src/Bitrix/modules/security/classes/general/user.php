<?php

/**
 * @deprecated use \Bitrix\Security\Mfa\Otp
 */
class CSecurityUser
{
    const BX_SECURITY_SYNC_WINDOW = 15000;
    /** @var \Bitrix\Security\Mfa\Otp[]*/
    protected static $cacheOtp = array();
    /**
     * @param int $userId
     * @return Otp
     */
    public static function getCachedOtp($userId)
    {
    }
    /**
     * @param array $arParams
     * @return bool
     */
    public static function onBeforeUserLogin(&$arParams)
    {
    }
    /**
     * @param $arFields
     * @return bool
     */
    public static function update($arFields)
    {
    }
    /**
     * @param $userId
     * @return bool
     */
    public static function onUserDelete($userId)
    {
    }
    /**
     * @return bool
     */
    public static function isActive()
    {
    }
    /**
     * @param bool $pActive
     */
    public static function setActive($pActive = \false)
    {
    }
    public static function OnAfterUserLogout()
    {
    }
    public static function IsOtpMandatory()
    {
    }
    public static function IsUserOtpActive($userId)
    {
    }
    public static function IsUserSkipMandatoryRights($userId)
    {
    }
    public static function IsUserOtpExist($userId)
    {
    }
    public static function DeactivateUserOtp($userId, $days = 0)
    {
    }
    public static function DeferUserOtp($userId, $days = 0)
    {
    }
    public static function ActivateUserOtp($userId)
    {
    }
    public static function GetDeactivateUntil($userId)
    {
    }
    public static function GetInitialDate($userId)
    {
    }
}