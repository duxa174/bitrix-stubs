<?php

class CAllSocNetFeaturesPerms
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
    public static function Update($ID, $arFields)
    {
    }
    public static function SetPerm($featureID, $operation, $perm)
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
    public static function CurrentUserCanPerformOperation($type, $id, $feature, $operation, $site_id = \SITE_ID)
    {
    }
    public static function CanPerformOperation($userID, $type, $id, $feature, $operation, $bCurrentUserIsAdmin = \false)
    {
    }
    public static function GetOperationPerm($type, $id, $feature, $operation)
    {
    }
}