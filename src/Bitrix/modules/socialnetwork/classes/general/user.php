<?php

class CAllSocNetUser
{
    public static function OnUserDelete($ID)
    {
    }
    public static function OnBeforeUserUpdate(&$arFields)
    {
    }
    public static function OnAfterUserAdd(&$arFields)
    {
    }
    public static function OnAfterUserLogout(&$arParams)
    {
    }
    public static function OnAfterUserUpdate(&$arFields)
    {
    }
    public static function OnBeforeProlog()
    {
    }
    public static function OnUserInitialize($user_id, $arFields = array())
    {
    }
    public static function IsOnLine($userID)
    {
    }
    public static function IsFriendsAllowed()
    {
    }
    public static function IsFriendsFriendsAllowed()
    {
    }
    public static function IsCurrentUserModuleAdmin($site_id = \SITE_ID, $bUseSession = \true)
    {
    }
    public static function IsUserModuleAdmin($userID, $site_id = \SITE_ID)
    {
    }
    public static function DeleteUserAdminCache()
    {
    }
    public static function FormatName($name, $lastName, $login)
    {
    }
    public static function FormatNameEx($name, $secondName, $lastName, $login, $email, $id)
    {
    }
    public static function SearchUser($user, $bIntranet = \false)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetFields($bAdditional = \false)
    {
    }
    public static function GetFieldsMap($bAdditional = \false)
    {
    }
    public static function CanProfileView($currentUserId, $arUser, $siteId = \SITE_ID, $arContext = array())
    {
    }
    public static function OnGetProfileView($currentUserId, $arUser, $siteId, $arContext)
    {
    }
    public static function CheckContext($currentUserId = \false, $userId = \false, $arContext = array())
    {
    }
}