<?php

namespace Bitrix\Landing\Assets;

/**
 * Class Manager
 * Collect assets, sort by locations, set output in different modes (webpack or default)
 *
 * @package Bitrix\Landing
 */
class Manager
{
    protected const MODE_STANDART = 'STANDART';
    protected const MODE_WEBPACK = 'WEBPACK';
    protected const REGISTERED_KEY_CODE = 'code';
    protected const REGISTERED_KEY_LOCATION = 'location';
    private static $instance;
    /**
     * webpack or standart
     * @var string
     */
    protected $mode;
    /**
     * Collection of already added assets
     * @var array
     */
    protected $registered = [];
    /**
     * @var ResourceCollection
     */
    protected $resources;
    /**
     * @var Builder
     */
    protected $builder;
    /**
     * Singleton instance.
     * @return Manager
     */
    public static function getInstance() : \Bitrix\Landing\Assets\Manager
    {
    }
    /**
     * Manager constructor.
     */
    public function __construct()
    {
    }
    /**
     * Set webpack mode of builder
     */
    public function setWebpackMode() : void
    {
    }
    /**
     * Set standart mode of builder
     */
    public function setStandartMode() : void
    {
    }
    /**
     * Get current mode
     * @return string
     */
    public function getMode() : string
    {
    }
    /**
     * @param string $code - Name of asset or CJSCore extension.
     * @return mixed
     */
    public function isAssetRegistered($code)
    {
    }
    /**
     * Return location of later added asset
     * @param string $code Code of added asset
     * @return bool|mixed asset location or false, if asset not added
     */
    public function getRegisteredAssetLocation(string $code)
    {
    }
    /**
     * @param string $code - Name of asset or CJSCore extension.
     */
    public function markAssetRegistered($code, $location) : void
    {
    }
    /**
     * Recursive (by 'rel' key) adding assets in WP packege
     *
     * @param [string]|string $code
     * @param int|null $location - Where will be placed asset.
     */
    public function addAsset($code, $location = null) : void
    {
    }
    /**
     * @param string $code
     * @param int|null $location
     */
    protected function addAssetRecursive(string $code, $location = null) : void
    {
    }
    /**
     * @param string $code
     * @param int $location
     * @return bool
     */
    protected function isNeedAddAsset(string $code, int $location) : bool
    {
    }
    /**
     * Get parts of asset and add them in pack
     *
     * @param array $asset - array of asset data
     * @param string $location - where will be placed asset.
     */
    protected function processAsset(array $asset, int $location) : void
    {
    }
    /**
     * Create <link> or <script> string for adding
     * @param string $path
     * @param string $type from Bitrix\Landing\Assets\Types
     * @return string
     */
    protected function createStringFromPath(string $path, string $type) : string
    {
    }
    /**
     * Detect type by path.
     *
     * @param string $path Relative path to asset.
     * @return null|string
     */
    public static function detectType(string $path) : ?string
    {
    }
    protected static function checkFontLinkType(string $path) : string
    {
    }
    /**
     * Add asset string
     *
     * @param string $string
     */
    public function addString(string $string) : void
    {
    }
    /**
     * Add extensions on page
     * @param int $lid - ID of current landing.
     */
    public function setOutput(int $lid = 0) : void
    {
    }
    /**
     * Create builder object by currently set mode
     * @throws Main\ArgumentException
     */
    protected function createBuilder() : void
    {
    }
    /**
     * When updated assets files - need rebuild webpack file. Marked packs for all landing as "need rebuild".
     */
    public static function rebuildWebpack() : void
    {
    }
    /**
     * When updated assets files - need rebuild webpack file. Marked packs for current landing as "need rebuild".
     * @param int|[int] $lid - ID of landing.
     */
    public static function rebuildWebpackForLanding($lid = []) : void
    {
    }
}