<?php

namespace Bitrix\Calendar\ICal;

class UserController
{
    private static $MAIL_TYPE_EXTERNAL = "CALENDAR_INVITATION_EXTERNAL";
    public static function inviteUser($userId, $params)
    {
    }
    private static function prepareAttendeesData($attendeeIdList, $currentAttendees, $userIndex, $currentUserId)
    {
    }
    private static function getPublicUrl()
    {
    }
    /**
     * Get ical file
     *
     * @return int|bool File id.
     */
    private static function getIcsFileAttachment($eventFields, $params = [])
    {
    }
    public static function getIcsFileContent($eventFields, $params = [])
    {
    }
}