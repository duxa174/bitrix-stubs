<?php

class CSupportHolidays
{
    static $holidays = array("ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0, "AUTO_CALCULATED" => \true), "NAME" => array("TYPE" => \CSupportTableFields::VT_STRING, "DEF_VAL" => "", "MAX_STR_LEN" => 255), "DESCRIPTION" => array("TYPE" => \CSupportTableFields::VT_STRING, "DEF_VAL" => "", "MAX_STR_LEN" => 2000), "OPEN_TIME" => array("TYPE" => \CSupportTableFields::VT_STRING, "DEF_VAL" => "HOLIDAY", "LIST" => array("HOLIDAY_H", "HOLIDAY", "WORKDAY_H", "WORKDAY_0", "WORKDAY_1", "WORKDAY_2", "WORKDAY_3", "WORKDAY_4", "WORKDAY_5", "WORKDAY_6")), "DATE_FROM" => array("TYPE" => \CSupportTableFields::VT_DATE_TIME, "DEF_VAL" => \null), "DATE_TILL" => array("TYPE" => \CSupportTableFields::VT_DATE_TIME, "DEF_VAL" => \null));
    static $sla2holidays = array("SLA_ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0), "HOLIDAYS_ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0));
    const table = "b_ticket_holidays";
    const table_s2h = "b_ticket_sla_2_holidays";
    const table_sla = "b_ticket_sla";
    static function err_mess()
    {
    }
    function Set($arFields, $arFieldsSLA)
    {
    }
    // get Holidays list
    function GetList($arSort, $arFilter)
    {
    }
    // get Holidays list
    function GetSLAByID($id, $needObj = \false)
    {
    }
    function GetOpenTimeArray()
    {
    }
    function GetOpenTimeT($v)
    {
    }
    // delete Holiday
    function Delete($id, $checkRights = \true)
    {
    }
}