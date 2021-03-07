<?php

namespace Bitrix\Main\Access\Event;

class EventResult extends \Bitrix\Main\EventResult
{
    protected $isAccess = null;
    public function allowAccess() : self
    {
    }
    public function forbidAccess() : self
    {
    }
    public function isAccess() : ?bool
    {
    }
}