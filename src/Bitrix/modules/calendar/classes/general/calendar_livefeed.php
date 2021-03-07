<?php

class CCalendarLiveFeed
{
    public static function AddEvent(&$arSocNetFeaturesSettings)
    {
    }
    public static function FormatEvent($arFields, $arParams, $bMail = \false)
    {
    }
    public static function OnSonetLogEntryMenuCreate($arLogEvent)
    {
    }
    // Sync comments from lifefeed to calendar event
    public static function AddComment_Calendar($arFields)
    {
    }
    public static function GetCommentUrl($arFields = [])
    {
    }
    public static function OnAfterSonetLogEntryAddComment($arSonetLogComment)
    {
    }
    public static function OnForumCommentIMNotify($entityType, $eventId, $comment)
    {
    }
    public static function OnAfterCommentAddBefore($entityType, $eventId, $arData)
    {
    }
    public static function OnAfterCommentAddAfter($entityType, $eventID, $arData, $logID = \false)
    {
    }
    public static function OnAfterCommentUpdateAfter($entityType, $eventID, $arData, $logID = \false)
    {
    }
    public static function SetCommentFileRights($arData, $logID)
    {
    }
    public static function EditCalendarEventEntry($entryFields = [], $userFieldData = [], $accessCodes = [], $params = [])
    {
    }
    // Called after creation or edition of calendar event
    public static function OnEditCalendarEventEntry($params)
    {
    }
    // Do delete from socialnetwork live feed here
    public static function OnDeleteCalendarEventEntry($eventId)
    {
    }
    public static function FixForumCommentURL($arData)
    {
    }
    public static function OnChangeMeetingStatusEventEntry($params)
    {
    }
}