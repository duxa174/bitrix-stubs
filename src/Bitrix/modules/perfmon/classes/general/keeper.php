<?php

class CPerfomanceKeeper
{
    public static function OnPageStart()
    {
    }
    function setDebugModeOn()
    {
    }
    function restoreDebugMode()
    {
    }
    public static function OnEpilog()
    {
    }
    public static function OnBeforeAfterEpilog()
    {
    }
    public static function OnAfterAfterEpilog()
    {
    }
    function writeToDatabase()
    {
    }
    public static function SetPageTimes($START_EXEC_CURRENT_TIME, &$arFields)
    {
    }
    function removeQueries(&$arQueryDebug, &$arIncludeDebug, $slow_sql_time, $preserveComponents = \false)
    {
    }
    function countQueries(&$query_count, &$query_time, $arQueryDebug, $arIncludeDebug)
    {
    }
    function countComponents(&$comps_count, &$comps_time, $arIncludeDebug)
    {
    }
    function removeCaches($large_cache_size, &$arCacheDebug, &$arIncludeDebug)
    {
    }
    function countCache($arCacheDebug, &$cache_count)
    {
    }
    function findCaller($trace, &$module_id, &$comp_id)
    {
    }
    function saveQueries($HIT_ID, $COMP_ID, $arQueryDebug, &$NN)
    {
    }
    function saveCaches($HIT_ID, $COMP_ID, $arCacheDebug, &$NN)
    {
    }
    public static function IsActive()
    {
    }
    public static function SetActive($bActive = \false, $end_time = 0)
    {
    }
}
function perfmonErrorHandler($errno, $errstr, $errfile, $errline)
{
}