<?php

class CSupportTimetableCache
{
    static $cache = array("ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0, "AUTO_CALCULATED" => \true), "SLA_ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0), "DATE_FROM" => array("TYPE" => \CSupportTableFields::VT_DATE_TIME, "DEF_VAL" => \null), "DATE_TILL" => array("TYPE" => \CSupportTableFields::VT_DATE_TIME, "DEF_VAL" => \null), "W_TIME" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0), "W_TIME_INC" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0));
    const TIMETABLE_CACHE = "b_ticket_timetable_cache";
    const SLA = " b_ticket_sla";
    const SLA_SHEDULE = "b_ticket_sla_shedule";
    const TICKET_HOLIDAYS = "b_ticket_holidays";
    const SLA_2_HOLIDAYS = "b_ticket_sla_2_holidays";
    static $arrH = \null;
    static $arrS = \null;
    static $timeZone = \null;
    static $timeZoneOffset = \null;
    static $MaxSlaResponseTime = \null;
    public static function Possible($d = "")
    {
    }
    static function GetTimeZone()
    {
    }
    static function GetTimeZoneOffset()
    {
    }
    static function TimeStampInCurrTimeZone($d, $fromUserTZ = \false)
    {
    }
    static function err_mess()
    {
    }
    static function GetMaxSlaResponseTime()
    {
    }
    static function GetNumberOfDaysForward()
    {
    }
    static function GetNumberOfDaysBackward()
    {
    }
    static function GetDayBegin($d)
    {
    }
    static function GetDayEnd($d)
    {
    }
    static function GetDayNom($d)
    {
    }
    static function GetHolidays($dateB, $dateE, $arrS, $arFilter)
    {
    }
    function SortMethodH($a, $b)
    {
    }
    static function MergeIntervalsH($arr, $arrS)
    {
    }
    static function InsertDefaultValues()
    {
    }
    static function GetShedule($arFilter)
    {
    }
    static function MergeIntervals($arr)
    {
    }
    static function TimeToStr($t)
    {
    }
    static function ToCache($arFilter = array(), $RSD = \true, $arFromGetEndDate = \null)
    {
    }
    function UpdateDiscardedTickets()
    {
    }
    //$dateFrom - время сервера с часовым поясом из настроек текущего пользователя
    static function getEndDate($sla, $periodMin0, $dateFrom, $secondTry = \false)
    {
    }
    function StartAgent()
    {
    }
}