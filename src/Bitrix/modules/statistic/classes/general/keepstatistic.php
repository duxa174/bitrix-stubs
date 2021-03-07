<?php

class CKeepStatistics
{
    static $HIT_ID = 0;
    public static function GetCuurentHitID()
    {
    }
    public static function CheckSkip()
    {
    }
    /////////////////////////////
    // Main statistics function
    /////////////////////////////
    public static function Keep($HANDLE_CALL = \false)
    {
    }
    public static function ReallyKeep()
    {
    }
    public static function RestoreSession()
    {
    }
    // обновляем счетчики сессий и новых посетителей у страны
    public static function UpdateCountry($COUNTRY_ID, $arFields, $DATE = \false, $DATE_FORMAT = "SHORT", $SIGN = "+")
    {
    }
    public static function UpdateCity($CITY_ID, $arFields, $DATE = \false, $DATE_FORMAT = "SHORT", $SIGN = "+")
    {
    }
    public static function SavePathData($SITE_ID, $CURRENT_PAGE, $ERROR_404)
    {
    }
    public static function SaveVisits($sql_site, $SESSION_NEW, $CURRENT_DIR, $CURRENT_PAGE, $ERROR_404)
    {
    }
    public static function GetRefererListID($PROT, $SN, $PAGE_FROM, $CURRENT_URI, $ERROR_404, $sql_site)
    {
    }
}