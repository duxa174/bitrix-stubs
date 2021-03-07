<?php

class CAllSearchTitle extends \CDBResult
{
    var $_arPhrase = array();
    var $_arStemFunc;
    var $minLength = 1;
    function __construct()
    {
    }
    function Search($phrase = "", $nTopCount = 5, $arParams = array(), $bNotFilter = \false, $order = "")
    {
    }
    function getRankFunction($phrase)
    {
    }
    function setMinWordLength($minLength)
    {
    }
    function Fetch()
    {
    }
    public static function MakeFilterUrl($prefix, $arFilter)
    {
    }
    function searchTitle($phrase = "", $nTopCount = 5, $arParams = array(), $bNotFilter = \false, $order = "")
    {
    }
}