<?php

namespace Bitrix\Landing\Assets\PreProcessing;

class Icon
{
    /**
     * File name with icon content.
     */
    const CONTENT_ICON_FILE_NAME = 'content.css';
    /**
     * File name with icon css rules.
     */
    const RULE_ICON_FILE_NAME = 'style.css';
    /**
     * File names of two types of fonts
     */
    const ICON_FONT_FILE_NAME = 'font.woff';
    const ICON_FONT_FILE_NAME_2 = 'font.woff2';
    /**
     * Tries to resolve and returns icon file path.
     * @param string $vendorName Vendor folder code.
     * @return string|null
     */
    protected static function getIconsPath(string $vendorName) : ?string
    {
    }
    /**
     * Parses icon file and returns content for each icon class.
     * @param string $vendorName Vendor folder code.
     * @return array
     */
    protected static function getIconsContentByVendor(string $vendorName) : array
    {
    }
    /**
     * Returns icon css content.
     * @param string $className Class name.
     * @param string $vendorName Vendor folder code.
     * @return string|null
     */
    protected static function getIconContentByClass(string $className, string $vendorName) : ?string
    {
    }
    /**
     * Tries to find any icons and save them assets to the block.
     * @param Block $block Bock instance.
     * @return void
     */
    protected static function saveAssets(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing icons in the block content.
     * @param Block $block Block instance.
     * @return void
     */
    public static function processing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing entire landing.
     * @param int $landingId Landing id.
     * @return void
     */
    public static function processingLanding(int $landingId) : void
    {
    }
    /**
     * Shows icons styles on the block output.
     * @param Block $block Block instance.
     * @return void
     */
    public static function view(\Bitrix\Landing\Block $block) : void
    {
    }
}