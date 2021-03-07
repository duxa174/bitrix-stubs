<?php

namespace Bitrix\Main\Web\WebPacker;

/**
 * Class Converter
 *
 * @package Bitrix\Main\Web\WebPacker
 */
class Converter
{
    const CORE_EXTENSION = 'ui.webpacker';
    protected static $hasCoreExtension = false;
    /**
     * Stringify module.
     *
     * @param Builder $builder Builder.
     * @return string
     */
    public static function stringify(\Bitrix\Main\Web\WebPacker\Builder $builder)
    {
    }
    /**
     * Wrap by closure.
     *
     * @param string $content Content.
     * @return string
     */
    protected static function wrap($content)
    {
    }
    /**
     * Encode module.
     *
     * @param Module $module Module.
     * @return string
     */
    protected static function encodeModule(\Bitrix\Main\Web\WebPacker\Module $module)
    {
    }
    /**
     * Encode resource package.
     *
     * @param Resource\Package $package Package.
     * @param Resource\Profile $profile Profile.
     * @return string
     */
    protected static function encodePackage(\Bitrix\Main\Web\WebPacker\Resource\Package $package, \Bitrix\Main\Web\WebPacker\Resource\Profile $profile = null)
    {
    }
    protected static function getEol($multiplier = 2)
    {
    }
    protected static function isCoreExtension($name)
    {
    }
}