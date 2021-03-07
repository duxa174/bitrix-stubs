<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityTestsPackage
 * @since 12.5.0
 */
class CSecurityTestsPackage
{
    const SLOW_LOCAL_TESTS = "slow_local";
    const FAST_LOCAL_TESTS = "fast_local";
    const LOCAL_TESTS = "local";
    const REMOTE_TESTS = "remote";
    protected static $fastLocalTests = array("CSecurityEnvironmentTest", "CSecurityPhpConfigurationTest");
    protected static $slowLocalTests = array("CSecurityFilePermissionsTest", "CSecurityTaintCheckingTest", "CSecurityUserTest", "CSecuritySiteConfigurationTest");
    protected static $remoteTests = array("CSecurityCloudMonitorTest");
    /**
     * Return tests classes
     * @param string $pType
     * @return array
     */
    public static function getTestsPackage($pType = "")
    {
    }
    /**
     * @return array
     */
    public static function getAllTests()
    {
    }
    /**
     * @param string $pType
     * @return array
     */
    protected static function getPackage($pType = "")
    {
    }
}