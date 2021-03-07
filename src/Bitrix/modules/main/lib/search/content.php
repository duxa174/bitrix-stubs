<?php

namespace Bitrix\Main\Search;

class Content
{
    const TYPE_STRING = 1;
    const TYPE_INTEGER = 2;
    const TYPE_MIXED = 3;
    /**
     * Applies ROT13 transform to string search token, in order to bypass default mysql search blacklist.
     * @param string $token Search token.
     * @return string
     */
    public static function prepareStringToken($token)
    {
    }
    /**
     * Method adds zeros to integer search token, in order to bypass current mysql minimum of token size.
     * @param integer $token Search token.
     * @return string
     */
    public static function prepareIntegerToken($token)
    {
    }
    /**
     * Method checks whether token is a number.
     * @param integer $token Search token.
     * @return bool
     */
    public static function isIntegerToken($token)
    {
    }
    /**
     * Method check whether you can use the full-text search.
     * @param integer|string $token Search token.
     * @param integer $type Type of content.
     * @return bool
     */
    public static function canUseFulltextSearch($token, $type = self::TYPE_STRING)
    {
    }
}