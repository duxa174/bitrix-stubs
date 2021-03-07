<?php

function GetAnswerTypeList()
{
}
function GetVoteDiagramArray()
{
}
function GetVoteDiagramList()
{
}
// vote data
function GetVoteDataByID($VOTE_ID, &$arChannel, &$arVote, &$arQuestions, &$arAnswers, &$arDropDown, &$arMultiSelect, &$arGroupAnswers, $arAddParams = "N")
{
}
// return vote id for channel sid with check permissions and ACTIVE vote
function GetCurrentVote($GROUP_SID, $site_id = \SITE_ID, $access = 1)
{
}
// return PREIOUS vote id for channel sid with check permissions and ACTIVE vote
function GetPrevVote($GROUP_SID, $level = 1, $site_id = \SITE_ID, $access = 1)
{
}
// return votes list id for channel sid with check permissions and ACTIVE vote
function GetVoteList($GROUP_SID = "", $params = array(), $site_id = \SITE_ID)
{
}
// return true if user already vote on this vote
function IsUserVoted($voteId)
{
}
// return random unvoted vote id for user whith check permissions
function GetAnyAccessibleVote($site_id = \SITE_ID, $channel_id = \null)
{
}
/********************************************************************
				Functions for old templates
/*******************************************************************/
function GetTemplateList($type = "SV", $path = "xxx")
{
}
function arrAnswersSort(&$arr, $order = "desc")
{
}
// return current vote form for channel
function ShowCurrentVote($GROUP_SID, $site_id = \SITE_ID)
{
}
// return previous vote results
function ShowPrevVoteResults($GROUP_SID, $level = 1, $site_id = \SITE_ID)
{
}
// return current vote results
function ShowCurrentVoteResults($GROUP_SID, $site_id = \SITE_ID)
{
}
// return current vote form with check permissions
function ShowVote($VOTE_ID, $template1 = "")
{
}
// return current vote results with check permissions
function ShowVoteResults($VOTE_ID, $template1 = "")
{
}
function fill_arc($start, $end, $color)
{
}
function DecRGBColor($hex, &$dec1, &$dec2, &$dec3)
{
}
function DecColor($hex)
{
}
function HexColor($dec)
{
}
function GetNextColor(&$color, &$current_color, $total, $start_color = "0000CC", $end_color = "FFFFCC")
{
}