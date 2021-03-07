<?php

/*
if(!defined('LOG_FILENAME')) define('LOG_FILENAME', $_SERVER["DOCUMENT_ROOT"]."/debug.trc");
if(CModule::IncludeModule('perfmon')) AddMessage2Log(CPerfomanceSQL::_console_explain($strSql));
*/
class CPerfomanceSQL extends \CAllPerfomanceSQL
{
    public static function _console_explain($strSQL)
    {
    }
    public static function Clear()
    {
    }
}