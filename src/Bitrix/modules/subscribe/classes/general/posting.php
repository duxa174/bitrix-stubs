<?php

class CPostingGeneral
{
    var $LAST_ERROR = "";
    //email count for one hit
    static $current_emails_per_hit = 0;
    //get by ID
    public static function GetByID($ID)
    {
    }
    //list of categories linked with message
    public static function GetRubricList($ID)
    {
    }
    //list of user group linked with message
    public static function GetGroupList($ID)
    {
    }
    // delete by ID
    public static function Delete($ID)
    {
    }
    public static function OnGroupDelete($group_id)
    {
    }
    public static function DeleteFile($ID, $file_id = \false)
    {
    }
    public static function SplitFileName($file_name)
    {
    }
    function SaveFile($ID, $file)
    {
    }
    public static function GetFileList($ID, $file_id = \false)
    {
    }
    //check fields before writing
    function CheckFields($arFields, $ID)
    {
    }
    //relation with categories
    function UpdateRubrics($ID, $aRubric)
    {
    }
    //relation with user groups
    function UpdateGroups($ID, $aGroup)
    {
    }
    //Addition
    function Add($arFields)
    {
    }
    //Update
    function Update($ID, $arFields)
    {
    }
    function GetEmails($post_arr)
    {
    }
    public static function AutoSend($ID = \false, $limit = \false, $site_id = \false)
    {
    }
    //Send message
    function SendMessage($ID, $timeout = 0, $maxcount = 0, $check_charset = \false)
    {
    }
    public static function GetEmailStatuses($ID)
    {
    }
    public static function GetEmailsByStatus($ID, $STATUS)
    {
    }
    function ChangeStatus($ID, $status)
    {
    }
}
class CMailTools
{
    var $aMatches = array();
    var $pcre_backtrack_limit = \false;
    var $server_name = \null;
    var $maxFileSize = 0;
    public static function IsEightBit($str)
    {
    }
    public static function EncodeMimeString($text, $charset)
    {
    }
    public static function EncodeSubject($text, $charset)
    {
    }
    public static function EncodeHeaderFrom($text, $charset)
    {
    }
    function __replace_img($matches)
    {
    }
    function ReplaceHrefs($text)
    {
    }
    function ReplaceImages($text)
    {
    }
    public static function ImageTypeToMimeType($type)
    {
    }
}