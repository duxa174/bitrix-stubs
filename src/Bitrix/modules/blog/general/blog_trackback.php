<?php

class CAllBlogTrackback
{
    /*************** ADD, UPDATE, DELETE *****************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    //*************** SELECT *********************/
    function GetByID($ID)
    {
    }
    //*************** SEND / RECEIVE PINGS *********************/
    function SendPing($postID, $arPingUrls = array())
    {
    }
    function GetPing($blogUrl, $postID, $arParams = array())
    {
    }
    function SendPingResponce($error = 0, $text = "")
    {
    }
}