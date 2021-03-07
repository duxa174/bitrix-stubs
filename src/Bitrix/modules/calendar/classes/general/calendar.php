<?php

class CCalendar
{
    const INTEGRATION_GOOGLE_API = "googleapi", CALENDAR_MAX_TIMESTAMP = 2145938400, DEFAULT_TASK_COLOR = '#ff5b55', TASK_SECTION_ID = '1_tasks', CALENDAR_CHAT_ENTITY_TYPE = 'CALENDAR', DAY_LENGTH = 86400;
    // 60 * 60 * 24
    private static $id = \false, $instance, $CALENDAR_MAX_DATE, $CALENDAR_MIN_DATE, $type, $arTypes, $ownerId = 0, $settings, $siteId, $userSettings = [], $pathToUser, $bOwner, $userId, $curUserId, $userMeetingSection, $meetingSections = [], $crmSections = [], $offset, $arTimezoneOffsets = [], $perm = [], $isArchivedGroup = \false, $userNameTemplate = "#NAME# #LAST_NAME#", $bSuperpose, $bExtranet, $bIntranet, $bWebservice, $arSPTypes = [], $showTasks, $viewTaskPath = '', $editTaskPath = '', $actionUrl, $path = '', $outerUrl, $accessNames = [], $bSocNet, $bAnonym, $allowReserveMeeting = \true, $SectionsControlsDOMId = 'sidebar', $arAccessTask = [], $ownerNames = [], $meetingRoomList, $cachePath = "calendar/", $cacheTime = 2592000, $bCache = \true, $readOnly, $pathesForSite = \false, $pathes = [], $userManagers = [], $arUserDepartment = [], $bAMPM = \false, $bWideDate = \false, $arExchEnabledCache = [], $silentErrorMode = \false, $weekStart, $bCurUserSocNetAdmin, $serverPath, $pathesList = array('path_to_user', 'path_to_user_calendar', 'path_to_group', 'path_to_group_calendar', 'path_to_vr', 'path_to_rm'), $pathesListEx = \null, $isGoogleApiEnabled = \null, $errors = [], $timezones = [];
    function Init($params)
    {
    }
    public function Show($params = [])
    {
    }
    public static function SetDisplayedSuperposed($userId = \false, $arIds = [])
    {
    }
    public static function DeleteSection($id)
    {
    }
    public static function CollectExchangeErrors($arErrors = [])
    {
    }
    /**
     * @param $id
     * @param bool $doExternalSync
     * @param array $params
     * params['sendNotification'] send notifications
     * params['checkPermissions'] check permissions
     * params['recursionMode'] check event recurrence (this|all)
     * @return bool|string
     */
    public static function DeleteEvent($id, $doExternalSync = \true, $params = [])
    {
    }
    public static function SetOffset($userId = \false, $value = 0)
    {
    }
    public static function CollectCalDAVErros($arErrors = [])
    {
    }
    public static function GetPathForCalendarEx($userId = 0)
    {
    }
    public static function IsExtranetUser($userId = 0)
    {
    }
    public static function GetUserDepartment($userId = 0)
    {
    }
    public static function SetUserDepartment($userId = 0, $dep = [])
    {
    }
    public static function HandleImCallback($module, $tag, $value, $arNotify)
    {
    }
    public static function ClearSettings()
    {
    }
    public static function SetSettings($settings = [], $bClear = \false)
    {
    }
    public static function IsBitrix24()
    {
    }
    public static function SearchAttendees($name = '', $Params = [])
    {
    }
    public static function GetGroupMembers($groupId)
    {
    }
    public static function ReminderAgent($eventId = 0, $userId = 0, $viewPath = '', $calendarType = '', $ownerId = 0, $index = 0)
    {
    }
    public static function GetMaxTimestamp()
    {
    }
    public static function GetOwnerName($type = '', $ownerId = '')
    {
    }
    public static function GetTimezoneOffset($timezoneId, $dateTimestamp = \false)
    {
    }
    public static function GetAbsentEvents($params)
    {
    }
    public static function GetAccessibilityForUsers($params)
    {
    }
    public static function GetNearestEventsList($params = [])
    {
    }
    public static function _NearestSort($a, $b)
    {
    }
    public static function GetAccessibilityForMeetingRoom($params)
    {
    }
    public static function GetMeetingRoomById($Params)
    {
    }
    public static function ReleaseLocation($loc)
    {
    }
    public static function ReleaseMeetingRoom($Params)
    {
    }
    public static function GetCalendarList($calendarId, $params = [])
    {
    }
    /*
     * $params['from'], $params['from'] - datetime in UTC
     * */
    public static function GetDavCalendarEventsList($calendarId, $arFilter = [])
    {
    }
    public static function GetTextLocation($loc = '')
    {
    }
    public static function ParseLocation($location = '')
    {
    }
    /* * * * RESERVE MEETING ROOMS  * * * */
    public static function GetUserPermissionsForCalendar($calendarId, $userId)
    {
    }
    public static function GetDayLen()
    {
    }
    public static function UnParseTextLocation($loc = '')
    {
    }
    public static function ClearExchangeHtml($html = "")
    {
    }
    public static function ParseHTMLToBB($html = "")
    {
    }
    public static function WeekDayByInd($i, $binv = \true)
    {
    }
    public static function SaveEvent($params = [])
    {
    }
    public static function SaveEventEx($params = [])
    {
    }
    private function CountNumberFollowEvents($params)
    {
    }
    public static function CountPastEvents($params)
    {
    }
    public static function ThrowError($str)
    {
    }
    public static function GetErrors()
    {
    }
    public static function GetSectionForOwner($calType, $ownerId, $autoCreate = \true)
    {
    }
    public static function UpdateUFRights($files, $rights, $ufEntity = [])
    {
    }
    public static function TempUser($TmpUser = \false, $create = \true, $ID = \false)
    {
    }
    public static function SaveSection($Params)
    {
    }
    public static function ClearCache($arPath = \false)
    {
    }
    public static function CachePath()
    {
    }
    // * * * * * * * * * * * * CalDAV + Exchange * * * * * * * * * * * * * * * *
    public static function SyncCalendarItems($connectionType, $calendarId, $arCalendarItems)
    {
    }
    private static function FindSyncInstance($event)
    {
    }
    public static function DeleteCalendarEvent($calendarId, $eventId, $userId, $oEvent = \false)
    {
    }
    // Called from CalDav sync functions and from  CCalendar::SyncCalendarItems
    public static function SyncClearCache()
    {
    }
    public static function Color($color = '', $defaultColor = \true)
    {
    }
    public static function ConvertDayInd($i)
    {
    }
    // return array('bAccess' => true/false, 'bReadOnly' => true/false, 'privateStatus' => 'time'/'title');
    public static function _fixTimestamp($timestamp)
    {
    }
    // Called from CalDav, Exchange methods
    public static function FormatTime($h = 0, $m = 0)
    {
    }
    // Called from SaveEvent: try to save event in Exchange or to Dav Server and if it's Ok, return true
    public static function GetUserId()
    {
    }
    public static function GetReadonlyMode()
    {
    }
    // Called from CalDav sync methods
    public static function GetUserAvatarSrc($user = [], $params = [])
    {
    }
    public static function GetUserAvatar($user = [], $params = [])
    {
    }
    public static function GetUserUrl($userId = 0, $pathToUser = "")
    {
    }
    public static function GetAccessTasksByName($binging = 'calendar_section', $name = 'calendar_denied')
    {
    }
    public static function GetAccessTasks($binging = 'calendar_section')
    {
    }
    public static function PushAccessNames($arCodes = [])
    {
    }
    public static function SetLocation($old = '', $new = '', $params = [])
    {
    }
    public static function ReserveMeetingRoom($params)
    {
    }
    public static function CheckMeetingRoom($Params)
    {
    }
    public static function GetOuterUrl()
    {
    }
    public static function ManageConnections($arConnections = [])
    {
    }
    public static function AddConnection($connection)
    {
    }
    public static function EditConnection()
    {
    }
    public static function CheckCalDavUrl($url, $username, $password)
    {
    }
    public static function RemoveConnection($connection = [])
    {
    }
    public static function GetTypeByExternalId($externalId = \false)
    {
    }
    public static function SetCurUserMeetingSection($userMeetingSection)
    {
    }
    public static function CacheTime($time = \false)
    {
    }
    public static function _ParseHack(&$text, &$TextParser)
    {
    }
    public static function IsSocnetAdmin()
    {
    }
    public static function GetMaxDate()
    {
    }
    public static function GetMinDate()
    {
    }
    public static function GetDestinationUsers($codes, $fetchUsers = \false)
    {
    }
    public static function GetAttendeesMessage($cnt = 0)
    {
    }
    public static function GetMoreAttendeesMessage($cnt = 0)
    {
    }
    public static function GetFormatedDestination($codes = [])
    {
    }
    public static function GetFromToHtml($fromTs = \false, $toTs = \false, $skipTime = \false, $dtLength = 0, $forRrule = \false)
    {
    }
    public static function GetSocNetDestination($user_id = \false, $selected = [], $userList = [])
    {
    }
    public static function SaveUserTimezoneName($user, $tzName = '')
    {
    }
    public static function CheckOffsetForTimezone($timezone, $offset, $date = \false)
    {
    }
    public static function GetOffsetUTC($userId = \false, $dateTimestamp)
    {
    }
    public static function OnSocNetGroupDelete($groupId)
    {
    }
    /**
     * Handles last caldav activity from mobile devices
     *
     * @param \Bitrix\Main\Event $event Event.
     * @return null
     */
    public static function OnDavCalendarSync(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Saves date of last successful sync
     *
     * @param int $userId User Id
     * @param string $syncType Type of synchronization.
     * @return null
     */
    public static function SaveSyncDate($userId, $syncType)
    {
    }
    public static function SaveMultipleSyncDate($userId, $syncType, $sectionId)
    {
    }
    public static function OnExchangeCalendarSync(\Bitrix\Main\Event $event)
    {
    }
    public static function ClearSyncInfo($userId, $syncType)
    {
    }
    /**
     * Updates counter in left menu in b24, sets amount of requests for meeting for current user or
     * set of users
     *
     * @param int|array $users array of user's ids or user id as an int
     * @return null
     */
    public static function UpdateCounter($users = \false)
    {
    }
    // TODO: cache it!!!!!!
    private static function __tzsort($a, $b)
    {
    }
    private static function GetInstance()
    {
    }
    public static function IsIntranetEnabled()
    {
    }
    public static function IsSocNet()
    {
    }
    public static function GetCurUserId($refresh = \false)
    {
    }
    public static function GetSettings($params = [])
    {
    }
    public static function GetPathes($forSite = \false)
    {
    }
    public static function GetPathesList()
    {
    }
    public static function GetUserNameTemplate($fromSite = \true)
    {
    }
    public static function SetUserSettings($settings = [], $userId = \false)
    {
    }
    public static function GetUserSettings($userId = \false)
    {
    }
    public static function GetPermissions($Params = [])
    {
    }
    public static function GetPath($type = '', $ownerId = '', $hard = \false)
    {
    }
    public static function GetSiteId()
    {
    }
    public static function GetServerPath()
    {
    }
    public static function GetServerName()
    {
    }
    public static function GetStartUpEvent($eventId = \false)
    {
    }
    public static function Timestamp($date, $bRound = \true, $bTime = \true)
    {
    }
    public static function TSFormat($format = "FULL")
    {
    }
    public static function RoundTimestamp($ts)
    {
    }
    public static function IsPersonal($type = \false, $ownerId = \false, $userId = \false)
    {
    }
    public static function IsExchangeEnabled($userId = \false)
    {
    }
    public static function isGoogleApiEnabled()
    {
    }
    public static function IsCalDAVEnabled()
    {
    }
    public static function IsWebserviceEnabled()
    {
    }
    public static function IsExtranetEnabled()
    {
    }
    public static function IsAbsenceEnabled()
    {
    }
    public static function GetMeetingRoomList($params = [])
    {
    }
    public static function GetCurrentOffsetUTC($userId = \false)
    {
    }
    public static function GetOffset($userId = \false)
    {
    }
    public static function GetUserTimezoneName($user, $getDefault = \true)
    {
    }
    public static function GetUser($userId, $bPhoto = \false)
    {
    }
    public static function GetGoodTimezoneForOffset($offset)
    {
    }
    public static function GetTimezoneList()
    {
    }
    public static function GetUserName($user)
    {
    }
    public static function GetWeekStart()
    {
    }
    public static function InitExternalCalendarsSyncParams(&$JSConfig)
    {
    }
    public static function Date($timestamp, $bTime = \true, $bRound = \true, $bCutSeconds = \false)
    {
    }
    public static function DFormat($bTime = \true)
    {
    }
    public static function DateWithNewTime($timestampTime, $timestampDate)
    {
    }
    public static function GetSyncInfo($userId, $syncType)
    {
    }
    public static function GetCurUserMeetingSection($bCreate = \false)
    {
    }
    public static function GetMeetingSection($userId, $autoCreate = \false)
    {
    }
    public static function GetCrmSection($userId, $autoCreate = \false)
    {
    }
    public static function GetSectionList($params = [])
    {
    }
    public static function GetOwnerId()
    {
    }
    public static function GetEventList($params = [], &$arAttendees)
    {
    }
    public static function getTaskList($params = [])
    {
    }
    public static function CutZeroTime($date)
    {
    }
    public static function GetType()
    {
    }
    public static function GetAccessNames()
    {
    }
    function TrimTime($strTime)
    {
    }
    public static function SetSilentErrorMode($silentErrorMode = \true)
    {
    }
    public function GetId()
    {
    }
    public static function GetOriginalDate($originalDateTime, $instanceDateTime, $timeZone = \false, $format = \null)
    {
    }
    public static function getSectionListAvailableForUser($userId, $additionalSectionIdList = [])
    {
    }
    public static function setOwnerId($userId)
    {
    }
}