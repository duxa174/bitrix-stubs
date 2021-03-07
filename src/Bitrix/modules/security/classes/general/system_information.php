<?php

class CSecuritySystemInformation
{
    /**
     * Return system information, such as php version
     *
     * @return array
     */
    public static function getSystemInformation()
    {
    }
    /**
     * Return additional information, such as P&P or LDAP server information
     *
     * @since 14.5.4
     * @return array
     */
    public static function getAdditionalInformation()
    {
    }
    /**
     * Return current host/port (in puny code for cyrillic domain)
     *
     * @return string
     */
    public static function getCurrentHost()
    {
    }
    /**
     * Return current host name (in puny code for cyrillic domain)
     *
     * @return string
     */
    public static function getCurrentHostName()
    {
    }
    /**
     * @since 14.0.4
     * @return bool
     */
    public static function isRunOnWin()
    {
    }
    /**
     * @since 14.0.6
     * @return bool
     */
    public static function isCliMode()
    {
    }
    /**
     * Validates IP address (IPv4 only).
     *
     * @since 15.5.0
     * @param string $ip IP address for checking.
     * @param bool $allowPrivate Fails or not for the following private IPv4 ranges: 10.0.0.0/8, 172.16.0.0/12 and 192.168.0.0/16.
     * @param bool $allowRes Fails or not for the following reserved IPv4 ranges: 0.0.0.0/8, 169.254.0.0/16, 192.0.2.0/24, 127.0.0.0/24 and 224.0.0.0/4.
     * @return bool
     */
    public static function isIpValid($ip, $allowPrivate = \false, $allowRes = \false)
    {
    }
    /**
     * Return all sites (and domains) on current kernel
     *
     * @since 14.5.4
     * @return array
     */
    protected static function getSites()
    {
    }
    /**
     * Return some information about P&P, such as publish url
     *
     * @since 14.5.4
     * @return array
     */
    protected static function getPullingInfo()
    {
    }
    /**
     * Return information about environment, such as BitrixVM version
     *
     * @return array
     */
    protected static function getEnvironmentInfo()
    {
    }
    /**
     * Return BitrixVM version
     *
     * @return string
     */
    protected static function getBitrixVMVersion()
    {
    }
    /**
     * Return information about php configuration
     *
     * @return array
     */
    protected static function getPhpInfo()
    {
    }
    /**
     * Return information about DB configuration
     *
     * @return array
     */
    protected static function getDbInfo()
    {
    }
    /**
     * Return used memcache SID (with cluster support)
     *
     * @return string
     */
    protected static function getMemcacheSID()
    {
    }
    /**
     * Return information about memcached from cluster module
     *
     * @return array
     */
    protected static function getMemCacheInfoFromCluster()
    {
    }
    /**
     * Return information about memcached from Bitrix constants (in dbconn.php)
     *
     * @return array
     */
    protected static function getMemCacheInfoFromConstants()
    {
    }
    /**
     * Return memcached hosts
     *
     * @return array
     */
    protected static function getMemCachedHosts()
    {
    }
    /**
     * Return summary information about memcached
     *
     * @return array
     */
    protected static function getMemCacheInfo()
    {
    }
    /**
     * @return array
     */
    protected static function getDBHosts()
    {
    }
    /**
     * Return information about DB from cluster module
     *
     * @return array
     */
    protected static function getDBHostsFromCluster()
    {
    }
    /**
     * Return information about DB from Bitrix constants (in dbconn.php)
     *
     * @return array
     */
    protected static function getDBHostsFromConstants()
    {
    }
}