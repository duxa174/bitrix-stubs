<?php

class CBitrixCloudMonitoring
{
    private static $instance = \null;
    private $result = \null;
    private $interval = 0;
    /**
     * Returns proxy class instance (singleton pattern)
     *
     * @return CBitrixCloudMonitoring
     *
     */
    public static function getInstance()
    {
    }
    public function getConfiguredDomains()
    {
    }
    public function getList()
    {
    }
    public function addDevice($domain, $deviceId)
    {
    }
    public function deleteDevice($domain, $deviceId)
    {
    }
    public function getDevices($domain)
    {
    }
    /*
     * Registers new monitoring job with the remote service.
     * Returns empty string on success.
     *
     * @return string
     *
     */
    public function startMonitoring($domain, $is_https, $language_id, $emails, $tests)
    {
    }
    /*
     * Unregisters monitoring job with the remote service.
     * Returns empty string on success.
     *
     * @return string
     *
     */
    public function stopMonitoring($domain)
    {
    }
    public function setInterval($interval)
    {
    }
    public function getInterval()
    {
    }
    public function getMonitoringResults($interval = \false)
    {
    }
    public function getAlertsCurrentResult()
    {
    }
    public function getAlertsStored()
    {
    }
    public function storeAlertsCurrentResult()
    {
    }
    public function getWorstUptime($testId = "", $domainName = "")
    {
    }
    public static function startMonitoringAgent()
    {
    }
}