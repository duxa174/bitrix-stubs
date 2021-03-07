<?php

namespace Bitrix\Rest;

class NotifyIm implements \Bitrix\Rest\INotify
{
    const TOKEN_NOTIFY_TAG = 'REST_CONFIRM';
    const APP_INSTALL_REQUEST_TAG = 'APP_INSTALL_REQUEST';
    public function __construct()
    {
    }
    public function send($clientId, $userId, $token, $method, $message)
    {
    }
    public static function receive($module, $tag, $value, $notifyFields)
    {
    }
}