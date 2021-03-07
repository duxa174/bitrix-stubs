<?php

namespace Bitrix\Main\EventLog;

class ActionSms extends \Bitrix\Main\EventLog\Action
{
    const EVENT_TYPE = 'SMS_EVENT_LOG_NOTIFICATION';
    public function __construct($recipient, $text)
    {
    }
    /**
     * @inheritDoc
     */
    public function send(\Bitrix\Main\EventLog\Notification $notification)
    {
    }
}