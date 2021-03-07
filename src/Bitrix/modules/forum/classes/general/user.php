<?php

/**********************************************************************/
/************** FORUM USER ********************************************/
/**********************************************************************/
class CAllForumUser
{
    public static function IsAdmin($userId = \false, $arGroups = \false)
    {
    }
    public static function GetUserTopicVisits($forumID, $arTopic, $userID = \null)
    {
    }
    //---------------> User insert, update, delete
    public static function IsLocked($USER_ID)
    {
    }
    public static function CanUserAddUser($arUserGroups)
    {
    }
    public static function CanUserUpdateUser($ID, $arUserGroups, $CurrentUserID = 0)
    {
    }
    public static function CanUserDeleteUser($ID, $arUserGroups)
    {
    }
    public static function CheckFields($ACTION, &$arFields, $ID = \false)
    {
    }
    public static function Add($fields, $strUploadDir = \false)
    {
    }
    public static function Update($ID, $arFields, $strUploadDir = \false, $UpdateByUserId = \false)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function CountUsers($bActive = \False, $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetByLogin($Name)
    {
    }
    public static function GetByIDEx($ID, $arAddParams = array())
    {
    }
    public static function GetByUSER_ID($USER_ID)
    {
    }
    public static function GetByUSER_IDEx($USER_ID, $arAddParams = array())
    {
    }
    public static function GetUserRank($USER_ID, $strLang = \false)
    {
    }
    //---------------> User visited
    public static function SetUserForumLastVisit($USER_ID, $FORUM_ID = 0, $LAST_VISIT = \false)
    {
    }
    public static function GetListUserForumLastVisit($arOrder = array("LAST_VISIT" => "DESC"), $arFilter = array())
    {
    }
    //---------------> User visited
    //---------------> User utils/
    /**
     * Returns formatted user name
     * @param integer $userID
     * @param string $template
     * @param array $arUser - array with user data
     * @return string
     */
    public static function GetFormattedNameByUserID($userID, $template = "", $arUser = array())
    {
    }
    public static function GetUserPoints($USER_ID, $arAddParams = array())
    {
    }
    public static function CountUserPoints($USER_ID = 0, $iCnt = \false)
    {
    }
    public static function SetStat($USER_ID = 0, $arParams = array())
    {
    }
    //---------------> User actions
    public static function OnUserDelete($user_id)
    {
    }
    // >-- Using for private message
    public static function SearchUser($template)
    {
    }
    public static function UserAddInfo($arOrder = array(), $arFilter = array(), $mode = \false, $iNum = 0, $check_permission = \true, $arNavigation = array())
    {
    }
    // <-- Using for private message
    public static function OnSocNetGroupDelete($group_id)
    {
    }
    public static function OnAfterUserUpdate($arFields = array())
    {
    }
}
/**********************************************************************/
/************** SUBSCRIBE *********************************************/
/**********************************************************************/
class CAllForumSubscribe
{
    //---------------> User insert, update, delete
    public static function CanUserAddSubscribe($FID, $arUserGroups)
    {
    }
    public static function CanUserUpdateSubscribe($ID, $arUserGroups, $CurrentUserID = 0)
    {
    }
    public static function CanUserDeleteSubscribe($ID, $arUserGroups, $CurrentUserID = 0)
    {
    }
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function DeleteUSERSubscribe($USER_ID)
    {
    }
    public static function UpdateLastSend($MID, $sIDs)
    {
    }
    public static function GetList($arOrder = array("ID" => "ASC"), $arFilter = array(), $arAddParams = array())
    {
    }
    public static function GetListEx($arOrder = array("ID" => "ASC"), $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
}
/**********************************************************************/
/************** RANK **************************************************/
/**********************************************************************/
class CAllForumRank
{
    //---------------> User insert, update, delete
    public static function CanUserAddRank($arUserGroups)
    {
    }
    public static function CanUserUpdateRank($ID, $arUserGroups)
    {
    }
    public static function CanUserDeleteRank($ID, $arUserGroups)
    {
    }
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    // Tekuwie statusy posetitelej srazu ne pereschityvayutsya. Tol'ko postepenno v processe raboty.
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetList($arOrder = array("MIN_NUM_POSTS" => "ASC"), $arFilter = array())
    {
    }
    public static function GetListEx($arOrder = array("MIN_NUM_POSTS" => "ASC"), $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetByIDEx($ID, $strLang)
    {
    }
    public static function GetLangByID($RANK_ID, $strLang)
    {
    }
}
class CALLForumStat
{
    /**
     * @param array $arFields
     * @return bool
     * @deprecated
     * @see CALLForumStat::RegisterUSER()
     */
    public static function RegisterUSER_OLD($arFields = array())
    {
    }
    public static function RegisterUSER($arFields = array())
    {
    }
    public static function Add($arFields)
    {
    }
    public static function GetListEx($arOrder = array("ID" => "ASC"), $arFilter = array())
    {
    }
    public static function CleanUp($period = 48)
    {
    }
}