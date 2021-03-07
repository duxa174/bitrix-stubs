<?php

class CSocNetLogTools
{
    public static function FindFeatureByEventID($event_id)
    {
    }
    public static function FindLogEventByID($event_id, $entity_type = \false)
    {
    }
    public static function FindLogCommentEventByID($event_id)
    {
    }
    public static function FindLogCommentEventByLogEventID($log_event_id)
    {
    }
    public static function FindLogEventByCommentID($event_id)
    {
    }
    public static function FindFullSetByEventID($event_id)
    {
    }
    public static function FindFullSetEventIDByEventID($event_id)
    {
    }
    public static function ShowGroup($arEntityDesc, $strEntityURL, $arParams)
    {
    }
    public static function ShowUser($arEntityDesc, $strEntityURL, $arParams)
    {
    }
    public static function HasLogEventCreatedBy($event_id)
    {
    }
    public static function FormatEvent_FillTooltip($arFields, $arParams)
    {
    }
    public static function FormatEvent_CreateAvatar($arFields, $arParams, $source = "CREATED_BY_", $site_id = \SITE_ID)
    {
    }
    public static function FormatEvent_CreateAvatarGroup($arFields, $arParams)
    {
    }
    public static function FormatEvent_IsMessageShort($message, $short_message = \false)
    {
    }
    public static function FormatEvent_GetCreatedBy($arFields, $arParams, $bMail, $bFirstCaps = \false)
    {
    }
    public static function FormatEvent_GetEntity($arFields, $arParams, $bMail)
    {
    }
    public static function FormatEvent_GetURL($arFields, $bAbsolute = \false)
    {
    }
    public static function FormatEvent_Blog($arFields, $arParams, $bMail = \false)
    {
    }
    public static function FormatComment_Blog($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    public static function FormatEvent_Microblog($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatComment_Microblog($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    public static function FormatEvent_Forum($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatComment_Forum($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    public static function FormatEvent_Photo($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_PhotoPhoto($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatComment_Photo($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    function FormatComment_PhotoAlbum($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    public static function FormatEvent_Files($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatComment_Files($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    public static function FormatEvent_Task($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_Task2($arFields, $arParams)
    {
    }
    public static function FormatEvent_SystemGroups($arFields, $arParams, $bMail = \false)
    {
    }
    public static function FormatEvent_SystemFriends($arFields, $arParams, $bMail = \false)
    {
    }
    public static function FormatEvent_System($arFields, $arParams, $bMail = \false)
    {
    }
    public static function SetCacheLastLogID($type = "log", $id)
    {
    }
    public static function GetCacheLastLogID($type = "log")
    {
    }
    public static function SetUserCache($type = "log", $user_id, $max_id, $max_viewed_id, $count, $bSetViewTime = \false, $LastViewTS = 0)
    {
    }
    public static function GetUserCache($type = "log", $user_id)
    {
    }
    function AddComment_Forum($arFields)
    {
    }
    public static function UpdateComment_Forum($arFields)
    {
    }
    public static function DeleteComment_Forum($arFields)
    {
    }
    function AddComment_Blog($arFields)
    {
    }
    function AddComment_Microblog($arFields)
    {
    }
    function AddComment_Files($arFields)
    {
    }
    public static function AddComment_Review_CheckIBlock($arElement)
    {
    }
    public static function AddComment_Review_CheckIBlock_Forum($arElement)
    {
    }
    public static function AddComment_Review_CheckIBlock_Blog($arElement)
    {
    }
    public static function AddComment_Review_CreateRoot($arElement, $forumID, $bPostFirstMessage = \false, $strFirstMessage = "")
    {
    }
    public static function AddComment_Review_CreateRoot_Forum($arElement, $forumID, $bPostFirstMessage = \false, $strFirstMessage = "")
    {
    }
    public static function AddComment_Review_CreateRoot_Blog($arElement, $blogID)
    {
    }
    public static function AddComment_Review_UpdateElement($arElement, $topicID, $bNewTopic)
    {
    }
    public static function AddComment_Review_UpdateElement_Forum($arElement, $topicID, $bNewTopic)
    {
    }
    public static function AddComment_Review_UpdateElement_Blog($arElement, $postID, $blogID, $bNewPost)
    {
    }
    function OnAfterPhotoUpload($arFields, $arComponentParams, $arComponentResult)
    {
    }
    function OnAfterPhotoDrop($arFields, $arComponentParams)
    {
    }
    function OnBeforeSectionDrop($sectionID, $arComponentParams, $arComponentResult, &$arSectionID, &$arElementID)
    {
    }
    function OnAfterSectionDrop($ID, $arFields, $arComponentParams, $arComponentResult)
    {
    }
    function OnAfterSectionEdit($arFields, $arComponentParams, $arComponentResult)
    {
    }
    public static function FormatDestinationFromRights($arRights, $arParams, &$iMoreCount = \false)
    {
    }
    function GetDestinationFromRights($arRights, $arParams)
    {
    }
    public static function ProcessPath($arUrl, $user_id, $explicit_site_id = \false)
    {
    }
    public static function GetSiteData()
    {
    }
    function ShowSourceType($source_type = \false, $bMobile = \false)
    {
    }
    public static function GetDataFromRatingEntity($rating_entity_type_id, $rating_entity_id, $bCheckRights = \true)
    {
    }
    function AddComment_Photo($arFields)
    {
    }
    function AddComment_Photo_Forum($arFields, $FORUM_ID, $arLog)
    {
    }
    function AddComment_Photo_Blog($arFields, $BLOG_ID, $arLog)
    {
    }
    function logUFfileShow($arResult, $arParams)
    {
    }
    public static function SetUFRights($files, $rights)
    {
    }
    public static function GetAvailableGroups($isExtranetUser = \false, $isExtranetSite = \false)
    {
    }
    public static function GetForumCommentMetaData($logEventId)
    {
    }
    ///////////////////////////////
    // working with task comments
    ///////////////////////////////
    function AddComment_Tasks($arFields)
    {
    }
    public static function GetCommentUrl_Task($arFields)
    {
    }
    public static function UpdateComment_Task($arFields)
    {
    }
    function DeleteComment_Task($arFields)
    {
    }
    function CanEditComment_Task($arParams)
    {
    }
    function CanEditOwnComment_Task($arParams)
    {
    }
}
class logTextParser extends \CTextParser
{
    var $matchNum = 0;
    var $matchNum2 = 0;
    function sonet_sortlen($a, $b)
    {
    }
    function logTextParser($strLang = \False, $pathToSmile = \false)
    {
    }
    function convert($text, $arImages = array(), $allow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N", "VIDEO" => "Y", "TABLE" => "Y", "CUT_ANCHOR" => "N", "SHORT_ANCHOR" => "N"), $arParams = array())
    {
    }
    function convert_anchor_tag($url, $text, $pref = "")
    {
    }
    function convert_image_tag($url = "", $params = "")
    {
    }
    function pre_convert_code_tag($text = "")
    {
    }
    function convert_code_tag($text = "")
    {
    }
    function convert_quote_tag($text = "")
    {
    }
    function convert_font_attr($attr, $value = "", $text = "")
    {
    }
    function convert_video($params)
    {
    }
}
class CSocNetLogComponent
{
    private $arItems = \null;
    public function __construct($params)
    {
    }
    public function OnBeforeSonetLogFilterFill(&$arPageParamsToClear, &$arItemsTop, &$arItems)
    {
    }
    public static function ConvertPresetToFilters($arPreset, $arParams = array())
    {
    }
    public static function OnSonetLogFilterProcess($preset_filter_top_id, $preset_filter_id, $arResultPresetFiltersTop, $arResultPresetFilters)
    {
    }
    public static function GetSiteByDepartmentId($arDepartmentId)
    {
    }
    public static function saveRawFilesToUF($arAttachedFilesRaw, $ufCode, &$arFields)
    {
    }
    public static function saveFileToUF($arFile = array(), &$type, $userId = \false)
    {
    }
    public static function checkEmptyUFValue($fieldName)
    {
    }
    public static function isSetTrafficNeeded($arParams)
    {
    }
    public static function processDateTimeFormatParams(&$arParams = array())
    {
    }
    public static function getDateTimeFormatted($timestamp, $arFormatParams)
    {
    }
    public static function getCommentRights($arParams)
    {
    }
    public static function canUserChangeComment($arParams)
    {
    }
    public static function getExtranetRedirectSite($extranetSiteId)
    {
    }
    public static function redirectExtranetSite($arRedirectSite, $componentPage, $arVariables, $arDefaultUrlTemplates404, $entity = "user")
    {
    }
    public static function getCommentByRequest($commentId, $postId, $action = \false, $checkPerms = \true, $checkAdminSession = \true)
    {
    }
    public static function getCommentRatingType($logEventId, $logId = \false)
    {
    }
}