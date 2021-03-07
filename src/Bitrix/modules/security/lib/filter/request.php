<?php

namespace Bitrix\Security\Filter;

/**
 * Filter for Request variables, such as superglobals $_GET, $_POST etc
 *
 * @package Bitrix\Security\Filter
 * @since 14.0.0
 */
class Request implements \Bitrix\Main\Type\IRequestFilter
{
    const ACTION_NONE = 'none';
    const ACTION_CLEAR = 'clear';
    const ACTION_FILTER = 'filter';
    /** @var Auditor\Base[] */
    protected $auditors = array();
    protected $changedContext = array();
    private $action = 'filter';
    private $doLog = false;
    private $changedVars = array();
    private $isAuditorsTriggered = false;
    private $filteringMap = array('get' => array('Name' => '$_GET'), 'post' => array('Name' => '$_POST', 'SkipRegExp' => '#^File\\d+_\\d+$#'), 'cookie' => array('Name' => '$_COOKIE'));
    private static $validActions = array(self::ACTION_NONE, self::ACTION_CLEAR, self::ACTION_FILTER);
    public function __construct($customOptions = array())
    {
    }
    /**
     * Set auditors for use in filtration
     *
     * @param Auditor\Base[] $auditors
     * @return $this
     */
    public function setAuditors(array $auditors)
    {
    }
    /**
     * Return all changed variables, can be useful for logging
     *
     * @return array
     */
    public function getChangedVars()
    {
    }
    /**
     * Return array with filtered values
     *
     * Simple example:
     * <code>
     * $ob = new Request();
     * $ob->setAuditors([
     *  'SQL' => new Auditor\Sql()
     * ]);
     * print_r(
     *  $ob->filter([
     *      'get' => ['safe bar'],
     *      'post' => ['select * from foo']
     *  ])
     * );
     * //output: Array ( [post] => Array ( [0] => sel ect * fr om foo ) )
     *
     * print_r(
     *  $ob->filter([
     *          'get' => ['safe bar'],
     *          'post' => ['select * from foo']
     *      ],
     *      false
     *  )
     * );
     * //output: Array ( [get] => Array ( [0] => safe bar ) [post] => Array ( [0] => sel ect * fr om foo ) )
     * </code>
     *
     * @example tests/security/filter/requestfilter.php
     * @param array $values array("get" => $_GET, "post" => $_POST, "files" => $_FILES, "cookie" => $_COOKIE)
     * @param bool $isReturnChangedOnly if true - return values only if it changed by some auditors
     * @return array
     */
    public function filter(array $values, $isReturnChangedOnly = true)
    {
    }
    /**
     * @since 14.0.3
     * @return bool
     */
    public function isAuditorsTriggered()
    {
    }
    protected function onFilterStarted()
    {
    }
    protected function onFilterFinished()
    {
    }
    /**
     * @param string $context
     * @param string $value
     * @param string $name
     * @return string
     */
    protected function filterVar($context, $value, $name)
    {
    }
    /**
     * @param string $context
     * @param array $array
     * @param string $name
     * @param string $skipKeyPreg
     * @return array
     */
    protected function filterArray($context, array $array, $name, $skipKeyPreg = '')
    {
    }
    /**
     * @param $action
     * @return bool
     */
    protected static function isActionValid($action)
    {
    }
    /**
     * @param string $value
     * @param string $name
     * @param string $auditorName
     * @return bool
     */
    protected static function logVariable($value, $name, $auditorName)
    {
    }
    /**
     * @param $string
     * @return bool
     */
    protected static function adjustPcreBacktrackLimit($string)
    {
    }
    /**
     * @return array
     */
    protected static function getValidActions()
    {
    }
    /**
     * @param $action
     * @return $this
     */
    protected function setAction($action)
    {
    }
    /**
     * @param $log
     * @return $this
     */
    protected function setLog($log)
    {
    }
    /**
     * @return bool
     */
    protected function isFilterAction()
    {
    }
    /**
     * @return bool
     */
    protected function isClearAction()
    {
    }
    /**
     * @return bool
     */
    protected function isLogNeeded()
    {
    }
    /**
     * @param string $context
     * @param string $value
     * @param string $name
     * @return $this
     */
    protected function pushChangedVar($context, $value, $name)
    {
    }
}