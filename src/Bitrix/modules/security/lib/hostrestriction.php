<?php

namespace Bitrix\Security;

/**
 * Class HostRestriction
 * @since 14.0.6
 * @example tests/security/hosts/basic.php
 * @package Bitrix\Security
 */
class HostRestriction
{
    const ACTION_REDIRECT = 'redirect';
    const ACTION_STOP = 'stop';
    private $optionPrefix = 'restriction_hosts_';
    private $cacheInitPath = 'security';
    private $cacheId = 'restriction_hosts';
    private $cacheTtl = 31536000;
    //one year
    private $action = 'stop';
    private $actionOptions = array();
    private $isLogNeeded = true;
    private $hosts = null;
    private $validActions = array(self::ACTION_REDIRECT, self::ACTION_STOP);
    private $validationRegExp = null;
    private $isActive = null;
    /**
     * Handler for system event "OnPageStart", does nothing in CLI mode because it does not make sense
     *
     * @return void
     */
    public static function onPageStart()
    {
    }
    public function __construct()
    {
    }
    /**
     * The main method that checks the current host, logging and starting action
     *
     * @param string $host Requested host for checking.
     * @return $this
     */
    public function process($host = null)
    {
    }
    /**
     * Checking host by host restriction policy
     *
     * @param string $host Host for checking.
     * @return bool Return true for valid (allowed) host.
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function isValidHost($host)
    {
    }
    /**
     * @return array
     */
    public function getProperties()
    {
    }
    /**
     * Set various properties for host checking, now support:
     *  - hosts: a string with allowed hosts (wild card supported, e.g.: *.example.com) {@see setHosts}
     *  - action: a string with action for unallowed host {@see validActions}
     *  - action_options: array with some options for action {@see setAction}
     *  - logging: bool, set true if need logging unallowed host {@see setLogging}
     *  - active: bool, set true if automatic checking on every request needed
     *
     * @param array $properties See above.
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws LogicException
     * @return $this
     */
    public function setProperties(array $properties)
    {
    }
    /**
     * @return string
     */
    public function getAction()
    {
    }
    /**
     * @return array
     */
    public function getActionOptions()
    {
    }
    /**
     * Set action performed while checking
     *
     * @param string $action Some action, now supported: redirect and stop.
     * @param array $options Some options for action, so far supported only host for redirect in redirect action.
     * @return $this
     * @throws \Bitrix\Security\LogicException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function setAction($action, array $options = array())
    {
    }
    /**
     * @return bool
     */
    public function getLogging()
    {
    }
    /**
     * Activate or deactivate logging on unallowed host requested
     *
     * @param bool $isLogNeeded Set true if need logging unallowed host.
     * @return $this
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function setLogging($isLogNeeded = true)
    {
    }
    /**
     * @return bool
     */
    public function getActive()
    {
    }
    /**
     * Activate or deactivate automatic checking
     *
     * @param bool $isActive Set true for enable checking on every request.
     * @throws \Bitrix\Main\ArgumentTypeException
     * @return $this
     */
    public function setActive($isActive = false)
    {
    }
    /**
     * @return string
     */
    public function getHosts()
    {
    }
    /**
     * Set allowed hosts
     *
     * @param string $hosts Allowed hosts (wild card supported, e.g.: *.example.com).
     * @param bool $ignoreChecking Set false for disable host validating before set.
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws LogicException
     * @return $this
     */
    public function setHosts($hosts, $ignoreChecking = false)
    {
    }
    /**
     * Return regular expressions (based on hosts) for checking.
     * Note: regular expression is cached for performance improvement and auto cleared after saving {@see save}
     *
     * @return string
     */
    public function getValidationRegExp()
    {
    }
    /**
     * Save all properties, enable automatic checking and clear cache if needed
     *
     * @return $this
     */
    public function save()
    {
    }
    /**
     * Return true if HostRestriction already handled on system event "OnPageStart"
     *
     * @return bool
     */
    protected function isBound()
    {
    }
    /**
     * Return requested host for checking
     *
     * @return string
     */
    protected function getTargetHost()
    {
    }
    /**
     * Logging current host by event manager
     *
     * @param string $host Requested host.
     * @return bool
     */
    protected function log($host)
    {
    }
    /**
     * Perform some actions when requested host is not allowed by host restriction policy
     *
     * @return $this
     */
    protected function doActions()
    {
    }
    /**
     * Generates regular expression obtained from hosts
     *
     * @param string $hosts Allowed hosts (wild card supported, e.g.: *.example.com).
     * @return string
     */
    protected function genValidationRegExp($hosts)
    {
    }
    /**
     * Checks the host to detect logical errors (eg blocking the current host)
     *
     * @param string $hosts Allowed hosts (wild card supported, e.g.: *.example.com).
     * @return $this
     * @throws \Bitrix\Security\LogicException
     */
    protected function checkNewHosts($hosts)
    {
    }
}