<?php

namespace Bitrix\Main\Web\WebPacker;

/**
 * Class Builder
 *
 * @package Bitrix\Main\Web\WebPacker
 */
class Builder
{
    /** @var Output\Base $output Output. */
    protected $output;
    /** @var bool $useMinification Use minification. */
    protected $useMinification;
    /** @var Module[] $modules Modules.  */
    private $modules = [\Bitrix\Main\Web\WebPacker\Converter::CORE_EXTENSION];
    /** @var string[] $extensions Extensions.  */
    private $extensions = [];
    /** @var string $siteUri Site uri.*/
    protected static $siteUri;
    /**
     * Build.
     *
     * @return Output\Result
     */
    public function build()
    {
    }
    /**
     * Set output.
     *
     * @param Output\Base $output Output.
     * @return $this
     */
    public function setOutput(\Bitrix\Main\Web\WebPacker\Output\Base $output)
    {
    }
    /**
     * Get output.
     *
     * @return Output\Base
     */
    public function getOutput()
    {
    }
    /**
     * Add child module to root module.
     *
     * @param Module $module Module.
     * @return $this
     */
    public function addModule(\Bitrix\Main\Web\WebPacker\Module $module)
    {
    }
    /**
     * Add child module to root module.
     *
     * @param string $name Name.
     * @param bool $appendDependencies Append dependencies.
     * @return $this
     */
    public function addExtension($name, $appendDependencies = true)
    {
    }
    /**
     * Return true if it has core extension.
     *
     * @return bool
     */
    public function hasCoreExtension()
    {
    }
    private function convertExtensionsToModules()
    {
    }
    /**
     * Use minification.
     *
     * @param bool $use Use minification.
     * @return $this
     */
    public function useMinification($use)
    {
    }
    /**
     * Apply extension options.
     *
     * @param Resource\Profile $profile Profile.
     * @param array $extensionOptions Extension options.
     * @return void
     */
    protected function applyExtensionOptions($profile, $extensionOptions)
    {
    }
    protected function getValueByKey($array, $key)
    {
    }
    /**
     * Get modules.
     *
     * @return Module[]
     */
    public function getModules()
    {
    }
    /**
     * Get module.
     *
     * @param string $name Name.
     * @return Module|null
     */
    public function getModule($name)
    {
    }
    /**
     * Convert to string.
     *
     * @return string
     */
    public function stringify()
    {
    }
    /**
     * Get site uri.
     *
     * @return string
     */
    public static function getDefaultSiteUri()
    {
    }
}