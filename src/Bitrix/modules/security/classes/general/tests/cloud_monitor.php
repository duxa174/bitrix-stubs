<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityCloudMonitorTest
 * @since 12.5.0
 */
class CSecurityCloudMonitorTest extends \CSecurityBaseTest
{
    const DEFAULT_RECEIVE_RESULTS_TIME = 15;
    const MAX_CHECKING_REQUEST_REPEAT_COUNT = 5;
    const MAX_RESULTS_REQUEST_REPEAT_COUNT = 50;
    protected $internalName = 'CloudMonitor';
    /** @var CSecurityTemporaryStorage */
    protected $sessionData = \null;
    protected $checkingResults = array();
    protected $protocolVersion = 2;
    public function __construct()
    {
    }
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
     * Return checking results with default values (if it not present before)
     * @return array
     */
    protected function getResult()
    {
    }
    /**
     * Try to receive checking results from Bitrix
     */
    protected function receiveResults()
    {
    }
    /**
     * @return bool
     */
    protected function isCheckRequestNotSended()
    {
    }
    /**
     * Try to start checking (send special request to Bitrix)
     */
    protected function doCheckRequest()
    {
    }
    /**
     * @param string $token
     */
    protected function setCheckingToken($token)
    {
    }
    /**
     * @return string
     */
    protected function getCheckingToken()
    {
    }
    /**
     * @param int $timeOut
     */
    protected function setTimeOut($timeOut)
    {
    }
    /**
     * @param array $result
     */
    protected function setCheckingResult(array $result)
    {
    }
    /**
     * @param string $message
     */
    protected function stopChecking($message = '')
    {
    }
    /**
     * Format test results for checking output
     * @param array $results
     * @return array
     */
    protected static function formatResults(array $results)
    {
    }
    /**
     * @return int
     */
    protected function getTimeout()
    {
    }
}