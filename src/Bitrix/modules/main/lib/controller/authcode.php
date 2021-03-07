<?php

namespace Bitrix\Main\Controller;

class AuthCode extends \Bitrix\Main\Engine\Controller
{
    const SIGNATURE_SALT = 'phone_auth_email';
    /**
     * Sends a email with a generated code.
     * @param string $login User input
     * @return array|null
     */
    public function sendEmailAction($login)
    {
    }
    /**
     * Verifies the code and authorizes the user on success.
     * @param string $code User input
     * @param string $signedData Expected to be sent back from sendEmail() result
     * @return bool|null
     */
    public function confirmAction($code, $signedData)
    {
    }
    /**
     * Verifies the code and authorizes the user on success.
     * @param string $otp OTP code
     * @param string $captchaSid If needed
     * @param string $captchaWord If needed
     * @return bool|null
     */
    public function loginByOtpAction($otp, $captchaSid = "", $captchaWord = "")
    {
    }
    protected function checkOtpCaptcha()
    {
    }
    public function configureActions()
    {
    }
    /**
     * @param array $data
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