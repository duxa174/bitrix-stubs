<?php

namespace Bitrix\Main\UserField;

class SignatureManager
{
    /**
     * @var Signer
     */
    protected $signer;
    public function __construct()
    {
    }
    public function getSignature($data)
    {
    }
    public function validateSignature($data, $signature)
    {
    }
    /**
     * @return Signer
     */
    public function getSigner()
    {
    }
    /**
     * @param Signer $signer
     */
    public function setSigner(\Bitrix\Main\Security\Sign\Signer $signer)
    {
    }
    protected function setDefaultSigner()
    {
    }
    protected function getSignatureSalt()
    {
    }
}