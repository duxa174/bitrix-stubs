<?php

namespace Bitrix\Landing\Assets;

abstract class Builder
{
    protected const TYPE_STANDART = 'STANDART';
    protected const TYPE_WEBPACK = 'WEBPACK';
    public const PACKAGE_NAME = 'landing_assets';
    /**
     * @var ResourceCollection
     */
    protected $resources;
    /**
     * @var array
     */
    protected $normalizedResources = [];
    /**
     * Asset pack may be attached to landing
     * @var int
     */
    protected $landingId = 0;
    /**
     * Builder constructor.
     * @param ResourceCollection $resources
     * @throws ArgumentTypeException
     */
    public function __construct(\Bitrix\Landing\Assets\ResourceCollection $resources)
    {
    }
    /**
     * @param ResourceCollection $resources	Resources object
     * @param string $type Builder type
     * @return Builder
     * @throws ArgumentException
     * @throws ArgumentTypeException
     */
    public static function createByType(\Bitrix\Landing\Assets\ResourceCollection $resources, string $type) : ?\Bitrix\Landing\Assets\Builder
    {
    }
    /**
     * Assets pack must be attached only to once landing. Set ID
     * @param int $lid - landing ID
     */
    public function attachToLanding(int $lid) : void
    {
    }
    /**
     * Add assets to page
     * @return mixed
     */
    public abstract function setOutput();
    protected abstract function normalizeResources();
    protected function initResourcesAsJsExtension(array $resources, $extName = null) : void
    {
    }
    /**
     * Add assets strings to page
     */
    protected function setStrings() : void
    {
    }
}