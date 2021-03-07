<?php

abstract class CRsaProvider
{
    //$_M, $_E - public components
    //$_D - secret component
    //$_chunk - key length in bytes
    protected $_M = '';
    protected $_E = '';
    protected $_D = '';
    protected $_chunk = 0;
    public function SetKeys($arKeys)
    {
    }
    public function GetPublicKey()
    {
    }
    public abstract function LoadKeys();
    public abstract function SaveKeys($arKeys);
    public abstract function Decrypt($data);
    public abstract function Keygen($keylen = \false);
}
class CRsaSecurity
{
    //max size of encrypted packet against DOS attacks.
    const MAX_ENCRIPTED_DATA = 40120;
    //error codes
    const ERROR_NO_LIBRARY = 1;
    //no crypto library found
    const ERROR_EMPTY_DATA = 2;
    //no encrypted data
    const ERROR_BIG_DATA = -3;
    //too big encrypted data
    const ERROR_DECODE = -4;
    //decoding error
    const ERROR_INTEGRITY = -5;
    //integrity check error
    const ERROR_SESS_VALUE = -6;
    //no session control value
    const ERROR_SESS_CHECK = -7;
    //session control value does not match
    protected $provider = \false;
    protected $lib = '';
    public function __construct($lib = \false)
    {
    }
    public static function Possible()
    {
    }
    public function SetKeys($arKeys)
    {
    }
    public function LoadKeys()
    {
    }
    public function SaveKeys($arKeys)
    {
    }
    public function Keygen($keylen = \false)
    {
    }
    public function AddToForm($formid, $arParams)
    {
    }
    public function AcceptFromForm($arParams)
    {
    }
    public function GetLib()
    {
    }
    protected function GetNewRsaRand()
    {
    }
}