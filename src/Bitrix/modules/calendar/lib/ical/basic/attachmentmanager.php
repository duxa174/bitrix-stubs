<?php

namespace Bitrix\Calendar\ICal\Basic;

abstract class AttachmentManager
{
    const ICAL_FIELDS = [];
    const LOCAL_FIELDS = [];
    public abstract function getAttachment();
}