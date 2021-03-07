<?php

namespace Bitrix\Calendar;

class UserSettings
{
    private static $settings = ['view' => 'month', 'CalendarSelCont' => false, 'SPCalendarSelCont' => false, 'meetSection' => false, 'crmSection' => false, 'showDeclined' => false, 'denyBusyInvitation' => false, 'collapseOffHours' => 'Y', 'showWeekNumbers' => 'N', 'showTasks' => 'Y', 'syncTasks' => 'N', 'showCompletedTasks' => 'N', 'lastUsedSection' => false, 'sendFromEmail' => false];
    public static function set($settings = [], $userId = false)
    {
    }
    public static function get($userId = false)
    {
    }
    public static function getFormSettings($formType, $userId = false)
    {
    }
    public static function getTrackingUsers($userId = false, $params = [])
    {
    }
    public static function setTrackingUsers($userId = false, $value = [])
    {
    }
    public static function getTrackingGroups($userId = false, $params = [])
    {
    }
    public static function setTrackingGroups($userId = false, $value = [])
    {
    }
    public static function getHiddenSections($userId = false)
    {
    }
    public static function getSectionCustomization($userId = false)
    {
    }
    public static function setSectionCustomization($userId = false, $data = [])
    {
    }
    public static function getFollowedSectionIdList($userId = false)
    {
    }
}