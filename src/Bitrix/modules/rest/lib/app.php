<?php

namespace Bitrix\Rest;

/**
 * Class AppTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CLIENT_ID string(128) mandatory
 * <li> CODE string(128) mandatory
 * <li> ACTIVE bool optional default 'Y'
 * <li> INSTALLED bool optional default 'N'
 * <li> URL string(1000) mandatory
 * <li> URL_DEMO string(1000) optional
 * <li> URL_INSTALL string(1000) optional
 * <li> VERSION string(4) mandatory
 * <li> SCOPE string(2000) mandatory
 * <li> STATUS string(1) mandatory default 'F'
 * <li> DATE_FINISH date optional
 * <li> IS_TRIALED bool optional default 'N'
 * <li> SHARED_KEY string(32) optional
 * <li> CLIENT_SECRET string(100) optional
 * <li> APP_NAME string(1000) optional
 * <li> ACCESS string(2000) optional
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class AppTable extends \Bitrix\Main\Entity\DataManager
{
    const ACTIVE = 'Y';
    const INACTIVE = 'N';
    const INSTALLED = 'Y';
    const NOT_INSTALLED = 'N';
    const TRIALED = 'Y';
    const NOT_TRIALED = 'N';
    const TYPE_STANDARD = 'N';
    const TYPE_ONLY_API = 'A';
    const TYPE_CONFIGURATION = 'C';
    const TYPE_SMART_ROBOTS = 'R';
    const STATUS_LOCAL = 'L';
    const STATUS_FREE = 'F';
    const STATUS_PAID = 'P';
    const STATUS_DEMO = 'D';
    const STATUS_TRIAL = 'T';
    const STATUS_SUBSCRIPTION = 'S';
    const PAID_NOTIFY_DAYS = 30;
    const PAID_GRACE_PERIOD = -14;
    const CACHE_TTL = 86400;
    const CACHE_PATH = '/rest/app/';
    private static $skipRemoteUpdate = false;
    protected static $licenseLang = null;
    protected static $applicationCache = array();
    protected static $localAppDeniedScope = array('landing_cloud', 'rating');
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    public static function setSkipRemoteUpdate($v)
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function install($appId)
    {
    }
    public static function uninstall($appId, $clean = 0)
    {
    }
    public static function checkUninstallAvailability($appId, $clean = 0)
    {
    }
    public static function updateAppStatusInfo()
    {
    }
    public static function callAppPaymentEvent($appId)
    {
    }
    public static function getAppStatusInfo($app, $detailUrl)
    {
    }
    public static function getAccess($appId)
    {
    }
    public static function setAccess($appId, $newRights = array())
    {
    }
    public static function getByClientId($clientId)
    {
    }
    protected static function clearClientCache($clientId)
    {
    }
    protected static function getLicenseLanguage()
    {
    }
    /**
     * Returns validators for CLIENT_ID field.
     *
     * @return array
     */
    public static function validateClientId()
    {
    }
    /**
     * Returns validators for CODE field.
     *
     * @return array
     */
    public static function validateCode()
    {
    }
    /**
     * Returns validators for URL field.
     *
     * @return array
     */
    public static function validateUrl()
    {
    }
    /**
     * Returns validators for URL_DEMO field.
     *
     * @return array
     */
    public static function validateUrlDemo()
    {
    }
    /**
     * Returns validators for URL_INSTALL field.
     *
     * @return array
     */
    public static function validateUrlInstall()
    {
    }
    /**
     * Returns validators for VERSION field.
     *
     * @return array
     */
    public static function validateVersion()
    {
    }
    /**
     * Returns validators for SCOPE field.
     *
     * @return array
     */
    public static function validateScope()
    {
    }
    /**
     * Returns validators for SHARED_KEY field.
     *
     * @return array
     */
    public static function validateSharedKey()
    {
    }
    /**
     * Returns validators for APP_SECRET_ID field.
     *
     * @return array
     */
    public static function validateClientSecret()
    {
    }
    /**
     * Returns validators for APP_NAME field.
     *
     * @return array
     */
    public static function validateAppName()
    {
    }
    /**
     * Returns validators for ACCESS field.
     *
     * @return array
     */
    public static function validateAccess()
    {
    }
    public static function cleanLocalPermissionList(array $permissionList)
    {
    }
    public static function canUninstallByType($code, $version = false)
    {
    }
    public static function getAppType($code, $version = false)
    {
    }
}