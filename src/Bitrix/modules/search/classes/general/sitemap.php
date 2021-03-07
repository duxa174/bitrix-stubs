<?php

class CAllSiteMap extends \CDBResult
{
    var $m_href = "";
    //URL for result
    var $m_error = "";
    //Error message
    var $m_events = array();
    //Events cache
    var $m_errors_count = 0;
    //Number of wrong URLs
    var $m_errors_href = "";
    //URL for errors file
    function Create($site_id, $max_execution_time, $NS, $arOptions = array())
    {
    }
    function Fetch()
    {
    }
    function URLEncode($str, $charset)
    {
    }
    function LocationEncode($str)
    {
    }
    function TimeEncode($iTime)
    {
    }
    function GetURLs($site_id, $ID, $limit = 0)
    {
    }
}