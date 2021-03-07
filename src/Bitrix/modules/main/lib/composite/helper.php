<?php

namespace Bitrix\Main\Composite;

/**
 *
 * This class shares static methods between Responder and other composite classes.
 * Methods of this class can't call Bitrix API at all.
 *
 * @alias \CHTMLPagesCache
 * @package Bitrix\Main\Composite
 */
class Helper
{
    private static $options = array();
    private static $isAjaxRequest = null;
    private static $ajaxRandom = null;
    /**
     * Returns Request URI
     * @return string
     */
    public static function getRequestUri()
    {
    }
    /**
     * Returns HTTP hostname
     *
     * @param string $host
     *
     * @return string
     */
    public static function getHttpHost($host = null)
    {
    }
    /**
     * Returns valid domains from the composite options
     * @return array
     */
    public static function getDomains()
    {
    }
    public static function getSpaPostfixByUri($requestUri)
    {
    }
    public static function getSpaPostfix()
    {
    }
    public static function getRealPrivateKey($privateKey = null, $postfix = null)
    {
    }
    public static function getUserPrivateKey()
    {
    }
    public static function setUserPrivateKey($prefix, $expire = 0)
    {
    }
    public static function deleteUserPrivateKey()
    {
    }
    /**
     * Returns true if the current request was initiated by Ajax.
     *
     * @return bool
     */
    public static function isAjaxRequest()
    {
    }
    public static function isAppCacheRequest()
    {
    }
    public static function isCompositeRequest()
    {
    }
    /**
     * Returns true if the current request URI has bitrix folder
     *
     * @return bool
     */
    public static function isBitrixFolder()
    {
    }
    public static function isSpaMode()
    {
    }
    /**
     *
     * Decodes a gzip compressed string
     *
     * @param $data
     *
     * @return string
     */
    public static function gzdecode($data)
    {
    }
    /**
     *
     * Binary version of substr
     *
     * @param $str
     * @param $start
     *
     * @return string
     */
    private static function getBinarySubstring($str, $start)
    {
    }
    /**
     * Binary version of strlen
     *
     * @param $str
     *
     * @return int
     */
    public static function getBinaryLength($str)
    {
    }
    /**
     * Returns bxrand value
     *
     * @return string|false
     */
    public static function getAjaxRandom()
    {
    }
    /**
     * Removes bxrand parameter from the current request and returns its value
     *
     * @return string|false
     */
    public static function removeRandParam()
    {
    }
    /**
     * Converts URI to a cache key (file path)
     * / => /index.html
     * /index.php => /index.html
     * /aa/bb/ => /aa/bb/index.html
     * /aa/bb/index.php => /aa/bb/index.html
     * /?a=b&b=c => /index@a=b&b=c.html
     *
     * @param string $uri
     * @param string $host
     * @param string $privateKey
     *
     * @return string
     */
    public static function convertUriToPath($uri, $host = null, $privateKey = null)
    {
    }
    public static function removeIgnoredParams($queryString)
    {
    }
    /**
     * Return true if html cache is on
     * @return bool
     */
    public static function isOn()
    {
    }
    /**
     * Return true if composite mode is enabled
     * @return bool
     */
    public static function isCompositeEnabled()
    {
    }
    public static function getEnabledFilePath()
    {
    }
    public static function getConfigFilePath()
    {
    }
    public static function getSizeFilePath()
    {
    }
    /**
     * Saves cache options
     *
     * @param array $arOptions
     *
     * @return void
     */
    public static function setOptions($arOptions = array())
    {
    }
    public static function makeDirPath($path)
    {
    }
    public static function escapePHPString($str)
    {
    }
    /**
     * Returns an array with cache options.
     * @return array
     */
    public static function getOptions()
    {
    }
    public static function resetOptions()
    {
    }
    private static function getDefaultOptions()
    {
    }
    private static function getCompiledOptions()
    {
    }
    public static function compileOptions(&$arOptions)
    {
    }
    /**
     * Returns the number of bytes of file cache. If file .size doesn't exist returns false
     * @return bool|float
     */
    public static function getCacheFileSize()
    {
    }
    public static function updateCacheFileSize($bytes = 0.0)
    {
    }
    /**
     * Returns array with cache statistics data.
     * Returns an empty array in case of disabled html cache.
     *
     * @return array
     */
    public static function readStatistic()
    {
    }
    /**
     * Updates cache usage statistics.
     * Each of parameters is added to appropriate existing stats.
     *
     * @param integer|false $hits Number of cache hits.
     * @param integer|false $writings Number of cache writing.
     * @param integer|false $quota Quota change in bytes.
     * @param integer|false $posts Number of POST requests.
     * @param float|false $files File size in bytes.
     *
     * @return void
     */
    public static function writeStatistic($hits = 0, $writings = 0, $quota = 0, $posts = 0, $files = 0.0)
    {
    }
    /**
     * Checks disk quota.
     * Returns true if quota is not exceeded.
     *
     * @param int $requiredFreeSpace
     *
     * @return bool
     */
    public static function checkQuota($requiredFreeSpace = 0)
    {
    }
    /**
     * Updates disk quota and cache statistic
     *
     * @param float $bytes positive or negative value
     */
    public static function updateQuota($bytes)
    {
    }
    //This method  exists because of SiteUpdate features.
    //When you reinstall updates (main 17.1.0 with previous ones).
    public static function __callStatic($name, $arguments)
    {
    }
    /**
     * @param $url
     * @return mixed|string
     */
    public static function getDomainName($url)
    {
    }
    //region Deprecated Methods
    /**
     * @deprecated
     * use Engine::install and Engine::uninstall
     * @param $status
     * @param bool $setDefaults
     */
    public static function setEnabled($status, $setDefaults = true)
    {
    }
    /**
     * @deprecated
     * use
     * $page = \Bitrix\Main\Composite\Page::getInstance();
     * $page->deleteAll();
     */
    public static function cleanAll()
    {
    }
    //endregion
}