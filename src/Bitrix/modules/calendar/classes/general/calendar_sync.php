<?php

class CCalendarSync
{
    public static $handleExchangeMeeting;
    public static $doNotSendToGoogle = \false;
    private static $mobileBannerDisplay;
    const MINIMAL_LIMIT = 1;
    public static function doSync()
    {
    }
    public static function dataSync($connectionData = array())
    {
    }
    public static function syncConnection($connectionData, $forceSync = \false)
    {
    }
    public static function syncCalendarEvents($localCalendar) : string
    {
    }
    public static function ModifyEvent($calendarId, $arFields, $params = array())
    {
    }
    public static function ModifyReccurentInstances($params = array())
    {
    }
    public static function DoSaveToDav($params = array(), &$arFields, $event = \false)
    {
    }
    public static function DoDeleteToDav($params, $event)
    {
    }
    public static function syncCalendarSections($connectionType, $arCalendars, $entityType, $entityId, $connectionId = \null)
    {
    }
    public static function GetGoogleCalendarConnection()
    {
    }
    private static function GetGoogleOauthPrimaryId($data = array())
    {
    }
    public static function GetExchangeEmailForUser($idList = array())
    {
    }
    public static function GetUsersByEmailList($emailList = array())
    {
    }
    public static function isExchangeMeetingEnabled()
    {
    }
    public static function isTaskListSyncEnabled()
    {
    }
    public static function SyncLocalCalendars()
    {
    }
    private function GetPassDates($id, $exDates)
    {
    }
    public static function checkMobileBannerDisplay()
    {
    }
    private static function CutAttendeesFromDescription(?string $description, ?array $attendeesCodes)
    {
    }
    public static function isSetSyncCaldavSettings($type)
    {
    }
    /**
     * @param array $externalEvents
     * @param array $localEvents
     * @param $localCalendar
     */
    private static function SaveExternalEvents(array $externalEvents, array $localEvents, $localCalendar) : void
    {
    }
    /**
     * @param $localCalendar
     * @return array|mixed|null
     */
    private static function getLocalEventsList($localCalendar)
    {
    }
    public function GetUserSyncInfo($userId)
    {
    }
    public static function getSign($url = '')
    {
    }
    public static function GetSyncInfo($params = [])
    {
    }
    public static function GetSyncInfoItem($userId, $syncType)
    {
    }
    public static function GetMultipleSyncInfoItem($userId, $syncType)
    {
    }
    public static function GetCaldavItemsInfo($userId, $type)
    {
    }
    private static function GetGoogleAccountInfo($isGoogleApiEnabled, $userId, $type)
    {
    }
    public static function GetSyncLinks($params = [])
    {
    }
    public static function GetGoogleAuthLink($userId, $type)
    {
    }
    public static function SetSectionStatus($userId = 0, $sectionsStatus = [])
    {
    }
    public static function UpdateUserConnections()
    {
    }
    private static function isConnectionSuccess(string $lastResult = \null) : bool
    {
    }
}