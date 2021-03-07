<?php

class CSecurityXSSDetect
{
    const SCRIPT_MARK = '<!-- deleted by bitrix WAF -->';
    private $quotes = array();
    private $action = "filter";
    private $doLog = \false;
    /** @var CSecurityXSSDetectVariables */
    private $variables = \null;
    /** @var string[] */
    private $searches = \null;
    /** @var string[] */
    private $quotedSearches = \null;
    function __construct($options = array())
    {
    }
    /**
     * @param $content
     */
    public static function OnEndBufferContent(&$content)
    {
    }
    /**
     * @param string $content
     * @return void
     */
    public function process(&$content)
    {
    }
    /**
     * @return array
     */
    public function getQuotes()
    {
    }
    /**
     * @param string $string
     * @param bool $isSaveQuotes
     * @return mixed
     */
    public function removeQuotedStrings($string, $isSaveQuotes = \true)
    {
    }
    /**
     * @param string $action
     */
    protected function setAction($action)
    {
    }
    /**
     * @param string $log - only Y/N
     */
    protected function setLog($log)
    {
    }
    /**
     * @param $name
     * @param $value
     * @param $sourceScript
     * @return mixed
     */
    protected function logVariable($name, $value, $sourceScript)
    {
    }
    /**
     * @param $var_name
     * @param $str
     * @param $script
     */
    protected function CreateTrace($var_name, $str, $script)
    {
    }
    /**
     * @param string $quote
     * @return string
     */
    protected function pushQuote($quote)
    {
    }
    /**
     * @param string $string
     * @param array $searches
     * @return null|string
     */
    protected function findInArray($string, $searches)
    {
    }
    /**
     * @param string $body
     * @return array|false
     */
    protected function isDangerBody($body)
    {
    }
    /**
     * @param string $body
     * @return string
     */
    protected function getFilteredScriptBody($body)
    {
    }
    /**
     * @param array $strs
     * @return string
     */
    protected function getFilteredScript($strs)
    {
    }
    /**
     * @param string $string
     * @return string
     */
    protected function filter($string)
    {
    }
    /**
     * @param string $name
     * @param string $value
     */
    protected function addVariable($name, $value)
    {
    }
    /**
     * @param string $name
     * @param array $array
     */
    protected function extractVariablesFromArray($name, $array)
    {
    }
}