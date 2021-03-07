<?php

class CBitrixCloudCDNConfig
{
    private static $instance = \null;
    private $active = 0;
    private $expires = 0;
    //timestamp
    private $domain = "";
    private $https = \null;
    private $optimize = \null;
    private $kernel_rewrite = \null;
    private $content_rewrite = \null;
    private $sites = array();
    /** @var CBitrixCloudCDNQuota $quota */
    private $quota = \null;
    /** @var CBitrixCloudCDNClasses $classes */
    private $classes = \null;
    /** @var CBitrixCloudCDNServerGroups $server_groups */
    private $server_groups = \null;
    /** @var CBitrixCloudCDNLocations $locations */
    private $locations = \null;
    private $debug = \false;
    /**
     *
     *
     */
    private function __construct()
    {
    }
    /**
     * Returns proxy class instance (singleton pattern)
     *
     * @return CBitrixCloudCDNConfig
     *
     */
    public static function getInstance()
    {
    }
    /**
     *
     * @return CBitrixCloudCDNConfig
     * @throws CBitrixCloudException
     */
    public function updateQuota()
    {
    }
    /**
     * Loads and parses xml
     *
     * @param boolean $sendAdditionalInfo Flag to send https and optimize parameters.
     *
     * @return CBitrixCloudCDNConfig
     * @throws CBitrixCloudException
     */
    public function loadRemoteXML($sendAdditionalInfo = \false)
    {
    }
    /**
     * Checks if it is active in webservice
     *
     * @return bool
     *
     */
    public function isActive()
    {
    }
    /**
     * Checks if it is time to update policy
     *
     * @return bool
     *
     */
    public function isExpired()
    {
    }
    /**
     * Sets the time to update policy
     *
     * @param int $time
     * @return void
     *
     */
    public function setExpired($time)
    {
    }
    /**
     * Returns resources domain name
     *
     * @return string
     *
     */
    public function getDomain()
    {
    }
    /**
     * Sets resources domain name
     *
     * @param string $domain
     * @return CBitrixCloudCDNConfig
     *
     */
    public function setDomain($domain)
    {
    }
    /**
     * Returns flag of the kernel links (/bitrix/ or other) rewrite
     *
     * @param string $prefix
     * @return bool
     *
     */
    public function isKernelPrefix($prefix)
    {
    }
    /**
     * Returns true if site operates by https.
     *
     * @return bool
     *
     */
    public function isHttpsEnabled()
    {
    }
    /**
     * Sets flag of the https.
     *
     * @param bool $https
     * @return CBitrixCloudCDNConfig
     *
     */
    public function setHttps($https = \true)
    {
    }
    /**
     * Returns true if resources optimization is enabled.
     *
     * @return bool
     *
     */
    public function isOptimizationEnabled()
    {
    }
    /**
     * Sets flag of the optimization.
     *
     * @param bool $optimize
     * @return CBitrixCloudCDNConfig
     *
     */
    public function setOptimization($optimize = \true)
    {
    }
    /**
     * Returns flag of the kernel links (/bitrix/ or other) rewrite
     *
     * @return bool
     *
     */
    public function isKernelRewriteEnabled()
    {
    }
    /**
     * Sets flag of the kernel links (/bitrix/ or other) rewrite
     *
     * @param bool $rewrite
     * @return CBitrixCloudCDNConfig
     *
     */
    public function setKernelRewrite($rewrite = \true)
    {
    }
    /**
     * Returns flag of the content links (not kernel) rewrite
     *
     * @return bool
     *
     */
    public function isContentRewriteEnabled()
    {
    }
    /**
     * Sets flag of the content links (not kernel) rewrite
     *
     * @param bool $rewrite
     * @return CBitrixCloudCDNConfig
     *
     */
    public function setContentRewrite($rewrite = \true)
    {
    }
    /**
     * Returns array of sites
     *
     * @return array[string]string
     *
     */
    public function getSites()
    {
    }
    /**
     * Sets array of sites to enable CDN
     *
     * @param array[string]string $sites
     * @return CBitrixCloudCDNConfig
     *
     */
    public function setSites($sites)
    {
    }
    /**
     * Returns quota object
     *
     * @return CBitrixCloudCDNQuota
     *
     */
    public function getQuota()
    {
    }
    /**
     * Returns file class object by it's name
     *
     * @param string $class_name
     * @return CBitrixCloudCDNClass
     *
     */
    public function getClassByName($class_name)
    {
    }
    /**
     * Returns server group object by it's name
     *
     * @param string $server_group_name
     * @return CBitrixCloudCDNServerGroup
     *
     *
     */
    public function getServerGroupByName($server_group_name)
    {
    }
    /**
     * Returns configured locations
     *
     * @return CBitrixCloudCDNLocations
     *
     */
    public function getLocations()
    {
    }
    /**
     * Returns unique array of all prefixes across all locations
     *
     * @param bool $bKernel
     * @param bool $bContent
     * @return array[int]string
     *
     */
    public function getLocationsPrefixes($bKernel = \true, $bContent = \false)
    {
    }
    /**
     * Returns unique array of all extensions across all locations
     *
     * @return array[int]string
     *
     */
    public function getLocationsExtensions()
    {
    }
    /**
     * Saves configuration into CBitrixCloudOption
     *
     * @return CBitrixCloudCDNConfig
     *
     */
    public function saveToOptions()
    {
    }
    /**
     * Loads configuration from CBitrixCloudOption
     *
     * @return CBitrixCloudCDNConfig
     *
     */
    public function loadFromOptions()
    {
    }
    /**
     * @return bool
     *
     */
    public function lock()
    {
    }
    /**
     * @return void
     *
     */
    public function unlock()
    {
    }
    /**
     *
     * @param bool $bActive
     * @return void
     *
     */
    public function setDebug($bActive)
    {
    }
}