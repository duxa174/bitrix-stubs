<?php

class CSocNetWikiForumEvent
{
    var $arPath;
    var $ForumID = \null;
    function SetVars($arParams, $arResult)
    {
    }
    private function createLogEntry($iblockElementID)
    {
    }
    private function createLogComment($messageID, $bSocNetLogRecordExists, $iblockElementID, $topicID, $arLogParams)
    {
    }
    private function deleteLogComment($messageID)
    {
    }
    function onMessageModerate($ID, $TYPE, $arMessage)
    {
    }
    function onAfterMessageAdd($ID, $arFields)
    {
    }
    function onAfterMessageDelete($ID, $arFields)
    {
    }
    function onBeforeTopicAdd(&$arFields)
    {
    }
}