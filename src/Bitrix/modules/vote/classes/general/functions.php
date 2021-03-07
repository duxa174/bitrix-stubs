<?php

#############################################
# Bitrix Site Manager Forum					#
# Copyright (c) 2002-2007 Bitrix			#
# http://www.bitrixsoft.com					#
# mailto:admin@bitrixsoft.com				#
#############################################
class CVoteCacheManager
{
    public static $types = array("C" => "vote_form_channel_", "V" => "vote_form_vote_", "Q" => "vote_form_question_", "A" => "vote_form_answer_");
    public static $cacheKey = "/#SITE_ID#/voting.cache/";
    public function cachePath($site_id)
    {
    }
    function __construct()
    {
    }
    public static function SetTag($path, $tag, $ID = 0)
    {
    }
    public static function ClearTag($type, $ID = 0)
    {
    }
    function OnAfterVoteChannelChange($ID, $arFields = array())
    {
    }
    function OnVoteChange(\Bitrix\Main\Entity\Event $event)
    {
    }
    function OnAfterVoteChange($ID)
    {
    }
    function OnAfterVoteQuestionAdd($ID, $arFields)
    {
    }
    function OnBeforeVoteQuestionUpdate(&$ID, &$arFields)
    {
    }
    function OnAfterVoteQuestionUpdate($ID, $arFields)
    {
    }
    function OnAfterVoteQuestionDelete($ID, $VOTE_ID)
    {
    }
    function OnAfterVoteAnswerAdd($ID, $arFields)
    {
    }
    function OnBeforeVoteAnswerUpdate($ID, $arFields)
    {
    }
    function OnAfterVoteAnswerUpdate($ID, $arFields)
    {
    }
    function OnAfterVoteAnswerDelete($ID, $QUESTION_ID, $VOTE_ID)
    {
    }
    function onAfterVoting($VOTE_ID, $EVENT_ID)
    {
    }
}