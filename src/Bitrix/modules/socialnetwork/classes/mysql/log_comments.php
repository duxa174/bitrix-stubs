<?php

class CSocNetLogComments extends \CAllSocNetLogComments
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function Add($arFields, $bSetSource = \false, $bSendEvent = \true, $bSetLogUpDate = \true)
    {
    }
    public static function Update($ID, $arFields, $bSetSource = \false)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array(), $arParams = array())
    {
    }
    function OnBlogDelete($blog_id)
    {
    }
}