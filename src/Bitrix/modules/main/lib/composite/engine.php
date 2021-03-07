<?php

namespace Bitrix\Main\Composite;

final class Engine
{
    const PAGE_DELETION_LIMIT = 100;
    const PAGE_DELETION_ATTEMPTS = 2;
    private static $instance;
    private static $isEnabled = false;
    private static $useHTMLCache = false;
    private static $onBeforeHandleKey = false;
    private static $onRestartBufferHandleKey = false;
    private static $onBeforeLocalRedirect = false;
    private static $autoUpdate = true;
    private static $autoUpdateTTL = 0;
    private static $isCompositeInjected = false;
    private static $isRedirect = false;
    private static $isBufferRestarted = false;
    /**
     * use self::getInstance()
     */
    private function __construct()
    {
    }
    /**
     * you can't clone it
     */
    private function __clone()
    {
    }
    /**
     * Singleton instance.
     * @deprecated just use static methods
     * @return Engine
     */
    public static function getInstance()
    {
    }
    /**
     * Sets isEnable property value and attaches needed handlers.
     *
     * @param bool $isEnabled Mode control flag.
     *
     * @return void
     */
    public static function setEnable($isEnabled = true)
    {
    }
    /**
     * Gets isEnabled property.
     *
     * @return boolean
     */
    public static function isEnabled()
    {
    }
    /**
     * Sets useAppCache property.
     *
     * @param boolean $useAppCache AppCache mode control flag.
     *
     * @return void
     */
    public static function setUseAppCache($useAppCache = true)
    {
    }
    /**
     * Gets useAppCache property.
     *
     * @return boolean
     */
    public static function getUseAppCache()
    {
    }
    /**
     * Sets useHTMLCache property.
     *
     * @param boolean $useHTMLCache Composite mode control flag.
     *
     * @return void
     */
    public static function setUseHTMLCache($useHTMLCache = true)
    {
    }
    /**
     * Gets useHTMLCache property.
     *
     * @return boolean
     */
    public static function getUseHTMLCache()
    {
    }
    /**
     * Returns true if current request was initiated by Ajax.
     *
     * @return boolean
     */
    public static function isAjaxRequest()
    {
    }
    public static function isInvalidationRequest()
    {
    }
    /**
     * Returns true if we should inject banner into a page.
     * @return bool
     */
    public static function isBannerEnabled()
    {
    }
    /**
     * Sets autoUpdate property
     *
     * @param bool $flag
     *
     * @return void
     */
    public static function setAutoUpdate($flag)
    {
    }
    /**
     * Gets autoUpdate property
     * @return bool
     */
    public static function getAutoUpdate()
    {
    }
    /**
     * Sets auto update ttl
     *
     * @param int $ttl - number of seconds
     *
     * @return void
     */
    public static function setAutoUpdateTTL($ttl)
    {
    }
    /**
     * Gets auto update ttl
     * @return int
     */
    public static function getAutoUpdateTTL()
    {
    }
    /**
     * OnBeforeEndBufferContent handler.
     * Prepares the stage for composite mode handler.
     *
     * @return void
     */
    public static function onBeforeEndBufferContent()
    {
    }
    /**
     * @param $content
     *
     * @return null|string
     * @internal
     */
    public static function startBuffering($content)
    {
    }
    /**
     * Returns true if $originalContent was modified
     *
     * @param $originalContent
     * @param $compositeContent
     *
     * @return bool
     * @internal
     */
    public static function endBuffering(&$originalContent, $compositeContent)
    {
    }
    /**
     * * There are two variants of content's modification in this method.
     * The first one:
     * If it's ajax-hit the content will be replaced by json data with dynamic blocks,
     * javascript files and etc. - dynamic part
     *
     * The second one:
     * If it's simple hit the content will be modified also,
     * all dynamic blocks will be cut out of the content - static part.
     *
     * @param string $content Html page content.
     *
     * @return string
     */
    private static function processPageContent($content)
    {
    }
    /**
     * This method returns the divided content.
     * The content is divided by two parts - static and dynamic.
     * Example of returned value:
     * <code>
     * array(
     *    "static"=>"Hello World!"
     *    "dynamic"=>array(
     *        array("ID"=>"someID","CONTENT"=>"someDynamicContent", "HASH"=>"md5ofDynamicContent")),
     *        array("ID"=>"someID2","CONTENT"=>"someDynamicContent2", "HASH"=>"md5ofDynamicContent2"))
     * );
     * </code>
     *
     * @param string $content Html page content.
     *
     * @return array
     */
    private static function getDividedPageData($content)
    {
    }
    /**
     * @param string $content
     *
     * @return array|bool
     */
    private static function getFrameIndexes($content)
    {
    }
    private static function getPageBlocks()
    {
    }
    /**
     * Replaces bitrix sessid in the $content
     *
     * @param string $content
     */
    private static function replaceSessid(&$content)
    {
    }
    /**
     * OnBeforeRestartBuffer event handler.
     * Disables composite mode when called.
     *
     * @return void
     */
    public static function onBeforeRestartBuffer()
    {
    }
    public static function onBeforeLocalRedirect(&$url, $skip_security_check, $isExternal)
    {
    }
    private static function ensureFileQuota($requiredFreeSpace = 0)
    {
    }
    /**
     * @return int
     */
    private static function getDeletionLimit()
    {
    }
    private static function getAjaxError($errorMsg = null)
    {
    }
    /**
     * Sends BX-RAND Header
     */
    private static function sendRandHeader()
    {
    }
    /**
     * Returns JS minified code that will do dynamic hit to the server.
     * The code is returned in the 'start' key of the array.
     *
     * @param array $params
     *
     * @return array[string]string
     */
    private static function getInjectedJs($params = array())
    {
    }
    /**
     * Returns css string to be injected.
     *
     * @internal
     * @return string
     */
    public static function getInjectedCSS()
    {
    }
    /**
     * Checks whether HTML Cache should be enabled.
     *
     * @internal
     * @return void
     */
    public static function shouldBeEnabled()
    {
    }
    /**
     * Checks if admin panel will be shown or not.
     * Disables itself if panel will be show.
     *
     * @internal
     * @return void
     */
    public static function checkAdminPanel()
    {
    }
    /**
     * Return true if it's a self-hosted portal.
     * @return bool
     */
    public static function isSelfHostedPortal()
    {
    }
    public static function install($setDefaults = true)
    {
    }
    public static function uninstall()
    {
    }
    /**
     *
     * Returns true if composite mode is turned on
     * @return bool
     */
    public static function isOn()
    {
    }
    /**
     * @internal
     * OnEpilog Event Handler
     * @return void
     */
    public static function onEpilog()
    {
    }
    /**
     * OnChangeFile Event Handler
     *
     * @internal
     * @param $path
     * @param $site
     */
    public static function onChangeFile($path, $site)
    {
    }
    /**
     * OnUserLogin Event Handler
     */
    public static function onUserLogin()
    {
    }
    /**
     * OnUserLogout Event Handler
     */
    public static function onUserLogout()
    {
    }
    public static function isCurrentUserCC()
    {
    }
    /**
     * Sets NCC cookie
     */
    public static function setNCC()
    {
    }
    /**
     * Sets CC cookie
     */
    public static function setCC()
    {
    }
    /**
     * Removes all composite cookies
     */
    public static function deleteCompositeCookies()
    {
    }
    //region Deprecated Methods
    /**
     * Sets useHTMLCache property.
     *
     * @param boolean $preventAutoUpdate property.
     *
     * @deprecated use setAutoUpdate
     * @return void
     */
    public static function setPreventAutoUpdate($preventAutoUpdate = true)
    {
    }
    /**
     * Gets preventAutoUpdate property.
     *
     * @return boolean
     * @deprecated use getAutoUpdate
     */
    public static function getPreventAutoUpdate()
    {
    }
    /**
     * Gets ids of the dynamic blocks.
     *
     * @deprecated
     * @return array
     */
    public function getDynamicIDs()
    {
    }
    /**
     * Returns the identifier of current dynamic area.
     *
     * @deprecated
     * @see \Bitrix\Main\Composite\StaticArea::getCurrentDynamicId
     * @return string|false
     */
    public function getCurrentDynamicId()
    {
    }
    /**
     * Adds dynamic data to be sent to the client.
     *
     * @deprecated
     *
     * @param string $id Unique identifier of the block.
     * @param string $content Dynamic part html.
     * @param string $stub Html to use as stub.
     * @param string $containerId Identifier of the html container.
     * @param boolean $useBrowserStorage Use browser storage for caching or not.
     * @param boolean $autoUpdate Automatically or manually update block contents.
     * @param boolean $useAnimation Animation flag.
     *
     * @return void
     */
    public function addDynamicData($id, $content, $stub = "", $containerId = null, $useBrowserStorage = false, $autoUpdate = true, $useAnimation = false)
    {
    }
    /**
     * Marks start of a dynamic block.
     *
     * @deprecated
     *
     * @param integer $id Unique identifier of the block.
     *
     * @return boolean
     */
    public function startDynamicWithID($id)
    {
    }
    /**
     * Marks end of the dynamic block if it's the current dynamic block
     * and its start was being marked early.
     *
     * @deprecated
     *
     * @param string $id Unique identifier of the block.
     * @param string $stub Html to use as stub.
     * @param string $containerId Identifier of the html container.
     * @param boolean $useBrowserStorage Use browser storage for caching or not.
     * @param boolean $autoUpdate Automatically or manually update block contents.
     * @param boolean $useAnimation Animation flag.
     *
     * @return boolean
     */
    public function finishDynamicWithID($id, $stub = "", $containerId = null, $useBrowserStorage = false, $autoUpdate = true, $useAnimation = false)
    {
    }
    //endregion
}