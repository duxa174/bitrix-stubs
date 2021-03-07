<?php

/**********************************************************************/
/************** FORUM TOPIC *******************************************/
/**********************************************************************/
class CAllForumTopic
{
    public static function CanUserViewTopic($TID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserAddTopic($FID, $arUserGroups, $iUserID = 0, $arForum = \false, $ExternalPermission = \false)
    {
    }
    public static function CanUserUpdateTopic($TID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserDeleteTopic($TID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserDeleteTopicMessage($TID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields, $skip_counts = \False)
    {
    }
    public static function MoveTopic2Forum($TID, $FID, $leaveLink = "N")
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetByID($ID, $arAddParams = array())
    {
    }
    public static function GetByIDEx($ID, $arAddParams = array())
    {
    }
    public static function GetNeighboringTopics($TID, $arUserGroups)
    {
    }
    public static function GetSelectFields($arAddParams = array(), $fields = array())
    {
    }
    public static function SetReadLabels($ID, $arUserGroups)
    {
    }
    public static function SetReadLabelsNew($ID, $update = \false, $LastVisit = \false, $arAddParams = array())
    {
    }
    public static function CleanUp($period = 168)
    {
    }
    //---------------> Topic utils
    public static function SetStat($ID = 0, $arParams = array())
    {
    }
    public static function OnBeforeIBlockElementDelete($ELEMENT_ID)
    {
    }
    public static function GetMessageCount($forumID, $topicID, $approved = \null)
    {
    }
}
class _CTopicDBResult extends \CDBResult
{
    private $sNameTemplate = '';
    private $noFilter = \false;
    private static $icons;
    function _CTopicDBResult($res, $params = array())
    {
    }
    protected static function getIcon($iconTyping)
    {
    }
    function Fetch()
    {
    }
}