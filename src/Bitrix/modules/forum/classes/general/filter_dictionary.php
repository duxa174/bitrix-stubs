<?php

class CAllFilterDictionary
{
    function CheckFields($arFields = array(), $ACTION = "ADD")
    {
    }
    function Add($arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function Delete($ID)
    {
    }
    function GetFilterOperation($key)
    {
    }
}
class CAllFilterLetter
{
    function CheckFields($arFields = array())
    {
    }
    function Add($arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function Delete($ID)
    {
    }
    function GetByID($ID)
    {
    }
}
class CAllFilterUnquotableWords
{
    function CheckPattern($sPattern, &$sError)
    {
    }
    function CheckFields($action = "INSERT", $ID = \false, $arFields = array())
    {
    }
    function Add($arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function Delete($ID)
    {
    }
    function GetById($ID)
    {
    }
    function GetFilterOperation($key)
    {
    }
    function GenPattern($ID = \false, $DICTIONARY_ID_T = 0)
    {
    }
    function GenPatternAll($DICTIONARY_ID_W = 0, $DICTIONARY_ID_T = 0)
    {
    }
    function CreatePattern($pattern = "", $DICTIONARY_ID = 0)
    {
    }
    function FilterPerm()
    {
    }
    function Filter($message)
    {
    }
}