<?php

namespace Bitrix\Main\Web\WebPacker\Resource;

/**
 * Class Asset
 *
 * @package Bitrix\Main\Web\WebPacker\Resource
 */
abstract class Asset
{
    const JS = 'js';
    const CSS = 'css';
    const LAYOUT = 'layout';
    const LANG = 'lang';
    /** @var string */
    protected $type;
    /** @var string|null $path Path. */
    protected $path;
    /** @var string|null $uri Uri. */
    protected $uri;
    /** @var string|array|null $content Content. */
    protected $content;
    /**
     * Create asset instance.
     *
     * @param string $path Relative path to asset.
     * @return CssAsset|JsAsset|LangAsset|LayoutAsset
     * @throws ArgumentException
     */
    public static function create($path)
    {
    }
    /**
     * Get type list.
     *
     * @return array
     */
    public static function getTypeList()
    {
    }
    /**
     * Detect type by path.
     *
     * @param string $path Relative path to asset.
     * @return null|string
     */
    public static function detectType($path)
    {
    }
    /**
     * Asset constructor.
     *
     * @param string|null $path Path to resource.
     */
    public function __construct($path = null)
    {
    }
    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
    }
    /**
     * Set path to resource.
     *
     * @param string $path Path to file.
     * @return $this
     */
    public function setPath($path)
    {
    }
    /**
     * Get uri.
     *
     * @return string|null
     */
    public function getUri()
    {
    }
    /**
     * Set uri.
     *
     * @param string|null $uri Uri.
     * @return $this
     */
    public function setUri($uri)
    {
    }
    /**
     * Set content.
     *
     * @param string|array $content Content.
     * @return $this
     */
    public function setContent($content)
    {
    }
    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
    }
    /**
     * Get content.
     *
     * @return string|null
     */
    public function getContent()
    {
    }
    /**
     * Return true if asset exists.
     *
     * @param string $path Relative path.
     * @return string
     */
    public static function isExists($path)
    {
    }
    /**
     * Get absolute path.
     *
     * @param string $path Relative path.
     * @return string
     */
    protected static function getAbsolutePath($path)
    {
    }
}