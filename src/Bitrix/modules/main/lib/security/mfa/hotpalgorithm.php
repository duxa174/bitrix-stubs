<?php

namespace Bitrix\Main\Security\Mfa;

class HotpAlgorithm extends \Bitrix\Main\Security\Mfa\OtpAlgorithm
{
    const SYNC_WINDOW = 15000;
    protected static $type = 'hotp';
    protected $window = 10;
    public function __construct()
    {
    }
    /**
     * @inheritDoc
     */
    public function verify($input, $params = null)
    {
    }
    /**
     * @inheritDoc
     */
    public function generateUri($label, array $opts = array())
    {
    }
    /**
     * @inheritDoc
     */
    public function getSyncParameters($inputA, $inputB)
    {
    }
}