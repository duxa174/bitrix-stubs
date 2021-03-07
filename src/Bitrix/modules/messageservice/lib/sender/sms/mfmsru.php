<?php

namespace Bitrix\MessageService\Sender\Sms;

class MfmsRu extends \Bitrix\MessageService\Sender\BaseConfigurable
{
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
    private function sendViaHpg(array $messageFields)
    {
    }
    private function getStatusViaHpg(array $messageFields)
    {
    }
    private function touchHpg($url, array $params)
    {
    }
}