<?php

class CAllSocNetFeatures
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function DeleteNoDemand($userID)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function SetFeature($type, $id, $feature, $active, $featureName = \false)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function GetByID($ID)
    {
    }
    /***************************************/
    /**********  COMMON METHODS  ***********/
    /***************************************/
    public static function IsActiveFeature($type, $id, $feature)
    {
    }
    private static function getActiveFeaturesList($type, $id)
    {
    }
    public static function GetActiveFeatures($type, $id)
    {
    }
    public static function getActiveFeaturesNames($type, $id)
    {
    }
}