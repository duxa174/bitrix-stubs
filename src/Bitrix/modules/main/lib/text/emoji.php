<?php

namespace Bitrix\Main\Text;

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2019 Bitrix
 */
class Emoji
{
    private static $emojiPattern = '%(?:
		\\xF0[\\x90-\\xBF][\\x80-\\xBF]{2} # planes 1-3
		| [\\xF1-\\xF3][\\x80-\\xBF]{3} # planes 4-15
		| \\xF4[\\x80-\\x8F][\\x80-\\xBF]{2} # plane 16
	)%xs';
    public static function encode($text)
    {
    }
    public static function decode($text)
    {
    }
    /**
     * @param string $text
     * @param callable $callback
     *
     * @return string|string[]|null
     */
    public static function replace($text, $callback)
    {
    }
    public static function getSaveModificator()
    {
    }
    public static function getFetchModificator()
    {
    }
}