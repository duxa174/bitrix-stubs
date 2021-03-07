<?php

namespace Bitrix\Landing\Assets\PreProcessing;

class Lazyload
{
    protected const MODULE_ID = 'landing';
    protected const IMG_PLACEHOLDER_SIZE_DEFAULT = 333;
    protected const BG_PLACEHOLDER_SIZE_DEFAULT = 10;
    protected $block;
    protected $content;
    protected $manifest;
    protected $dom;
    protected $skipDynamic = true;
    protected function __construct(\Bitrix\Landing\Block $block)
    {
    }
    /**
     * @param bool $flag
     */
    public function setSkipDynamic(bool $flag = true) : void
    {
    }
    protected function parse() : void
    {
    }
    protected function parseImgTag(\Bitrix\Main\Web\DOM\Element $node, string $selector) : void
    {
    }
    protected function parseBg(\Bitrix\Main\Web\DOM\Element $node, string $selector) : void
    {
    }
    protected function getPlaceholderSizeFromManifest(string $selector)
    {
    }
    /**
     * @param int $width
     * @param int $height
     * @return string path of placeholder
     */
    protected function createPlaceholderImage(int $width, int $height) : string
    {
    }
    /**
     * Parse style string and find image urls
     * @param $style
     * @return array|bool - false if find nothing
     */
    protected static function getSrcByBgStyle($style)
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
    public static function processingDynamic(\Bitrix\Landing\Block $block) : void
    {
    }
}