<?php

namespace Bitrix\Main\Text;

class GeoHash
{
    const MAX_LENGTH = 15;
    protected static $latitudeInterval = array(-90.0, 90.0);
    protected static $longitudeInterval = array(-180.0, 180.0);
    protected static $bits = array(16, 8, 4, 2, 1);
    protected static $base32Chars = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    public static function encode(array $coordinate, $length = self::MAX_LENGTH)
    {
    }
    public static function decode($geohash)
    {
    }
}