<?php

interface CBitrixCloudMonitoring_Access extends \Iterator, \ArrayAccess
{
    // new stuff
}
class CBitrixCloudMonitoringTest
{
    private $name = "";
    private $status = "";
    private $time = 0;
    private $uptime = "";
    private $result = "";
    /**
     *
     * @param string $name
     * @param string $status
     * @param int $time UTC timestamp
     * @param string $result
     * @return void
     *
     */
    public function __construct($name, $status, $time, $uptime, $result)
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getName()
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getStatus()
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getResult()
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getUptime()
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getTime()
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudMonitoringTest
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
}
class CBitrixCloudMonitoringDomainResult implements \CBitrixCloudMonitoring_Access
{
    /** @var string $name */
    private $name = "";
    /** @var array[int]CBitrixCloudMonitoringTest $tests */
    private $tests = array();
    /**
     *
     * @return string
     *
     */
    public function getName()
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getStatus()
    {
    }
    /**
     *
     * @param string $name
     * @param array [int]CBitrixCloudMonitoringTest $tests
     * @return void
     *
     */
    public function __construct($name, array $tests)
    {
    }
    /**
     *
     * @param string $testName
     * @return CBitrixCloudMonitoringTest
     *
     */
    public function getTestByName($testName)
    {
    }
    /**
     *
     * @return array[int]CBitrixCloudMonitoringTest
     *
     */
    public function getTests()
    {
    }
    /**
     *
     * @param array [int]CBitrixCloudMonitoringTest $tests
     * @return CBitrixCloudMonitoringDomainResult
     *
     */
    public function setTests(array $tests)
    {
    }
    public function saveToOptions(\CBitrixCloudOption $option)
    {
    }
    public static function loadFromOptions($name, \CBitrixCloudOption $option)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudMonitoringDomainResult
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
    public function rewind()
    {
    }
    public function current()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function valid()
    {
    }
    public function offsetSet($offset, $value)
    {
    }
    public function offsetExists($offset)
    {
    }
    public function offsetUnset($offset)
    {
    }
    public function offsetGet($offset)
    {
    }
}
class CBitrixCloudMonitoringResult implements \CBitrixCloudMonitoring_Access
{
    const GREEN_LAMP = 'green';
    const RED_LAMP = 'red';
    private $domains = array();
    /**
     *
     * @param CBitrixCloudMonitoringDomainResult $domainResult
     * @return CBitrixCloudMonitoringResult
     *
     */
    public function addDomainResult(\CBitrixCloudMonitoringDomainResult $domainResult)
    {
    }
    /**
     *
     * @param string $domainName
     * @return CBitrixCloudMonitoringDomainResult
     *
     */
    public function getResultByDomainName($domainName)
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getStatus()
    {
    }
    public static function isExpired()
    {
    }
    public static function getExpirationTime()
    {
    }
    public static function setExpirationTime($time)
    {
    }
    public static function loadFromOptions()
    {
    }
    public function saveToOptions()
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudMonitoringResult
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
    public function rewind()
    {
    }
    public function current()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function valid()
    {
    }
    public function offsetSet($offset, $value)
    {
    }
    public function offsetExists($offset)
    {
    }
    public function offsetUnset($offset)
    {
    }
    public function offsetGet($offset)
    {
    }
}