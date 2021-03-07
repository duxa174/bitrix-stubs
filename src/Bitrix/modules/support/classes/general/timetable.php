<?php

class CSupportTimetable
{
    static $fieldsTypes = array("ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0, "AUTO_CALCULATED" => \true), "NAME" => array("TYPE" => \CSupportTableFields::VT_STRING, "DEF_VAL" => "", "MAX_STR_LEN" => 255), "DESCRIPTION" => array("TYPE" => \CSupportTableFields::VT_STRING, "DEF_VAL" => "", "MAX_STR_LEN" => 2000));
    static $fieldsTypesShedule = array("ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0, "AUTO_CALCULATED" => \true), "SLA_ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0), "TIMETABLE_ID" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => \null), "WEEKDAY_NUMBER" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => 0), "OPEN_TIME" => array("TYPE" => \CSupportTableFields::VT_STRING, "DEF_VAL" => "24H", "LIST" => array("24H", "CLOSED", "CUSTOM")), "MINUTE_FROM" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => \null), "MINUTE_TILL" => array("TYPE" => \CSupportTableFields::VT_NUMBER, "DEF_VAL" => \null));
    const TABLE = "b_ticket_timetable";
    const TABLE_SHEDULE = "b_ticket_sla_shedule";
    static function err_mess()
    {
    }
    function Set($arFields, $arFieldsShedule)
    {
    }
    // get Timetable list
    function GetList($arSort = \null, $arFilter = \null)
    {
    }
    function GetSheduleByID($id, $needObj = \false)
    {
    }
    // delete Timetable
    function Delete($id, $checkRights = \true)
    {
    }
}