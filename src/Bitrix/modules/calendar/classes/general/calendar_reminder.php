<?php

class CCalendarReminder
{
    const TYPE_DAY_BEFORE = 'daybefore';
    const TYPE_SPECIFIC_DATETIME = 'date';
    const SIMPLE_TYPE_LIST = ['min', 'hour', 'day'];
    const REMINDER_INACCURACY = 30;
    const REMINDER_NEXT_DELAY = 120;
    public static function ReminderAgent($eventId = 0, $userId = 0, $viewPath = '', $calendarType = '', $ownerId = 0, $index = 0)
    {
    }
    public static function RemoveAgent($params)
    {
    }
    public static function getNotifyFields($params = [])
    {
    }
    public static function AddAgent($remindTime, $params)
    {
    }
    public static function UpdateReminders($params = [])
    {
    }
    public static function sortReminder($a, $b)
    {
    }
    private static function getReminderDelta($reminder)
    {
    }
    private static function getReminderTimestamp($eventTimestamp, $reminder, $timezoneName = \null)
    {
    }
    public static function prepareReminder($reminder = [])
    {
    }
    public static function GetTextReminders($valueList = array())
    {
    }
}