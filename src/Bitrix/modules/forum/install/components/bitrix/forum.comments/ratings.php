<?php

class CCommentRatings
{
    var $component = \null;
    var $arRatings = array();
    var $display = array("BEFORE_HEADER" => \true, "AFTER_ACTIONS" => \false);
    function __construct(&$component)
    {
    }
    function OnCommentsDisplayTemplate($output, $arParams, $arResult)
    {
    }
    function OnPrepareComments()
    {
    }
    function RatingDisplay($top = \true, $commentID, $authorID)
    {
    }
    function OnCommentDisplay($arComment)
    {
    }
}