<?php

class CRsaOpensslProvider extends \CRsaProvider
{
    //$_PRIV - secret key in PEM format
    protected $_PRIV = '';
    public function SetKeys($arKeys)
    {
    }
    public function LoadKeys()
    {
    }
    public function SaveKeys($arKeys)
    {
    }
    public function Decrypt($data)
    {
    }
    public function Keygen($keylen = \false)
    {
    }
    private static function get_openssl_key_details($key)
    {
    }
}