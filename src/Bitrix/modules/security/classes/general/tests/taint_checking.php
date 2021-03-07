<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityTaintCheckingTest
 * @since 12.5.0
 */
class CSecurityTaintCheckingTest extends \CSecurityBaseTest
{
    const REQUEST_TIMEOUT = 3;
    protected $internalName = "TaintCheckingTest";
    public function __construct()
    {
    }
    /**
     * Check test requirements (e.g. max_execution_time)
     *
     * @param array $params
     * @throws CSecurityRequirementsException
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
     * @param array $pResults
     * @return array
     */
    protected function formatResults($pResults)
    {
    }
    /**
     * @param array $pErrors
     * @return array
     */
    protected static function formatErrors($pErrors)
    {
    }
    /**
     * @deprecated
     * @param string $pDetail
     * @return string
     */
    protected static function formatDetail($pDetail)
    {
    }
}