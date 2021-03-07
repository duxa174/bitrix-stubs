<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityPhpConfigurationTest
 * @since 12.5.0
 */
class CSecurityPhpConfigurationTest extends \CSecurityBaseTest
{
    protected $internalName = "PhpConfigurationTest";
    protected $tests = array(
        "phpEntropy" => array("method" => "checkPhpEntropy"),
        "phpInclude" => array("method" => "isPhpConfVarOff", "params" => array("allow_url_include"), "base_message_key" => "SECURITY_SITE_CHECKER_PHP_INCLUDE", "critical" => \CSecurityCriticalLevel::HIGHT),
        "phpFopen" => array("method" => "isPhpConfVarOff", "params" => array("allow_url_fopen"), "base_message_key" => "SECURITY_SITE_CHECKER_PHP_FOPEN", "critical" => \CSecurityCriticalLevel::MIDDLE),
        "aspTags" => array("method" => "isPhpConfVarOff", "params" => array("asp_tags"), "base_message_key" => "SECURITY_SITE_CHECKER_PHP_ASP", "critical" => \CSecurityCriticalLevel::HIGHT),
        "httpOnly" => array("method" => "isPhpConfVarOn", "params" => array("session.cookie_httponly"), "base_message_key" => "SECURITY_SITE_CHECKER_PHP_HTTPONLY", "critical" => \CSecurityCriticalLevel::MIDDLE),
        "cookieOnly" => array("method" => "isPhpConfVarOn", "params" => array("session.use_only_cookies"), "base_message_key" => "SECURITY_SITE_CHECKER_PHP_COOKIEONLY", "critical" => \CSecurityCriticalLevel::HIGHT),
        "mbstringSubstitute" => array("method" => "checkMbstringSubstitute", "params" => array(), "base_message_key" => "SECURITY_SITE_CHECKER_PHP_MBSTRING_SUBSTITUTE", "critical" => \CSecurityCriticalLevel::HIGHT),
        // ToDo: need compatibility with PHP < 5.4.0?
        "zendMultibyte" => array("method" => "isPhpConfVarOff", "params" => array("zend.multibyte"), "base_message_key" => "SECURITY_SITE_CHECKER_ZEND_MULTIBYTE_ENABLED", "critical" => \CSecurityCriticalLevel::HIGHT),
        "displayErrors" => array("method" => "isPhpConfVarOff", "params" => array("display_errors"), "base_message_key" => "SECURITY_SITE_CHECKER_DISPLAY_ERRORS", "critical" => \CSecurityCriticalLevel::LOW),
        "requestOrder" => array("method" => "checkRequestOrder"),
        "mailAddHeader" => array("method" => "isPhpConfVarOff", "params" => array("mail.add_x_header"), "base_message_key" => "SECURITY_SITE_CHECKER_MAIL_ADD_HEADER", "critical" => \CSecurityCriticalLevel::LOW),
    );
    public function __construct()
    {
    }
    /**
     * Check php session entropy
     * @return bool
     */
    protected function checkPhpEntropy()
    {
    }
    /**
     * @return bool
     */
    protected function checkPhpEntropyConfigs()
    {
    }
    protected function checkRequestOrder()
    {
    }
    /**
     * @return bool
     */
    protected function checkMbstringSubstitute()
    {
    }
    /**
     * @param string $name
     * @return bool
     */
    protected function isPhpConfVarOff($name)
    {
    }
    /**
     * @param string $name
     * @return bool
     * @since 14.0.0
     */
    protected function isPhpConfVarOn($name)
    {
    }
    /**
     * @param string $name
     * @param int|string $value
     * @return bool
     */
    protected function isPhpConfVarEquals($name, $value)
    {
    }
    /**
     * @param string $name
     * @param int|string $value
     * @return bool
     */
    protected function isPhpConfVarNotEquals($name, $value)
    {
    }
}