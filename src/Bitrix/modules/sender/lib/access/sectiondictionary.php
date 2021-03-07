<?php

namespace Bitrix\Sender\Access;

class SectionDictionary
{
    const MAILING = 1;
    const ADS = 2;
    const SEGMENT = 3;
    const RC = 4;
    const TEMPLATE = 5;
    const BLACKLIST = 6;
    const START = 7;
    const SETTINGS = 8;
    public static function getMap()
    {
    }
    public static function getAdsAccessMap()
    {
    }
    public static function getLegacyMap()
    {
    }
    protected static function getClassName()
    {
    }
    public static function getList() : array
    {
    }
    public static function getTitle(int $value)
    {
    }
}