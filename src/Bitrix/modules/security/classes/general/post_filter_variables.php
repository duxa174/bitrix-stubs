<?php

/**
* Bitrix Framework
* @package bitrix
* @subpackage security
* @copyright 2001-2013 Bitrix
*/
class CSecurityXSSDetectVariables
{
    private $parsed = \false;
    private $searchValuesWithQuotes = array();
    private $searchValuesWithoutQuotes = array();
    private $originalValues = array();
    /**
     * @param string $name
     * @param string $value
     */
    public function addVariable($name, $value)
    {
    }
    /**
     * @return array
     */
    public function getQuoteSearchValues()
    {
    }
    /**
     * @return array
     */
    public function getSearchValues()
    {
    }
    /**
     * @return bool
     */
    public function isEmpty()
    {
    }
    /**
     * @param string $name
     * @param string $value
     * @param bool $containsQuote
     * @return bool
     */
    protected function pushValue($name, $value, $containsQuote = \false)
    {
    }
    /**
     * @param string $name
     * @param string $value
     */
    protected function parseVariable($name, $value)
    {
    }
    /**
     *
     */
    protected function lazyParseVariables()
    {
    }
}