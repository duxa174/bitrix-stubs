<?php

namespace Bitrix\MessageService\Sender\Sms;

class SmsLineBy extends \Bitrix\MessageService\Sender\BaseConfigurable
{
    const JSON_API_URL = 'https://api.smsline.by/v3/';
    public static function isSupported()
    {
    }
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
    public function isRegistered()
    {
    }
    public function register(array $fields)
    {
    }
    /**
     * @return array [
     * 	'login' => ''
     * ]
     */
    public function getOwnerInfo()
    {
    }
    public function getExternalManageUrl()
    {
    }
    public function sendMessage(array $messageFields)
    {
    }
    public function getMessageStatus(array $messageFields)
    {
    }
    public static function resolveStatus($serviceStatus)
    {
    }
    public function sync()
    {
    }
    private function loadFromList()
    {
    }
    private function makeSignature($text, $key = null)
    {
    }
    private function sendGetRequest($path, $signature = null, $login = null)
    {
    }
    private function sendPostRequest($path, array $params)
    {
    }
    private function sendHttpRequest($method, $login, $signature, $path, $body = null)
    {
    }
    private function getErrorMessage($errorCode, $text = null)
    {
    }
}