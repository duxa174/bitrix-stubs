<?php

namespace Bitrix\Calendar\ICal\Basic;

class ICalUtil
{
    const ICAL_DATETIME_FORMAT = 'Ymd\\THis\\Z';
    const ICAL_DATETIME_FORMAT_SHORT = 'Ymd\\THis';
    const ICAL_DATE_FORMAT = 'Ymd';
    public static function getServerName()
    {
    }
    public static function getUniqId()
    {
    }
    public static function isMailUser($userId) : bool
    {
    }
    /*
     * Returns id of the 'external' user by email. Creates user if it not exists.
     *
     * @param array $params - incomoning params:
     * $params['EMAIL'] - (required) email of the user
     * $params['NAME'] - user's name
     * $params['LAST_NAME'] - user's last name
     * @return 'userId' - id of the user, or null
     */
    public static function getExternalUserByEmail($params, &$errorText)
    {
    }
    public static function processDestinationUserEmail($params, &$errorText)
    {
    }
    public static function getUserIdByEmail(array $userInfo) : ?string
    {
    }
    public static function getEventByUId($userId, $uid) : ?array
    {
    }
    public static function getUserById(?string $id)
    {
    }
    public static function getIcalDateTime(string $dateTime = null, string $tz = null) : \Bitrix\Main\Type\DateTime
    {
    }
    public static function getIcalDate(string $date = null) : \Bitrix\Main\Type\Date
    {
    }
    public static function prepareAttendeesToCancel($attendees)
    {
    }
    public static function getUsersById(array $usersId)
    {
    }
    public static function getUsersByCode(array $attendeesCodeList = null)
    {
    }
    public static function getIcalDateTimeShort(string $dateTime = null, string $tz = 'UTC')
    {
    }
}