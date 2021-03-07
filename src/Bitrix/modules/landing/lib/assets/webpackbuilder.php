<?php

namespace Bitrix\Landing\Assets;

class WebpackBuilder extends \Bitrix\Landing\Assets\Builder
{
    public const PACKAGE_NAME_SUFFIX = '_webpack';
    protected const PACKAGE_CRITICAL_NAME = 'landing_grid';
    /**
     * @var ResourceCollection
     */
    protected $criticalResources;
    /**
     * @var array
     */
    protected $normalizedCriticalResources = [];
    /**
     * @var WebpackFile
     */
    protected $webpackFile;
    /**
     * WebpackBuilder constructor.
     * @param ResourceCollection $resources
     * @throws Main\ArgumentTypeException
     */
    public function __construct(\Bitrix\Landing\Assets\ResourceCollection $resources)
    {
    }
    /**
     * Sorting resources by location, find critical resources
     */
    protected function normalizeResources() : void
    {
    }
    // todo: normalize lang in critical (like standartbuilder)
    protected function normalizeCriticalResources() : void
    {
    }
    protected function normalizeBaseResources() : void
    {
    }
    /**
     * Add assets output at the page
     */
    public function setOutput() : void
    {
    }
    /**
     * Create and configure webpack file. Get exist or create new.
     */
    protected function buildFile() : void
    {
    }
    /**
     * Put added resources to webpack file
     */
    protected function fillPackageWithResources() : void
    {
    }
    /**
     * Init critical resources like JS-extension. Need for primarily added on page
     */
    protected function setCriticalOutput() : void
    {
    }
    /**
     * Init base resources like webpack load script
     */
    protected function setBaseOutput() : void
    {
    }
    /**
     * Create unique name for currently asset set (with hash)
     * @return string
     */
    protected function createUniqueName() : string
    {
    }
}