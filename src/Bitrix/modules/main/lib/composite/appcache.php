<?php

namespace Bitrix\Main\Composite;

class AppCache
{
    const MANIFEST_CHECK_FILE = "/bitrix/tools/check_appcache.php";
    const DEBUG_HOLDER = "//__APP_CACHE_DEBUG_HOLDER__";
    private static $debug;
    private static $instance;
    private static $isEnabled = false;
    private static $customCheckFile = null;
    private $files = array();
    private $pageURI = "";
    private $network = array();
    private $fallbackPages = array();
    private $params = array();
    private $isSided = false;
    private $isModified = false;
    private $receivedManifest = "";
    private $excludeImagePatterns = array();
    private $receivedCacheParams = array();
    private function __construct()
    {
    }
    /**
     * @return boolean
     */
    public static function getDebug()
    {
    }
    /**
     * @return boolean
     */
    public function isEnabled()
    {
    }
    /**
     * Sets the array of path patterns to exclude unused images from the manifest file
     * @return array
     */
    public function getExcludeImagePatterns()
    {
    }
    /**
     * Returns the array of path patters
     * @param array $excludeImagePatterns
     */
    public function setExcludeImagePatterns($excludeImagePatterns)
    {
    }
    private function __clone()
    {
    }
    public static function getInstance()
    {
    }
    /**
     * Creates or updates the manifest file for the page with usage its content.
     *
     * @param bool $isEnabled
     */
    public static function setEnabled($isEnabled = true)
    {
    }
    public function generate(&$content)
    {
    }
    /**
     * OnBeforeEndBufferContent handler
     * @return array|mixed
     */
    public static function onBeforeEndBufferContent()
    {
    }
    /**
     * Gets file path for getting of manifest content
     * @return string
     */
    public function getManifestCheckFile()
    {
    }
    /**
     * Sets custom file for getting of manifest content
     * self::MANIFEST_CHECK_FILE uses by default
     *@param string $customManifestCheckFile
     */
    public function setManifestCheckFile($customManifestCheckFile)
    {
    }
    /*
     * OnEndBufferContent handler
     */
    public static function onEndBufferContent(&$content)
    {
    }
    /**
     * Returns content of the manifest
     * @return string
     */
    public function getManifestContent()
    {
    }
    /**
     * Parses the passed content to find css, js and images. Returns the array of files.
     *
     * @param $content
     *
     * @return array
     */
    public function getFilesFromContent($content)
    {
    }
    /**
     * Replaces url in css-file with absolute path.
     *
     * @param $url
     * @param $cssPath
     *
     * @return string
     */
    private static function replaceUrlCSS($url, $cssPath)
    {
    }
    /**
     * Sets received cache params
     * @param $receivedCacheParams
     */
    public function setReceivedCacheParams($receivedCacheParams)
    {
    }
    /**
     * Gets received cache parameters
     * @return array
     */
    public function getReceivedCacheParams()
    {
    }
    /**
     * Sets received path to manifest
     *
     * @param $receivedManifest
     */
    public function setReceivedManifest($receivedManifest)
    {
    }
    public function getReceivedManifest()
    {
    }
    public function setIsSided($isSided)
    {
    }
    public function getIsSided()
    {
    }
    public function setPageURI($pageURI = "")
    {
    }
    public function getPageURI()
    {
    }
    public function setFiles($arFiles)
    {
    }
    public function addFile($filePath)
    {
    }
    public function addAdditionalParam($name, $value)
    {
    }
    public function getAdditionalParams()
    {
    }
    public function setNetworkFiles($network)
    {
    }
    public function getNetworkFiles()
    {
    }
    public function addFallbackPage($onlinePage, $offlinePage)
    {
    }
    public function getFallbackPages()
    {
    }
    public function getCurrentManifestID()
    {
    }
    public function getIsModified()
    {
    }
    private function getManifestDescription()
    {
    }
    private function writeManifestCache($arFields)
    {
    }
    public function readManifestCache($manifestId)
    {
    }
    private static function removeManifestById($manifestId)
    {
    }
    /**
     * @param $manifestId
     *
     * @return string
     */
    public static function getCachePath($manifestId)
    {
    }
    private function getManifestID($pageURI, $arParams)
    {
    }
    public static function checkObsoleteManifest()
    {
    }
    private static function clear($url, $params)
    {
    }
}