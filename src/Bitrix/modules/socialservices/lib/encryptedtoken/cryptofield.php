<?php

namespace Bitrix\Socialservices\EncryptedToken;

class CryptoField extends \Bitrix\Main\ORM\Fields\CryptoField
{
    protected $encryptionComplete = false;
    protected $ivLength;
    public function __construct($name, $parameters = array())
    {
    }
    public static function cryptoAvailable($key = '')
    {
    }
    public function decrypt($data)
    {
    }
}