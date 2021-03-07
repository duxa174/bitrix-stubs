<?php

/**
 * Class COAuthCode
 *
 * @deprecated
 */
class CCalendarUserSettings
{
    private static $settings = array('view' => 'month', 'CalendarSelCont' => \false, 'SPCalendarSelCont' => \false, 'meetSection' => \false, 'crmSection' => \false, 'showDeclined' => \false, 'denyBusyInvitation' => \false, 'collapseOffHours' => 'Y', 'showWeekNumbers' => 'N', 'showTasks' => 'Y', 'showCompletedTasks' => 'N', 'syncPeriodPast' => 3, 'syncPeriodFuture' => 12);
    public static function Set($settings = array(), $userId = \false)
    {
    }
    public static function Get($userId = \false)
    {
    }
    public static function getFormSettings($formType, $userId = \false)
    {
    }
    public static function getTrackingUsers($userId = \false, $params = array())
    {
    }
    public static function setTrackingUsers($userId = \false, $value = array())
    {
    }
    public static function getTrackingGroups($userId = \false, $params = array())
    {
    }
    public static function setTrackingGroups($userId = \false, $value = array())
    {
    }
    public static function getHiddenSections($userId = \false)
    {
    }
}