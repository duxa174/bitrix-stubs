<?php

class CAllSocNetUserPerms
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
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function GetByID($ID)
    {
    }
    /***************************************/
    /**********  COMMON METHODS  ***********/
    /***************************************/
    public static function GetOperationPerms($userID, $operation)
    {
    }
    public static function CanPerformOperation($fromUserID, $toUserID, $operation, $bCurrentUserIsAdmin = \false)
    {
    }
    public static function InitUserPerms($currentUserID, $userID, $bCurrentUserIsAdmin)
    {
    }
    public static function SetPerm($userID, $feature, $perm)
    {
    }
}