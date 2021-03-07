<?php

class CSocNetFeaturesPerms extends \CAllSocNetFeaturesPerms
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    public static function Add($arFields)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    function GetAvaibleEntity($entityType, $feature, $role, $operation, $active, $visible, $siteID)
    {
    }
}