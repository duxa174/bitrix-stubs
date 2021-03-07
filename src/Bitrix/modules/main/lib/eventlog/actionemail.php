<?php

namespace Bitrix\Main\EventLog;

class ActionEmail extends \Bitrix\Main\EventLog\Action
{
    const EVENT_TYPE = 'EVENT_LOG_NOTIFICATION';
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