<?php

namespace Bitrix\Fileman\Block\Content;

interface IConverter
{
    /**
     * Check string.
     *
     * @param string $string String.
     * @return bool
     */
    public static function isValid($string);
    /**
     * Parse string to an array of content blocks
     *
     * @param string $string String.
     * @return BlockContent
     */
    public static function toArray($string);
}