<?php

class MPLSimpleHTMLParser
{
    var $data;
    var $parse_search_needle = '/([^\\[]*)(?:\\[(.*)\\])*/i';
    var $parse_tag = '/((\\<\\s*(\\/)?\\s*([a-z]+).*?(?:(\\/)\\>|\\>))[^<]*)/ism';
    var $parse_beginning_spaces = '/^([\\s]*)/m';
    var $replace_tag_begin = '/^\\s*\\w+\\s*/';
    var $parse_params = '/([a-z]+)\\s*=\\s*(?:([^\\s]*)|(?:[\'"]([^\'"])[\'"]))/im';
    var $lastError = '';
    function __construct($data)
    {
    }
    function findTagStart($needle)
    {
    }
    function skipTags($tmp)
    {
    }
    function setError($msg)
    {
    }
    function findTagEnd($startIndex)
    {
    }
    function getTagHTML($search)
    {
    }
    function getInnerHTML($startLabel, $endLabel, $multiple = \false)
    {
    }
}
function __MPLParseRecordsHTML(&$response, &$arParams, &$arResult)
{
}