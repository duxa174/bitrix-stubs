<?php

namespace Bitrix\Main\Controller;

class PhoneAuth extends \Bitrix\Main\Engine\Controller
{
    const SIGNATURE_SALT = 'phone_auth_sms';
    public function resendCodeAction($signedData)
    {
    }
    public function confirmAction($code, $signedData)
    {
    }
    public function configureActions()
    {
    }
    /**
     * @param array $data 'phoneNumber' key is required
     * @return string
     */
    public static function signData(array $data)
    {
    }
    /**
     * @param string $signedData
     * @return bool|array
     */
    public static function extractData($signedData)
    {
    }
}