<?php

namespace Bitrix\Main\Page;

class Asset
{
    private static $instance;
    /** @var array Contains target list */
    private $targetList;
    /** @var array pointer to current target */
    private $target;
    /** @var array of css files */
    private $css = [];
    /** @var array of js files */
    private $js = [];
    /** @var array of inline string */
    private $strings = [\Bitrix\Main\Page\AssetLocation::BEFORE_CSS => [], \Bitrix\Main\Page\AssetLocation::AFTER_CSS => [], \Bitrix\Main\Page\AssetLocation::AFTER_JS_KERNEL => [], \Bitrix\Main\Page\AssetLocation::AFTER_JS => []];
    /** @var array Information about kernel modules */
    private $moduleInfo = ['CSS' => [], 'JS' => []];
    private $kernelAsset = ['CSS' => [], 'JS' => []];
    private $assetList = ['CSS' => [], 'SOURCE_CSS' => [], 'JS' => [], 'SOURCE_JS' => []];
    private $fileList = ['CSS' => [], 'JS' => []];
    private $mode = \Bitrix\Main\Page\AssetMode::STANDARD;
    private $ajax;
    private $xhtmlStyle = '/';
    private $optimizeCss = true;
    private $optimizeJs = true;
    private $headString = false;
    private $headScript = false;
    private $bodyScript = false;
    private $moveJsToBody = null;
    private $siteTemplateID = '';
    private $templatePath = '';
    private $documentRoot = '';
    private $dbType = 'MYSQL';
    private $assetCSSCnt = 0;
    private $assetJSCnt = 0;
    const SOURCE_MAP_TAG = "\n//# sourceMappingURL=";
    const HEADER_START_TAG = "; /* Start:\"";
    const HEADER_END_TAG = "\"*/";
    const version = 1;
    private function __construct()
    {
    }
    /**
     * Can`t clone this object
     * @return void
     */
    private function __clone()
    {
    }
    /**
     * Singleton instance.
     *
     * @return Asset
     */
    public static function getInstance()
    {
    }
    /**
     * Set mode for current target.
     * @param int $mode Set current composite mode.
     * @return void
     */
    public function setMode($mode = \Bitrix\Main\Page\AssetMode::STANDARD)
    {
    }
    /**
     * Returns gzip enabled or not.
     * @return bool|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function gzipEnabled()
    {
    }
    /**
     * Start optimizing css
     * @return void
     */
    public function enableOptimizeCss()
    {
    }
    /**
     * Stop optimizing css
     * @return void
     */
    public function disableOptimizeCss()
    {
    }
    /**
     * Start optimizing js
     * @return void
     */
    public function enableOptimizeJs()
    {
    }
    /**
     * Stop optimizing js
     * @return void
     */
    public function disableOptimizeJs()
    {
    }
    /**
     * @param boolean $value Use xhtml html style.
     * @return void
     */
    public function setXhtml($value)
    {
    }
    /**
     * @param integer $value Count of css files showed inline fore ie.
     * @deprecated
     * @return void
     */
    public function setMaxCss($value)
    {
    }
    /**
     * Set ShowHeadString in page or not.
     * @param boolean $value Set ShowHeadSting is set on page.
     * @return void
     */
    public function setShowHeadString($value = true)
    {
    }
    /**
     * Return true if ShowHeadString exist in page.
     * @return boolean
     */
    public function getShowHeadString()
    {
    }
    /**
     *  Set ShowHeadScript in page or not.
     * @param boolean $value Set ShowHeadScript is set on page.
     * @return void
     */
    public function setShowHeadScript($value = true)
    {
    }
    /**
     * Return true if ShowHeadBodyScript exist in page.
     * @param boolean $value Set ShowHeadBodyScript is set on page.
     * @return void
     */
    public function setShowBodyScript($value = true)
    {
    }
    /**
     * Set Ajax mode and restart instance
     * @return Asset
     */
    public function setAjax()
    {
    }
    /**
     * @return string - Return current set name
     */
    public function getTargetName()
    {
    }
    /**
     * @return mixed Return current set
     */
    public function getTarget()
    {
    }
    /**
     * Temporary fix for update system. Need to delete later.
     * @param string $id Target ID.
     * @param integer $mode Composite Mode.
     * @return boolean
     */
    public function startSet($id = '', $mode = \Bitrix\Main\Page\AssetMode::ALL)
    {
    }
    /**
     * Start new target for asset.
     * @param string $id Target ID.
     * @param integer $mode Composite mode.
     * @return boolean
     */
    public function startTarget($id = '', $mode = \Bitrix\Main\Page\AssetMode::ALL)
    {
    }
    /**
     * Stop current target.
     * @param string $id Target ID.
     * @return bool
     */
    public function stopTarget($id = '')
    {
    }
    /**
     * Return information about target assets.
     * @param string $id Asset ID.
     * @param mixed $mode Composite mode.
     * @return array
     */
    public function getAssetInfo($id, $mode)
    {
    }
    /**
     * Set composite mode for set.
     * @param string $id Target ID.
     * @return boolean
     */
    public function compositeTarget($id = '')
    {
    }
    /**
     * Return list of all targets on the page.
     * @param string $type Target type CSS or JS.
     * @return array Return set list with subsets.
     */
    public function getTargetList($type = 'CSS')
    {
    }
    /**
     * Add string asset.
     * @param string $str Added string.
     * @param bool $unique Check string for unique.
     * @param string $location Where string wheel be showed.
     * @param null $mode Composite mode.
     * @return boolean
     */
    function addString($str, $unique = false, $location = \Bitrix\Main\Page\AssetLocation::AFTER_JS_KERNEL, $mode = null)
    {
    }
    /**
     * Return strings assets.
     * @param string $location Location.
     * @return string
     */
    public function getStrings($location = \Bitrix\Main\Page\AssetLocation::AFTER_JS_KERNEL)
    {
    }
    /**
     * Add some css to asset.
     * @param string $path Path to css file.
     * @param boolean $additional Is additional file.
     * @return boolean
     */
    public function addCss($path, $additional = false)
    {
    }
    /**
     * Add some js to asset.
     * @param string $path Path to js file.
     * @param boolean $additional Is additional file.
     * @return boolean
     */
    public function addJs($path, $additional = false)
    {
    }
    /**
     * Replace path to includes in css.
     * @param string $content Content for replacing path.
     * @param string $path Path to correct.
     * @return mixed
     */
    public static function fixCssIncludes($content, $path)
    {
    }
    /**
     * Group some js modules.
     * @param string $from Module name for packing.
     * @param string $to Module name for pack.
     * @return void
     */
    public function groupJs($from = '', $to = '')
    {
    }
    /**
     * Group some css modules.
     * @param string $from Module name for packing.
     * @param string $to Module name for pack.
     * @return void
     */
    public function groupCss($from = '', $to = '')
    {
    }
    /**
     * @param string $to Module name.
     * @return string Return module name.
     */
    private function movedJsTo($to)
    {
    }
    /**
     * @param string $to Module name.
     * @return string Return module name
     */
    private function movedCssTo($to)
    {
    }
    /**
     * Move js kernel module to BODY.
     * @param string $module Module name.
     * @return void
     */
    public function moveJs($module = '')
    {
    }
    /**
     * Enables or disables the moving all of scripts to the body.
     * @param bool $flag True or False.
     * @return void
     */
    public function setJsToBody($flag)
    {
    }
    /**
     * @return bool|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function getJsToBody()
    {
    }
    /**
     * Moves all of scripts in front of </body>.
     * @param string &$content Page content.
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @internal
     * @return void
     */
    public function moveJsToBody(&$content)
    {
    }
    /**
     * Returns positions of <script>...</script> elements.
     * @param string $content Page content.
     * @return array
     */
    private function getScriptAreas($content)
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\SystemException
     */
    public function canMoveJsToBody()
    {
    }
    /**
     *
     * Returns true if <script> has valid mime type.
     * @param string $attrs Script attributes.
     * @return bool
     */
    private static function isValidScriptType($attrs)
    {
    }
    /**
     * Replace path to includes in line.
     * @param string $url Url of css files.
     * @param string $quote Quote.
     * @param string $path Path to css.
     * @return string replaced.
     */
    public static function replaceUrlCss($url, $quote, $path)
    {
    }
    /**
     * Remove from file path any parametrs.
     * @param string $src Path to asset file.
     * @return string path whithout ?xxx.
     */
    public static function getAssetPath($src)
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function optimizeCss()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function optimizeJs()
    {
    }
    /**
     * @return bool|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function canUseMinifiedAssets()
    {
    }
    /**
     * @return boolean
     */
    public function sliceKernel()
    {
    }
    /**
     * Insert inline css.
     * @param string $css Content or file name.
     * @param mixed $label Additional info.
     * @param boolean $inline Show inline.
     * @return string
     */
    public function insertCss($css, $label = false, $inline = false)
    {
    }
    /**
     * insert inline js.
     * @param string $js Contet or file path.
     * @param mixed $label Additional info.
     * @param boolean $inline Show inline.
     * @return string
     */
    public function insertJs($js, $label = '', $inline = false)
    {
    }
    /**
     * Sets templateID and template path
     * @return void
     */
    private function setTemplateID()
    {
    }
    /**
     * Add template css to asset
     * @return void
     */
    private function addTemplateCss()
    {
    }
    /**
     * Prepare string assets.
     * @return void
     */
    private function prepareString()
    {
    }
    /**
     * Returns asset's paths.
     * @param string $assetPath Peth to asset.
     * @return null|array
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function getAssetPaths($assetPath)
    {
    }
    /**
     * Gets asset path.
     * if allowed use minified assets
     * @param $sourcePath
     * @return string|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getFullAssetPath($sourcePath)
    {
    }
    /**
     * Prepare css asset to optimize.
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @return void
     */
    private function prepareCss() : void
    {
    }
    /**
     * Prepare js asset to optimize
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @return void
     */
    private function prepareJs()
    {
    }
    /**
     * Return css or page.
     * @param int $type Target type.
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getCss($type = \Bitrix\Main\Page\AssetShowTargetType::ALL)
    {
    }
    /**
     * Return JS page assets.
     * @param int $type Target type.
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function getJs($type = \Bitrix\Main\Page\AssetShowTargetType::ALL)
    {
    }
    /**
     * Convert location for new format.
     * @param mixed $location AssetLocation.
     * @return AssetLocation
     */
    public static function getLocationByName($location)
    {
    }
    /**
     * Insert JS code to sets assets included in page.
     * @return string
     */
    public function showFilesList()
    {
    }
    /**
     * Add information about kernel module css.
     * @param string $module Module name.
     * @param array $css Css files.
     * @param array $settings Settings.
     * @return void
     */
    function addCssKernelInfo($module = '', $css = [], $settings = [])
    {
    }
    /**
     * Add information about kernel js modules.
     * @param string $module Module name.
     * @param array $js Js files.
     * @param array $settings Settings.
     * @return void
     */
    function addJsKernelInfo($module = '', $js = [], $settings = [])
    {
    }
    /**
     * Return information about file and check is it in kernel pack.
     * @param string $css File path.
     * @return array|bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function isKernelCSS($css)
    {
    }
    /**
     * Return information about file and check is it in kernel pack.
     * @param string $js File path.
     * @return array|bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function isKernelJS($js)
    {
    }
    /**
     * Sets unique mode for set.
     * @param string $setID Target ID.
     * @param string $uniqueID Unique type.
     * @return bool
     */
    public function setUnique($setID = '', $uniqueID = '')
    {
    }
    /**
     * Show asset resource.
     * @param array $setList Set list.
     * @param string $type Asset type css or js.
     * @param string $setName Parent set name.
     * @return string
     */
    private function showAsset($setList = [], $type = 'css', $setName = '')
    {
    }
    /**
     * Fix current set order for js.
     * @param string $setName Set name.
     * @return string
     */
    private function fixJsSetOrder($setName = '')
    {
    }
    /**
     * Get time for current asset.
     * @param string $file File path.
     * @return bool|string
     */
    public static function getAssetTime($file = '')
    {
    }
    /**
     * Return md5 for asset.
     * @param array $assetList Asset list.
     * @return string
     */
    private function getAssetChecksum($assetList = [])
    {
    }
    /**
     * Check assets and return action and files.
     * @param array $assetList Asset list.
     * @param string $infoFile Path to metadata file.
     * @param string $optimFile Path to packed file.
     * @param bool $unique Unique type.
     * @return array
     */
    private function isAssetChanged($assetList = [], $infoFile = '', $optimFile = '', $unique = false)
    {
    }
    /**
     * @param array $files Files for optimisation.
     * @param bool $unique Unique type.
     * @param string $prefix Prefix for packed file.
     * @param string $setName Set name.
     * @param string $type Asset type css or js.
     * @param string $data Additional info.
     * @return array
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function optimizeAsset($files = [], $unique = false, $prefix = 'default', $setName = '', $type = 'css', $data = '')
    {
    }
    /**
     * Cuts and returns source map comment.
     * @param string &$content Asset content.
     * @return string
     */
    private static function cutSourceMap(&$content)
    {
    }
    /**
     * Returns array of file data.
     * @param string $content Content.
     * @return array
     */
    private static function getFilesInfo($content)
    {
    }
    /**
     * Generates source map content.
     * @param string $fileName File name.
     * @param string $content Content.
     * @return string
     */
    private static function generateSourceMap($fileName, $content)
    {
    }
    /**
     * Write optimized css, js files or info file.
     * @param string $filePath Path for optimized css, js or info file.
     * @param string $content File contents.
     * @param bool $gzip For disabled gzip.
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function write($filePath, $content, $gzip = true)
    {
    }
}