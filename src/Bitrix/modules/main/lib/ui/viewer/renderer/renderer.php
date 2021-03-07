<?php

namespace Bitrix\Main\UI\Viewer\Renderer;

abstract class Renderer
{
    const JS_TYPE_UNKNOWN = 'unknown';
    protected $name;
    /** @var Uri */
    protected $sourceUri;
    /** @var array */
    protected $options;
    public function __construct($name, \Bitrix\Main\Web\Uri $sourceUri, array $options = [])
    {
    }
    public function getOption($name, $defaultValue = null)
    {
    }
    /**
     * Returns value, that belongs to path.
     *
     * @param array|\ArrayAccess $array Target array.
     * @param string $path Path. Example data.altContent.src
     * @param null $defaultValue Default value
     * @return array|\ArrayAccess|mixed|null
     * @throws ArgumentException
     */
    private function getByPath($array, $path, $defaultValue = null)
    {
    }
    public static function getAllowedContentTypes()
    {
    }
    public static function getJsType()
    {
    }
    public static function getSizeRestriction()
    {
    }
    public abstract function render();
    public function getData()
    {
    }
}