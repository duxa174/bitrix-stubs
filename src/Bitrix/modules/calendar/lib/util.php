<?php

namespace Bitrix\Calendar;

class Util
{
    const USER_SELECTOR_CONTEXT = "CALENDAR";
    const LIMIT_NUMBER_BANNER_IMPRESSIONS = 3;
    private static $userAccessCodes = array();
    public static function isManagerForUser($managerId, $userId)
    {
    }
    public static function isSectionStructureConverted()
    {
    }
    public static function getTimestamp($date, $round = true, $getTime = true)
    {
    }
    public static function isTimezoneValid($timeZone) : bool
    {
    }
    public static function prepareTimezone($tz = null) : \DateTimeZone
    {
    }
    public static function getDateObject(string $date = null, $fullDay = true, $tz = 'UTC') : \Bitrix\Main\Type\Date
    {
    }
    public static function getUserSelectorContext()
    {
    }
    public static function getIcalTemplateDate(array $params = null) : string
    {
    }
    public static function getIcalTemplateRRule(array $rrule = null, array $params = null) : string
    {
    }
    public static function checkRuZone() : bool
    {
    }
    public static function convertEntitiesToCodes($entityList = [])
    {
    }
    public static function convertCodesToEntities($codeList = [])
    {
    }
    public static function getUsersByEntityList($entityList, $fetchUsers = false)
    {
    }
    public static function getDefaultEntityList($userId, $type, $ownerId)
    {
    }
    public static function getAttendees(array $codeAttendees = null, string $stringWrapper = '') : array
    {
    }
    /**
     * @return bool
     */
    public static function isShowDailyBanner() : bool
    {
    }
    public static function isExtranetUser(int $userId)
    {
    }
}