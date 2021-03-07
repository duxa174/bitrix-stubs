<?php

namespace Bitrix\Main\Security;

class SecurityException extends \Bitrix\Main\SystemException
{
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
    }
}
class OtpException extends \Bitrix\Main\Security\SecurityException
{
}