<?php

namespace Bitrix\Main\ORM\Query\Filter;

/**
 * Filter helper for specific values preparation.
 *
 * @package    bitrix
 * @subpackage main
 */
class Helper
{
    const FT_MIN_TOKEN_SIZE = 3;
    /**
     * Places + and * for each word in a phrase.
     *
     * @param string $phrase
     * @param string $wildcard '*' or '' actually
     * @param int|null    $minTokenSize
     *
     * @return string
     */
    public static function matchAgainstWildcard($phrase, $wildcard = '*', $minTokenSize = null)
    {
    }
    /**
     * @return int
     */
    public static function getMinTokenSize()
    {
    }
    /**
     * Splits a string to words by any non-word symbols.
     * @param $string
     * @return array
     */
    public static function splitWords($string)
    {
    }
}