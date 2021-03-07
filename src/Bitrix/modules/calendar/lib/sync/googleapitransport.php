<?php

namespace Bitrix\Calendar\Sync;

/**
 * Class GoogleApiTransport
 *
 * @package Bitrix\Calendar\Sync
 */
final class GoogleApiTransport
{
    const API_BASE_URL = "https://www.googleapis.com/calendar/v3/";
    private $client;
    private $errors;
    private $currentMethod = '';
    /**
     * BEGIN PUSH SECTION
     *
     *
     */
    /**
     * @param $channelInfo
     * @return array
     * @throws ArgumentException
     */
    public function openCalendarListChannel($channelInfo)
    {
    }
    /**
     * @param $calendarId
     * @param $channelInfo
     * @return array
     * @throws ArgumentException
     */
    public function openEventsWatchChannel($calendarId, $channelInfo)
    {
    }
    /**
     * @param $channelId
     * @param $resourceId
     * @return array
     * @throws ArgumentException
     */
    public function stopChannel($channelId, $resourceId)
    {
    }
    /**
     * END PUSH SECTION
     */
    /**
     * GoogleApiTransport constructor.
     * @throws SystemException
     * @param int $userId
     */
    public function __construct($userId)
    {
    }
    /**
     * Doing request to API server
     *
     * @param $type
     * @param $url
     * @param array $requestParams
     * @throws ArgumentException
     * @return array
     */
    private function doRequest($type, $url, $requestParams = '')
    {
    }
    /**
     * Deletes event from google calendar
     *
     * @param $eventId
     * @param $calendarId
     * @return array|mixed
     */
    public function deleteEvent($eventId, $calendarId)
    {
    }
    /**
     * Updates only specified event fields
     *
     * @param $patchData
     * @param $calendarId
     * @param $eventId
     * @return array|mixed
     */
    public function patchEvent($patchData, $calendarId, $eventId)
    {
    }
    /**
     * Updates instance for recurring event
     *
     * @param $eventData
     * @param $calendarId
     * @param $instanceId
     * @return array|mixed
     */
    public function updateEvent($eventData, $calendarId, $eventId)
    {
    }
    /**
     * Creates event at google calendar
     *
     * @param $eventData
     * @param $calendarId
     * @return array|mixed
     */
    public function insertEvent($eventData, $calendarId)
    {
    }
    /**
     * Creates event at google calendar
     *
     * @param $eventData
     * @param $calendarId
     * @return array|mixed
     */
    public function importEvent($eventData, $calendarId)
    {
    }
    /**
     * @param string $syncToken
     * @return array|mixed
     */
    public function getCalendarList($syncToken = '')
    {
    }
    /**
     * get google calendar color codes
     *
     * @return array|mixed
     */
    public function getColors()
    {
    }
    /**
     * Get Event List from calendar
     *
     * @param $calendarId
     * @param string $syncToken
     * @return array|mixed
     */
    public function getEvents($calendarId, $requestParams = array())
    {
    }
    /**
     * Getting array of errors.
     *
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * Getting array of errors with the specified code.
     *
     * @param string $code Code of error.
     * @return array
     */
    public function getErrorsByCode($code)
    {
    }
    /**
     * Getting once error with the specified code.
     *
     * @param string $code Code of error.
     * @return array
     */
    public function getErrorByCode($code)
    {
    }
    /**
     * getting id of the recurrent event instance
     *
     * @param $calendarId
     * @param $eventId
     * @param $originalStart
     * @return array|mixed
     */
    public function getInstanceRecurringEvent($calendarId, $eventId, $originalStart)
    {
    }
    /**
     * Creates local calendar at google calendar
     *
     * @param $eventData
     * @return array|mixed
     */
    public function insertCalendar($calendarData)
    {
    }
    public function sendBatchEvents($body, $calendarId, $params)
    {
    }
    /**
     * Performs multipart/mixed encoding.
     *
     * @param array $postData Entity of POST request
     * @return string
     */
    protected function prepareMultipartMixed($postData, $calendarId, $params)
    {
    }
    public function multipartDecode($response)
    {
    }
    private function getMetaInfo($headers)
    {
    }
    private function getId($headers)
    {
    }
}