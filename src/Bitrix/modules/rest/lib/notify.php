<?php

namespace Bitrix\Rest;

class Notify
{
    const NOTIFY_IM = 'im';
    const NOTIFY_BOT = 'bot';
    protected $type;
    protected $userList = array();
    /**
     * @var INotify
     */
    protected $notifier = null;
    public function __construct($notifyType, array $userList)
    {
    }
    public function send($clientId, $token, $method, $message)
    {
    }
    public function setType($notifyType)
    {
    }
    public function getType()
    {
    }
    public function setUserList(array $userList)
    {
    }
    public function getUserList()
    {
    }
    /**
     * @return INotify
     */
    protected function getNotifier()
    {
    }
}