<?php

class CSeoPageChecker
{
    var $__site;
    var $__url;
    var $__lang;
    var $__server_name;
    var $__bCheckErrors = \true;
    var $__getter;
    var $__result_headers;
    var $__result_data;
    var $__result_extended = array();
    var $__result_meta = array('KEYWORDS' => '', 'DESCRIPTION' => '');
    var $__result_errors = array();
    var $__index;
    var $__index_total_len;
    var $pcre_backtrack_limit = \false;
    var $__qualifier_links_count = 100;
    var $bError = \false;
    var $errorString = '';
    var $bSearch = \false;
    function CSeoPageChecker($site, $url, $get = \true, $check_errors = \true)
    {
    }
    function GetHTTPData()
    {
    }
    function __prepareText($text)
    {
    }
    function _PrepareData()
    {
    }
    function _GetContrast($word)
    {
    }
    function GetStatistics()
    {
    }
    function GetURL()
    {
    }
    function CheckKeyword($keyword, $bStemmed = \false)
    {
    }
    function GetExtendedData()
    {
    }
    function GetErrors()
    {
    }
    function IsOuterUrl($url)
    {
    }
}