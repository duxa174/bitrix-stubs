<?php

namespace Bitrix\Calendar\ICal;

class IncomingEventManager
{
    public static function handleRequest($params)
    {
    }
    public static function handleReply(array $params) : bool
    {
    }
    public static function handleReplyReceivedICalInvent(\Bitrix\Main\Event $event)
    {
    }
    public static function handleCancel($params)
    {
    }
    public static function getDataInfo($data, $params = []) : array
    {
    }
    public static function rehandleRequest($params)
    {
    }
    private static function updateEvent(array $event, $userId, $answer) : array
    {
    }
    private static function getDateTimeString(\Bitrix\Main\Type\Date $date) : string
    {
    }
    private static function getDateString(\Bitrix\Main\Type\Date $date) : string
    {
    }
    private static function getTimezoneNameString(\DateTimeZone $tz)
    {
    }
    private static function handleAttendeesFromRequest(array $params) : array
    {
    }
    private static function handleAttendeesByUser(array $attendees, $answer, $userId)
    {
    }
    private static function updateChildEvent(array $event, $parentId)
    {
    }
    private static function getAttendeesString($attendees)
    {
    }
    private static function getOrganizerString($organizer)
    {
    }
    private static function updateParentEvent(array $event)
    {
    }
    private static function getFilesString(array $attachments)
    {
    }
}