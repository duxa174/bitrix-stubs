<?php

namespace Bitrix\Calendar\ICal\Builder;

class Event extends \Bitrix\Calendar\ICal\Basic\BasicComponent implements \Bitrix\Calendar\ICal\Builder\BuilderComponent
{
    private $alerts = [];
    private $starts;
    private $ends;
    private $name;
    private $description = '';
    private $address;
    private $addressName;
    private $uid;
    private $created;
    private $withTimezone = false;
    private $classification = null;
    private $transparent = null;
    private $attendees = [];
    private $organizer = null;
    private $status = null;
    private $rrule;
    private $withTime;
    private $location = null;
    private $modified;
    private $sequence = 0;
    private $attaches = [];
    private $exdates = [];
    private $dtStamp;
    private $url;
    public static function getInstance($uid) : \Bitrix\Calendar\ICal\Builder\EVent
    {
    }
    public function __construct($uid)
    {
    }
    public function getType() : string
    {
    }
    public function setRRule(?array $rrule = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setWithTime(?bool $withTime = false) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setLocation(?string $location = null)
    {
    }
    public function setModified($modified = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setSequence($sequence = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function getProperties() : array
    {
    }
    public function setStartsAt(?\Bitrix\Main\Type\Date $starts = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setEndsAt(?\Bitrix\Main\Type\Date $ends = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setPeriod(?\Bitrix\Main\Type\Date $starts = null, \Bitrix\Main\Type\Date $ends = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setName(?string $name = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setDescription(?string $description = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setAddress(?string $address, ?string $name = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setAddressName(?string $name) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setCreatedAt(?\Bitrix\Main\Type\Date $created = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setWithTimezone(?bool $param = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setAlert(\Bitrix\Calendar\ICal\Builder\Alert $alert) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setAlertBefore(int $min, string $message = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setClassification($classification = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setTransparent($transp = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setAttendees(?array $attendees = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setOrganizer($organizer, $mailto = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setStatus($status) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setAttaches(?array $attaches) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setExdates(?string $exdates = null, ?string $tz = null) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setDtStamp(?\Bitrix\Main\Type\Date $dtStamp) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setUrl($url) : \Bitrix\Calendar\ICal\Builder\Event
    {
    }
    public function setContent() : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
}