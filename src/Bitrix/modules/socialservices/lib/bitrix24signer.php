<?php

namespace Bitrix\Socialservices;

class Bitrix24Signer extends \Bitrix\Main\Security\Sign\Signer
{
    public function __construct()
    {
    }
    public function sign($value, $salt = null)
    {
    }
    public function unsign($signedValue, $salt = null)
    {
    }
    /**
     * Return encoded signature
     *
     * @param string $value
     * @return mixed
     */
    protected function encodeSignature($value)
    {
    }
    /**
     * Return decoded signature
     *
     * @param string $value
     * @return string
     */
    protected function decodeSignature($value)
    {
    }
}