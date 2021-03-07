<?php

class CBlogPost extends \CAllBlogPost
{
    /*************** ADD, UPDATE, DELETE *****************/
    function Add($arFields)
    {
    }
    public static function Update($ID, $arFields, $bSearchIndex = \true)
    {
    }
    //*************** SELECT *********************/
    public static function GetByID($ID)
    {
    }
    function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    function GetListCalendar($blogID, $year = \false, $month = \false, $day = \false)
    {
    }
}