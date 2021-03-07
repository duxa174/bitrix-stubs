<?php

function ForumCurrUserPermissions($FID, $arAddParams = array())
{
}
function ForumSubscribeNewMessagesEx($FID, $TID, $NEW_TOPIC_ONLY, &$strErrorMessage, &$strOKMessage, $strSite = \false, $SOCNET_GROUP_ID = \false)
{
}
function ForumUnsubscribeNewMessagesEx($FID, $TID, $NEW_TOPIC_ONLY, &$strErrorMessage, &$strOKMessage, $strSite = \false, $SOCNET_GROUP_ID = \false)
{
}
function ForumUnsubscribeNewMessages($FID, $TID, &$strErrorMessage, &$strOKMessage, $NEW_TOPIC_ONLY = "N", $strSite = \false, $SOCNET_GROUP_ID = \false)
{
}
function ForumSubscribeNewMessages($FID, $TID, &$strErrorMessage, &$strOKMessage, $NEW_TOPIC_ONLY = "N", $strSite = \false, $SOCNET_GROUP_ID = \false)
{
}
function ForumGetRealIP()
{
}
function ForumAddMessage($MESSAGE_TYPE, $FID, $TID, $MID, $arFieldsG, &$strErrorMessage, &$strOKMessage, $iFileSize = \false, $captcha_word = "", $captcha_sid = 0, $captcha_code = "")
{
}
function ForumModerateMessage($message, $TYPE, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumOpenCloseTopic($topicIds, $TYPE, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumTopOrdinaryTopic($topic, $TYPE, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumDeleteTopic($topic, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumDeleteMessage($message, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumSpamTopic($topic, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumSpamMessage($message, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumMessageExistInArray($message = array())
{
}
function ForumDeleteMessageArray($message, &$strErrorMessage, &$strOKMessage)
{
}
function ForumModerateMessageArray($message, $TYPE, &$strErrorMessage, &$strOKMessage)
{
}
function ForumShowTopicPages($nMessages, $strUrl, $pagen_var = "PAGEN_1", $PAGE_ELEMENTS = \false)
{
}
function ForumMoveMessage($FID, $TID, $Message, $NewTID = 0, $arFields, &$strErrorMessage, &$strOKMessage, $iFileSize = \false)
{
}
/**
 * @param $num_cols
 * @deprecated
 * @return string
 */
function ForumPrintIconsList($num_cols, $value = "")
{
}
/**
 * @deprecated
 * @param $num_cols
 * @param bool $strLang
 * @return string
 */
function ForumPrintSmilesList($num_cols, $strLang = \false)
{
}
function ForumMoveMessage2Support($MID, &$strErrorMessage, &$strOKMessage, $arAddParams = array())
{
}
function ForumVote4User($UID, $VOTES, $bDelVote, &$strErrorMessage, &$strOKMessage)
{
}
function ShowActiveUser($arFields = array())
{
}
function ForumGetUserForumStatus($userID = \false, $perm = \false, $arAdditionalParams = array())
{
}
function ForumAddPageParams($page_url = "", $params = array(), $addIfNull = \false, $htmlSpecialChars = \true)
{
}
function ForumActions($action, $arFields, &$strErrorMessage, &$strOKMessage)
{
}
function ForumDataToArray(&$message)
{
}
function ForumGetTopicSort(&$field_name, &$direction, $arForumInfo = array())
{
}
function ForumShowError($arError, $bShowErrorCode = \false)
{
}
function ForumClearComponentCache($components)
{
}
function InitSortingEx($Path = \false, $sByVar = "by", $sOrderVar = "order")
{
}
function ForumGetEntity($entityId, $value = \true)
{
}