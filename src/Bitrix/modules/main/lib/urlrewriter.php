<?php

namespace Bitrix\Main;

class UrlRewriter
{
    const DEFAULT_SORT = 100;
    protected static function loadRules($siteId)
    {
    }
    protected static function saveRules($siteId, array $arUrlRewrite)
    {
    }
    public static function getList($siteId, $arFilter = array(), $arOrder = array())
    {
    }
    protected static function filterRules(array $arUrlRewrite, array $arFilter)
    {
    }
    protected static function recordsCompare($a, $b)
    {
    }
    public static function add($siteId, $arFields)
    {
    }
    public static function update($siteId, $arFilter, $arFields)
    {
    }
    public static function delete($siteId, $arFilter)
    {
    }
    public static function reindexAll($maxExecutionTime = 0, $ns = array())
    {
    }
    protected static function recursiveReindex($rootPath, $path, $arSites, $maxExecutionTime, &$ns)
    {
    }
    public static function reindexFile($siteId, $rootPath, $path, $maxFileSize = 0)
    {
    }
    public static function checkPath($path)
    {
    }
}
/**
 * Class UrlRewriterRuleMaker
 *
 * Helper used for sef rules creation.
 *
 * @package Bitrix\Main
 */
class UrlRewriterRuleMaker
{
    protected $condition = "";
    protected $variables = array();
    protected $rule = "";
    /**
     * @param string $sefRule SEF_RULE component parameter value.
     *
     * @return void
     */
    public function process($sefRule)
    {
    }
    /**
     * Returns CONDITION field of the sef rule based on what was processed.
     *
     * @return string
     */
    public function getCondition()
    {
    }
    /**
     * Returns RULE field of the sef rule based on what was processed.
     *
     * @return string
     */
    public function getRule()
    {
    }
    /**
     * Internal method used for preg_replace processing.
     *
     * @param array $match match array.
     *
     * @return string
     */
    protected function _callback(array $match)
    {
    }
}