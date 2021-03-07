<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
class CAdminCalendar
{
    const PERIOD_EMPTY = "NOT_REF";
    const PERIOD_DAY = "day";
    const PERIOD_WEEK = "week";
    const PERIOD_MONTH = "month";
    const PERIOD_QUARTER = "quarter";
    const PERIOD_YEAR = "year";
    const PERIOD_EXACT = "exact";
    const PERIOD_BEFORE = "before";
    const PERIOD_AFTER = "after";
    const PERIOD_INTERVAL = "interval";
    private static function InitPeriodList($arPeriodParams = array())
    {
    }
    public static function ShowScript()
    {
    }
    public static function Calendar($sFieldName, $sFromName = "", $sToName = "", $bTime = \false)
    {
    }
    public static function CalendarDate($sFieldName, $sValue = "", $size = "10", $bTime = \false)
    {
    }
    /**
     * @param string $sFromName
     * @param string $sToName
     * @param string $sFromVal
     * @param string $sToVal
     * @param bool $bSelectShow
     * @param int $size
     * @param bool $bTime
     * @param bool|array $arPeriod
     * @param string $periodValue
     * @return string
     */
    public static function CalendarPeriodCustom($sFromName, $sToName, $sFromVal = "", $sToVal = "", $bSelectShow = \false, $size = 10, $bTime = \false, $arPeriod = \false, $periodValue = '')
    {
    }
    /**
     * @param string $sFromName
     * @param string $sToName
     * @param string $sFromVal
     * @param string $sToVal
     * @param bool $bSelectShow
     * @param int $size
     * @param bool $bTime
     * @return string
     */
    public static function CalendarPeriod($sFromName, $sToName, $sFromVal = "", $sToVal = "", $bSelectShow = \false, $size = 10, $bTime = \false)
    {
    }
    /**
     * @param $sFromName
     * @param $sToName
     * @param string $sFromVal
     * @param string $sToVal
     * @param bool $bSelectShow
     * @param int $size
     * @param bool $bTime
     * @param $arPeriod
     * @param string $periodValue
     * @return string
     */
    private static function GetPeriodHtml($sFromName, $sToName, $sFromVal = "", $sToVal = "", $bSelectShow = \false, $size = 10, $bTime = \false, $arPeriod, $periodValue = '')
    {
    }
}