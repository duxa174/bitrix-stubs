<?php

namespace Bitrix\MessageService\Sender\Sms;

class SmsRu extends \Bitrix\MessageService\Sender\BaseConfigurable
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
    public function isDemo()
    {
    }
    public function getDemoBalance()
    {
    }
    public function getFromList()
    {
    }
    public function isConfirmed()
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
     * 	'phone' => '',
     *  'firstName' => '',
     *  'lastName' => '',
     *  'email' => ''
     * ]
     */
    public function getOwnerInfo()
    {
    }
    /**
     * @param array $fields
     * @return Result
     */
    public function confirmRegistration(array $fields)
    {
    }
    public function sendConfirmationCode()
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
    private function callExternalMethod($method, $params)
    {
    }
    private function parseExternalAnswer($httpResult)
    {
    }
    private function getEmbedPartner()
    {
    }
    private function getSecretKey()
    {
    }
    private function getEmbedHash($phoneNumber)
    {
    }
    private function getErrorMessage($errorCode, $answer = null)
    {
    }
    private function loadFromList()
    {
    }
}