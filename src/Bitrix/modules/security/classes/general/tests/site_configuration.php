<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecuritySiteConfigurationTest
 * @since 12.5.0
 */
class CSecuritySiteConfigurationTest extends \CSecurityBaseTest
{
    protected $internalName = "SiteConfigurationTest";
    protected $tests = array("securityLevel" => array("method" => "checkSecurityLevel"), "errorReporting" => array("method" => "checkErrorReporting", "base_message_key" => "SECURITY_SITE_CHECKER_ERROR_REPORTING", "critical" => \CSecurityCriticalLevel::MIDDLE), "exceptionDebug" => array("method" => "checkExceptionDebug", "base_message_key" => "SECURITY_SITE_CHECKER_EXCEPTION_DEBUG", "critical" => \CSecurityCriticalLevel::HIGHT), "dbDebug" => array("method" => "checkDbDebug", "base_message_key" => "SECURITY_SITE_CHECKER_DB_DEBUG", "critical" => \CSecurityCriticalLevel::HIGHT), "dbPassword" => array("method" => "checkDbPassword"), "scriptExtension" => array("method" => "checkScriptExtension"), "modulesVersion" => array("method" => "checkModulesVersion"));
    protected static $expectedScriptExtensions = "php,php3,php4,php5,php6,phtml,pl,asp,aspx,cgi,dll,exe,ico,shtm,shtml,fcg,fcgi,fpl,asmx,pht,py,psp";
    public function __construct()
    {
    }
    /**
     * Check if saved script file extension is up to date
     */
    protected function checkScriptExtension()
    {
    }
    protected function checkSecurityLevel()
    {
    }
    /**
     * Return true if debug = off
     *
     * @return bool
     * @since 14.0.0
     */
    protected function checkDbDebug()
    {
    }
    /**
     * Return true if error_reporting = 0
     *
     * @return bool
     * @since 14.0.0
     */
    protected function checkErrorReporting()
    {
    }
    /**
     * Return true if exception_handling debug = false
     *
     * @return bool
     * @since 14.0.0
     */
    protected function checkExceptionDebug()
    {
    }
    /**
     * Return true if module updates available
     *
     * @return bool
     * @since 14.0.2
     */
    protected function checkModulesVersion()
    {
    }
    protected function checkDbPassword()
    {
    }
    /**
     * @since 14.0.7
     * @return array
     * @throws Bitrix\Main\SystemException
     */
    protected static function getAvailableUpdates()
    {
    }
    /**
     * @return string
     */
    protected static function AdminPolicyLevel()
    {
    }
}