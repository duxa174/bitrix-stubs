<?php

namespace Bitrix\Calendar\ICal\Basic;

class AttendeesProperty
{
    public $email;
    public $name = null;
    public $participationStatus = null;
    public $role = null;
    public $cutype = null;
    public $mailto;
    public function __construct(string $email = null, string $name = null, string $participationStatus = null, string $role = null, string $cutype = null, string $mailto = null)
    {
    }
}