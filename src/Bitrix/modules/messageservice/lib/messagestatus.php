<?php

namespace Bitrix\MessageService;

class MessageStatus
{
    //local queue statuses
    const PENDING = 0;
    const ERROR = 1;
    const EXCEPTION = 2;
    const DEFERRED = 3;
    //external service statuses
    const ACCEPTED = 10;
    const QUEUED = 11;
    const SENDING = 12;
    const SENT = 13;
    const DELIVERED = 14;
    const UNDELIVERED = 15;
    const FAILED = 16;
    const READ = 17;
    const SEMANTIC_PROCESS = 'process';
    const SEMANTIC_SUCCESS = 'success';
    const SEMANTIC_FAILURE = 'failure';
    public static function getDescriptions()
    {
    }
    public static function getSemantics()
    {
    }
}