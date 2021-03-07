<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityBaseTest
 * @since 12.5.0
 */
abstract class CSecurityBaseTest
{
    const STATUS_FAILED = "failed";
    const STATUS_PASSED = "passed";
    protected $internalName = "BaseTest";
    protected $isDebug = \false;
    protected $params = array();
    protected $tests = array();
    protected $detailErrors = array();
    /**
     * Return test name
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Check test requirements (e.g. max_execution_time)
     *
     * @param array $params
     * @return bool
     */
    public function checkRequirements($params = array())
    {
    }
    /**
     * Run test and return results
     * @param array $params
     * @return array
     */
    public function check(array $params = array())
    {
    }
    /**
     * Return internal name (for technical usage)
     * @return string
     */
    public function getInternalName()
    {
    }
    /**
     * Initialize starting params, e.g. debug mode
     * @param array $params
     */
    protected function initializeParams(array $params = array())
    {
    }
    /**
     * @return bool
     */
    protected function isRunOnWin()
    {
    }
    /**
     * Return file or dir permissions
     * @param string $path - file path
     * @return int
     */
    protected static function getFilePerm($path)
    {
    }
    /**
     * Check file or dir for write permissions
     * @param string $path - file path
     * @return bool
     */
    protected static function isWorldWritable($path)
    {
    }
    /**
     * Check file or dir for read permissions
     * @param string $path - file path
     * @return bool
     */
    protected static function isWorldReadable($path)
    {
    }
    /**
     * Check file or dir for read or write permissions
     * @param string $path - file path
     * @return bool
     */
    protected static function isWorldAccessible($path)
    {
    }
    /**
     * Return param value, or default value if not present
     * @param string $name
     * @param string $defaultValue
     * @return string
     */
    protected function getParam($name, $defaultValue = "")
    {
    }
    /**
     * @return bool
     */
    protected function isDebug()
    {
    }
    /**
     * Return errors array for checking results
     * @return array
     */
    protected function getDetailErrors()
    {
    }
    /**
     * @param string $baseMessageKey
     * @param array $placeholders
     * @return string
     */
    protected static function getDetailText($baseMessageKey, array $placeholders = array())
    {
    }
    /**
     * @param string $baseMessageKey
     * @param array $placeholders
     * @return string
     */
    protected static function getRecommendationText($baseMessageKey, array $placeholders = array())
    {
    }
    /**
     * @param string $baseMessageKey
     * @param array $placeholders
     * @return string
     */
    protected static function getTitleText($baseMessageKey, array $placeholders = array())
    {
    }
    /**
     * Add new error
     *
     * @param string $title
     * @param string $critical
     * @param string $detail
     * @param string $recommendation
     * @param string $additionalInfo
     */
    protected function addDetailError($title, $critical, $detail, $recommendation = "", $additionalInfo = "")
    {
    }
    /**
     * @param array $error
     * @return $this
     */
    private function pushDetailError(array $error)
    {
    }
    /**
     * Add new unformatted error (call formatDetailError inside)
     *
     * @param string $baseMessageKey
     * @param string $critical
     * @param string $additionalInfo
     * @return $this
     */
    protected function addUnformattedDetailError($baseMessageKey, $critical, $additionalInfo = "")
    {
    }
    /**
     * Return formatted detail error from messages
     * @param string $baseMessageKey
     * @param string $critical
     * @param string $additionalInfo
     * @return array
     */
    protected static function formatDetailError($baseMessageKey, $critical, $additionalInfo = "")
    {
    }
    /**
     * Return path without $_SERVER['DOCUMENT_ROOT']
     * @param string $path
     * @return string
     */
    protected static function removeDocumentRoot($path)
    {
    }
}