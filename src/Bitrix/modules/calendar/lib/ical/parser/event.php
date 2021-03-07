<?php

namespace Bitrix\Calendar\ICal\Parser;

class Event extends \Bitrix\Calendar\ICal\Basic\BasicComponent implements \Bitrix\Calendar\ICal\Parser\ParserComponent
{
    private $alerts = [];
    private $start;
    private $end;
    private $tzStart;
    private $tzEnd;
    private $name;
    private $description = '';
    private $uid;
    private $created;
    private $withTimezone = false;
    private $transparent = null;
    private $attendees = [];
    private $organizer = null;
    private $status = null;
    private $rrule;
    private $withTime;
    private $location = null;
    private $modified;
    private $sequence = 0;
    private $dtstamp;
    private $url;
    private $categories;
    private $exDate;
    private $attachments;
    public static function getInstance(string $uid) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function __construct(string $uid)
    {
    }
    public function getType() : string
    {
    }
    public function getProperties() : array
    {
    }
    public function setStart($start = []) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setEnd($end = []) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setDescription($description) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setSummary($summary) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setSequence($sequence) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setCreated($created) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setDTStamp($dtstamp) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setLocation($location) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setUrl($url = []) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setRRule($rrule = []) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setTransparent($transp) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setCategories($categories) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setOrganizer($organizer) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setAttendees($attendees) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setModified($modified) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setExDate($exDate) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setStatus($status) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setAttachment($attachments) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function setSubComponents($subComponents) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    public function getContent() : array
    {
    }
    public function getStart() : \Bitrix\Main\Type\Date
    {
    }
    public function getEnd() : \Bitrix\Main\Type\Date
    {
    }
    public function getTzFrom() : \DateTimeZone
    {
    }
    public function getTzTo() : \DateTimeZone
    {
    }
    public function getDescription() : ?string
    {
    }
    public function getName() : ?string
    {
    }
    public function hasSkipDay() : ?bool
    {
    }
    public function getUid() : ?string
    {
    }
    public function getCreated() : \Bitrix\Main\Type\DateTime
    {
    }
    public function getModified() : \Bitrix\Main\Type\DateTime
    {
    }
    public function getStatus() : ?string
    {
    }
    public function getImportance()
    {
    }
    public function getLocation() : ?string
    {
    }
    public function getAlert()
    {
    }
    public function getRRule() : array
    {
    }
    public function getExDate()
    {
    }
    public function getTransparent() : ?string
    {
    }
    public function getOrganizer() : ?array
    {
    }
    public function getAttendees() : ?array
    {
    }
    public function getDtStamp() : \Bitrix\Main\Type\DateTime
    {
    }
    public function getUrl() : ?string
    {
    }
    public function getCategories() : ?string
    {
    }
    public function getVersion()
    {
    }
    public function getAttachmentLink() : array
    {
    }
    private function isFullDayEvent(array $dateTime = null) : bool
    {
    }
}