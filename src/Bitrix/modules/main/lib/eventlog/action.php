<?php

namespace Bitrix\Main\EventLog;

abstract class Action
{
    const TYPE_EMAIL = 'email';
    const TYPE_SMS = 'sms';
    protected $type;
    protected $recipient;
    protected $text;
    /**
     * Action constructor.
     * @param string $type
     * @param string $recipient
     * @param string $text
     */
    public function __construct($type, $recipient, $text)
    {
    }
    /**
     * Creates an action by its type.
     * @param string $type
     * @param string $recipient
     * @param string $text
     * @return Action
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function createByType($type, $recipient, $text)
    {
    }
    /**
     * Returns a type of the action.
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Returns a receiver.
     * @return string
     */
    public function getRecipient()
    {
    }
    /**
     * Returns a text.
     * @return string
     */
    public function getText()
    {
    }
    /**
     * Sends a notification.
     * @param Notification $notification
     */
    public abstract function send(\Bitrix\Main\EventLog\Notification $notification);
    protected static function getNotificationFields(\Bitrix\Main\EventLog\Notification $notification)
    {
    }
}