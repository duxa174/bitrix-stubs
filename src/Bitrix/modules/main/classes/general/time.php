<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class CTimeZone
{
    protected static $enabled = 1;
    protected static $useTimeZones = \false;
    public static function Possible()
    {
    }
    public static function Enabled()
    {
    }
    public static function OptionEnabled()
    {
    }
    public static function Disable()
    {
    }
    public static function Enable()
    {
    }
    private static function __tzsort($a, $b)
    {
    }
    public static function GetZones()
    {
    }
    public static function SetAutoCookie()
    {
    }
    public static function IsAutoTimeZone($autoTimeZone)
    {
    }
    public static function GetCookieValue()
    {
    }
    /**
     * Emulates timezone got from JS cookie setter like in SetAutoCookie.
     *
     * @param int $timezoneOffset Time zone offset
     */
    public static function SetCookieValue($timezoneOffset)
    {
    }
    /**
     * @param int|null $USER_ID If USER_ID is set offset is taken from DB
     * @param bool $forced If set, offset is calculated regardless enabling/disabling by functions Enable()/Disable().
     * @return int
     */
    public static function GetOffset($USER_ID = \null, $forced = \false)
    {
    }
}