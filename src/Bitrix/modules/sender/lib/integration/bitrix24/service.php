<?php

namespace Bitrix\Sender\Integration\Bitrix24;

/**
 * Class Service
 * @package Bitrix\Sender\Integration\Bitrix24
 */
class Service
{
    /**
     * Return true if installation is portal.
     *
     * @return bool
     */
    public static function isPortal()
    {
    }
    /**
     * Return true if some instrument is available.
     *
     * @return bool
     */
    public static function isAvailable()
    {
    }
    /**
     * Return true if Ad is available.
     *
     * @return bool
     */
    public static function isAdAvailable()
    {
    }
    /**
     * Return true if Rc is available.
     *
     * @return bool
     */
    public static function isRcAvailable()
    {
    }
    /**
     * Return true if Campaigns is available.
     *
     * @return bool
     */
    public static function isCampaignsAvailable()
    {
    }
    /**
     * Return true if region of cloud portal is Russian.
     *
     * @return bool
     */
    public static function isCloudRegionRussian()
    {
    }
    /**
     * Return true if Ad provider is available in region.
     *
     * @param string $code Service message code.
     * @return bool
     */
    public static function isAdVisibleInRegion($code)
    {
    }
    /**
     * Return true if toloka is available.
     *
     * @param string $code Service message code.
     * @return bool
     */
    public static function isTolokaVisibleInRegion()
    {
    }
    /**
     * Return true if sms, call, web hook is available.
     *
     * @return bool
     */
    public static function isMailingsAvailable()
    {
    }
    /**
     * Return true if email is available.
     *
     * @return bool
     */
    public static function isEmailAvailable()
    {
    }
    /**
     * Get available mailing codes.
     *
     * @return array
     */
    public static function getAvailableMailingCodes()
    {
    }
    /**
     * Return true if portal is cloud.
     *
     * @return bool
     */
    public static function isCloud()
    {
    }
    /**
     * Return tracking uri.
     *
     * @param int $type Tracker type.
     * @param null|String $siteId Site id.
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getTrackingUri($type, $siteId = null)
    {
    }
    /**
     * Return true if installation is portal.
     *
     * @return void
     */
    public static function initLicensePopup()
    {
    }
    /**
     * Return true if plan is top.
     *
     * @return bool
     */
    public static function isLicenceTop()
    {
    }
    /**
     * Lock additional services.
     *
     * @return void
     */
    public static function lockServices()
    {
    }
}