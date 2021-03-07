<?php

namespace Bitrix\MessageService\Sender\Sms;

class SmsAssistentBy extends \Bitrix\MessageService\Sender\BaseConfigurable
{
    const JSON_API_URL = 'https://userarea.sms-assistent.by/api/v1/json';
    const PLAIN_API_URL = 'https://userarea.sms-assistent.by/api/v1/%s/plain';
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
    public function registerDemo(array $fields)
    {
    }
    /**
     * @return array [
     * 	'user' => ''
     * ]
     */
    public function getOwnerInfo()
    {
    }
    /**
     * @return array
     */
    public function getDemoInfo()
    {
    }
    public function getExternalManageUrl()
    {
    }
    public function sendMessage(array $messageFields)
    {
    }
    /* reserved method */
    private function sendMessageBulk(array $messageFields)
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
    private function callPlainApi($command, array $params = [])
    {
    }
    private function callJsonApi($command, array $params = [])
    {
    }
    private function getErrorMessage($errorCode)
    {
    }
    private function loadFromList()
    {
    }
}