<?php

namespace Bitrix\Mail\Integration\Calendar\ICal;

class ICalMailManager
{
    const CONTENT_TYPES = ['application/ics', 'text/calendar'];
    public static function manageRequest($params)
    {
    }
    public static function manageReply($data) : array
    {
    }
    public static function parseRequest($data) : array
    {
    }
    public static function parseFile($fileId)
    {
    }
    public static function getFileContent($fileId)
    {
    }
    public static function hasICalAttachments(array $attachments)
    {
    }
}