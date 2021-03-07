<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityEnvironmentTest
 * @since 12.5.0
 */
class CSecurityEnvironmentTest extends \CSecurityBaseTest
{
    const MIN_UID = 10;
    const MIN_GID = 10;
    protected $internalName = "EnvironmentTest";
    protected $tests = array("sessionDir" => array("method" => "checkPhpSessionDir"), "collectivePhpSession" => array("method" => "checkCollectivePhpSession"), "uploadScriptExecution" => array("method" => "checkUploadScriptExecution"), "uploadNegotiationEnabled" => array("method" => "checkUploadNegotiationEnabled"), "privilegedPhpUserOrGroup" => array("method" => "checkPhpUserAndGroup"), "bitrixTempPath" => array("method" => "checkBitrixTempPath"));
    //TODO: check custom php/py/perl/etc handlers in .htaccess files
    public function __construct()
    {
    }
    /**
     * Check if any server-side script executed in /upload dir and push those information to detail error
     * @return bool
     */
    protected function checkUploadScriptExecution()
    {
    }
    /**
     * Check if Apache Content Negotiation enabled in /upload dir and push those information to detail error
     * @return bool
     */
    protected function checkUploadNegotiationEnabled()
    {
    }
    /**
     * Check apache AllowOverride
     * @return bool
     */
    protected function isHtaccessOverrided()
    {
    }
    /**
     * Check minimal UID and GID
     *
     * @param int $minUid
     * @param int $minGid
     * @return bool
     */
    protected function checkPhpUserAndGroup($minUid = self::MIN_UID, $minGid = self::MIN_GID)
    {
    }
    /**
     * Return upload dir path for test usage
     * @return string
     */
    protected static function getUploadDir()
    {
    }
    /**
     * Return current domain name (in puny code for cyrillic domain)
     * @return string
     */
    protected static function getCurrentHost()
    {
    }
    /**
     * Return current site url, e.g. http://localhost:8990
     * @return string
     */
    protected static function getCurrentSiteUrl()
    {
    }
    /**
     * Make request to current site and return result
     * @param string $pPath - url path, e.g. /upload/tmp/test.php
     * @return bool|string
     */
    protected static function doRequestToLocalhost($pPath)
    {
    }
    /**
     * @param string $pFileName - testing file name. e.g. test.php
     * @param string $pText - script entry
     * @param string $pSearch - text for searching after script execute
     * @return bool
     */
    protected function isScriptExecutable($pFileName, $pText, $pSearch)
    {
    }
    /**
     * Return php tmp dir from environment
     * @return string
     */
    protected static function getTmpDirFromEnv()
    {
    }
    /**
     * Return php session or upload tmp dir
     * @param string $pPhpSettingKey
     * @return string
     */
    protected static function getTmpDir($pPhpSettingKey = "upload_tmp_dir")
    {
    }
    /**
     * Return session unique ID
     * @return string
     */
    protected static function getSessionUniqID()
    {
    }
    /**
     * Check session files collective usage, e.g. several owners in the same session directory
     * @return bool
     */
    protected function checkCollectivePhpSession()
    {
    }
    /**
     * Check php session save dir for world accessible
     * @return bool
     */
    protected function checkPhpSessionDir()
    {
    }
    /**
     * Return current system user ID
     *
     * @return int|null
     */
    protected static function getCurrentUID()
    {
    }
    /**
     * Return current system user group ID
     *
     * @return int|null
     */
    protected static function getCurrentGID()
    {
    }
    /**
     * Format system user ID, e.g. $uid 0 = root(0)
     *
     * @param int $uid
     * @return string
     */
    protected static function formatUID($uid)
    {
    }
    /**
     * Format system user group ID, e.g. $gid 0 = root(0)
     *
     * @param int $gid
     * @return string
     */
    protected static function formatGID($gid)
    {
    }
    protected static function formatFilePermissions($perms)
    {
    }
    /**
     * Check Bitrix temporary directory path.
     *
     * @since 15.5.4
     * @return string
     */
    protected function checkBitrixTempPath()
    {
    }
}