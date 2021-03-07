<?php

namespace Bitrix\Security\Mfa;

class OtpEvents
{
    /**
     * Agent for activate temporary disabled users OTP
     *
     * @return string
     */
    public static function onRecheckDeactivate()
    {
    }
}