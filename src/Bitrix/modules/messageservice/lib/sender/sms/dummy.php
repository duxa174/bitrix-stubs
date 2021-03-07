<?php

namespace Bitrix\MessageService\Sender\Sms;

/**
 * Class Dummy. For testing purposes only. It saves SMS to the log by AddMessage2Log().
 * @example $eventManager = \Bitrix\Main\EventManager::getInstance(); $eventManager->registerEventHandler('messageservice', 'onGetSmsSenders', 'messageservice', 'Bitrix\MessageService\Sender\Sms\Dummy', 'onGetSmsSenders');
 */
class Dummy extends \Bitrix\MessageService\Sender\Base
{
    public function getId()
    {
    }
    public function getName()
    {
    }
    public function getShortName()
    {
    }
    public function getFromList()
    {
    }
    public function sendMessage(array $messageFieldsFields)
    {
    }
    public function canUse()
    {
    }
    public static function onGetSmsSenders()
    {
    }
}