<?php

namespace Bitrix\Calendar\Sync;

class GoogleApiBatch
{
    const SIZE = 50;
    const FINISH = true;
    const NEXT = false;
    private $sectionId, $dateSync;
    private $userId = 0, $gApiCalendarId = '';
    /**
     * GoogleApiBatch constructor.
     * @param $sectionId
     */
    public function __construct($sectionId)
    {
    }
    /**
     * @return bool
     */
    public function syncStepLocalEvents()
    {
    }
    /**
     * @param $events
     * @return bool
     */
    private function syncEvents($events)
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ObjectException
     */
    private function syncInstances()
    {
    }
    /**
     * @return int
     * @throws \Bitrix\Main\ObjectException
     */
    private function getDateSync()
    {
    }
    /**
     * @return array
     */
    public function getEvents()
    {
    }
    /**
     * @return array
     */
    private function getInstances()
    {
    }
    /**
     * @param $parameters
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getDbEvents($parameters)
    {
    }
    /**
     * @param $events
     * @return bool
     */
    private function saveEvents($events)
    {
    }
    /**
     * @param $eventIds
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getEventsById($eventIds)
    {
    }
    /**
     * @param bool $timeZone
     * @return \DateTimeZone
     */
    private function prepareTimezone($timeZone = false)
    {
    }
    /**
     * @param $sectionId
     * @return array|false
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getSectionById($sectionId)
    {
    }
    /**
     * @param $event
     * @return string
     */
    private function getExDate($event)
    {
    }
    /**
     * @param $eventId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getInstanceByRecurrenceId($eventId)
    {
    }
    /**
     * @param $event
     */
    private function prepareEvent(&$event)
    {
    }
    /**
     * @param $event
     * @return mixed
     * @throws \Bitrix\Main\ObjectException
     */
    private function updateEventFields($event)
    {
    }
}