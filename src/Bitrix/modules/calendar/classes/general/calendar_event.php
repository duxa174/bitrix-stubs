<?php

class CCalendarEvent
{
    public static $eventUFDescriptions, $TextParser;
    private static $fields = [], $userIndex = [], $isAddIcalFailEmailError = \false;
    public static function CheckRRULE($RRule = array())
    {
    }
    /**
     * @param array $params
     * params['arFields'] event fields
     * params['userId'] user id
     * params['saveAttendeesStatus'] sending notification flag
     * @return bool|mixed
     */
    public static function Edit($params = [])
    {
    }
    public static function GetById($ID, $checkPermissions = \true)
    {
    }
    public static function GetList($params = array())
    {
    }
    private static function GetFields()
    {
    }
    public static function ConnectEventToSection($eventId, $sectionId)
    {
    }
    public static function getAttendeeList($entryIdList = array())
    {
    }
    public static function getUsersDetails($userIdList = [])
    {
    }
    public static function GetAttendees($eventIdList = array())
    {
    }
    public static function ApplyAccessRestrictions($event, $userId = \false)
    {
    }
    private static function PreHandleEvent($item, $params = array())
    {
    }
    public static function CheckRecurcion($event)
    {
    }
    public static function ParseText($text = "", $eventId = 0, $arUFWDValue = array())
    {
    }
    public static function __GetUFForParseText($eventId = 0, $arUFWDValue = array())
    {
    }
    public static function ParseRecursion(&$res, $event, $params = [])
    {
    }
    public static function ParseRRULE($rule = '')
    {
    }
    public static function GetExDate($exDate = '')
    {
    }
    private static function HandleEvent(&$res, $item = [], $userId = \null)
    {
    }
    public static function CheckFields(&$arFields, $currentEvent = array(), $userId = \false)
    {
    }
    public static function CheckEntryChanges($newFields = [], $currentFields = [])
    {
    }
    private static function PackRRule($RRule = array())
    {
    }
    //
    private static function CreateChildEvents($parentId, $arFields, $params, $changeFields)
    {
    }
    public static function sendEventInvitationUsingIcal($arEventManagerInstances)
    {
    }
    public static function UpdateParentEventExDate($recurrenceId, $exDate, $attendeeIds)
    {
    }
    public static function GetEventFromToForUser($params, $userId)
    {
    }
    public static function OnPullPrepareArFields($arFields = array())
    {
    }
    public static function UpdateUserFields($eventId, $arFields = array())
    {
    }
    public static function GetChildEvents($parentId)
    {
    }
    public static function Delete($params)
    {
    }
    public static function SetMeetingStatusEx($params)
    {
    }
    public static function SetMeetingStatus($params)
    {
    }
    /*
     * $params['dateFrom']
     * $params['dateTo']
     *
     * */
    public static function GetMeetingStatus($userId, $eventId)
    {
    }
    public static function GetAccessibilityForUsers($params = array())
    {
    }
    public static function GetAbsent($users = \false, $params = array())
    {
    }
    public static function DeleteEmpty()
    {
    }
    public static function CleanEventsWithDeadParents()
    {
    }
    public static function CheckEndUpdateAttendeesCodes($event)
    {
    }
    public static function CanView($eventId, $userId)
    {
    }
    public static function GetEventUserFields($event)
    {
    }
    public static function SetExDate($exDate = array(), $untilTimestamp = \false)
    {
    }
    public static function GetEventsByRecId($recurrenceId, $checkPermissions = \true)
    {
    }
    public static function GetEventCommentXmlId($event)
    {
    }
    public static function ExtractDateFromCommentXmlId($xmlId = '')
    {
    }
    public static function GetRRULEDescription($event, $html = \false, $showUntil = \true)
    {
    }
    public static function ExcludeInstance($eventId, $excludeDate)
    {
    }
    public static function getDiskUFFileNameList($valueList = array())
    {
    }
    public static function getSearchIndexContent($eventId)
    {
    }
    public static function getSearchIndexContentBatch($eventIdList = array())
    {
    }
    public static function updateSearchIndex($eventIdList = array(), $params = array())
    {
    }
    public static function formatSearchIndexContent($entry = array())
    {
    }
    public static function GetCount()
    {
    }
    public static function updateColor($eventId, $color = '')
    {
    }
    /**
     * Applies ROT13 transform to search token, in order to bypass default mysql search blacklist.
     * @param string $token Search token.
     * @return string
     */
    public static function prepareToken($token)
    {
    }
    public static function isFullTextIndexEnabled()
    {
    }
    public static function getUserIndex()
    {
    }
    public static function getEventForViewInterface($entryId, $params = [])
    {
    }
    public static function getEventForEditInterface($entryId, $params = [])
    {
    }
    public static function handleAccessCodes($accessCodes = [], $params = [])
    {
    }
    public static function getMailAttaches($fields, $userId, $parentId, &$isChangeFiles = \false)
    {
    }
    private static function getSenderEmailForIcal(string $serializedMeetingInfo = \null) : ?string
    {
    }
    /**
     * @param $userIndex
     * @param $organizerId
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private static function getSenderForIcal($userIndex, $organizerId)
    {
    }
}