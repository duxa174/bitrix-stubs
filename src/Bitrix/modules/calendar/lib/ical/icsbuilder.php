<?php

namespace Bitrix\Calendar\ICal;

class IcsBuilder
{
    //const DT_FORMAT = 'Ymd\THis\Z';
    const PRODID = '-//Bitrix//Bitrix Calendar//EN', DATE_FORMAT = 'Ymd', DATETIME_FORMAT = 'Ymd\\THis';
    protected $fullDayMode = false, $organizer, $timezoneFrom, $timezoneTo, $attendees = [], $properties = [];
    private $availableProperties = ['summary', 'description', 'dtstart', 'dtend', 'location', 'url', 'alarm', 'transp', 'status', 'uid', 'attendee', 'created', 'last-modified', 'sequence', 'transp'];
    private static $METHOD = 'REQUEST';
    /**
     * Constructor.
     *
     * @param array $properties list of properties.
     */
    public function __construct($properties = [], $config = [])
    {
    }
    public function setProperties($properties)
    {
    }
    public function setConfig($config)
    {
    }
    public function setFullDayMode($value)
    {
    }
    public function setOrganizer($name, $email)
    {
    }
    public function setAttendees($attendeeDataList = [])
    {
    }
    public function render()
    {
    }
    private function buildBody()
    {
    }
    private function prepareValue($val, $key = false)
    {
    }
    private static function formatDateValue($timestamp)
    {
    }
    private static function formatDateTimeValue($timestamp)
    {
    }
    private static function formatEmailValue($email)
    {
    }
    private static function formatAttendeeKey($attendee)
    {
    }
    private static function formatOrganizerKey($organizer)
    {
    }
    private static function escapeString($str)
    {
    }
}