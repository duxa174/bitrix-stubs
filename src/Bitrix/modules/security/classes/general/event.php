<?php

class CSecurityEvent
{
    private static $instance = \null;
    private $isDBEngineActive = \false;
    private $isSyslogEngineActive = \false;
    private $syslogFacility = 0;
    private $syslogPriority = "";
    private $isFileEngineActive = \false;
    private $filePath = "";
    /** @var CSecurityEventMessageFormatter $messageFormatter */
    private $messageFormatter = \null;
    private static $syslogFacilities = array(\LOG_SYSLOG => "LOG_SYSLOG", \LOG_AUTH => "LOG_AUTH", \LOG_AUTHPRIV => "LOG_AUTHPRIV", \LOG_DAEMON => "LOG_DAEMON", \LOG_USER => "LOG_USER");
    private static $syslogPriorities = array(\LOG_EMERG => "LOG_EMERG", \LOG_ALERT => "LOG_ALERT", \LOG_CRIT => "LOG_CRIT", \LOG_ERR => "LOG_ERR", \LOG_WARNING => "LOG_WARNING", \LOG_NOTICE => "LOG_NOTICE", \LOG_INFO => "LOG_INFO", \LOG_DEBUG => "LOG_DEBUG");
    /**
     * @return CSecurityEvent
     */
    public static function getInstance()
    {
    }
    /**
     * @param string $severity
     * @param string $auditType
     * @param string $itemName
     * @param string $itemDescription
     * @return bool
     */
    public function doLog($severity, $auditType, $itemName, $itemDescription)
    {
    }
    /**
     * @return array
     */
    public static function getSyslogPriorities()
    {
    }
    /**
     * @return array
     */
    public static function getSyslogFacilities()
    {
    }
    /**
     * Return WAF events count for Admin's informer popup and Admin's gadget
     * @param string $timestamp  - from date
     * @return integer
     */
    public function getEventsCount($timestamp = '')
    {
    }
    public function getMessageFormatter()
    {
    }
    private function __construct()
    {
    }
    private function initializeFileEngine()
    {
    }
    private function initializeDBEngine()
    {
    }
    private function initializeSyslogEngine()
    {
    }
    /**
     * @return bool
     */
    private static function isRunOnWin()
    {
    }
    /**
     * @param string $message
     * @return string mixed
     */
    private static function sanitizeMessage($message)
    {
    }
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
}