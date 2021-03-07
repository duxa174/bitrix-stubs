<?php

/**********************************************************************/
/************** POINTS ************************************************/
/**********************************************************************/
class CAllForumPoints
{
    //---------------> Points insert, update, delete
    function CanUserAddPoints($arUserGroups)
    {
    }
    function CanUserUpdatePoints($ID, $arUserGroups)
    {
    }
    function CanUserDeletePoints($ID, $arUserGroups)
    {
    }
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function Delete($ID)
    {
    }
    function GetList($arOrder = array("MIN_POINTS" => "ASC"), $arFilter = array())
    {
    }
    function GetListEx($arOrder = array("MIN_POINTS" => "ASC"), $arFilter = array())
    {
    }
    function GetByID($ID)
    {
    }
    function GetByIDEx($ID, $strLang)
    {
    }
    function GetLangByID($POINTS_ID, $strLang)
    {
    }
}
/**********************************************************************/
/************** POINTS2POST *******************************************/
/**********************************************************************/
class CAllForumPoints2Post
{
    //---------------> Insert, update, delete
    function CanUserAddPoints2Post($arUserGroups)
    {
    }
    function CanUserUpdatePoints2Post($ID, $arUserGroups)
    {
    }
    function CanUserDeletePoints2Post($ID, $arUserGroups)
    {
    }
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    // User points is not recount.
    function Update($ID, $arFields)
    {
    }
    // User points is not recount.
    function Delete($ID)
    {
    }
    function GetList($arOrder = array("MIN_NUM_POSTS" => "ASC"), $arFilter = array())
    {
    }
    function GetByID($ID)
    {
    }
}
/**********************************************************************/
/************** FORUM USER POINTS *************************************/
/**********************************************************************/
class CAllForumUserPoints
{
    //---------------> Insert, update, delete
    function CanUserAddUserPoints($iUserID)
    {
    }
    function CanUserUpdateUserPoints($iUserID)
    {
    }
    function CanUserDeleteUserPoints($iUserID)
    {
    }
    function CheckFields($ACTION, &$arFields)
    {
    }
    function Update($FROM_USER_ID, $TO_USER_ID, $arFields)
    {
    }
    function Delete($FROM_USER_ID, $TO_USER_ID)
    {
    }
    function GetList($arOrder = array("TO_USER_ID" => "ASC"), $arFilter = array())
    {
    }
    function GetByID($FROM_USER_ID, $TO_USER_ID)
    {
    }
    function CountSumPoints($TO_USER_ID)
    {
    }
}