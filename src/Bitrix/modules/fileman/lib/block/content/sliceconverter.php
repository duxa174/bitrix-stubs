<?php

namespace Bitrix\Fileman\Block\Content;

class SliceConverter implements \Bitrix\Fileman\Block\Content\IConverter
{
    const SLICE_SECTION_ID = 'BX_BLOCK_EDITOR_EDITABLE_SECTION';
    /**
     * Check string.
     *
     * @param string $string String.
     * @return bool
     */
    public static function isValid($string)
    {
    }
    /**
     * Parse string of sliced content to an array of content blocks.
     *
     * @param string $string String.
     * @return BlockContent
     */
    public static function toArray($string)
    {
    }
    /**
     * Convert block content to string.
     *
     * @param BlockContent $content Block content.
     * @return string
     */
    public static function toString(\Bitrix\Fileman\Block\Content\BlockContent $content)
    {
    }
    /**
     * Sanitize.
     *
     * @param string $string String.
     * @return string
     */
    public static function sanitize($string)
    {
    }
}