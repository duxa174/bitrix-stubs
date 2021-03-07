<?php

class CAllForumMessage
{
    //---------------> Message add, update, delete
    public static function CanUserAddMessage($TID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserUpdateMessage($MID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserDeleteMessage($MID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CheckFields($ACTION, &$arFields, $ID = 0, $arParams = array())
    {
    }
    public static function Update($ID, $arFields, $skip_counts = \false, $strUploadDir = \false)
    {
    }
    public static function Reindex($ID, &$arMessage)
    {
    }
    public static function Delete($ID)
    {
    }
    //---------------> Message list
    public static function GetByID($ID, $arAddParams = array())
    {
    }
    public static function GetByIDEx($ID, $arAddParams = array())
    {
    }
    //---------------> Message utils
    public static function GetMessagePage($ID, $messagePerPage, $arUserGroups, $TID = 0, $addParams = [])
    {
    }
    public static function SendMailMessage($MID, $arFields = array(), $strLang = \false, $mailTemplate = \false)
    {
    }
    public static function GetFirstUnreadEx($FID, $TID, $arUserGroups)
    {
    }
    public static function GetFirstUnread($FID, $TID, $PERMISSION)
    {
    }
    public static function OnSocNetLogFormatEvent($arEvent, $arParams)
    {
    }
    /**
     * @param $arFilter - array("FORUM_ID" => 241, "TOPIC_ID" => 82383, "APPROVED" => "Y")
     * @param $rights - string(1) (A|R|U|W);
     */
    public static function setWebdavRights($arFilter, $rights)
    {
    }
    public static function GetMentionedUserID($strMessage)
    {
    }
}
class _CMessageDBResult extends \CDBResult
{
    var $sNameTemplate = '';
    function _CMessageDBResult($res, $params = array())
    {
    }
    function Fetch()
    {
    }
}
class CALLForumFiles
{
    public static function getByMessageID($ID)
    {
    }
    public static function CheckFields(&$arFields, &$arParams, $ACTION = "ADD", $extParams = array())
    {
    }
    public static function Add($arFileID, &$arParams, $bCheckFields = \false)
    {
    }
    public static function Save(&$arFields, $arParams, $bCheckFields = \true)
    {
    }
    public static function UpdateByID($ID, $arFields)
    {
    }
    public static function Delete($arFields = array(), $arParams = array())
    {
    }
    public static function OnFileDelete($arFile)
    {
    }
}