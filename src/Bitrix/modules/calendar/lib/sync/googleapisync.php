<?php

namespace Bitrix\Calendar\Sync;

/**
 * Class GoogleApiSync
 *
 * @package Bitrix\Calendar\Sync
 */
final class GoogleApiSync
{
    const MAXIMUM_CONNECTIONS_TO_SYNC = 3;
    const ONE_DAY = 86400;
    //60*60*24;
    const CHANNEL_EXPIRATION = 604800;
    //60*60**24*7
    const CONNECTION_CHANNEL_TYPE = 'BX_CONNECTION';
    const SECTION_CHANNEL_TYPE = 'BX_SECTION';
    const SYNC_EVENTS_LIMIT = 50;
    /**
     * @var GoogleApiTransport
     */
    private $syncTransport;
    private $nextSyncToken = '', $defaultTimezone = 'UTC', $userId = 0, $calendarList = array(), $defaultReminderData = array(), $calendarColors = false, $eventColors = false, $eventMapping = array(
        'DAV_XML_ID' => 'iCalUID',
        'NAME' => 'summary',
        //				'DESCRIPTION'	=>	'description',
        'CAL_DAV_LABEL' => 'etag',
    );
    /**
     * @var int
     */
    private $connectionId;
    /**
     * @var string
     */
    private $nextPageToken = '';
    /**
     * Closes watch channel and asking google to stop pushes
     *
     * @param $channelId
     * @param $resourceId
     */
    public function stopChannel($channelId, $resourceId)
    {
    }
    /**
     * Creates watch channel for connection
     * @param $name
     * @return array
     */
    public function startWatchCalendarList($name)
    {
    }
    private function makeChannelParams($inputSecretWord, $type)
    {
    }
    /**
     * Creates watch channel for new events
     *
     * @param string $calendarId
     * @return array|bool
     */
    public function startWatchEventsChannel($calendarId = 'primary')
    {
    }
    /**
     * GoogleApiSync constructor.
     *
     * @param int $userId
     * @param int $connectionId
     */
    public function __construct($userId = 0, $connectionId = 0)
    {
    }
    /**
     * Test ability to establish google api connection
     * @return bool
     */
    public function testConnection()
    {
    }
    /**
     * Check if errors from transport exists
     * @return array
     */
    public function getTransportErrors()
    {
    }
    private function setColors()
    {
    }
    /**
     * @param int $colorId
     * @param bool $background
     * @return string
     */
    private function getCalendarColor($colorId, $background = true)
    {
    }
    /**
     * @param int $colorId
     * @param bool $background
     * @return string
     */
    private function getEventColor($colorId, $background = true)
    {
    }
    /**
     * Returns connection error code in message;
     *
     * @return array
     */
    public function getTransportConnectionError()
    {
    }
    /**
     * get calendar list from google
     *
     * @param string $syncToken
     * @return array
     */
    public function getCalendarItems()
    {
    }
    /**
     * @return string
     */
    public function getNextSyncToken()
    {
    }
    /**
     * get google calendar events list.
     * By default selecting primary calendar
     * @param array $calendarData
     * @return array
     */
    public function getEvents(array $calendarData) : array
    {
    }
    /**
     * get id of Primary (main) calendar
     *
     * @return string
     */
    public function getPrimaryId()
    {
    }
    /**
     * Get calendar data by provided ID
     *
     * @param $calendarId
     * @return array
     */
    private function getCalendarById($calendarId)
    {
    }
    /**
     * Delete event from specified google calendar
     *
     * @param $eventId
     * @param $calendarId
     * @return array|mixed
     */
    public function deleteEvent($eventId, $calendarId)
    {
    }
    /**
     * publishes event to google calendar, returns iCalUid field or false
     *
     * @param $eventData
     * @param $calendarId
     * @return array
     */
    public function saveEvent($eventData, $calendarId, $parameters = [])
    {
    }
    public function saveBatchEvents($events, $sectionId, $params)
    {
    }
    public function updateLastResultConnection(string $lastResult) : void
    {
    }
    public function updateSuccessLastResultConnection() : void
    {
    }
    /**
     * Prepearing event for future use
     *
     * @param $event
     * @return array
     */
    private function prepareEvent($event)
    {
    }
    private function prepareTimezone($timeZone)
    {
    }
    private function prepareToSaveEvent($eventData, $params = null)
    {
    }
    private function sendToSaveEvent($newEvent, $params)
    {
    }
    public function createCalendar($calendar)
    {
    }
    private function prepareCalendar($calendar)
    {
    }
    /**
     * Get owner of the channel
     * @param string $channelId
     * @return number or null
     */
    public static function getChannelOwner($channelId = null)
    {
    }
    public function hasMoreEvents()
    {
    }
    /**
     * @return array
     */
    private function hasExpiredSyncTokenError() : array
    {
    }
    /**
     * @param array $result
     * @return array
     */
    private function processResponseReceivingEvents(array $result) : array
    {
    }
    /**
     * @return array
     */
    private function getRequestParamsWithSyncToken() : array
    {
    }
    /**
     * @return array
     */
    private function getRequestParamsForFirstSync() : array
    {
    }
    /**
     * @param $gApiCalendarId
     * @return array|mixed
     */
    private function runSyncEvents($gApiCalendarId)
    {
    }
}