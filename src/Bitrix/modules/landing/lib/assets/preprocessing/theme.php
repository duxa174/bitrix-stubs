<?php

namespace Bitrix\Landing\Assets\PreProcessing;

class Theme
{
    /**
     * Manifest path template.
     */
    const FILE_PATH_SITE_MANIFEST = '/bitrix/components/bitrix/landing.demo/data/site/#code#/.theme.php';
    /**
     * Default page template for page creating.
     */
    const DEFAULT_PAGE_TEMPLATE = 'empty';
    /**
     * Returns all class attribute from block content.
     * @param string $content Block content.
     * @return array
     */
    private static function getStyleClasses(string $content) : array
    {
    }
    /**
     * Returns manifest array by template code.
     * @param string $tplCode Template code.
     * @return array
     */
    private static function getThemeManifest(string $tplCode) : array
    {
    }
    /**
     * Removes siblings classes and returns new class attribute.
     * @param string $classString Attribute class string.
     * @param array $targetClasses New classes for this attribute.
     * @param string $namespace Namespace for getting styles data.
     * @return string
     */
    private static function removeSiblingsClasses(string $classString, array $targetClasses, string $namespace) : string
    {
    }
    /**
     * Processing theme manifest.
     * @param Block $block Block instance.
     * @return void
     */
    public static function processing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Finds new page template in site manifest, returns DEFAULT_PAGE_TEMPLATE by default.
     * @param int $siteId Site id.
     * @return string
     */
    public static function getNewPageTemplate(int $siteId) : string
    {
    }
}